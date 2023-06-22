<?php
    // echo (Mostrar una o varias cadenas de texto)
    echo '<h1>Hola Mundo Cruel</h1>';

    // printf (Solo puede imprimir una cadena de texto a la vez)
    $texto = "Campers";
    printf("Hola %s", $texto);

    // sprintf (Devuelve la cadena formateada como resultado)
    $mensaje =  sprintf("Arriba los %s", $texto);
    echo '<br><br>', $mensaje;
?>

<?php
    echo "<br><br> ------------------------------"
?>

<?php
    // Declarar Una Variable Numerica
    $edad = 25;
    define("PI", 3.1416);
    echo '<br><br>', PI;

    // Declarar Una Variable De Texto
    $nombre = "Juan";
    define("SALUDO", "Hola Mundo!");
    echo '<br><br>', SALUDO;

    // Declarar Una Variable Booleana
    $es_valido = true;
    define("ES VALIDO", true);
    // var_dump (Imprime el tipo de dato y el contenido de la variable)
    echo '<br><br>', var_dump($nombre);
?>

<?php
    echo "<br><br> ------------------------------"
?>

<?php
    //Tipos de Datos
    /* 1. Enteros (int): Almacenar Numeros Enteros*/
    $entero = 200;
    echo '<br><br>', var_dump($entero);

    /* 2. Punto flotante (float): Almacenar Numeros Decimales */
    $float = 200.5;
    echo '<br><br>', var_dump($float);

    /* 3. Cadenas de texto (string): Almacenar texto y caracteres*/
    $string = "David";
    echo '<br><br>', var_dump($string);

    /* 4. Booleanos (bool): Almacenar valores (true)-(false)*/
    $boolean = true;
    echo '<br><br>', var_dump($boolean);

    /* 5. Arreglos (array): Almacenar una colección de datos*/
    $array = [];
    echo '<br><br>', var_dump($array);

    /* 6. Objetos (object): Almacenar instancias de clase*/
    /* 7. Recursos (resource): Almacenar referencias a recursos externos (Base de Datos - Archivos Abiertos)*/
    /* 8. Nulos (null): Variable sin valor o sin definir.*/
?>

<?php
    echo "<br><br> ------------------------------"
?>

<?php
    //Numeros y Operadores

    // 1. Operador Aritmético
    // (+ = Suma)
    // (- = Resta)
    // (* = Multiplicación)
    // (/ = División)
    // (% = Módulo)
    // (** = Exponenciación)

    // 2. Operador de Asignación
    // (= Igual a)

    // 3. Operador de Arreglos
    // (+ = Unión)
    // (== = Igualdad)
    // (=== = Identidad)
    // (!= = Desigualdad)
    // (<> = Desigualdad) Ambas Desigualdades significan lo mismo, solo que el <> es derivado de otros lenguajes (SQL).
    // (!== = No identidad)

    // 4. Operador Bitwise
    // (& = y)
    // (^ = xor)
    // (| = o)
    // (<< = Desplazamiento Izquierdo)
    // (>> = Desplazamiento Derecho)

    // 5. Operadores de Comparacion
    // (Igual ==)
    // (Identico ===)
    // (Desigualdad !=)
    // (No identico !==)
    // (Desigualdad <>)
    // (Menor que <)
    // (Mayor que >)
    // (Menor o igual <=)
    // (Mayor o igual >=)
    /*  (Nave espacial <=> )   Este operador realiza una comparacion entre dos valores y devuelve:
        (-1) Si el valor de la izquierda es menor que el de la derecha
        (0) Si son iguales
        (1) Si el valor de la izquierda es mayor que el de la derecha
    */

    // 6. Operador de Ejecución
    // (`` = comillas invertidas)

    // 7. Operador de Control de Errores
    // (@ = arroba)

    // 8. Operador de Incremento
    // (PreIncremento = ++$a)
    // (PostIncremento = $a++)
    // (PreDecremento = --$a)
    // (PostDecremento = $a--)

    // 9. Operadores Logicos (Sirven para el if)
    // (And = &&)
    // (Or = ||)
    // (Not = !)
    // (And = and)
    // (Xor = xor)
    // (Or = or)

    $numero1 = 20;
    $numero2 = 30;
    $numero3 = 30;
    $numero4 = "30";

    echo "<br><br>";

    var_dump($numero1 > $numero2);
    echo "<br><br>";
    
    var_dump($numero1 < $numero2);
    echo "<br><br>";

    var_dump($numero1 >= $numero2);
    echo "<br><br>";

    var_dump($numero1 <= $numero2);
    echo "<br><br>";

    var_dump($numero2 == $numero3);
    echo "<br><br>";

    var_dump($numero2 == $numero4);
    echo "<br><br>";

    var_dump($numero2 === $numero4);
    echo "<br><br>";

    // -1 Si Izquierda es Menor,
    // 0 Si es Igual, 
    // +1 Si Izquiera es Mayor

    var_dump($numero1 <=> $numero2);
    echo "<br><br>";

    var_dump($numero2 <=> $numero3);
    echo "<br><br>";

    var_dump($numero2 <=> $numero1);
?>

<?php
    echo "<br><br> ------------------------------"
?>

<?php include
    $nombreCliente = "Campers CampusLands";

    // Conocer extension de un string
    echo "<br><br>";
    echo strlen($nombreCliente);
    echo "<br><br>";
    var_dump($nombreCliente);
    echo "<br><br>";

    // Eliminar espacios en blanco
    $texto = trim($nombreCliente);
    echo strlen($texto);
    echo "<br><br>";

    // Convertirlo en Mayusculas
    echo strtoupper($nombreCliente);
    echo "<br><br>";

    // Convertirlo en Minisculas
    echo strtolower($nombreCliente);
    echo "<br><br>";

    $email1 = "correo@correo.com";
    $email2 = "Correo@correo.com";

    var_dump(strtolower($email1) === strtolower($email2));
    echo "<br><br>";

    echo str_replace('Juan', 'J', $nombreCliente);

    // Revisar si un String existe o no
    echo strpos($nombreCliente, 'Pedro');

    $tipoCliente = "Premium - Empresarial";

    echo "<br><br>";

    echo "El Cliente " . $nombreCliente . " es " . $tipoCliente;

    echo "<br><br>";

    echo "El Cliente {$nombreCliente} es {$tipoCliente}";
?>  

<?php
    echo "<br><br> ------------------------------"
?>

<?php
    $miArreglo = array("valor1", "valor2", "valor3");

    echo "<br><br>";

    echo $miArreglo[1]
?>

<?php
    echo "<br><br> ------------------------------"
?>

<?php
    $carrito = ["Tablet", "Television", "Computadora"];

    // Util para ver los contenidos de un Array
    echo "<pre>";
    var_dump($carrito);
    echo "</pre>";

    // Aceder a un elemento del Array
    echo $carrito[1];

    echo "<br>";

    // Añade un elemento en el indice 3 del arreglo
    $carrito[3] = "Nevera";

    // Añadir un elemento nuevo al final...
    array_push($carrito, "Audifonos");

    // Añadir al inicio 
    array_unshift($carrito, "Microondas");

    // Util para ver los contenidos de un Array
    echo "<pre>";
    var_dump($carrito);
    echo "</pre>";

    $clientes = array("Cliente 1", "Cliente 2", "Cliente 3");
    echo "<pre>";
    var_dump($carrito);
    echo "</pre>";

    echo $clientes[1];
?>

<?php
    echo "<br><br> ------------------------------"
?>

<?php
    $miArrayAsociativo = array(
        "clave1" => "valor1",
        "clave2" => "valor2",
        "clave3" => "valor3"
    );

    echo "<br><br>" . $miArrayAsociativo["clave1"]; // Imprime "valor1"
    echo "<br><br>" . $miArrayAsociativo["clave2"]; // Imprime "valor2"
    echo "<br><br>" . $miArrayAsociativo["clave3"]; // Imprime "valor3"

    foreach ($miArrayAsociativo as $clave => $valor){
        echo "<br><br><strong>Clave:</strong> " . $clave . ", <strong>Valor:</strong> " . $valor;
    }
?>

<?php
    echo "<br><br> ------------------------------ <br><br>"
?>

<?php
    $cliente = [
        "nombre" => "Juan",
        "saldo" => 200,
        "informacion" => [
            "tipo" => "Premium",
            "disponible" => 100
        ]
    ];

    echo "<pre>";
    var_dump($cliente);
    echo "</pre>";

    // echo "<br>" . $cliente["nombre"];
    // echo "<br><br>" . $cliente["informacion"]["disponible"]; 

    $cliente["codigo"] = 1096382664;

    echo "<pre>";
    var_dump($cliente);
    echo "</pre>";
?>

<?php
    echo "<br> ------------------------------ <br><br>"
?>

<?php
    // in_array - buscar elementos en un arreglo 
    $carrito = ['Tablet', 'Computadora', 'Television'];

    var_dump( in_array('Tablet', $carrito));
    var_dump( in_array('Audifonos', $carrito));

    // Ordenar elementos de un arreglo
    $numeros = array(1, 3, 4, 5, 2);

    sort($numeros); // De Menor a Mayor
    echo "<pre>";
    var_dump($numeros);
    echo "</pre>";

    rsort($numeros); // De Mayor a Menor
    echo "<pre>";
    var_dump($numeros);
    echo "</pre>";

    // Ordenar Arreglo Asociativo
    $cliente = array(
        'saldo' => 200, 
        'tipo' => 'Premium',
        'nombre' => 'Juan'
    );

    echo "<pre>";
    var_dump($cliente);
    echo "</pre>";

    asort($cliente); // Ordena por valores (Orden Alfabetico)
    echo "<pre>";
    var_dump($cliente);
    echo "</pre>";

    arsort($cliente); // Ordena por valores (Z primero)
    echo "<pre>";
    var_dump($cliente);
    echo "</pre>";

    ksort($cliente); // Ordena por llaves (Orden Alfabetico)
    echo "<pre>";
    var_dump($cliente);
    echo "</pre>";

    krsort($cliente); // Ordena por llaves (Z primero)
    echo "<pre>";
    var_dump($cliente);
    echo "</pre>";
?>

<?php
    echo "<br> ------------------------------ "
?>

<?php
    $miVariable = "Hola";
    if (isset($miVariable)){
        echo "<br><br> La variable esta definida y tiene un valor";
    } else {
        echo "<br><br> La variable no esta definida o no tiene un valor";
    }

    $MiVariable = "";
    if (empty($MiVariable)){
        echo "<br><br> La variable esta vacia o no tiene esta definida";
    } else {
        echo "<br><br> La variable tiene un valor";
    }
?>

<?php
    echo "<br><br> ------------------------------ "
?>

<?php
    $clientes = [];
    $clientes2 = array();
    $clientes3 = array('Pedro', 'Juan', 'Karen');
    $cliente = [
        'nombre' => 'Juan',
        'saldo' => 200
    ];

    // Empty - Revisa si un arreglo esta vacio
    echo "<br><br>";
    var_dump(empty($clientes));

    echo "<br><br>";
    var_dump(empty($clientes2));

    echo "<br><br>";
    var_dump(empty($clientes3));

    // Isset - Revisar si un arreglo esta creado o una propiedad esta definida
    echo "<br><br>";
    var_dump(isset($clientes4));

    echo "<br><br>";
    var_dump(isset($clientes3));

    echo "<br><br>";
    var_dump(isset($clientes2));

    echo "<br><br>";
    var_dump(isset($clientes));

    // Isset - Permite revisar si una propiedad de un arreglo asociativo, existe!
    echo "<br><br>";
    var_dump(isset($clientes['nombre']));

    echo "<br><br>";
    var_dump(isset($clientes['codigo']));
?>

<?php
    echo "<br><br> ------------------------------ "
?>