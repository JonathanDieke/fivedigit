<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kouyatekarim\Momoapi\Products\Collection;


class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $code = $request->query('code');

        return view("payment", compact("code"));
    }

    public function story(Request $request){

        $code = $request->query('code');

        return $request->phone;
    }

}
