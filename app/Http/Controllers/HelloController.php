<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    // test index method
    public function index( $id ){
        // $data = ['msg'=>'this is sample message.'];
        $data = ['msg' => 'id = ' . $id];

        return view('hello.index', $data);
    }

    public function other(){
        return redirect()->route('hello');
    }

}
