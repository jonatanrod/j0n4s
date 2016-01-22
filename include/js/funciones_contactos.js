/*Script para buscador contactos*/
$(function buscador_remitente(){
	$('#search_remitente').focus();
	$('#formulario_remitente_radicacion_entrada').submit(function(e){
		e.preventDefault();
	});
	$('#search_remitente').keyup(function buscador_remitente(){
		var envio2 = $('#search_remitente').val();

		$('#logo').html('<h2>Radicación de Entrada</h2>');
		$('#resultados').html('<img src="imagenes/loading.gif" alt="" />');

		$.ajax({
			type: 'GET',
			url:  'radicacion_entrada/buscador_remitente.php?search_remitente='+envio2+'&permiso='+'2',
			//data: ('search_remitente='+envio2, 'permiso='+permiso),
			success: function(resp){
				if(resp!=""){
					$('#resultados').html(resp);
				}
			}
		})
	})
	$('#nombre_contacto').keyup(function buscador_remitente(){
		var nombre_contacto = $('#nombre_contacto').val();

//		$('#logo').html('<h2>Radicación de Entrada</h2>');
		$('#resultados').html('<img src="imagenes/loading.gif" alt="" />');

		$.ajax({
			type: 'GET',
			url:  'radicacion_entrada/buscador_remitente.php?search_remitente='+nombre_contacto+'&permiso='+'1',
			//data: ('search_remitente='+nombre_contacto, 'permiso='+permiso),
			success: function(resp){
				if(resp!=""){
					$('#sugerencia_nombre_contacto').html(resp);
				}
			}
		})
	})
	$('#nit_contacto').keyup(function buscador_remitente(){
		var nit_contacto = $('#nit_contacto').val();

//		$('#logo').html('<h2>Radicación de Entrada</h2>');
//		$('#resultados').html('<img src="imagenes/loading.gif" alt="" />');
		$.ajax({
			type: 'GET',
			url:  'radicacion_entrada/buscador_remitente.php?search_nit='+nit_contacto,
			//data: ('search_remitente='+nombre_contacto, 'permiso='+permiso),
			success: function(resp){
				if(resp!=""){
					$('#sugerencia_nit_contacto').html(resp);
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
	$("#contenido").load("../radicacion_entrada/index_entrada.php");
}
function abrir_ventana_modifica_remitente(){
	$(".ventana").slideDown("slow");
}
function cerrar_ventana_modifica_remitente(){
	$(".ventana").slideUp("slow");
}
function cerrar_ventana_form_agregar_municipios(){
	$(".ventana").slideUp("slow");//Falta definir que hace despues de subir la ventana. (autocomplete del campo)
}
/*Fin funciones para desplegar ventana modal contacto*/
/*Funciones para cargar datos en formulario nuevo contacto*/
function cargar_formulario_radicacion_entrada(nombre_contacto,nit_contacto,ubicacion_contacto,direccion_contacto,telefono_contacto,mail_contacto,representante_legal,codigo_contacto)
{
	$('#contenido').load('radicacion_entrada/entrada.php',{var1:nombre_contacto, var2:nit_contacto, var3:ubicacion_contacto, var4:direccion_contacto, var5:telefono_contacto, var6:mail_contacto, var7:representante_legal, var8:codigo_contacto})
}
/*Fin funciones para cargar datos en formulario nuevo contacto*/
/*Funcion para volver atras en radicacion entrada*/
function atras(){
	$('#contenido').load('radicacion_entrada/index_entrada.php')
}
/*Fin funcion para volver atras en radicacion entrada*/

/*Validación que los campos de nombre, identificacoin, ubicacion y direccion 
no estén vacíos para modificar datos del remitente.*/
$(document).ready(function(){
	grabar_contacto();
	enviar_modificacion_contacto();
})
function grabar_contacto(){
	$("#grabar_contacto").click(function grabar_contacto(){
		var nombre_contacto = $('#nombre_contacto').val()
		var nit_contacto = $('#nit_contacto').val()
		var ubicacion_contacto =$('#ubicacion_contacto').val()
		var direccion_contacto =$('#direccion_contacto').val()

		var tamano_ubicacion = ubicacion_contacto.length;


		if(nombre_contacto== ""){
			$("#error_nombre_contacto").fadeIn();
			return false;
		}else{
			$("#error_nombre_contacto").fadeOut();
			if(nit_contacto==""){
				$("#error_nit_contacto").fadeIn();
				return false;
			}else{
				$("#error_nit_contacto").fadeOut();
				if(ubicacion_contacto==""){
					$("#error_nit_contacto").fadeOut();
					var ubicacion_contacto = "BOGOTA";
					alert(ubicacion_contacto);
					return false;
								
				}else if(tamaño_ubicacion>0 && tamano_ubicacion<10){
					alert(tamano_ubicacion);
					return false;
				}else{
					$('#error_ubicacion_contacto').fadeOut();
					if(direccion_contacto==""){
						$("#error_direccion").fadeOut();
						return false;
					}else{
						$("#error_nit_contacto").fadeOut();
					}
				}
			}
		} 
	})
}	
function enviar_modificacion_contacto(){
	$("#enviar_modificacion_contacto").click(function enviar_modificacion_contacto(){
		var nombre_contacto = $('#nombre_contacto').val()
		var nit_contacto = $('#nit_contacto').val()
		var ubicacion_contacto =$('#ubicacion_contacto').val()
		var direccion_contacto =$('#direccion_contacto').val()

		if(nombre_contacto== ""){
			$("#error_nombre_contacto").fadeIn();
			return false;
		}else{
			$("#error_nombre_contacto").fadeOut();
			if(nit_contacto==""){
				$("#error_nit_contacto").fadeIn();
				return false;
			}else{
				$("#error_nit_contacto").fadeOut();
				if(ubicacion_contacto==""){
					$('#error_ubicacion_contacto').fadeIn();
						var ubicacion_contacto = "BOGOTA"
						alert(ubicacion_contacto);

					//Aqui debo corregir el comportamiento
					// de la validación geográfica del contacto. Siempre tiene un valor, 
					//entonces hay que definir un comportamiento particular
					
				}else{
					if(direccion_contacto==""){
						$("#error_direccion_contacto").fadeIn();
						return false;
					}else{
						$("#error_direccion_contacto").fadeOut();
					}

					buscador_municipios_para_contacto();
					$('#error_ubicacion_contacto').fadeOut();
					
				}
			}
		} 
	})
}
/*Script para buscador de municipios en Formulario Agregar Contacto*/
$(function buscador_municipios_para_contacto(){
	$('#ubicacion_contacto').submit(function buscador_municipios_para_contacto(h){
		h.preventDefault();
	})
	$('#ubicacion_contacto').keyup(function buscador_municipios_para_contacto(){
		var envio = $('#ubicacion_contacto').val();
		$('#logo').html('<h2>Buscador de Municipios</h2>');
		$('#resultados').html('<h2><img src="../imagenes/loading.gif" alt="" /></h2>');

		$.ajax({
			type: 'POST',
			url: '../admin_muni/buscador_municipios.php',
			data: ('search='+envio),
			success: function(resp){
				if(resp!=""){
					$('#resultado').html(resp);
				}
			}
		})
	})
})
/*Fin script para buscador de municipios en Formulario Agregar Contacto*/
