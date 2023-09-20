<?php

namespace App\Http\Controllers;

use App\Models\Idea;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IdeaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Idea $ideas)
    {
        $ideas = Auth::user()->ideas;

        return view('ideas.index', ['ideas' => $ideas] );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //

        return view('ideas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

        $validated = $request->validate([

            'title' => 'required|min:5',
            'description' => 'required|min:5'
        ]);

        $idea = $request->user()->ideas()->create($validated);

        return redirect('/ideas');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
        return view('ideas.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Idea $idea)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Idea $idea)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Idea $idea)
    {
        //
    }
}
