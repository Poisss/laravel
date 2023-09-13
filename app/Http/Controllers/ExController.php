<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExController extends Controller
{
    public function show($param){
        $pages=[
            1=>'Страница 1',
            2=>'Страница 2',
            3=>'Страница 3',
            4=>'Страница 4',
            5=>'Страница 5'
        ];
        $qq=false;
        foreach($pages as $key => $value){
            if($key==$param){
                return $pages[$param];
                $qq=true;
            } 
        }
        if($qq==false){
            return 'Страница не существует';
        }     
    }
}
