<?php

namespace App\Controllers;

use App\Models\Menu;

class IndexController{
    public function indexAction(){
        $foodDishes = Menu::all();
        include '../views/Modals/login.html';
        include '../views/Modals/registry.html';
        include '../views/index.php';
    }

    public function login($request){
        echo "Hola login";
    }

    public function registy(){
        echo "Hola registro";
    }
}