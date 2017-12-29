$(document).ready(function(){
  //alert('working');
});
function toggleMenu(){
  document.getElementById('side-menu').style.width = '250px';
  document.getElementById('main').style.visibility ='hidden';

   }
   function closeSideMenu(){
     document.getElementById('side-menu').style.width = '0px';
     document.getElementById('main').style.visibility ='visible';
   }
