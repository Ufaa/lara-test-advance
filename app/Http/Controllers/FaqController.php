<?php

namespace App\Http\Controllers;

use App\Models\faq;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    public function index()
    {
        $items =  faq::all();

        return view('index', $items);
    }

    public function post(Request $request)
    {
        $content = $request->content;
        $item = [
            'content' => $content . 'と入力しましたね'
        ];
        return view('thanks', $item);
    }

    public function store(Request $request)
    {
        $validate_rule = [
            'content' => 'required|max:20',
        ];
        $this->validate($request, $validate_rule);

        $todo = new faq();
        $todo->content = $request->content;
        $todo->save();
        return redirect('/');
    }

    public function add()
    {
        return view('thanks');
    }

    public function create(Request $request)
    {
        $this->validate($request, faq::$rules);
        $form = $request->all();
        faq::create($form);
        return redirect('/');
    }
}
