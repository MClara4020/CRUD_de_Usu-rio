<?php
    $servername = "localhost"; 
    $username = "Xampp";
    $password = " ";
    $usuarion = []; 
    // Usuarion do banco de dados
    $conn = new mysqli($servername, $username, $password);
    $sql = "SELECT * FROM usuarios";
    $result = $conn->query($sql);
    $conn->close();

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" src="/css/global.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>CRUD de Usuário</title>
</head>
<body>
    <p>ola</p>

    <?php
    
    // Código em loop para mostrar cada usuário na tela    
    ?>
</body>
</html>