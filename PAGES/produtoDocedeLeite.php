<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Bolo no Pote</title>
    <link rel="stylesheet" href="../CSS/embelezamento.css">
    <?php
    include("../FUNCTION/functions.php");
    ?>
</head>

<body>
    <header>
        <?=cabecalhoalternativo();?>
    </header>
    <div class="bloco">
        <img class="produto" src="../IMAGES/DocedeLeite.png" height="20%" width="20%">
        <h1>R$ 99,99</h1><br>
        <div class="descricao">
            <h2>Doce De Leite:</h2>
            <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer
                took a galley of type and scrambled it to make a type specimen book. It has survived not only five
                centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was
                popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more
                recently
                with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
        </div>
        <button id="botao" type="submit">Comprar</button>
    </div>

    <footer>
        <?=rodapealternativo();?>
    </footer>
</body>

</html>