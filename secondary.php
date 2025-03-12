<?php
    if(!empty($_POST['nome'])){
        $name = $_POST['nome'];
        var_dump($name);
        echo $name;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Seu nome é <?php echo $name; ?> e você esta aprendendo PHP</h1>
    <br>
    <?php echo "<h1>Seu nome é ".$name." e você esta aprendendo PHP</h1>"; ?>
</body>
</html>