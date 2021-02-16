<?php

namespace App\Http\Controllers;

use App\Models\document;
use Illuminate\Http\Request;

class DocumentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('consult');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'code' => 'string | required | max:100',
            'name' => 'string | required | max:100',
            'lname' => 'string | required | max:100',
        ]);

        $doc = document::where(["code" => $validated['code']])->get();

        if($doc->isEmpty()){
            return back()->with('error', "Le code saisi n'existe pas");  ;
        };

        if($doc[0]->child->name == $validated['name'] && $doc[0]->child->lname == $validated["lname"]){
            $document = $doc[0];
            $buttonTitle = "Télécharger";
            // $route= "#";
            return view('cardDocument', compact('document',"buttonTitle"));
        }else{
            return back()->with('error', "Les informations ne correspondent pas.");
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\document  $document
     * @return \Illuminate\Http\Response
     */
    public function show(document $document)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\document  $document
     * @return \Illuminate\Http\Response
     */
    public function edit(document $document)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\document  $document
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, document $document)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\document  $document
     * @return \Illuminate\Http\Response
     */
    public function destroy(document $document)
    {
        //
    }

    public function request(Request $request){
        return view('request');
    }

    public function requestStore(Request $request){

        $validated = $request->validate([
            'code' => 'string | required | max:100',
            'name' => 'string | required | max:100',
            'lname' => 'string | required | max:100',
        ]);

        $doc = document::where(["code" => $validated['code']])->get();

        if($doc->isEmpty()){
            return back()->with('error', "Le code saisi n'existe pas");
        };

        if($doc[0]->child->name == $validated['name'] && $doc[0]->child->lname == $validated["lname"]){
            $document = $doc[0];

            $buttonTitle = "Valider la demande";
            $route = "sendRequest";

            // return view for payment
            return view('cardDocument', compact('document', "buttonTitle", "route"));
        }else{
            return back()->with('error', "Les informations saisies ne correspondent pas !");
        }
    }

    public function requestSend(document $document){


    }

    public function refreshed(Request $request){

        $validated = $request->validate([
            'code' => 'string | required | max:100',
            'name' => 'string | required | max:100',
            'lname' => 'string | required | max:100',
        ]);

        $doc = document::where(["code" => $validated['code']])->get();

        if($doc->isEmpty()){
            return back()->with('error', "Le code saisi n'existe pas") ;
        };

        if($doc[0]->child->name == $validated['name'] && $doc[0]->child->lname == $validated["lname"]){
            $document = $doc[0];
            $buttonTitle = "Continuer";
            $route = "pay";
            return view('cardDocument', compact('document', "buttonTitle", "route"));
        }else{
            return  back()->withErrors("Le code saisi n'existe pas", "error");
        }
    }


}
