<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;

class QnAController extends Controller
{
    public function index()
    {
        return view('qna');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'question' => 'required|string',
        ]);

        Question::create($request->all());

        return redirect()->back()->with('success', 'Pertanyaan Anda telah dikirim!');
    }
}

