<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use function Termwind\render;
use App\Models\Idea;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Idea $idea)
    {
        //

        return view('users.create', ['idea' => $idea]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

        $validated = $request->validate([

            'name' => 'required|unique:users|max:10|min:4',
            'email' => 'required|unique:emails',
            'password' => 'required|max:40|min:4'
        ]);

        //$user = User::create($validated);

        //auth()->login($user);

        //return redirect('/ideas');




    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
