//menu latera
var menu_desplegar = document.getElementById('use-menu');

//boton para mostrar menu
var activador=document.getElementById('activador');

//flecha
var flecha = document.getElementById('flecha');


//crea una funcion que diga que al hacer click en el boton me cambie el la clase y cuando aga click de nuevo me regrese a mi calse actual
activador.addEventListener('click', function(){

        menu_desplegar.classList.toggle('mostrar')
        flecha.classList.toggle('abajo')

            });



