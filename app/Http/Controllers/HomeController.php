<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Province;
use App\City;
use App\Courier;
use Kavist\RajaOngkir\Facades\RajaOngkir;


class HomeController extends Controller
{
    public function index()
    {
        $couriers = Courier::pluck('title', 'code');
        $provinces = Province::pluck('title', 'province_id');
        return view('home', compact('couriers', 'provinces'));
    }

    public function getCities($id)
    {
        $cities = City::where('province_id', $id)->pluck('title', 'city_id');
        return json_encode($cities);
    }

    public function submit(Request $request)
    {
        $cost = RajaOngkir::ongkosKirim([
            'origin' => $request->city_origin,
            'destination' => $request->city_destination,
            'weight' => $request->weight,
            'courier' => $request->courier
        ])->get();

        $courier = $cost[0]['name'];
        $weight = $request->weight;
        $origin = RajaOngkir::kota()->find($request->city_origin);
        $destination = RajaOngkir::kota()->find($request->city_destination);

        $rows = [];
        foreach ($cost[0]['costs'] as $row) {
            $rows[] = [
            'description' => $row['description'],
            'cost' => $row['cost'][0]['value'],
            'etd' => $row['cost'][0]['etd']
            ];
        }
        return view('result', ['courier' => $courier, 'weight' => $weight, 'rows' => $rows, 'origin' => $origin,
        'destination' => $destination]);
    }
}
