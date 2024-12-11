<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    
        public function index($id){

            //variable declear 

            $name = "Donald Tramp";
            $age = "75";

            //associative array
        $data = [
            'id' => $id,
            'name' => $name,
            'age' => $age,
        ];

         // cookie
         $cookieName = 'access_token';
         $cookieValue = '123-XYZ';
         $cookieMinutes = 1;
         $cookiePath = '/';
         $cookieDomain = $_SERVER['SERVER_NAME'];
         $cookieSecure = false;
         $cookieHttpOnly = true;

         return response($data, 200)
            ->cookie($cookieName, $cookieValue, $cookieMinutes, $cookiePath, $cookieDomain, $cookieSecure, $cookieHttpOnly);

    
            
        }
    
}
