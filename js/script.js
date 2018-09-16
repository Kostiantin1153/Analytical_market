function mobiopenclose(){document.getElementById("mobileMenujs").onclick = function() {
   if (document.getElementsByClassName('mobile_nav')[0].style.display=="none") {
   document.getElementsByClassName('mobile_nav')[0].style.display="block";}
   else {document.getElementsByClassName('mobile_nav')[0].style.display="none";}
}
} // открытие/закрытие бургера это просто =)))


window.onscroll = function sc() {
     var nav = document.getElementById('nav');

     if(window.pageYOffset > 100){

     nav.style.position = "fixed";
     nav.style.top = 0;
     nav.style.width = '80%';
          
     }else{
      // nav.style.position = "absolute";
     nav.style.position = 'relative'; //fixed
     nav.style.top = 100;
     nav.style.width = '100%';
    }
} 
