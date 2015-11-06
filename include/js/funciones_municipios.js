/*Script para buscador del administrador de municipios*/
$(function administrador_buscador_municipios(){
	$('#search').focus();
	$('#search_form').submit(function administrador_buscador_municipios(h){
		h.preventDefault();
	})
	$('#search').keyup(function administrador_buscador_municipios(){
		var envio = $('#search').val();
		$('#logo').html('<h2>Buscador de Municipios</h2>');
		$('#resultados').html('<h2><img src="../imagenes/loading.gif" alt="" /></h2>');

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
//	$("#contenido").load("admin_muni/index_municipios.php");
}
/*Fin funciones para desplegar ventana modal municipios*/

/*Validación que los campos de pais, departamento y municipio no estén vacíos 
para agregar un municipio nuevo.*/
$(document).ready(function validar_varios_municipio(){
	$('#bEnviar').click(function validar_varios_municipio(){
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

