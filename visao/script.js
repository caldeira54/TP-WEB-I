$('.nordeste').click(function() {
    $('.menuLateral ul .itensNordeste').toggleClass('mostra');
});

$('.sudeste').click(function() {
    $('.menuLateral ul .itensSudeste').toggleClass('mostra');
});

$('.btnAbre').click(function() {
    $('.menuLateral').toggleClass('mostra');
});

$('.btnFecha').click(function() {
    $('.menuLateral').toggleClass('mostra');
});

$('.nordeste').mouseover(function() {
    $('.menuLateral ul .seta1').toggleClass('gira');
});

$('.nordeste').mouseout(function() {
    $('.menuLateral ul .seta1').toggleClass('gira');
});

$('.sudeste').mouseover(function() {
    $('.menuLateral ul .seta2').toggleClass('gira');
});

$('.sudeste').mouseout(function() {
    $('.menuLateral ul .seta2').toggleClass('gira');
});

$('.fornecedor').click(function() {
    $('.menuLateral ul .itensFornecedor').toggleClass('mostra');
});

$('.fornecedor').mouseover(function() {
    $('.menuLateral ul .setaFornecedor').toggleClass('gira');
});

$('.fornecedor').mouseout(function() {
    $('.menuLateral ul .setaFornecedor').toggleClass('gira');
});

const $menuLateral = $('.menuLateral');
$(document).mouseup(e => {
    if (!$menuLateral.is(e.target) && $menuLateral.has(e.target).length === 0){
        $menuLateral.removeClass('mostra');
    }
});