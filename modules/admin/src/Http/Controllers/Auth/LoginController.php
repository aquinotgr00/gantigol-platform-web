<?php

namespace Modules\Admin\Http\Controllers\Auth;

use Illuminate\Routing\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\View\View;

class LoginController extends Controller
{

    use AuthenticatesUsers;

    protected function showLoginForm(): View
    {
        return view('admin::auth.login');
    }

    /**
     *
     * @return \Illuminate\Contracts\Auth\Guard
     */
    protected function guard()
    {
        return Auth::guard('admin');
    }

    protected function redirectTo(): string
    {
        return route('admin.dashboard', [], false);
    }

    /**
     * Handle a login request to the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Http\JsonResponse|\Symfony\Component\HttpFoundation\Response|void
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function login(Request $request)
    {
        $this->validateLogin($request);

        if ($this->hasTooManyLoginAttempts($request)) {
            $this->fireLockoutEvent($request);

            $this->sendLockoutResponse($request);
        }

        if ($this->guard()->validate($this->credentials($request))) {
            $user = $this->guard()->getLastAttempted();

            // Make sure the user is active
            if ($user->active && $this->attemptLogin($request)) {
                // Send the normal successful login response
                return $this->sendLoginResponse($request);
            }
            
            // Increment the failed login attempts and redirect back to the
            // login form with an error message.
            $this->incrementLoginAttempts($request);
            return redirect()
                            ->back()
                            ->withInput($request->only($this->username(), 'remember'))
                            ->withErrors(['active' => 'Account disabled']);
        }

        $this->incrementLoginAttempts($request);

        return $this->sendFailedLoginResponse($request);
    }

    /**
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    protected function loggedOut()
    {
        return redirect()->route('admin.login');
    }
}
