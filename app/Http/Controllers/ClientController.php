<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

abstract class ClientController extends Controller
{
  
    protected function get(string $path)
    {
        try {
            $response = Http::get(config('app.url_api') . $path);
        } catch (\Exception $e) {
          
            report($e);

            return [];
        }

        if (! $response->successful()) {
            return [];
        }

        return $response->json() ?? [];
    }
}
