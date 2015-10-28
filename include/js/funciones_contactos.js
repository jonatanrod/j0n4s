/*Script para buscador contactos*/
$(function(){
	$('#search').focus();
	$('#search_form').submit(function(e){
		e.preventDefault();
	});
	$('#search').keyup(function(){
		var envio2 = $('#search').val();

		$('#logo').html('<h2>Radicación de Entrada</h2>');
		$('#resultados').html('<img src="imagenes/loading.gif" alt="" />');

		$.ajax({
			type: 'POST',
			url:  'buscador_remitente.php',
			data: ('search='+envio2),
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
function abrir_ventana_modifica_remitente(){
	$(".ventana").slideDown("slow");
}
function cerrar_ventana_modifica_remitente(){
	$(".ventana").slideUp("slow");
}
/*Fin funciones para desplegar ventana modal contacto*/
/*Funciones para cargar datos en formulario nuevo contacto*/
function cargar_formulario_radicacion_entrada(nombre_contacto,nit_contacto,ubicacion_contacto,direccion_contacto,telefono_contacto,mail_contacto,representante_legal,codigo_contacto)
{
	$('#contenido').load('entrada.php',{var1:nombre_contacto, var2:nit_contacto, var3:ubicacion_contacto, var4:direccion_contacto, var5:telefono_contacto, var6:mail_contacto, var7:representante_legal, var8:codigo_contacto})
}
function atras(){
	$('#contenido').load('index_entrada.php')
}
/*Fin funciones para cargar datos en formulario nuevo contacto*/
/*Funcion para volver atras en radicacion entrada*/

/*Fin funcion para volver atras en radicacion entrada*/