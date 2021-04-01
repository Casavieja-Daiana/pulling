<?php

$persona = [
              "nombre" => "Pedro",
              "apellido" => "Sanchez",
              "edad" => 50
            ];
            foreach ($persona as $valor) {
                  echo "$valor <br>";
             }
$auto = [
            "Marca" => "Ford",
            "Modelo" => "Focus"
        ];
            foreach ($auto as $posicion => $valor) {
                  echo "$posicion :$valor <br>";
             }
?>
