<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>simple app</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>

<body>
    <h1>Users Dashboard page!</h1>
    <style type="text/css">

    </style>
    <table class="table">
        <thead>
            <tr>
                <th class="tg-0pky">ID</th>
                <th class="tg-0pky">Codigo</th>
                <th class="tg-0lax">Nombre</th>
                <th class="tg-0lax">Contraseña</th>
                <th class="tg-0lax">Fecha</th>
                <th class="tg-0lax">Activo</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($users as $index => $user) {
                echo "<tr>";
                echo "<td class='tg-0lax'>" . $user["ID"] . "</td>";
                echo "<td class='tg-0lax'>" . $user["Codigo"] . "</td>";
                echo "<td class='tg-0lax'>" . $user["Nombre"] . "</td>";
                echo "<td class='tg-0lax'>" . $user["Contraseña"] . "</td>";
                echo "<td class='tg-0lax'>" . $user["Fecha"] . "</td>";
                echo "<td class='tg-0lax'>" . $user["Activo"] . "</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
    <a id="home" class="btn btn-secondary" href="./">Back</a>
</body>

</html>