<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class EmpleadoActividadController extends Controller
{
    protected $base_url;

    public function __construct()
    {
        $this->base_url = 'https://localhost:44348/api/';
    }

    public function index()
    {
        $client = new Client([
            'verify' => false,
        ]);
        
        $response = $client->get($this->base_url . 'empleadoactividads');
        $empleadoactividades = json_decode($response->getBody(), true);
        return view('empleadoactividades.index', compact('empleadoactividades'));
    }

    public function create()
    {
        return view('empleadoactividades.create');
        
    }

    public function store(Request $request)
    {
        $client = new Client([
            'verify' => false,
        ]);
        
        $response = $client->post($this->base_url . 'empleadoactividads', [
            'json' => $request->all(),
        ]);
        return redirect()->route('empleadoactividades.index');
        // Lógica para manejar la respuesta, redireccionar, etc.
    }

    public function edit($id)
    {
        $client = new Client([
            'verify' => false,
        ]);
        
        $response = $client->get($this->base_url . 'empleadoactividads/' . $id);
        $empleadoactividad = json_decode($response->getBody(), true);
        return view('empleadoactividades.edit', compact('empleadoactividad'));
    }

    public function update(Request $request, $id)
    {
        $client = new Client([
            'verify' => false,
        ]);
        
        $response = $client->put($this->base_url . 'empleadoactividads/' . $id, [
            'json' => $request->all(),
        ]);

        return redirect()->route('empleadoactividades.index');

        // Lógica para manejar la respuesta, redireccionar, etc.
    }

    public function destroy($id)
    {
        $client = new Client([
            'verify' => false,
        ]);
        
        $response = $client->delete($this->base_url . 'empleadoactividads/' . $id);

        return redirect()->route('empleadoactividades.index');
        // Lógica para manejar la respuesta, redireccionar, etc.
    }
}
