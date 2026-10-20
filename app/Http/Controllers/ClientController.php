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

    protected function post(string $path, array $data)
    {
        return Http::post(config('app.url_api') . $path, $data)->successful();
    }

    protected function delete(string $path)
    {
        return Http::delete(config('app.url_api') . $path)->successful();
    }
}