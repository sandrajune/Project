<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\Topic;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function create(Topic $topic)
    {
        return view('questions.create', compact('topic'));
    }

    public function store(Request $request, Topic $topic)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        $topic->questions()->create([
            'herbalist_id' => auth()->id(),
            'title' => $request->title,
            'content' => $request->content,
        ]);

        return redirect()->route('topics.show', $topic)->with('success', 'Question created successfully.');
    }

    public function show(Question $question)
    {
        $answers = $question->answers()->with('herbalist')->get();
        return view('questions.show', compact('question', 'answers'));
    }

    public function destroy(Question $question)
    {
        $question->delete();
        return redirect()->route('topics.show', $question->topic)->with('success', 'Question deleted successfully.');
    }
}
