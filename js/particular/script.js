$.Geral = {};

$.Geral.events = function(){
  $(".side > i").click(function(){
    if($('.sidenav').hasClass('toggle-class')){
      $(".sidenav").removeClass('toggle-class');
      $(".sidenav").addClass('notoggle-class');
    }
    else{
      $(".sidenav").addClass('toggle-class');
      $(".sidenav").removeClass('notoggle-class');
    }
  });

  $('body').on('click', '.side li', function(ev){
    $('.content-elements > div').hide();
    $('.sidenav > li').removeClass("selected");
    if($(this).hasClass('home')){
      $('.home-body').show();
      $('.home').addClass('selected');
    }
    else if($(this).hasClass('vendas')){
      $('.vendas-body').show();
      $('.vendas').addClass('selected');
    }
    else if($(this).hasClass('clientes')){
      $('.clientes-body').show();
      $('.clientes').addClass('selected');
    }
    else if($(this).hasClass('produtos')){
      $('.produtos-body').show();
      $('.produtos').addClass('selected');
    }
    else if($(this).hasClass('clientes')){
      $('.clientes-body').show();
      $('.clientes').addClass('selected');
    }
    else if($(this).hasClass('caixa')){
      $('.caixa-body').show();
      $('.caixa').addClass('selected');
    }
    else if($(this).hasClass('suporte')){
      $('.suporte-body').show();
      $('.suporte').addClass('selected');
    }
  });
}

$(document).ready(function(){
  $.Geral.events();
});