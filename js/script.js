var modal1 = document.getElementById("myModal1");
var modal2 = document.getElementById("myModal2");
var modal3 = document.getElementById("myModal3");
var modal4 = document.getElementById("myModal4");

var btn1 = document.getElementById("openModal1Btn");
var btn2 = document.getElementById("openModal2Btn");
var btn3 = document.getElementById("openModal3Btn");
var btn4 = document.getElementById("openModal4Btn");

var closeModal1 = document.getElementById("closeModal1");
var closeModal2 = document.getElementById("closeModal2");
var closeModal3 = document.getElementById("closeModal3");
var closeModal4 = document.getElementById("closeModal4");

btn1.onclick = function() {
  modal1.style.display = "block";
}

btn2.onclick = function() {
  modal2.style.display = "block";
}

btn3.onclick = function() {
  modal3.style.display = "block";
}

btn4.onclick = function() {
  modal4.style.display = "block";
}
function fechar(){
    modal1.style.display = "none";
    modal2.style.display = "none";
    modal3.style.display = "none";

}

// closeModal1.onclick = function() {

//   modal1.style.display = "none";
// }

closeModal2.onclick = function() {
  modal2.style.display = "none";
}

closeModal3.onclick = function() {
  modal3.style.display = "none";
}

closeModal4.onclick = function() {
  modal4.style.display = "none";
}

// Fechar modal clicando fora dele
window.onclick = function(event) {
  if (event.target == modal1) {
    modal1.style.display = "none";
  } else if (event.target == modal2) {
    modal2.style.display = "none";
  } else if (event.target == modal3) {
    modal3.style.display = "none";
  } else if (event.target == modal4) {
    modal4.style.display = "none";
  }
}
