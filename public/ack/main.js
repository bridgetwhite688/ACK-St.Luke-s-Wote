// Get the button
let mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0; // For Safari
  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE, and Opera
}
document.querySelectorAll('.nav-item.dropdown').forEach(function (dropdown) {
  dropdown.addEventListener('mouseover', function () {
    let dropdownMenu = this.querySelector('.dropdown-menu');
    dropdownMenu.classList.add('show');
  });

  dropdown.addEventListener('mouseout', function () {
    let dropdownMenu = this.querySelector('.dropdown-menu');
    dropdownMenu.classList.remove('show');
  });
});
