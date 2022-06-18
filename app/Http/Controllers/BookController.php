<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller{
    
    public function searchBook(Request $req){
        $get_param = $req->input('search_string');
        return view('searchbook', [
            'params' => $get_param
        ]);
    }
}
