<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Order;
use App\Models\Assortment;

class DashboardController extends Controller
{


    public function index()
    {
        $data = [
            'products' => Product::all(),
        ];
        return view('dashboard', $data);
    }

    public function bestellingen()
    {
        $data = [
            'orders' => Order::all(),
        ];
        return view('dash.orders', $data);
    }

    public function assortiment()
    {
        $data = [
            'assortment' => Assortment::all(),
        ];
        return view('dash.assortment', $data);
    }
}