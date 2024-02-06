const sideLinks = document.querySelectorAll('.sidebar .side-menu li a:not(.logout)');
const mainSections = document.querySelectorAll('.content main section');

sideLinks.forEach((item, index) => {
    const li = item.parentElement;
    item.addEventListener('click', () => {
        // Remover a classe 'active' de todos os itens do menu
        sideLinks.forEach(i => {
            i.parentElement.classList.remove('active');
        });

        // Adicionar a classe 'active' ao item clicado
        li.classList.add('active');

        // Ocultar todas as seções
        mainSections.forEach(section => {
            section.style.display = 'none';
        });

        // Exibir a seção correspondente ao item clicado
        mainSections[index].style.display = 'block';
    });
});

const menuBar = document.querySelector('.content nav .bx.bx-menu');
const sideBar = document.querySelector('.sidebar');

menuBar.addEventListener('click', () => {
    sideBar.classList.toggle('close');
});

const searchBtn = document.querySelector('.content nav form .form-input button');
const searchBtnIcon = document.querySelector('.content nav form .form-input button .bx');
const searchForm = document.querySelector('.content nav form');

searchBtn.addEventListener('click', function (e) {
    if (window.innerWidth < 576) {
        e.preventDefault();
        searchForm.classList.toggle('show');
        if (searchForm.classList.contains('show')) {
            searchBtnIcon.classList.replace('bx-search', 'bx-x');
        } else {
            searchBtnIcon.classList.replace('bx-x', 'bx-search');
        }
    }
});

window.addEventListener('resize', () => {
    if (window.innerWidth < 768) {
        sideBar.classList.add('close');
    } else {
        sideBar.classList.remove('close');
    }
    if (window.innerWidth > 576) {
        searchBtnIcon.classList.replace('bx-x', 'bx-search');
        searchForm.classList.remove('show');
    }
});

const toggler = document.getElementById('theme-toggle');

toggler.addEventListener('change', function () {
    if (this.checked) {
        document.body.classList.add('dark');
    } else {
        document.body.classList.remove('dark');
    }
});
