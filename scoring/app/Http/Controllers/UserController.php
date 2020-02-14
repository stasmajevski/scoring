<?php

namespace App\Http\Controllers;

use App\Http\Requests\Users\StoreUserRequest;
use App\Models\EducationLevel;
use App\Models\User;
use Illuminate\View\View;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index()
    {
        $users = User::with('education')->orderBy('id', 'desc')->paginate(10);
        $educations = EducationLevel::all();

        return view('users.index', [
            'users' => $users,
            'educations' => $educations
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  StoreUserRequest $request
     * @return View
     */
    public function store(StoreUserRequest $request)
    {
        $data = $request->validated();
        User::create($data);

        return back()->with('success', 'User saved!');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return View
     */
    public function edit($id)
    {
        $getUser = User::findOrFail($id);
        $educations = EducationLevel::all();

        return view('users.edit', [
            'getUser' => $getUser,
            'educations' => $educations
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  StoreUserRequest $request
     * @param  int  $id
     * @return View
     */
    public function update(StoreUserRequest $request, $id)
    {
        $data = $request->validated();
        User::with('education')->findOrFail($id)->update($data);

        return back()->with('success', 'User updated!');
    }
}
