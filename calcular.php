<!DOCTYPE html>
<html>
<head>
    <title>Calculadora de Conversiones</title>
</head>
<body>
    <h1>Calculadora de Conversiones</h1>
    {/**ejemplo */}
    <form method="post">
        <label for="kilometers">Kilómetros:</label>
        <input type="number" name="kilometers" id="kilometers" step="0.01">
        <input type="submit" name="convert_km_to_mi" value="Convertir a Millas">
        <br>
        <label for="miles">Millas:</label>
        <input type="number" name="miles" id="miles" step="0.01">
        <input type="submit" name="convert_mi_to_km" value="Convertir a Kilómetros">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        if (isset($_POST["convert_km_to_mi"])) {
            $kilometers = $_POST["kilometers"];
            $miles = $kilometers * 0.621371;
            echo "<p>$kilometers kilómetros son aproximadamente $miles millas.</p>";
        } elseif (isset($_POST["convert_mi_to_km"])) {
            $miles = $_POST["miles"];
            $kilometers = $miles / 0.621371;
            echo "<p>$miles millas son aproximadamente $kilometers kilómetros.</p>";
        }
    }
    ?>
</body>
</html>
