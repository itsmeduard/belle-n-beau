<?php
namespace App\Http\Middleware;
use Closure;
use Illuminate\Contracts\Auth\Guard;

class CheckCashier
{
    protected $auth;
    public function __construct(Guard $auth)
    {
        $this->auth = $auth;
    }

    public function handle($request, Closure $next)
    {
        abort_if(($request->user()==null) && auth()->user()->role != "cashier", 403);
        return $next($request);
    }
}
