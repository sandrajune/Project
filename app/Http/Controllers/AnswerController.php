<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Question;
use Illuminate\Http\Request;

class AnswerController extends Controller
{
    public function store(Request $request, Question $question)
    {
        $request->validate([
            'content' => 'required|string',
        ]);

        $question->answers()->create([
            'herbalist_id' => auth()->id(),
            'content' => $request->content,
        ]);

        return redirect()->route('questions.show', $question)->with('success', 'Answer created successfully.');
    }

    public function destroy(Question $question, Answer $answer)
    {
        $answer->delete();
        return redirect()->route('questions.show', $question)->with('success', 'Answer deleted successfully.');
    }
}
