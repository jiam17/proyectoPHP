<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Conversor de Unidades</title>
</head>
<body>
    <?php require '../index.php'; ?>

<section class="container p-5">
    <form class="mt-5" action="converter.php" method="post">
        <h2 class="text-primary-emphasis">Conversor de unidades de Masa a Tiempo</h2>
        <div class="mb-3">
            <label for="selectInicio" class="form-label">Seleccionar unidad de masa</label>
            <input type="number" name="value" required>
            <select name="fromUnit" required>
                <option value="seconds">Segundos</option>
                <option value="minutes">Minutos</option>
                <option value="hours">Horas</option>
                <option value="days">Días</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="TextInput" class="form-label">Seleccionar unidad de tiempo</label>
            <select name="toUnit" required>
                <option value="seconds">Segundos</option>
                <option value="minutes">Minutos</option>
                <option value="hours">Horas</option>
                <option value="days">Días</option>
            </select>
            <input type="submit" class="btn btn-success" value="Convertir">
        </div>
    </form>
</section>
</body>
</html>
