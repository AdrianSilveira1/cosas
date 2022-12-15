<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */
namespace model;
/**
 * Description of Producto
 *
 * @author Adrián Silveira
 */
abstract class Producto implements \interfaces\IComparar{
    //put your code here
    protected string $id;
    protected string $nombre;
    protected float $precio;
    protected const STOCK = 1000;
    protected static int $unidades = 0;
    private int $stock;
    
    
    public function __construct(string $id, string $nombre, float $precio,int $stock = self::STOCK) {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->precio = $precio;
        self::$unidades++;
        $this->stock = $stock;
    }
    
public function __toString():string {
        $cadena =  
               "Id:" . $this->id . "<br>Nombre: ". $this->nombre . 
                  "<br>Precio: " .$this->precio. "<br>";
       return $cadena;

             
    }
    public function setId(string $id): void {
        $this->id = $id;
    }

    public function setNombre(string $nombre): void {
        $this->nombre = $nombre;
    }

    public function setPrecio(float $precio): void {
        $this->precio = $precio;
    }

    public function setUnidades(int $unidades): void {
        $this->unidades = $unidades;
    }
    public function setStock(int $stock): void {
        $this->stock = $stock;
    }

    public function getId(): string {
        return $this->id;
    }

    public function getNombre(): string {
        return $this->nombre;
    }

    public function getPrecio(): float {
        return $this->precio;
    }

    public static function getUnidades(): int {
        return self::$unidades;
    }

    public function getStock(): int {
        return $this->stock;
    }
    
    
 
}
