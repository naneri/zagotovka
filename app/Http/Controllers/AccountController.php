<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Illuminate\View\View;

class AccountController extends Controller
{
    /**
     * @return Application|Factory|View
     */
    public function changePassword()
    {
        return view('auth.change-password');
    }

    /**
     * @param Request $request
     * @return RedirectResponse
     * @throws ValidationException
     */
    public function updatePassword(Request $request)
    {
        $data = $this->validate($request, [
            'password'  => 'required|confirmed|min:8'
        ]);

        /** @var User $user */
        $user = \Auth::user();

        $user->update(['password' => \Hash::make($data['password'])]);

        return redirect()->back()->with('notification', [
            'message' => 'password updated'
        ]);
    }
}
