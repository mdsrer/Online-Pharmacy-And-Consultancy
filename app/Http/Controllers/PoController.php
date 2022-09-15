<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Message;
class PoController extends Controller
{
    //
    function show()
    {
        $data =  Message::find('1');
        // return view('userpost',['userposts'=>$data]);

        return view('userpost')
            ->with('posts',$data)
        ;

        // return DB::select("select message from messages where id=1");
    }
}
