<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\Visitor;
use Symfony\Component\HttpFoundation\Response;

class TrackVisitor
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Ambil IP Address Pengunjung
        $ip = $request->ip();
        $userAgent = $request->userAgent();
        $today = now()->toDateString();

        // Simpan atau Update data pengunjung berdasarkan IP dan Hari ini
        Visitor::updateOrCreate(
            [
                'ip_address' => $ip,
                'visit_date' => $today,
            ],
            [
                'user_agent' => $userAgent,
                'last_seen'  => now(),
            ]
        );

        return $next($request);
    }
}