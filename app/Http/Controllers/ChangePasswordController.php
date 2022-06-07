<?php

namespace App\Http\Controllers;

use App\Http\Requests\ChangePasswordRequest;
use Illuminate\Contracts\Hashing\Hasher;
use Illuminate\Http\Request;

class ChangePasswordController extends Controller
{
    private $hasher;

    public function __construct(Hasher $hasher)
    {
        $this->hasher = $hasher;
        $this->middleware('auth');
    }

    public function __invoke(ChangePasswordRequest $request)
    {
        $data = $request->validated();

        $user = $request->user();
        $user->password = $this->hasher->make($data['new_password']);
        $user->save();

        return back()
            ->with('message', __('Password updated successfully'));
    }
}
