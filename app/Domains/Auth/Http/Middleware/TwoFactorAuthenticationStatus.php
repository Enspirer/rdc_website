<?php

namespace App\Domains\Auth\Http\Middleware;

use Closure;


class TwoFactorAuthenticationStatus
{
    /**
     * @param 
     * @param  Closure
     * @param  string 
     *
     * @return mixed
     */
    public function handle($request, Closure $next, $status = 'enabled')
    {
        if (! in_array($status, ['enabled', 'disabled'])) {
            abort(404);
        }

        
        if ($status === 'enabled' && $request->is('admin*') && ! config('boilerplate.access.user.admin_requires_2fa')) {
            return $next($request);
        }

        
        if (
            ($status === 'enabled' && ! $request->user()->hasTwoFactorEnabled()) ||
            ($status === 'disabled' && $request->user()->hasTwoFactorEnabled())
        ) {
            return redirect()->route('frontend.auth.account.2fa.create')->withFlashDanger(__('Two-factor Authentication must be :status to view this page.', ['status' => $status]));
        }

        return $next($request);
    }
}
