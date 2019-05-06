<?php

namespace Modules\Admin\Exceptions;

use App\Exceptions\Handler;
use Illuminate\Auth\AuthenticationException;

class ExceptionHandler extends Handler
{
    protected function unauthenticated($request, AuthenticationException $exception)
    {
        if ($request->expectsJson()) {
            return response()->json(['message' => $exception->getMessage()], 401);
        }
        
        $guard = head($exception->guards());
        
        if ($guard === 'admin') {
            return redirect()->guest(route('admin.login'));
        }

        return redirect()->guest($exception->redirectTo() ?? route('login'));
    }
}
