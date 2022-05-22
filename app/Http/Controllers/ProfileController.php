<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateProfileRequest;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function show(Request $request)
    {
        $user = $request->user();
        return view('profile.show', ['user' => $user]);
    }

    /**
     * Handle user profile update
     *
     * @param UpdateProfileRequest $request
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProfileRequest $request)
    {
        $data = $request->validated();

        /** @var \App\Models\User */
        $user = $request->user();

        $success = $user->update($data);

        return back()
            ->with('message', __('Profile updated successfully'));
    }
}
