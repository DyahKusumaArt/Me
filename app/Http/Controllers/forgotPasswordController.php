<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Log;

class forgotPasswordController extends Controller
{
    //..
    public function showLinkRequestForm()
    {
        return view('forgotPassword');
    }
    public function sendResetLinkEmail(Request $request)
    {
        try {
            $request->validate([
                'email' => 'required|email',
            ]);

            $status = Password::sendResetLink(
                $request->only('email')
            );
            if ($status === Password::RESET_LINK_SENT) {
                return back()->with(['status' => __($status)]);
            } else {
                return back()->withErrors(['email' => __($status)]);
            }
        } catch (ValidationException $e) {
            // Handle validation errors
            Log::error('Error sending reset link: ' . $e->getMessage());
            return back()->withErrors(['email' => 'Error sending reset link.']);
        }
        // catch (\Exception $e) {
        //     // Log the exception
        //     Log::error('Error during password reset: ' . $e->getMessage());

        //     // Optionally, redirect to an error page
        //     return redirect()->back()->withErrors('error', 'An error occurred during password reset.');
        // }
    }
    public function showResetForm(Request $request, $token)
    {
        return view('resetPassword')->with(['token' => $token, 'email' => $request->email]);
    }
    public function reset(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|confirmed|min:8',
            'token' => 'required',
        ]);

        $status = Password::reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function ($user, $password) {
                $user->forceFill([
                    'password' => bcrypt($password),
                ])->save();
            }
        );

        return $status == Password::PASSWORD_RESET
            ? redirect('/login')->with('status', __($status))
            : back()->withErrors(['email' => [__($status)]]);
    }
}
