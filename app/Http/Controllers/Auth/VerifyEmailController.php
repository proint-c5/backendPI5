<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Verified;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use App\Models\User;
use GrahamCampbell\ResultType\Success;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Traits\ApiResponser;
//use Illuminate\Http\RedirectResponse;

class VerifyEmailController extends Controller
{
    /**
     * Mark the authenticated user's email address as verified.
     *
     * @param  \Illuminate\Foundation\Auth\EmailVerificationRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    /*public function __invoke(EmailVerificationRequest $request)
    {
        echo "holafff";
        if ($request->user()->hasVerifiedEmail()) {
            $user=User::findOrFail($request->user()->getKey());
            echo $request->user()->getKey();
            $user->active=true;
            $user->save();
            return redirect()->intended(RouteServiceProvider::HOME.'?verified=1');
            echo "holaddd";
        }

        $user=User::findOrFail($request->user()->getKey());
        $user->active=true;

        if ($request->user()->markEmailAsVerified()) {
            
            event(new Verified($request->user()));
            $user=User::findOrFail($request->user()->getKey());
            $user->active=true;
            $user->save();
        }
      
        return redirect()->intended(RouteServiceProvider::HOME.'?verified=1');
    }*/

    public function __invoke(Request $request): RedirectResponse
    {
        $user = User::find($request->route('id'));
        $user->active = true;
        $user->save();

        if ($user->hasVerifiedEmail()) {
            //return redirect(env('FRONT_URL') . 'pages/email/verify');
            
            return redirect('http://127.0.0.1:4200/pages/email/verify');
            //return redirect('dasboard');
            //return RedirectResponse::create($request->route() . env('FRONT_URL') . 'pages/email/verify');
        }

        if ($user->markEmailAsVerified()) {
            event(new Verified($user));
        }

        //return redirect(env('FRONT_URL') . '/email/verify/success');
        //return redirect(env('FRONT_URL') . 'pages/email/verify');
        //return $this->sendVerificationResponse($request, $user);
        
        //return redirect('dasboard');

        return redirect('http://127.0.0.1:4200' . '/pages/email/verify');
    }

}
