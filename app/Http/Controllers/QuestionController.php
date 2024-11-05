<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use Illuminate\Http\Request;
use App\Models\Question;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;

class QuestionController extends Controller
{
    public function create()
    {
        $categories = Category::all();
        return view('user.utils.question', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'body' => 'required|string',
            'category_id' => 'required|exists:categories,id',
        ]);

        Question::create([
            'title' => $request->title,
            'body' => $request->body,
            'user_id' => Auth::id(),
            'category_id' => $request->category_id,
        ]);

        return redirect()->route('questions.index')->with('success', 'Pertanyaan berhasil diajukan.');
    }

    public function index()
    {
        $questions = Question::with('category', 'user')->latest()->paginate(5);
        return view('user.forum', compact('questions'));
    }

    public function edit($id)
    {
        $question = Question::findOrFail($id);
        return view('user.utils.forum_edit', compact('question'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'body' => 'required|string',
        ]);

        $question = Question::findOrFail($id);
        $question->title = $request->input('title');
        $question->body = $request->input('body');
        $question->save();

        return redirect()->route('questions.index')->with('success', 'Question updated successfully.');
    }

    public function destroy($id)
    {
        $question = Question::findOrFail($id);
        $question->delete();

        return redirect()->route('questions.index')->with('success', 'Question deleted successfully.');
    }
}
