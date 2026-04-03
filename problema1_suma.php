<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="styles.css">
    <title>Suma</title>
</head>
<body>

<h2>Calculadora de Suma</h2>

<form method="POST">
    Número 1: <input type="number" name="num1" required><br><br>
    Número 2: <input type="number" name="num2" required><br><br>
    <input type="submit" value="Sumar">
</form>

<?php
if ($_POST) {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];

    $resultado = $num1 + $num2;

    echo "<h3>Resultado: $resultado</h3>";
}
?>

</body>
</html>