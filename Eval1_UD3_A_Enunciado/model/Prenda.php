<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */
namespace model;
use model\Producto;
/**
 * Description of Prenda
 *
 * @author Adrián Silveira
 */
class Prenda extends Producto{
    //put your code here
    private string $color;
    
    public function __construct(string $id, string $nombre,float $precio, string $color ,int $stock = parent::STOCK) {
        parent::__construct($id,$nombre,$precio,$stock);
        $this->color = $color;
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
        $cadena = parent::__toString() ."Color: ". $this->color . "<br>---------------------<br>";
        return $cadena;
}
}