/*Funcion para botones responsive del menu y menu_lateral*/
$(document).ready(main);

function main(){
	var contador = 1;
	$('.boton_menu').click(function(){
		if(contador == 1){
			$('.menu_superior').animate({
				left:'0'
			});
			contador =0;
		}else {
			contador = 1;
			$('.menu_superior').animate({
				left:'-100%'
			});
		}

	});

	$('.boton_menu_lateral').click(function(){
		if(contador == 1){
			$('.menu_lat').animate({
				left:'0'
			});
			contador =0;
		}else {
			contador = 1;
			$('.menu_lat').animate({
				left:'-100%'
			});
		}
	});

	/*Mostrar y ocultar sumbenus*/
	$('.submenu').click(function(){
		$(this).children('.children').slideToggle();
	});
}
/*Fin funcion para botones responsive del menu y menu_lateral*/

	/*Funcion para que al dar clic cargue el div #contenido*/
		/*Carga el administrador de municipios*/
		$(function () {
			$("#admin_municipios").click(function(){
				$("#contenido").load("/admin_muni/index_municipios.php");
				
				$('.menu_superior').animate({
						left:'-100%'
				});
				main()
			});
		});
		/*Fin carga el administrador de municipios*/
		/*Carga el creador de contactos*/
		$(function () {
			$("#radicacion_entrada").click(function(){
				$("#contenido").load("index_entrada.php");/*toca cambiar al terminar*/		
			});
		});
		/*Fin carga el creador de contactos*/
	/*Fin funcion para que al dar clic cargue el div #contenido*/

/*Script para buscador del administrador de municipios*/
$(function(){
	$('#search').focus();
	$('#search_form').submit(function(h){
		h.preventDefault();
	})
	$('#search').keyup(function(){
		var envio = $('#search').val();
		$('#logo').html('<h2>Buscador de Municipios</h2>');
		$('#resultados').html('<h2><img src="imagenes/loading.gif" alt="" /></h2>');

		$.ajax({
			type: 'POST',
			url: 'admin_muni/buscador_municipios.php',
			data: ('search='+envio),
			success: function(resp){
				if(resp!=""){
					$('#resultados').html(resp);
				}
			}
		})
	})
})
/*Fin script para buscador del administrador de municipios*/

/*Funciones para desplegar ventana modal municipios*/
function abrirVentanaCrearMunicipios(){
	$(".ventana").slideDown("slow");
}
function cerrarVentanaCrearMunicipios(){
	$(".ventana").slideUp("slow");
	$("#contenido").load("admin_muni/index_municipios.php");
}
/*Fin funciones para desplegar ventana modal municipios*/

/*Validación que los campos de pais, departamento y municipio no estén vacíos 
para agregar un municipio nuevo.*/
$(document).ready(function(){
	$('#bEnviar').click(function(){
		var pais =$('#pais').val();
		var departamento =$('#departamento').val();
		var municipio =$('#municipio').val();

		if(pais== ""){
			$("#error_pais").fadeIn();
			return false;
		}else{
			$("#error_pais").fadeOut();
		
			if(departamento== ""){
				$("#error_departamento").fadeIn();
				return false;
			}else{
				$("#error_departamento").fadeOut();
				if(municipio== ""){
					$("#error_municipio").fadeIn();
					return false;
				}else{
					$("#error_municipio").fadeOut();
				}
			}		
		}	
	});
});
/*Fin de validación que los campos de pais, departamento y municipio no estén vacíos 
para agregar un municipio nuevo.*/

/*Funcion para insertar datos de municipios*/
$(document).ready(function(){
	insertar_municipios();
})

function insertar_municipios(){
	$('#form_datos').submit(function(e){
		e.preventDefault()

		var continente =$('#continente').val()
		var pais =$('#pais').val()
		var departamento =$('#departamento').val()
		var municipio =$('#municipio').val()

		var data = 'continente='+continente+'&pais='+pais+'&departamento='+departamento+'&municipio='+municipio;

		$.ajax({
			url:'admin_muni/buscador_municipios.php',
			type: 'POST',
			data: data,
			beforeSend: function(){
				console.log('enviando datos a la DB....')
			},
			success: function(resp){
				console.log('resp')
				alert("El municipio ha sido agregado correctamente.")
				$(".ventana").slideUp("slow");
				$("#contenido").load("admin_muni/index_municipios.php");
			}
		})
	})
} 
/*Fin funcion para insertar datos de municipios*/


/*Script para buscador contactos*/
$(function(){
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

/*<!-- Inicio prueba de acordeon-->	*/

$(document).ready(function(){
	$(".accordion-titulo").click(function(){
		
   var contenido=$(this).next(".accordion-content");
   			
   if(contenido.css("display")=="none"){ //open		
      contenido.slideDown(250);			
      $(this).addClass("open");
   }
   else{ //close		
      contenido.slideUp(250);
      $(this).removeClass("open");	
  }
							
});
})
/*<!-- Fin prueba de acordeon-->	*/