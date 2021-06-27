<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Crypt;
use Session;

class SignatureMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $data = $request->all();
        if(Session::has('user_id')) {
            return $next($request);
        }
        if(array_key_exists('signature', $data)) {
            try {
                $decrypt= Crypt::decryptString($data['signature']);
            } catch(\RuntimeException $e) {
                return redirect(url('/'));
            }

            $array = json_decode($decrypt, TRUE);
            Session::put('user_id', $array['user_id']);
            return $next($request);
        }

        return redirect(url('/'));
    }
}
