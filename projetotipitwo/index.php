<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- compatibilidade com edge -->
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> TipiTwo </title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="shortcut icon" href="img/programacao.png" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="css/slick.css" />
    <link rel="stylesheet" type="text/css" href="css/slick-theme.css" />
    <script src="js/script.js" defer></script>
    <script>
        const changeThemeToDark = () => {
            document.documentElement.setAttribute("data-theme", "dark");
            localStorage.setItem("data-theme", "dark");
        }
        const changeThemeToLight = () => {
            document.documentElement.setAttribute("data-theme", "light");
            localStorage.setItem("data-theme", 'light');
        }
        let theme = localStorage.getItem('data-theme');
        if (theme == 'dark') changeThemeToDark();
    </script>
</head>
<body>
    <header>
        <!-- nav topo -->
        <?php require_once('conteudo/topo.php')?>
        <div class="padi">
        </div>
        <!-- banner1 -->
        <?php require_once('conteudo/banner1.php')?>
    </header>
    <main>
        <!-- home -->
        <!-- acessibilidade + introdução da sessão -->
        <?php require_once('conteudo/acessibilidade.php')?>
        <div class="introsobre">
            <h2> &lt; UM POUCO SOBRE &gt; </h2>
        </div>
        <!-- um pouco sobre nos -->
        <?php require_once('conteudo/umpoucosobre.php')?>
        <!-- scroll -->
        <?php require_once('conteudo/scrool.php')?>
        <!-- perguntas.php -->
        <?php require_once('conteudo/perguntas.php')?>
        <!-- sobre -->
    </main>
    <footer>
        <!-- rodape -->
        <?php require_once('conteudo/rodape.php') ?>
    </footer>
    <script src="https://kit.fontawesome.com/bedd2811b0.js" crossorigin="anonymous"></script>
    <!-- jquery - script para trabalhar com animações -->
    <script type="text/javascript" src="//code.jquery.com/jquery-3.7.1.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-3.4.0.min.js"></script>
    <script type="text/javascript" src="js/slick.min.js"></script>
    <!-- animação -->
    <script src="js/animacao.js"></script>
</body>
