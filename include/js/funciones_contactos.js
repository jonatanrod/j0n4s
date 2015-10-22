/*Script para buscador contactos*/
$(function buscador_contactos(){
	$('#nombre_destinatario').focus();
	$('#nombre_destinatario').submit(function(e){
		e.preventDefault();
	});
	$('#busca_contactos').keyup(function(){
		var envio2 = $('#busca_contactos').val();

		$('#logo').html('<h2>Radicación de Entrada</h2>');
		$('#resultados').html('<img src="imagenes/loading.gif" alt="" />');

		$.ajax({
			type: 'POST',
			url: 'buscador_remitente.php',
			data: ('busca_contactos='+envio2),
			success: function(resp){
				if(resp!=""){
					$('#resultados').html(resp);
				}
			}
		})
	})
})
/*Fin script para buscador contactos*/
/*Funciones para desplegar ventana modal contacto*/
function abrirVentanaAgregarContacto(){
	$(".agregar_contacto").slideDown("slow");
}
function cerrarVentanaAgregarContacto(){
	$(".agregar_contacto").slideUp("slow");
	$("#contenido").load("index_entrada.php");
}
/*Fin funciones para desplegar ventana modal contacto*/
/*Funciones para cargar datos en formulario nuevo contacto*/


/*Funciones para cargar datos en formulario nuevo contacto*/