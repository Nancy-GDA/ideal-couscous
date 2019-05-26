<?php

namespace App\Models;

class Menu {

    public static function all(){
        return [
            0 => [
                "id" => 1,
                "title" => 'Platos fuertes',
                "image" => "entrada.jpg",
                "description" => "Tenemos una amplía variedad de platillos 
                                para todos los tipos de gustos hechos 
                                con una seleccion de carnes frescas 
                                vegetales de temporada y ricos aderezos 
                                elaborados por nosotros."
            ],
            1 => [
                "id" => 2,
                "title" => 'Snacks',
                "image" => "snack.jpg",
                "description" => "Nuestros snacks son aperitivos listos
                                para ser disfrutados entre las mejores
                                conversaciones que puedas tener,
                                elaborados con productos frescos."
            ],
            2 => [
                "id" => 3,
                "title" => 'Postres y Bebidas',
                "image" => "postre.jpg",
                "description" => "Contamos con una amplia variedad de
                                postres dulces y salados para
                                todo tipo de gustos y unas ricas
                                bebidas para poder acompañar nuestros 
                                ricos platillos. "
            ]
        ];
    }
}