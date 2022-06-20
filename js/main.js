let r = document.querySelector(':root');
let x = 1;

const usernameInput = document.querySelector('.lowercase');
usernameInput.addEventListener("input", function(e){
  e.target.value = e.target.value.toLowerCase();
});

function lightmode(){
  switch(x){
    case 0:
      r.style.setProperty('--primary', '#e63b2e');
      r.style.setProperty('--secundary', '#f85a3e');
      r.style.setProperty('--secundary05', 'rgba(248, 90, 62, 0.9)');
      r.style.setProperty('--donkerblauw', '#adcfdb');
      r.style.setProperty('--tertairy', '#aadce6');
      r.style.setProperty('--tertairy05', 'rgba(170, 220, 230, 0.8)');     
      r.style.setProperty('--quaternary', '#c5e1e0');
      r.style.setProperty('--background', '#e1e6e1');
      x++;
    break; 
    case 1:
      r.style.setProperty('--primary', '#C92518');
      r.style.setProperty('--secundary', '#E12908');
      r.style.setProperty('--secundary05', 'rgba(225, 41, 8, 0.9)');
      r.style.setProperty('--donkerblauw', '#78B0C4');
      r.style.setProperty('--tertairy', '#6FC4D5');
      r.style.setProperty('--tertairy05', 'rgba(111, 196, 213 0.9)');     
      r.style.setProperty('--quaternary', '#93C7C5');
      r.style.setProperty('--background', '#B7C3B7');
      x--;
    break; 
  }
}