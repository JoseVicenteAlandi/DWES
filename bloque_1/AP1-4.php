<?php
class Figuras
{
    private $area;


    public function calcularAreaTriangulo($base, $altura){
       $area= $base+$altura/2;
        echo"el area del triangulo es $area";
    }

    public function calcularAreaRectangulo($base, $altura){
        $area= $base*$altura;
        echo"el area del rectangulo es $area";
    }

    public function calcularAreaCirculo($radio){
        $area = 3.14*$radio*$radio;
        echo"el area del circulo es $area";
    }


}
?>



<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Áreas de Figuras</title>
</head>
<body>
<h2>Calculadora de Áreas</h2>
<form method="post">
    <label>Figura:</label><br>
    <input type="radio" name="tipo" value="triangulo"> Triángulo<br>
    <input type="radio" name="tipo" value="rectangulo"> Rectángulo<br>
    <input type="radio" name="tipo" value="circulo"> Círculo<br><br>

    Base: <input type="number" name="base"><br>
    Altura: <input type="number" name="altura"><br>
    Radio: <input type="number" name="radio"><br><br>

    <input type="submit" value="Calcular">
</form>
</body>
</html>


<?php
$resultado = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $figura = new Figuras();

    if ($_POST["tipo"] == "triangulo") {
        $figura->calcularAreaTriangulo($_POST["base"], $_POST["altura"]);
    }
    if ($_POST["tipo"] == "rectangulo") {
        $figura->calcularAreaRectangulo($_POST["base"], $_POST["altura"]);
    }
    if ($_POST["tipo"] == "circulo") {
        $figura->calcularAreaCirculo($_POST["radio"]);
    }
}
?>