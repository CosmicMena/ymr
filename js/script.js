document.addEventListener('DOMContentLoaded', function() {
    var produtoPopUp = document.querySelector('.produto-card-pop-up');

    var sairDiv = document.querySelector('.sair');
    var sairDiv1 = document.querySelector('.fechar');

    if (sairDiv && produtoPopUp) {
        sairDiv.addEventListener('click', function() {
            produtoPopUp.style.display = 'none';
        });
    }
    if (sairDiv1 && produtoPopUp) {
        sairDiv1.addEventListener('click', function() {
            produtoPopUp.style.display = 'none';
        });
    }

    function togglePopUp() {
        if (produtoPopUp) {
            var displayValue = window.getComputedStyle(produtoPopUp).getPropertyValue('display');
            produtoPopUp.style.display = (displayValue === 'none') ? 'flex' : 'none';
        }
    }
});