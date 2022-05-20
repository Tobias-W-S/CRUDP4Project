const usernameInput = document.querySelector('.lowercase');
usernameInput.addEventListener("input", function(e){
  e.target.value = e.target.value.toLowerCase();
});