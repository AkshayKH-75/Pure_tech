<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DigitToWord extends Controller
{
    function DigitToWord(request $request)
    {
        return view('digit_to_word');
       
    }

    function ConvetdigitToWord(request $request)
    {
        if ($request->isMethod('post')) {
            //digit array
            $array = array("Zero" => 0 , "one" => 1,"Two" => 2 , "Three" => 3 ,"Four" => 4 ,"Five" => 5, "Six" => 6, "Seven" => 7, "Eight" => 8, "Nine" => 9  );
            $number = $request->post('digit');

            //converted number ti string for splitting purpose
            $stringNumber = (string)$number;
            $lengthOfDigit = strlen($stringNumber);

            // echo $lengthOfDigit; exit; 
            for($i=0; $i<$lengthOfDigit; $i++){
                echo " ".array_search($stringNumber[$i],$array);
            }
        }
    }
}
