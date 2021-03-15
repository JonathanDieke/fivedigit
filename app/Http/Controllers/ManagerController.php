<?php

namespace App\Http\Controllers;

use App\Models\ask;
use App\Models\document;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class ManagerController extends Controller
{

    public function getRequest(Request $request){
        return view('request');
    }

    public function postRequest(Request $request){

        $validated = $request->validate([
            'code' => 'string | required | max:100',
            'name' => 'string | required | max:100',
            'lname' => 'string | required | max:100',
        ]);


        $doc = document::where(["code" => $validated['code']])->get();

        if($doc->isEmpty()){
            return back()->with('code', "Le code saisi n'existe pas !");
            // withErrors(["code" => "Le code saisi n'existe pas !"], 'error');
        };

        if($doc[0]->child->name == $validated['name'] && $doc[0]->child->lname == $validated["lname"]){
            $document = $doc[0];

            $buttonTitle = "Valider la demande";
            $route = "sendRequest";

            // return view for payment
            return view('cardDocument', compact('document', "buttonTitle", "route"));
        }else{
            return back()->with('code', "Les informations saisies ne correspondent pas !");
            // withErrors(["code" => "Les informations saisies ne correspondent pas !"], 'error');
        }
    }

    public function sendRequest(Request $request){
        // INSERER LA DEAMNDE DANS LA TABLE DES DEMANDES

        $document  = $request->document_id;

        $claimant = Auth::id();

        $askAlreadyExist = ask::where('document_id',$document)
                                                ->get();

        if(!$askAlreadyExist->isEmpty()){
            return redirect()->route('request')->with('already-request', "Cette demande est actuellemnt en traitement.");
        }

        $ask = ask::create([
            'document_id' => $document,
            'claimant_id' => $claimant
        ]);

        $code = document::find($document)->code;

        $id = DB::table('extrait')->insertGetId(
            ['Etat' => 0, 'numExtrait' => $code ]
        );

        return redirect()->route('request')->with('success-request', "Demande effectuée. Elle sera traitée dans un délai de 48h.");
        // return back()->with('success', "Demande envoyée avec succès");

    }

    public function postRefreshed(Request $request){

        $validated = $request->validate([
            'code' => 'string | required | max:100',
            'name' => 'string | required | max:100',
            'lname' => 'string | required | max:100',
        ]);

        $doc = document::where(["code" => $validated['code']])->get();

        if($doc->isEmpty()){
            return back()->with('code', "Le code saisi n'existe pas") ;
        };

        if($doc[0]->child->name == $validated['name'] && $doc[0]->child->lname == $validated["lname"]){
            $document = $doc[0];
            $buttonTitle = "Continuer";
            $route = "pay";
            return view('cardDocument', compact('document', "buttonTitle", "route"));
        }else{
            return  back()->with("code", "Les informations saisies ne correspondent pas");
        }
    }

    public function getPay(Request $request){
        $code = $request->code;

        return view("payment", compact("code"));
    }

    public function postPay(Request $request){
        $code = $request->code;
        $phone = $request->phone;

        $doc = document::where('code', $code)->get()[0];

        $doc->updated_at = now() ; //maj updated_at
        $doc->save() ; //persistence des modifications

        return "maj ok";
    }
}

