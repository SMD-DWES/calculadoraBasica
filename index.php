<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Calculadora</title>
    </head>
    <body>
        <form action="#" method="post">
            Valor 1: 
            <input type="number" name="valor1" id="">
            Valor 2:
            <input type="number" name="valor2" id="">

            <select name="valores" id="">
                <option value="sumar">Sumar</option>
                <option value="restar">Restar</option>
                <option value="multiplicar">Multiplicar</option>
                <option value="dividir">Dividir</option>
            </select>

            <input type="submit" value="Enviar" name="enviar[]">

        </form>
    </body>
</html>

<?php
    //Autor: Sergio Matamoros Delgado
    //Fecha: 8-10-21
    //Licencia: AGPL V3

    //Importamos librerias
    include("calculadora.php");


    if(isset($_POST["enviar"])) {

        //Creo objeto y le paso de parametros los dos input del usuario.
        $calculadora = new Calculadora($_POST["valor1"],$_POST["valor2"]);
        $resultado = 0;

        //Si has elegido la opción suma o resta...
        //Si la opción elegida es algunas de las del select entra en la clase calculadora.
        if($_POST["valores"] == "sumar") {
            $resultado = $calculadora->suma();
        } else if($_POST["valores"] == "restar"){
            $resultado = $calculadora->resta();
        }
        else if($_POST["valores"] == "multiplicar"){
            $resultado = $calculadora->multiplica();
        }
        else if($_POST["valores"] == "dividir"){
            $resultado = $calculadora->divide();
        }
        echo "<br><br>Resultado: ". $resultado;
    }
?>