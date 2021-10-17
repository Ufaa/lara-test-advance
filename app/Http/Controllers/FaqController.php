<?php

namespace App\Http\Controllers;

use App\Models\faq;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    public function index()
    {
        $items = faq::all();
        return view('index', ['items' => $items]);
    }

    public function add()
    {
        return view('index');
    }

    public function create(Request $request)
    {
        $this->validate($request, faq::$rules);
        $form = $request->all();
        faq::create($form);
        $request->timestamps = false; 
        return view('thanks');
    }
}
