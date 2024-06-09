<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guest;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;

//Web Logic
class GuestController extends Controller
{
    public function index()
    {
        $guests = Guest::all();
         // Create a new Guzzle client instance
         $client = new Client();

         // API endpoint URL with your desired location and units (e.g., London, Metric units)
         $apiUrl = "https://api-government.onrender.com/penduduk";
 
         try {
             // Make a GET request to the OpenWeather API
             $response = $client->get($apiUrl);

             // Get the response body as an array
             $data = json_decode($response->getBody(), true);
            
             // Handle the retrieved weather data as needed (e.g., pass it to a view)
             return view('guests.index', ['guests' => $guests, 'citizens' => $data]);
         } catch (\Exception $e) {
             // Handle any errors that occur during the API request
             return view('guests.index', ['error' => $e->getMessage()]);
         }
    }

    public function create()
    {
        return view('guests.create');
    }

    public function store(Request $request)
    {
        Guest::create($request->all());
        return redirect()->route('guests.index');
    }

    public function show($NIKID)
    {
        $guest = Guest::findOrFail($NIKID);
        return view('guests.show', compact('guest'));
    }

    public function edit($NIKID)
    {
        $guest = Guest::findOrFail($NIKID);
        return view('guests.edit', compact('guest'));
    }

    public function update(Request $request, $NIKID)
    {
        $guest = Guest::findOrFail($NIKID);
        $guest->update($request->all());
        return redirect()->route('guests.index');
    }

    public function destroy($NIKID)
    {
        $guest = Guest::findOrFail($NIKID);
        $guest->delete();
        return redirect()->route('guests.index');
    }

 //API Logic 
    public function getAllPenduduk()
    {
        $response = Http::get('https://api-government.onrender.com/penduduk');
        $guests = $response->json();
        return view('guests.index', ['guests' => $guests, 'penduduk' => $response]); 
    }

    public function getPenduduk($id_data)
    {
        $response = Http::get("https://api-government.onrender.com/penduduk/{$id_data}");
        $guest = $response->json();

        return view('guests.show', ['guest' => $guest]);
    }

    public function updatePenduduk($id_data, Request $request)
    {
        $response = Http::put("https://api-government.onrender.com/penduduk/{$id_data}", $request->all());
        $guest = $response->json();

        return view('guests.update', ['guest' => $guest]);
    }

    public function deletePenduduk($nik)
    {
        $response = Http::delete("https://api-government.onrender.com/penduduk/{$nik}");
        $guest = $response->json();

        return redirect()->route('guests.index')->with('message', 'Guest deleted successfully');
    }
}