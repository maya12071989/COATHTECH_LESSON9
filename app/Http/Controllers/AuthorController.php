<?php

namespace App\Http\Controllers;

use App\Models\inquiry;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function index()
    {
       return view('index');
    }
    public function add()
    {
        return view('thanks');
    }
    public function create(Request $request)
    {
        $this->validate($request, inquiry::$rules);
        $form = $request->all();
        inquiry::create($form['name'], $form['email']);
        return redirect('/next');
    }
}
