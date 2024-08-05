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
    <section class="site4">  
        <div class="txtbanner">
            <div class="animate__animated animate__slideInLeft">
                <h2>COMUNICAÇÃO</h2>
                <div class="pos3">
                    <h3 class="dif2"> +</h3>
                    <h3 class="dif2">SUPORTE</h3>
                </div>
            </div>
            <div class="animate__animated animate__zoomIn">
                <h2> TRANSMITINDO</h2>
                <div class="pos5">
                    <h2 class="dif4"> VALORES</h2>
                    <h2 class=""> CONECTANDO</h2>
                    <h3 class="dif4"> proposítos </h3>
                </div>
            </div>
        </div>
    </section>
    <article class="centro">
        <nav>
            <div class="acessibilidade">
                <button i class="fa-solid fa-eye-low-vision"></i></button>
                <button i class="fa-solid fa-hands"></i> </button>
            </div>
        </nav>
        <div class="introsobre">
            <h2> &lt; Fale conosco &gt; </h2>
        </div>    
    </article>
    </section>    
    <main>
        <article class="contato">
            <form action="email.php" method="post">
                <div class="cxcontato">
                    
                    <div>   
                        <label>Nome&#58;</label>
                        <input type="text" name="nome" placeholder="Digite seu nome completo" required><br>
                    </div>
                    <div>
                        <label>Telefone&#58;</label>
                        <input type="text" name="tel" placeholder="Digite seu telefone" required><br>
                    </div>
                    <div>
                        <label>E-mail&#58;</label>
                        <input type="text" name="email" placeholder="Digite seu e-mail" required resize><br>
                    </div>
                    <div>
                        <label> Mensagem</label><br>
                        <textarea name="mensagem" cols="50" rows="6" placeholder="Digite sua mensagem"
                            required></textarea><br>
                        <div>
                            <input type="submit" value="ENVIAR">
                            <input type="reset" value="LIMPAR">
                        </div>
                    </div>
                </div>
            </form>
        </article>
    </main>
    <?php require('conteudo/scrool.php')?>
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