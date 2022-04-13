//Get the button:
<button data-toggle="modal" onclick="floatButtonClicked()" data-target=".your-modal"></button>

function floatButtonClicked(){
    window.onscroll = function() {scrollFunction()};
//your code goes here//
if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }

};
function topFunction() {
    document.body.scrollTop = 0; // For Safari
    document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
  }
mybutton = document.getElementById("myBtn");
