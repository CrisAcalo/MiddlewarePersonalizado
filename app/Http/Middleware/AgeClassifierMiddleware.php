<?php

namespace App\Http\Middleware;

use App\Models\EdadEntradas;
use App\Services\AgeRouterService;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AgeClassifierMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $age = $request->input('age');

        //soporte para el método POST
        if ($request->isMethod('POST')) {
            if (!is_numeric($age) || $age < 0 || $age > 120) {
                return redirect()->route('error');
            }

            $age = (int)$age;
            $classification = AgeRouterService::getClassification($age);
            $targetRoute = AgeRouterService::getRouteByAge($age);

            EdadEntradas::create([
                'age' => $age,
                'classification' => $classification,
            ]);

            return redirect()->route($targetRoute);
        }
        return $next($request);
    }
}
