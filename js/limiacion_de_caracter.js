
  const nombre = document.getElementById('nombre');
  const apellido = document.getElementById('apellido');
  const email = document.getElementById('email');
  const pass = document.getElementById('contraseña');


  //limitador de palabra

  nombre.addEventListener('input', function() {
    if (this.value.length > 10) { 
      this.value = this.value.slice(0, 20); // Limita el valor a 20 caracteres
    }
  });
  apellido.addEventListener('input', function() {
    if (this.value.length > 10) {
        this.value = this.value.slice(0, 20); // Limita el valor a 20 caracteres
        }
        });

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


//codigo para que al momento de  escribir un input no se puedan dejar espacios entre las palabras
//el evento keyup indica que cada vez que se suelte la tecla suseda lo siguiente
nombre.addEventListener("keyup",e=>{
    let string =e.target.value
    e.target.value = string.split(" ").join("");
})

apellido.addEventListener("keyup",e=>{
    let string =e.target.value
    e.target.value = string.split(" ").join("");
})

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
