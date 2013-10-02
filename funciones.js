$(function(){
	$("#enviar").click(function(){
		usuario=$("#nick").val();
		//alert(usuario);
		password=$("#pass").val();
		//alert(password);
		
		 $.getJSON("pagina1.php", {nick:usuario,pass:password}, validarFormulario);	
		return false;//Si no pongo el retorno a falso no me clava e resulado en la index...me redirige a pagina1.php
	});
	
	function validarFormulario(datos){
		if (datos.estado == 0) {
			window.location = "correcto.html";
 
		}
		else {
			$("#resultados").text(datos.texto);
		}
		
	}
})



