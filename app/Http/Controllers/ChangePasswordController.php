<?php

namespace App\Http\Controllers;

use App\Http\Requests\ChangePasswordRequest;
use Illuminate\Http\Request;

class ChangePasswordController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function __invoke(ChangePasswordRequest $request)
    {
        $data = $request->validated();

        $user = $request->user();
        $user->password = $data['new_password'];
        $user->save();

        return back()
            ->with('message', __('Password updated successfully'));
    }
}
