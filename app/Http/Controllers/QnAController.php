<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;

class QnAController extends Controller
{
    public function index()
    {
        $questions = Question::all();
        return view('qna', compact('questions'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'question' => 'required|string|max:255',
        ]);

        Question::create([
            'question' => $request->question,
        ]);

        return redirect()->route('qna')->with('success', 'Pertanyaan berhasil dikirim!');
    }
}
