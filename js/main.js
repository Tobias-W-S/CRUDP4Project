let r = document.querySelector('.logo');
let x = 1;

const usernameInput = document.querySelector('.lowercase');
usernameInput.addEventListener("input", function(e){
  e.target.value = e.target.value.toLowerCase();
});

function lightmode(){
  switch(x){
    case 0:

      x++;
    break; 
    case 1:

      x--;
    break; 
  }
}

function validateForm() {
  let z = document.forms["formReview"]["bericht"].value;
  if (z == "") {
    alert("review must be filled out");
    return false;
  }
}