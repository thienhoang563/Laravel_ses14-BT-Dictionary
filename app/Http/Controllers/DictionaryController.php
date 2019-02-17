<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DictionaryController extends Controller
{
    public function CheckWord(Request $request){
        $word = $request->word;
        $array = array('black' => 'den',
            'white' => 'trang',
            'blue' => 'xanh');
        $select = $request->select;
        switch ($select){
            case 'viet':
           foreach ($array as $key => $value){
               if ($word == $key){
                   $result = $value;
                   break;
               } else {
                   $result = 'Khong co tu nay';
               }
           }
           return view('result', compact('result','word'));
            case 'eng':
                foreach ($array as $key =>$value){
                    if ($word == $value){
                        $result = $key;
                        break;
                    } else {
                        $result = 'Khong co tu nay';
                    }
                }
        }   return view('result', compact('result','word'));

    }
}
