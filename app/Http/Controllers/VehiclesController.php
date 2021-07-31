<?php

namespace App\Http\Controllers;

use acidjazz\metapi\MetApi;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\DB;

class VehiclesController extends Controller
{
    use Metapi;
    
    /**
     * Endpoint getting vehicles list
     */
    public function get()
    {
        $vehicles = [];

        $vehicles = DB::table('vehicles')->get();

        return $this->render($vehicles);
    }

    /**
     * Endpoint to get a specified vehicle
     * 
     * @param  \Illuminate\Http\Request  $request
     * @param  string  $id
     * @return \Illuminate\Http\Response
     */
    public function find(Request $request, $id)
    {
        $vehicle = DB::table('vehicles')->where('stock', $id)->first();

        return $this->render($vehicle);
    }

    public function error(): Response|JsonResponse
    {
        return $this->render(['forced_error' => $forced_error]);
    }
}
