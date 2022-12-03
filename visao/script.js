$('.btnAbre').click(function() {
    $('.menuLateral').toggleClass('mostra');
});

$('.btnFecha').click(function() {
    $('.menuLateral').toggleClass('mostra');
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

$('.notinha').click(function() {
    $('.menuLateral ul .itensNotinha').toggleClass('mostra');
});

$('.notinha').mouseover(function() {
    $('.menuLateral ul .setaNotinha').toggleClass('gira');
});

$('.notinha').mouseout(function() {
    $('.menuLateral ul .setaNotinha').toggleClass('gira');
});

$('.estoque').click(function() {
    $('.menuLateral ul .itensEstoque').toggleClass('mostra');
});

$('.estoque').mouseover(function() {
    $('.menuLateral ul .setaEstoque').toggleClass('gira');
});

$('.estoque').mouseout(function() {
    $('.menuLateral ul .setaEstoque').toggleClass('gira');
});

$('.produto').click(function() {
    $('.menuLateral ul .itensProduto').toggleClass('mostra');
});

$('.produto').mouseover(function() {
    $('.menuLateral ul .setaProduto').toggleClass('gira');
});

$('.produto').mouseout(function() {
    $('.menuLateral ul .setaProduto').toggleClass('gira');
});

$('.vendasDiarias').click(function() {
    $('.menuLateral ul .itensVendasDiarias').toggleClass('mostra');
});

$('.vendasDiarias').mouseover(function() {
    $('.menuLateral ul .setaVendasDiarias').toggleClass('gira');
});

$('.vendasDiarias').mouseout(function() {
    $('.menuLateral ul .setaVendasDiarias').toggleClass('gira');
});

$('.vendaAVista').click(function() {
    $('.menuLateral ul .itensVendaAVista').toggleClass('mostra');
});

$('.vendaAVista').mouseover(function() {
    $('.menuLateral ul .setaVendaAVista').toggleClass('gira');
});

$('.vendaAVista').mouseout(function() {
    $('.menuLateral ul .setaVendaAVista').toggleClass('gira');
});

$('.vendaAPrazo').click(function() {
    $('.menuLateral ul .itensVendaAPrazo').toggleClass('mostra');
});

$('.vendaAPrazo').mouseover(function() {
    $('.menuLateral ul .setaVendaAPrazo').toggleClass('gira');
});

$('.vendaAPrazo').mouseout(function() {
    $('.menuLateral ul .setaVendaAPrazo').toggleClass('gira');
});

const $menuLateral = $('.menuLateral');
$(document).mouseup(e => {
    if (!$menuLateral.is(e.target) && $menuLateral.has(e.target).length === 0){
        $menuLateral.removeClass('mostra');
    }
});