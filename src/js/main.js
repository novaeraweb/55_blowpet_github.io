// Menu responsivo
$().ready(function() {
    $('.topo i').click(function(){
      if ($('#container').hasClass('menu-on')) {
          $('#container').removeClass('menu-on');
        }   
         else {$('#container').addClass('menu-on');}
    });
});
//FADE AUTO
$(function(){
    setTimeout(function() {
    $('#autofade').fadeOut('slow');}, 7000);
     });
// #SLIDER
$(document).ready(function() {
  $("#content-slider").lightSlider({
      loop:true,
      keyPress:true
  });
  $('#image-gallery').lightSlider({
      gallery:true,
      item:1,
      thumbItem:9,
      slideMargin: 0,
      speed:500,
      auto:true,
      loop:true,
      onSliderLoad: function() {
          $('#image-gallery').removeClass('cS-hidden');
      }  
  });
});
function MascaraTelefone(Telefone){  
        if(mascaraInteiro(Telefone)==false){
                event.returnValue = false;
        }       
        return formataCampo(Telefone, '(00)0.0000.0000', event);
}
//adiciona mascara ao telefone
function MascaraTelefoneResid(tel){  
        if(mascaraInteiro(tel)==false){
                event.returnValue = false;
        }       
        return formataCampo(tel, '(00)0000.0000', event);
}

//valida telefone
function ValidaTelefone(tel){
        exp = /\(\d{2}\)\ \d{1}\.\d{4}\.\d{4}/
        if(!exp.test(tel.value))
                alert('Numero de Telefone Invalido!');
}
//valida numero inteiro com mascara
function mascaraInteiro(){
        if (event.keyCode < 48 || event.keyCode > 57){
                event.returnValue = false;
                return false;
        }
        return true;
}
//formata de forma generica os campos
function formataCampo(campo, Mascara, evento) { 
        var boleanoMascara; 
        
        var Digitato = evento.keyCode;
        exp = /\-|\.|\/|\(|\)| /g
        campoSoNumeros = campo.value.toString().replace( exp, "" ); 
   
        var posicaoCampo = 0;    
        var NovoValorCampo="";
        var TamanhoMascara = campoSoNumeros.length;; 
        
        if (Digitato != 8) { // backspace 
                for(i=0; i<= TamanhoMascara; i++) { 
                        boleanoMascara  = ((Mascara.charAt(i) == "-") || (Mascara.charAt(i) == ".")
                                                                || (Mascara.charAt(i) == "/")) 
                        boleanoMascara  = boleanoMascara || ((Mascara.charAt(i) == "(") 
                                                                || (Mascara.charAt(i) == ")") || (Mascara.charAt(i) == " ")) 
                        if (boleanoMascara) { 
                                NovoValorCampo += Mascara.charAt(i); 
                                  TamanhoMascara++;
                        }else { 
                                NovoValorCampo += campoSoNumeros.charAt(posicaoCampo); 
                                posicaoCampo++; 
                          }              
                  }      
                campo.value = NovoValorCampo;
                  return true; 
        }else { 
                return true; 
        }
}// JavaScript Document

// Slider
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length} ;
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  x[slideIndex-1].style.display = "block";
}

// Slider automático

var slideIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > x.length) {slideIndex = 1}
  x[slideIndex-1].style.display = "block";
  setTimeout(carousel, 5000); // Change image every 5 seconds
}