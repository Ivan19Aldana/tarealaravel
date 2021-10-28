<?php
namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
class UserController extends Controller


{

    //Listado de Usuario
    public function list(){
        $data['users'] = User::paginate(10);

        return view('usuarios.listar', $data);

    }
    

}