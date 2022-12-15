<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1> Productos EVAL 1 UD3 </h1>
        <?php
        require_once 'include/autoload.php';

        use model\Libro;
        use model\Prenda;

//Creamos 3 productos:

        $camisa = new Prenda(1, "Camisa", 19.99, "#000000");

        $autorPHP_1 = "Matt Davis";
        $autorPHP_2 = "Louis Reed";
        $autoresPHP = array($autorPHP_1, $autorPHP_2);

        $libroPHP = new Libro(2, "PHP programming language", 24.99, $autoresPHP);
        $libroJava = new Libro(3, "Java programming language", 24.99);

//Establecemos el total de productos a 800
//        $camisa->setStock(800);
//        $libroPHP->setStock(800);
//        $libroJava->setStock(800);

        echo "Product info: $camisa";
        echo "Product info: $libroPHP";
        echo "Product info: $libroJava";

        //Reemplazar X por las unidades actuales
        echo "Existen en total " . \model\Producto::getUnidades()
        . " productos <br/>   ";

        comparar($camisa, $libroPHP);
        comparar($libroPHP, $camisa);
        comparar($libroPHP, $libroJava);
        try{
        comparar($libroPHP, new DateTimeImmutable("2022-10-2"));
        } catch (excepciones\NotSuitableClassException $error){
            echo "Se ha producido una excepción:  " . $error->getMessage();
        }
        function comparar($obj1, $obj2) {
            $resultado = $obj1->comparar($obj2);

            if ($resultado === 0) {
                echo "Producto: " . $obj1->getNombre() . " y " . $obj2->getNombre() . " tienen el mismo precio: " . $obj1->getPrecio() . "<br/>";
            } else {
                $comparador = "mayor";
                if ($resultado === -1) {
                    $comparador = "menor";
                }
                echo "Producto: " . $obj1->getNombre() . " tiene un precio (" . $obj1->getPrecio() . ") " . $comparador . " que " . $obj2->getNombre() . " (" . $obj2->getPrecio() . ")<br/>";
            }
        }
        ?>
    </body>
</html>


