<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RestaurantController extends Controller
{
    public function index ()
    {

        return __CLASS__;

    }

    public function new()
    {

        return view('admin.restaurants.store');

    }

    public function store(Request $request)
    {
        dd($request)->all();

    }




}
