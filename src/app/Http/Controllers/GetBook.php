<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class GetBook extends Controller
{
    /**
     * Affiche la liste des livres.
     * @param  int 		$id
     * @return View
     */
    public function liste()
    {
        $books = DB::select('select * from book');
        return view('get_list', ['book' => $books]);
    }

	/**
	 * Affiche un livre en fonction de son id
	 * @param	int		$id
	 * @return	View
	 * */
    public function livre($id){
		$book = DB::select('select * from book where id = ?', [$id]);
		return view('get_list', ['book' => $book]);
	}
}

