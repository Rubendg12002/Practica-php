<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="styles.css">
    <title>Multiplicación</title>
</head>
<body>

<h2>Multiplicación con Ciclo</h2>

<form method="POST">
    Número: <input type="number" name="num" required><br><br>
    <input type="submit" value="Mostrar tabla">
</form>

<?php
if ($_POST) {
    $num = $_POST['num'];

    echo "<h3>Tabla de multiplicar del $num:</h3>";

    for ($i = 1; $i <= 10; $i++) {
        $resultado = $num * $i;
        echo "$num x $i = $resultado <br>";
    }
}
?>

</body>
</html>