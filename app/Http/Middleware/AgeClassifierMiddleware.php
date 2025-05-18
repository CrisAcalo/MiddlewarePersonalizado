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

        // Si es el primer acceso (envío del formulario)
        if ($request->isMethod('POST')) {
            if (!is_numeric($age) || $age < 0 || $age > 120) {
                return redirect()->route('error');
            }

            $age = (int)$age;
            $classification = AgeRouterService::getClassification($age);
            $targetRoute = AgeRouterService::getRouteByAge($age);

            // Guardar en sesión
            session(['user_age' => $age,
            'user_classification' => $classification,
            'target_route' => $targetRoute]);

            EdadEntradas::create([
                'age' => $age,
                'classification' => AgeRouterService::getClassification($age),
            ]);

            return redirect()->route($targetRoute);
        }

        // Si es un acceso a una ruta protegida (GET)
        if (!session()->has('user_age')) {
            return redirect('/'); // Volver al formulario inicial
        }

        $userAge = session('user_age');
        $expectedRoute = AgeRouterService::getRouteByAge($userAge);
        $currentRoute = $request->route()->getName();

        // Verificar si la ruta actual coincide con la esperada para su edad
        if ($currentRoute !== $expectedRoute) {
            return redirect()->route($expectedRoute); // Redirigir a su ruta correcta
        }

        return $next($request);
    }
}
