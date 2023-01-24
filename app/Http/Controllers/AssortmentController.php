<?php

namespace App\Http\Controllers;

use App\Models\Assortment;
use Illuminate\Http\Request;

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