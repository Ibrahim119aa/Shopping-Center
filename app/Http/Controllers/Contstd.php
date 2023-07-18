<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Std;
class Contstd extends Controller
{
    public function Index()
    {
        return view('Display');

    }
    public function Store(Request $res)
    {
       $d=new Std;
       $d->Name=$res->input('Name');
       $d->Email=$res->input('Email');
       $d->save();
       
       return view('/');



    }
    public function dekh(Request $res)
    {
        $Val=$res->Value;

        return view('Last',['Name'=>$Val]);
    }
}
