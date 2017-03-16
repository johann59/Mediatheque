<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class GetBook extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */
    public function liste()
    {
        $select = DB::select('select * from book');
        return view('get_list', ['livres' => $select]);
    }

    public function livre($id){

            $livres = DB::select('select * from book where id = ?', [$id]);
            return view('get_list', ['livres' => $livres]);
        }
}

