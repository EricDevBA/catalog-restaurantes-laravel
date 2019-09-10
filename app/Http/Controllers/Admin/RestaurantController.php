<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\RestaurantRequest;
use App\Restaurant;

class RestaurantController extends Controller
{
    public function index ()
    {

        $restaurants = Restaurant::all();
        return view('admin.restaurants.index', compact('restaurants'));


    }

    public function new()
    {

        return view('admin.restaurants.store');

    }

    public function store(RestaurantRequest $request)
    {
        $restaurantData = $request->all();

         $request->validated();

        $restaurant = new Restaurant();
        $restaurant->create($restaurantData);

        print "Restaurante criado com sucesso!";

    }

    public function edit (Restaurant $restaurant) {

        return view('admin.restaurants.edit',compact('restaurant'));
    }

    public function update(RestaurantRequest $request, $id) {

        $restaurantData = $request->all();

        $request->validated();

        $restaurant = Restaurant::findOrfail($id);
        $restaurant->update($restaurantData);

        print "Restaurante atualizado com sucesso!";

    }

    public function delete($id) {

        $restaurant = Restaurant::findOrfail($id);
        $restaurant->delete();

        print "Restaurante excluído com sucesso!";




    }







}
