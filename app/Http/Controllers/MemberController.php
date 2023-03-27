<?php

namespace App\Http\Controllers;

use App\Models\Member;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.home');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user = User::where('email', '=', $request->email)->first();
        if ($user === null) {
            $user = new User();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = Hash::make(Str::random(15));
            $user->save();

            $member = new Member();
            $member->member_id = $user->id;
            $member->name = $request->name;
            $member->type = $request->type == "true" ? true : false;
            $member->designation = $request->designation;
            $member->department = $request->department;
            $member->organization = $request->organization;
            $member->email = $request->email;
            $member->mobile = $request->mobile;
            $member->address = $request->address;
            $member->is_admin = true;
            $member->save();

            return ['message' => 'User created'];
        }

        return ['error' => 'User already exists'];
    }

    /**
     * Display the specified resource.
     */
    public function show(Member $member)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Member $member)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Member $member)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Member $member)
    {
        //
    }
}
