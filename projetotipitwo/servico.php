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
    </header>     
    <section class="site3">
        <div class="txtbanner">
            <div class="animate__animated animate__slideInLeft">
                <h2>SERVIÇOS</h2>
                <div class="pos3">
                    <h3 class="dif2"> +</h3>
                    <h3 class="dif2">SOLUÇÕES</h3>
                </div>
            </div>
            <div class="animate__animated animate__zoomIn">
                <h2> A BASE SOLIDA</h2>
                <div class="pos4">
                    <h2> DO SEU </h2>
                    <h3 class="dif3"> SUCESSO</h3>
                </div>
            </div>
        </div>
        <article class="centro">
            <nav>
                <div class="acessibilidade">
                    <button i class="fa-solid fa-eye-low-vision"></i></button>
                    <button i class="fa-solid fa-hands"></i> </button>
                </div>
            </nav>
            <div class="introsobre">
                <h2> &lt; SERVIÇOS &gt; </h2>
            </div>
        </article>
        <main>
            <section class="conteudoservico">
                <div class="cxservico">
                    <div class="serv1">
                        <img src="img/web-browser.png" alt="Icone ilustrativo de um site.">
                        <p> Oferecemos soluções personalizadas para criar sites que impressionam e funcionam em qualquer
                            dispositivo. Desde o design responsivo até a otimização SEO, garantimos uma experiência
                            excepcional para seus visitantes.</p>
                        <br>
                        <img src="img/ecoomerce.png" alt="Icone ilustrativo de um e-commerce.">
                        <p> nosso serviço de criação de sites de e-commerce, você pode transformar sua ideia em uma loja
                            virtual próspera em questão de dias. Imagine uma plataforma online personalizada, projetada
                            para destacar seus produtos, atrair clientes e impulsionar suas vendas. </p>
                    </div>
                    <div class="serv1">
                        <img src="img/marketingdigital.png" alt="Icone ilustrativo de marketingdigital.">
                        <p> nossos serviços de marketing digital, você pode alcançar novos patamares de sucesso. Imagine
                            sua marca sendo destacada em todos os cantos da internet, cativando e convertendo clientes
                            em potencial em defensores entusiasmados da sua marca.
                            Com uma estratégia personalizada, vamos mergulhar fundo no mundo digital, utilizando
                            ferramentas poderosas.</p>
                        <br>
                        <img src="img/ui-ux.png"
                            alt="Icone ilustrativo sobre interface de usuárioe e experiênciade usuário.">
                        <p> Com nossos serviços de UX e UI, sua plataforma digital se transformará em uma experiência
                            impecável para seus usuários. Criamos interfaces intuitivas e visualmente atraentes,
                            garantindo que seus clientes tenham uma experiência de navegação fluida em todos os
                            dispositivos.</p>
                    </div>
                    <div class="serv1">
                        <img src="img/check.png" alt="Icone ilustrativo check.">
                        <p> Ao desenvolver o site, seguimos todas as diretrizes e critérios impostos pelo Google para
                            que sua empresa apareça na maior rede de pesquisa.</p>
                        <br>
                        <img src="img/accessibility.png" alt="Icone ilustrativa de acessibilidade.">
                        <p> Com nossa oferta de acessibilidade digital, estamos comprometidos em tornar sua plataforma
                            online inclusiva para todos. Imagine alcançar uma audiência mais ampla, garantindo que cada
                            usuário, independentemente de suas habilidades ou necessidades especiais, possa acessar e
                            desfrutar plenamente do seu conteúdo.</p>
                    </div>
                </div>
            </section>
            <div class="cont">
                <div class="direcionamento">
                    <!--  será ativado quando a pagina portifolio estiver pronta <button> <a href="#">PORTFÓLIO </a></button> -->
                    <button> <a href="#">SAIBA MAIS </a></button>
                </div>
            </div>
            
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