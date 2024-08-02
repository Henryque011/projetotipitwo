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
    </header>
    <main>
    <section class="site2">
        <div class="banner1">
            img
        </div>
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
    </main>
    <footer>
        <!-- rodape -->
        <?php require_once('conteudo/rodape.php')?>
    </footer>
