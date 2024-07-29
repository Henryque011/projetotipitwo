// Pega o checkbox
const botaoDark = document.getElementById('toggle-dark');

// Verifica se tem no localStorage seleção do dark theme
if (localStorage.getItem('data-theme') == 'dark') {
    botaoDark.checked = true;
}

// Liga a função ao checkbox
botaoDark.addEventListener('change', () => {
    let theme = localStorage.getItem('data-theme'); // Retrieve saved them from local storage
    if (!botaoDark.checked){
        changeThemeToLight()
    }else{
        changeThemeToDark()
    }
});


document.addEventListener('DOMContentLoaded', function () {
    const visao = document.getElementById('visao');
    const valores = document.getElementById('valores');
    const missao = document.getElementById('missao');
    const conteudoVisao = document.getElementById('conteudoVisao');
    const conteudoValores = document.getElementById('conteudoValores');
    const conteudoMissao = document.getElementById('conteudoMissao');
 
    visao.addEventListener('click', function () {
        conteudoVisao.classList.add('ativo');
        conteudoValores.classList.remove('ativo');
        conteudoMissao.classList.remove('ativo');
    });
 
    valores.addEventListener('click', function () {
        conteudoVisao.classList.remove('ativo');
        conteudoValores.classList.add('ativo');
        conteudoMissao.classList.remove('ativo');
    });
 
    missao.addEventListener('click', function () {
        conteudoVisao.classList.remove('ativo');
        conteudoValores.classList.remove('ativo');
        conteudoMissao.classList.add('ativo');
    });
});
 
// parte da img juntamente com os botões acima
 
document.addEventListener('DOMContentLoaded', function () {
    const visao = document.getElementById('visao');
    const valores = document.getElementById('valores');
    const missao = document.getElementById('missao');
    const img_visao = document.getElementById('img_visao');
    const img_valores = document.getElementById('img_valores');
    const img_missao = document.getElementById('img_missao');
 
    visao.addEventListener('click', function () {
        img_visao .classList.add('ativo');
        img_valores.classList.remove('ativo');
        img_missao .classList.remove('ativo');
    });
 
    valores.addEventListener('click', function () {
        img_visao.classList.remove('ativo');
        img_valores.classList.add('ativo');
        img_missao.classList.remove('ativo');
    });
 
    missao.addEventListener('click', function () {
        img_visao.classList.remove('ativo');
        img_valores.classList.remove('ativo');
        img_missao.classList.add('ativo');
    });
});


const btnScrollTop = document.querySelector(".btn-scroll-top");

window.addEventListener("scroll", () => {
  if (window.scrollY > 100) {
    btnScrollTop.classList.add("show-btn-scroll-top");
  } else {
    btnScrollTop.classList.remove("show-btn-scroll-top");
  }
});

btnScrollTop.addEventListener("click", () => {
  window.scrollTo({
    top: 0,
    behavior: "smooth",
  });
});
