<?php

function mostra_bloco_paragrafo($qnt){
    $bloco_paragrafo ="
    <div class='classe'>
        <p>";
    for ($i=0; $i < $qnt; $i++) { 
        $bloco_paragrafo .= "loremLorem ipsum dolor sit amet consectetur, adipisicing elit. Quibusdam minima consectetur ullam distinctio quod voluptas modi recusandae perspiciatis deleniti. Possimus ipsum modi tempore voluptate atque consequatur sequi aliquid ad neque!";
    }
    $bloco_paragrafo .= "   </p.
    </div>
    ";
    return $bloco_paragrafo;
}
?>

<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class=main>
        <form action="secondary.php" method="post">
            <input type="text" name="nome" placeholder="Insira seu nome" />
            <input type="submit" value="Enviar" />
        </form>
    </div>
    <?php echo mostra_bloco_paragrafo(10); ?>
</body>
</html>
