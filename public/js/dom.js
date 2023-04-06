//lectura
document.querySelector('h2');
console.log(document.querySelector('h2'));

// console.log(document.querySelectorAll())

//Actualización

function modificar(){
	var textonew = document.getElementById("#nuevo");
	textonew.innerText="gracias por enviarnos su correo";
}

//Agregado y eliminacion 

//tipo de madera

function tipo(sw){
	var pic;
	console.log(sw);
	if (sw ==0) {
		pic = "imagen/Cama.jpg";
	}
	else{
		pic = "imagen/maderacama.png";
	}
	var x = document.querySelector('#madera');
	x.setAttribute('src', pic);

}

//colores de madera

function color(as){
	var fot;
	console.log(as);
	if (as ==0) {
		fot = "imagen/Nogal.jpg";
	}
	else if (as ==1){
		fot = "imagen/Caoba.jpg";
	}
	else if (as ==2){
		fot = "imagen/Cedrocolor.jpg";
	}
	else if (as ==3){
		fot = "imagen/Blanco.jpg";
	}
	else{
		fot = "imagen/Cedro.jpg";
	}
	var x = document.querySelector('#madera');
	x.setAttribute('src', fot);

}

//animación de objetos del DOM
window.onload = function(){
	var pos = 0;

	var box = document.getElementById('box');
	var t = setInterval(move, 10);

	function move(){
		if (pos >= 1100) {
			clearInterval(t);
		}
		else{
			pos += 1;
			box.style.left = pos+'px'; 
		}
	}
}