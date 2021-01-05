<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PhoneNumberController extends Controller
{
    public function index(Request $req)
    {
        $req->validate([
            'phonenumber'=>"required|regex:/([+]?\d{1,2}[.-\s]?)?(\d{3}[.-]?){2}\d{4}/|min:13"
        ]);

        $phoneNumber = $req->phonenumber;
       
        $dial_code = substr($phoneNumber, 0, 3);
        
        if($dial_code=='+92' || $dial_code=='+86' || $dial_code=='+880'){
            return "this country is not allowed";
         }

        $jsonString = file_get_contents(base_path('/storage/app/countrycode.json'));
        $data = json_decode($jsonString);
       
       
       foreach($data as $country)
       {
           
        
        if($dial_code!=$country->dial_code)
        {
            continue;            
        }
        else if($dial_code==$country->dial_code)
        {
            return "Country name is ".$country->name ."". $country->dial_code ."". $country->code;
        }
        else{
            return "This Country code is Invalid";
        }
      }
       
    }
}
