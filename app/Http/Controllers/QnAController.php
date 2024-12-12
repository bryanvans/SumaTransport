<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;
use Auth; // Pastikan untuk menggunakan Auth jika ingin menyimpan siapa yang memberikan jawaban

class QnAController extends Controller
{
    public function index(Request $request)
    {
        $questions = Question::all();

        if ($request->wantsJson()) {
            return response()->json([
                'success' => true,
                'data' => $questions
            ], 200);
        }

        return view('qna', compact('questions'));
    }

    // Store a new question (API + Web Form)
    public function store(Request $request)
    {
        $request->validate([
            'question' => 'required|string|max:255',
        ]);

        $question = Question::create([
            'question' => $request->question,
        ]);

        if ($request->wantsJson()) {
            return response()->json([
                'message' => 'Pertanyaan berhasil disimpan.',
                'data' => $question,
            ], 201);
        }

        return redirect()->route('qna.index')->with('success', 'Pertanyaan berhasil disimpan.');
    }

    // Show a single question (API)
    public function show($id)
    {
        $question = Question::find($id);

        if (!$question) {
            return response()->json(['message' => 'Pertanyaan tidak ditemukan'], 404);
        }

        return response()->json($question, 200);
    }

    // Update a question (API)
    public function update(Request $request, $id)
    {
        $question = Question::find($id);

        if (!$question) {
            return response()->json(['message' => 'Pertanyaan tidak ditemukan'], 404);
        }

        $request->validate([
            'question' => 'required|string|max:255',
        ]);

        $question->update([
            'question' => $request->question,
        ]);

        return response()->json([
            'message' => 'Pertanyaan berhasil diperbarui.',
            'data' => $question,
        ], 200);
    }

    // Delete a question (API)
    public function destroy($id)
    {
        $question = Question::find($id);

        if (!$question) {
            return response()->json(['message' => 'Pertanyaan tidak ditemukan'], 404);
        }

        $question->delete();

        return response()->json(['message' => 'Pertanyaan berhasil dihapus.'], 200);
    }

    // Store a new answer for a specific question
    public function storeAnswer(Request $request, $questionId)
    {
        $request->validate([
            'answer' => 'required|string',
        ]);

        $question = Question::findOrFail($questionId); // Temukan pertanyaan berdasarkan ID

        // Simpan jawaban
        $question->answer = $request->answer;
        $question->save();

        if ($request->wantsJson()) {
            return response()->json([
                'message' => 'Jawaban berhasil disimpan.',
                'data' => $question,
            ], 201);
        }

        return redirect()->route('qna.index')->with('success', 'Jawaban berhasil disimpan.');
    }
}
