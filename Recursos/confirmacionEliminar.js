function confirmacion(e){
	if (confirm("¿Estas seguro que deseas Eliminar este registro?")) {
		return true;
	} else{
		e.preventDefault();
	}
}

let linkDelete = document.querySelectorAll(".eliminarregistro");

for (var i = 0 ; i < linkDelete.length; i++ ){
	linkDelete[i].addEventListener('click', confirmacion);
}