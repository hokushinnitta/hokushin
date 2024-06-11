<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class RoleMiddleware
{
    public function handle(Request $request, Closure $next, $role)
    {
        if (!Auth::check()) {
            return redirect('/login');
        }

        $user = Auth::user();
        Log::info('RoleMiddleware check', ['user_id' => $user->id, 'user_roles' => $user->getRoleNames(), 'required_role' => $role]);

        if (!$user->hasRole($role)) {
            Log::info('Role does not match', ['user_roles' => $user->getRoleNames(), 'required_role' => $role]);
            return redirect('/dashboard'); // 役割が一致しない場合はダッシュボードにリダイレクト
        }

        return $next($request);
    }
}
