<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Emails;
use App\Http\Requests;
use App\Http\Requests\EmailsCreateRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;

class HomeController extends Controller
{
    // 

    public function index()

    {
    	return view('comming');
    }

     public function eder()

    {
    	return view('eder');
    }

    public function emails(EmailsCreateRequest $request)
    {

    	 $email = Emails::where('email',$request->email)->first();
        if($email)
        {
            return Redirect::back()->with('message','Ya estas registrado en nuestra base de datos. Espera tus promociones :)');
        }else{
        	 $nemail = new Emails;
			 $nemail->email = $request->email;
			 if ($nemail->save()){
			 	return Redirect::back()->with('message','Gracias por registrarte. Espera tus promociones :)');
			 }
		     
        }

    }


   

}
