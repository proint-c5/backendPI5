<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\URL;

class CheckStatus
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $redirectToRoute
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse|null
     */
    public function handle($request, Closure $next, $redirectToRoute = null)
    {
        if (! $request->user() ||
            ($request->user() instanceof MustVerifyEmail &&
            ! $request->user()->hasVerifiedEmail()) ||  
            ($request->user()->active !== 1)
            ) {

            return response()->json(['error' => [
                    'message' => 'Your Account is not activated yet.', 
                    'code' => 403,
                    // 'email_notverified' => true,
                    'user_notactived' => true,
                    ]], 403);
            // return abort(403, 'Your email address is not verified.');
            // return $request->expectsJson()
            //         ? abort(403, 'Your email address is not verified.')
            //         : Redirect::guest(URL::route($redirectToRoute ?: 'verification.notice'));
        }

        return $next($request);
    }
}
