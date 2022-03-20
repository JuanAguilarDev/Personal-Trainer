'use stric'

//IMC 
var buttonM = document.getElementById('metrico');
var buttonI = document.getElementById('ingles');
var resultado = document.getElementById('resultado');
var first = document.querySelector('#first');
var diet = document.querySelector('.dieta');
buttonM.addEventListener('click', () => {
    var kilos = Number(document.getElementById('kg').value);
    var centimetros = Number(document.getElementById('cm').value);
    var metros = centimetros / 100;
    if (centimetros != 0 && centimetros != null) {
        resultado.value = (kilos / (Math.pow(metros, 2))).toFixed(1);
        $('#kg').val('');
        $('#cm').val('');

        if (resultado.value < 18.5) {
            first.innerHTML = `<img src="../img/ganarPeso.jpg" title="Healthy plan">`;
            diet.innerHTML = `<a download="download_plan" href="img/ganarPeso.jpg">download_plan</a>`;
        } else if (resultado.value >= 18.5 && resultado.value <= 24.9) {
            first.innerHTML = `<img src="../img/conservarPeso.jpg" title="Healthy plan">`;
            diet.innerHTML = `<a download="download_plan" href="img/conservarPeso.jpg">download_plan</a>`;
        } else if (resultado.value > 24.9) {
            first.innerHTML = `<img src="../img/bajarPeso.jpg" title="Healthy plan">`;
            diet.innerHTML = `<a download="download_plan" href="img/perderPeso.jpg">download_plan</a>`;
        }
    } else if (centimetros == 0) {
        alert('No se permite la divicion entre 0. ');
        $('#kg').val('');
        $('#cm').val('');
    }
});

buttonI.addEventListener('click', () => {
    var inches = Number(document.getElementById('in').value);
    var libras = Number(document.getElementById('lb').value);
    var lb_Kilo = libras * 0.453592;
    var in_metro = inches * 0.0254;
    if (inches != 0 && inches != null) {
        resultado.value = (lb_Kilo / (Math.pow(in_metro, 2))).toFixed(1);
        $('#in').val('');
        $('#lb').val('');

        if (resultado.value < 18.5) {
            first.innerHTML = `<img src="../img/ganarPeso.jpg" title="Healthy plan">`;
            diet.innerHTML = `<a download="download_plan" href="img/ganarPeso.jpg">download_plan</a>`;
        } else if (resultado.value >= 18.5 && resultado.value <= 24.9) {
            first.innerHTML = `<img src="../img/conservarPeso.jpg" title="Healthy plan">`;
            diet.innerHTML = `<a download="download_plan" href="img/conservarPeso.jpg">download_plan</a>`;
        } else if (resultado.value > 24.9) {
            first.innerHTML = `<img src="../img/perderPeso.jpg" title="Healthy plan">`;
            diet.innerHTML = `<a download="download_plan" href="img/perderPeso.jpg">download_plan</a>`;
        }



    } else if (inches == 0) {
        alert('No se permite la divicion entre 0. ');
        $('#in').val('');
        $('#lb').val('');
    }
});

$('.bxslider').bxSlider({
    mode: 'fade',
    captions: true,
    slideWidth: 600
});