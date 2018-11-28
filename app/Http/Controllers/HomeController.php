<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;

class HomeController extends Controller
{
    public function index() {

    	$data = [
    		'title' => 'Гостевая книга на Laravel',
    		'messages' => Message::latest()->paginate(1),
    		'count' => Message::count()
    	];
    	 return view('pages.messages.index')-> with($data);
    }

    public function edit($id) {
    	//dd($id);
    	$data = [
    		'title' => 'Редактирование: Гостевая книга на Laravel',
    		'pagetitle' => 'Редактирование: Гостевая книга'
 
    	];
    	 return view('pages.messages.edit')-> with($data);
    }
}
