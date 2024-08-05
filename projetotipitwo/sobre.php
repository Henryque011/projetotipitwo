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
    </header>
    <main>
        <section class="site2">
                <article>
                    <div class="sobre">
                        <img id="img_visao" class="imagemSobre ativo" src="img/visao.png"
                            alt="Imagem ilustrativa sobre nossa perpectiva de futuro.">
                        <img id="img_valores" class="imagemSobre" src="img/valores.png"
                            alt="Imagem ilustrativa sobre nossos valores.">
                        <img id="img_missao" class="imagemSobre" src="img/missao.png"
                            alt="Imagem ilustrativa sobre nossa missão.">
                        <div>
                            <div class="botaosobre">
                                <button id="visao">Visão</button>
                                <button id="valores">Valores</button>
                                <button id="missao">Missão</button>
                            </div>
                            <div class="textSobre">
                                <div id="conteudoVisao" class="textoValores ativo">Queremos
                                    liderar
                                    a revolução da acessibilidade na web, sendo reconhecidos pela
                                    confiança de especialistas em desenvolvimento web acessível e
                                    promovendo uma cultura de inclusão digital.
                                </div>
                                <div id="conteudoValores" class="textoValores">A acessibilidade
                                    é o
                                    foco central das nossas atividades, desde o design até o
                                    desenvolvimento e testes finais, garantindo que nossos
                                    produtos sejam acessíveis a todos.
                                </div>
                                <div id="conteudoMissao" class="textoValores">O nosso objetivo é
                                    tornar a web mais acessível, oferecendo soluções digitais
                                    inovadoras para todos, sem distinção de habilidades ou
                                    deficiências.
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
            </section>
            <?php require_once('conteudo/acessibilidade.php')?>
            <div class="introsobre">
                <h2> &lt; UM POUCO NÓS&gt; </h2>
            </div>
            <div class="carrosel">
            <div class="cx"><img src="img/henryqueFoto.png" alt="Foto do desenvolvedor Henryque.">
                <h3>Henryque <br>
                    Desenvolvedor
                </h3>
                <h2> Desenvolvedor iniciante com foco em Front-end. Com experiência em HTML, CSS e frameworks, ele é
                    capaz de construir websites com design responsivo e oferecer uma experiência de usuário de alta
                    qualidade.</h2>
            </div>
            <div class="cx"><img src="img/ingridFoto.png" alt="Foto da desenvolvedora Ingrid.">
                <h3>Ingrid <br>
                    Desenvolvedora
                </h3>
                <h2> Desenvolvedor iniciante com foco em Front-end. Com experiência em HTML, CSS e frameworks, ele é
                    capaz de construir websites com design responsivo e oferecer uma experiência de usuário de alta
                    qualidade.</h2>
            </div>
            <div class="cx"><img src="img/ryanFoto.png" alt="Foto do desenvolvedor Ryan.">
                <h3>Ryan<br>
                    Desenvolvedor
                </h3>
                <h2> Desenvolvedor iniciante com foco em Front-end. Com experiência em HTML, CSS e frameworks, ele é
                    capaz de construir websites com design responsivo e oferecer uma experiência de usuário de alta
                    qualidade.</h2>
            </div>
            <div class="cx"><img src="img/camillyFoto.png" alt="Foto da desenvolvedora Camilly.">
                <h3>Camillly<br>
                    Desenvolvedora
                </h3>
                <h2> Desenvolvedor iniciante com foco em Front-end. Com experiência em HTML, CSS e frameworks, ele é
                    capaz de construir websites com design responsivo e oferecer uma experiência de usuário de alta
                    qualidade.</h2>
            </div>
            <div class="cx"><img src="img/victorFoto.png" alt="">
                <h3>Victor<br>
                    Desenvolvedor
                </h3>
                <h2> Desenvolvedor iniciante com foco em Front-end. Com experiência em HTML, CSS e frameworks, ele é
                    capaz de construir websites com design responsivo e oferecer uma experiência de usuário de alta
                    qualidade.</h2>
            </div>
        </div>
        <?php require_once('conteudo/scrool.php')?>
    </main>
    <footer>
        <!-- rodape -->
        <?php require('conteudo/rodape.php')?>
    </footer>
    <script src="https://kit.fontawesome.com/bedd2811b0.js" crossorigin="anonymous"></script>
    <!-- jquery - script para trabalhar com animações -->
    <script type="text/javascript" src="//code.jquery.com/jquery-3.7.1.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-3.4.0.min.js"></script>

    <script type="text/javascript" src="js/slick.min.js"></script>
    <!-- animação -->
    <script src="js/animacao.js"></script>
</body>
