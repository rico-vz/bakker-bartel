<?php

namespace App\Http\Controllers;

use App\Models\Assortment;

class AssortmentController extends Controller
{
    public function index()
    {
        $data = [
            'assortment' => Assortment::paginate(5),
        ];

        return view('assortment', $data);
    }
}
