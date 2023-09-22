<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function asMusic(){
        return view('page');
    }
    public function asTeam($id){
        // $name='Deep Purple';
        // return view('page',['name'=>$name]);
        $team['name']='Deep Purple';
        $team['album']='Deep Purple in Pock';
        $team['composition']=['Иэн Гиллар','Ричи Блэкмор','Роджер Гдовер','Джон Лорд'];
        // return view('page')->with(['team'=>$team]);
        return view('page')->with(['team'=>(object)$team]);
    }
}
