const modal = document.getElementById('modal');

document.addEventListener("DOMContentLoaded", function(){
  // add padding top to show content behind navbar
  navbar_height = document.querySelector('.navbar.fixed-top').offsetHeight;
  document.body.style.paddingTop = navbar_height + 'px';
}); 

function modalClose(){
  modal.classList.toggle("d-none");
} 