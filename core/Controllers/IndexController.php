<?php

namespace App\Controllers;

use App\Models\Menu;

class IndexController{
    public function indexAction(){
        $foodDishes = Menu::all();
        include '../views/index.php';
    }
}