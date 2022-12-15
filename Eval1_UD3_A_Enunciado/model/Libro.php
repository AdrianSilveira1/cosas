<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */
namespace model;
use \model\Producto;
/**
 * Description of Libro
 *
 * @author Adrián Silveira
 */
class Libro extends Producto{
    //put your code here
    private  $autores = [];
    public function __construct(string $id, string $nombre,float $precio,array $autores=[],int $stock = parent::STOCK) {
        parent::__construct($id,$nombre, $precio,$stock);
        $this->autores = $autores;
    }
    
    public function comparar(object $prod):int {
        if (!($prod instanceof Producto)) {
          


            throw new
                    \excepciones\NotSuitableClassException(get_class($prod),
                            "No se puede comparar un objeto de la clase " . get_class($this) . " con otra clase.");
        } else {
            return $this->getPrecio() <=> $prod->precio;
        }
    }
    public function __toString():string{
        $autores ="";
        foreach ($this->autores as $value) {
            $autores= $autores . $value ." ";
        }
        if ($autores == ""){
            $autores = "-----";
        }
        $cadena = parent::__toString() . "Autores: " . $autores . "<br>----------------<br>";
        return $cadena;
       
    }
    public function getAutores() {
        return $this->autores;
    }


}
