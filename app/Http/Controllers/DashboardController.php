<?php

namespace App\Http\Controllers;

use App\Models\Assortment;
use App\Models\Employee;
use App\Models\Order;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard');
    }

    public function bestellingen()
    {
        $data = [
            'orders' => Order::paginate(10),
        ];

        return view('dash.orders', $data);
    }

    public function assortiment()
    {
        $data = [
            'assortment' => Assortment::paginate(5),
        ];

        return view('dash.assortment', $data);
    }

    public function medewerkers()
    {
        $data = [
            'employees' => Employee::paginate(5),
        ];

        return view('dash.employees', $data);
    }
}
