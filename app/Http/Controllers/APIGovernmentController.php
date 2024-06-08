<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class APIGovernmentController extends Controller
{
    public function getAllPenduduk()
    {
        $response = Http::get('https://api-government.onrender.com/penduduk');

        return $response->json();
    }

    public function getPenduduk($id_data)
    {
        $response = Http::get("https://api-government.onrender.com/penduduk/{$id_data}");

        return $response->json();
    }

    public function updatePenduduk($id_data, Request $request)
    {
        $response = Http::put("https://api-government.onrender.com/penduduk/{$id_data}", $request->all());

        return $response->json();
    }

    public function deletePenduduk($nik)
    {
        $response = Http::delete("https://api-government.onrender.com/penduduk/{$nik}");

        return $response->json();
    }
}