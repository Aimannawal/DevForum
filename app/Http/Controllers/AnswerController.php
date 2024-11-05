<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;

class AnswerController extends Controller
{
    public function index($id)
    {
        $question = Question::with('category', 'user', 'answers')->findOrFail($id);
        return view('user/detail_forum', compact('question'));
    }


    public function store(Request $request, $questionId)
    {
        $request->validate([
            'body' => 'required',
        ]);

        Answer::create([
            'body' => $request->input('body'),
            'question_id' => $questionId,
            'user_id' => Auth::id(),
        ]);

        return redirect()->back()->with('success', 'Answer posted successfully.');
    }

    public function edit($id)
    {
        $answer = Answer::findOrFail($id);
        return view('user.utils.detail_edit', compact('answer'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'body' => 'required|string|max:1000',
        ]);

        $answer = Answer::findOrFail($id);
        $answer->body = $request->input('body');
        $answer->save();

        return redirect()->route('forum.index', $answer->question_id)
            ->with('success', 'Answer updated successfully.');
    }

    public function destroy($id): RedirectResponse
    {
        $Answer = Answer::findOrFail($id);
        $Answer->delete();

        return redirect()->back()->with('success', 'Answer deleted successfully');
    }
}
