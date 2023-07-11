<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class QuestionController extends Controller
{

    // public function __construct()
    // {
    //     $this->middleware('auth:api');
    // }

    // INDEX FUNCTION
    public function index(Request $request)
    {
        $limit = $request->query('limit', null);

        $query = Question::with('options');

        if (!is_null($limit)) {
            $query->limit($limit);
        }

        $questions = $query->get();

        return response()->json([
            'data' => $questions
        ], 200);
    }

    // STORE FUNCTION
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string',
            'content' => 'required|string',
            'options' => 'required|array',
            'options.*' => 'string',
            'correct_option' => [
                'required',
                'integer',
                Rule::in(array_keys($request->input('options')))
            ],
        ]);

        $question = Question::create($validatedData);

        return response()->json([
            'message' => 'Question created successfully',
            'data' => $question
        ], 201);
    }

    // UPDATE FUNCTION
    public function update(Request $request, $id)
    {
        $question = Question::findOrFail($id);

        $validatedData = $request->validate([
            'attributes' => 'required|array'
        ]);

        $question->update($validatedData['attributes']);

        return response()->json([
            'message' => 'Question updated successfully',
            'data' => $question
        ], 200);
    }

    // SHOW FUNCTION
    public function show($id)
    {
        $question = Question::find($id);

        if (!$question) {
            return response()->json([
                'message' => 'Pertanyaan tidak ditemukan'
            ], 404);
        }

        return response()->json([
            'data' => $question
        ], 200);
    }

    // DELETE FUNCTION
    public function destroy($id)
    {
        $question = Question::findOrFail($id);
        $question->delete();

        return response()->json([
            'message' => 'Question deleted successfully'
        ], 200);
    }
}
