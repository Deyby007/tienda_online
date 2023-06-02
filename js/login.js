
const email = document.getElementById('email');
const pass = document.getElementById('contraseña');


//limitador de palabra


      email.addEventListener('input', function() {
          if (this.value.length > 10) {
              this.value = this.value.slice(0, 50); // Limita el valor a 50 caracteres
              }
              });

              pass.addEventListener('input', function() {
                  if (this.value.length > 10) {
                      this.value = this.value.slice(0, 50); // Limita el valor a indefinido caracteres
                      }
                      });


   pass.addEventListener("keyup",e=>{
     let string =e.target.value
     e.target.value = string.split(" ").join("");
 })
 
 
 
 email.addEventListener('input', function(event) {
   const texto = event.target.value;
   event.target.style.color = getColor(texto);
 });
 
 function getColor(texto) {
   if (texto.includes('@gmail.com')) {
     return '#0dc285';
     } else {
       return 'red';
       }
 
 }