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
            // Retrieve all orders and sort them by status ('klaar om op te halen', 'afgehandeld', 'geannuleerd') first and then by pickup_date. Paginate with a limit of 5 orders per page to prevent the page from getting too long.
            'orders' => Order::orderByRaw('FIELD(status, "klaar om op te halen", "afgehandeld", "geannuleerd"), pickup_date')->paginate(5),
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

    public function update_orders($id)
    {
        $order = Order::find($id);
        $order->status = request('status');
        $order->save();

        return redirect()->route('bestellingen');
    }
}