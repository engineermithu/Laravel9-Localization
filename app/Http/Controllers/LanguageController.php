<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class LanguageController extends Controller
{
   public function index(){

       return view('lang');
   }

   public function langChange(Request $request){

        App::setLocale($request->lang);
        session()->put('lang_code',$request->lang);

        return redirect()->back();
   }
}
