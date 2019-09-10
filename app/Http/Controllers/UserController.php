<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\User;

class UserController extends Controller
{
    public function index ()
    {

        $user = User::all();
        return view('admin.users.index', compact('users'));


    }

    public function new()
    {

        return view('admin.users.store');

    }

    public function store(UserRequest $request)
    {
        $userData = $request->all();

         $request->validated();

        $user = new User();
        $user->create($userData);

        print "Usuário criado com sucesso!";

    }

    public function edit (User $user) {

        return view('admin.users.edit',compact('restaurant'));
    }

    public function update(UserRequest $request, $id) {

        $userData = $request->all();

        $request->validated();

        $user = User::findOrfail($id);
        $userData->update($userData);

        print "Usuário atualizado com sucesso!";

    }

    public function delete($id) {

        $user = User::findOrfail($id);
        $user->delete();

        print "Usuário excluído com sucesso!";




    }







}
