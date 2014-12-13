<?php namespace App\Http\Controllers\Account;

use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
    public function create()
    {
        return view('account.profile.create');
    }

    public function store()
    {
        //
    }

    public function show()
    {
        return view('account.profile.show');
    }

    public function edit()
    {
        return view('account.profile.edit');
    }

    public function update()
    {
        //
    }
}
