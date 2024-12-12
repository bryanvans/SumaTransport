<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AnswerController extends Controller
{
    // Menyimpan jawaban
    public function store(Request $request, $questionId)
    {
        // Validasi input
        $request->validate([
            'answer' => 'required|string|max:1000',
        ]);

        // Temukan pertanyaan berdasarkan ID
        $question = Question::findOrFail($questionId);

        // Simpan jawaban baru
        $answer = new Answer([
            'answer' => $request->input('answer'),
            'user_id' => Auth::id(),
        ]);

        // Relasikan jawaban dengan pertanyaan
        $question->answers()->save($answer);

        // Redirect ke halaman pertanyaan dengan pesan sukses
        return redirect()->route('qna', $questionId)->with('success', 'Jawaban berhasil dikirim!');
    }
}