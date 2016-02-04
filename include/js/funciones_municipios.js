/*Script para buscador del administrador de municipios*/
$(function buscador_municipios(){
	$('#search').focus();
	
	$('#search').keyup(function buscador_municipios(){
		var envio = $('#search').val();
		$('#logo').html('<h2>Buscador de Municipios</h2>');
		$('#desplegable_resultados').html('<h2><img src="imagenes/loading.gif" alt="" /></h2>');

		$.ajax({
			type: 'POST',
			url: 'admin_muni/buscador_municipios.php',
			data: {
				'search' : envio,
				'desde_formulario' : '1'
			},			
			success: function(resp){
				if(resp!=""){
					$('#desplegable_resultados').html(resp);
				}
			}
		})
	})
})
/*Fin script para buscador del administrador de municipios*/
/*Función para cargar datos al formulario de modificación de Municipio*/
function cargar_modifica_municipio(nombre_municipio,nombre_departamento,nombre_pais,nombre_continente){
	$('#mod_continente').val(nombre_continente);
	$('#mod_pais').val(nombre_pais);
	$('#mod_departamento').val(nombre_departamento);
	$('#mod_municipio').val(nombre_municipio);

	$('#ant_continente').val(nombre_continente);
	$('#ant_pais').val(nombre_pais);
	$('#ant_departamento').val(nombre_departamento);
	$('#ant_municipio').val(nombre_municipio);


	abrirVentanaModificarMunicipios();
/*Validación que los campos de pais, departamento y municipio no estén 
vacíos para modificar correctamente el municipio seleccionado.*/
	$(document).ready(function validar_modificacion_municipio(){
		$('#enviar_mod').click(function validar_modificacion_municipio(){
			
			var pais =$('#mod_pais').val();
			$('#mod_pais').val(pais.toUpperCase()); 
			
			var departamento =$('#mod_departamento').val();
			$('#mod_departamento').val(departamento.toUpperCase()); 
			
			var municipio =$('#mod_municipio').val();
			$('#mod_municipio').val(municipio.toUpperCase()); 

			var x =$('#mod_pais').val();
			var y =$('#mod_departamento').val();
			var z =$('#mod_municipio').val();

			$('#mod_municipio').val(z.toUpperCase()); 

			if(pais== ""){
				$("#error_mod_pais").fadeIn();
				return false;
			}else{
				$("#error_mod_pais").fadeOut();
				if(departamento== ""){
					$("#error_mod_departamento").fadeIn();
					return false;
				}else{
					$("#error_mod_departamento").fadeOut();
					if(municipio== ""){
						$("#error_mod_municipio").fadeIn();
						return false;
					}else{
						$("#error_mod_municipio").fadeOut();
					}
				}		
			}	
		});
	});
/*Fin de validación que los campos de pais, departamento y municipio no estén vacíos */
}

/*Funciones para desplegar ventana modal municipios*/
function abrirVentanaCrearMunicipios(){
	$("#ventana").slideDown("slow");
}
function cerrarVentanaCrearMunicipios(){
	$("#ventana").slideUp("slow");
}
function abrirVentanaModificarMunicipios(){
	$("#ventana2").slideDown("slow");
}
function cerrarVentanaModificarMunicipios(){
	$("#ventana2").slideUp("slow");
}
/*Fin funciones para desplegar ventana modal municipios*/

/*Funciones para limpiar el formulario*/
function limpia_formulario_modificacion(){
	$('#mod_pais').val("");
	$('#mod_departamento').val("");
	$('#mod_municipio').val("");
}
function limpia_formulario_agregar(){
	$('#pais').val("");
	$('#departamento').val("");
	$('#municipio').val("");
}
function espacios_pais(){
	var str = $('#pais').val();
	str = str.replace('-','',str);
	str = str.replace('°','',str);
	str = str.replace('#','',str);
	str = str.replace("/","",str);
	str = str.replace("*","",str);
	str = str.replace("'","",str);	
	str = str.replace(',','',str);
	str = str.replace(/\s/g, '');

	$('#pais').val(str.toUpperCase());
}
function espacios_departamento(){
	var str = $('#departamento').val();
	str = str.replace('-','',str);
	str = str.replace('°','',str);
	str = str.replace('#','',str);
	str = str.replace("/","",str);
	str = str.replace("*","",str);
	str = str.replace("'","",str);	
	str = str.replace(',','',str);
	str = str.replace(/\s/g, '');

	$('#departamento').val(str.toUpperCase());
}
function espacios_municipio(){
	var str = $('#municipio').val();
	str = str.replace('-','',str);
	str = str.replace('°','',str);
	str = str.replace('#','',str);
	str = str.replace("/","",str);
	str = str.replace("*","",str);
	str = str.replace("'","",str);	
	str = str.replace(',','',str);
	str = str.replace(/\s/g, '');

	$('#municipio').val(str.toUpperCase());
}
/*Fin funciónes para limpiar el formulario*/

function verificar_municipio(municipio){
	alert("hola"+municipio)					//Linea de prueba
}
/*Validación que los campos de pais, departamento y municipio no estén vacíos 
para agregar un municipio nuevo.*/
$(document).ready(function validar_varios_municipio(){
	$('#bEnviar').click(function validar_varios_municipio(){
		var pais =$('#pais').val();
		var departamento =$('#departamento').val();
		var municipio =$('#municipio').val();

		$('#pais').val(pais.toUpperCase()); 
		$('#departamento').val(departamento.toUpperCase()); 
		$('#municipio').val(municipio.toUpperCase());

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
					verificar_municipio(municipio);		//Linea de prueba
					return false;						//Linea de prueba
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
			success: function(resp){
				alert("El municipio ha sido agregado correctamente.")
				$("#ventana").slideUp("slow");
				$("#contenido").load("admin_muni/index_municipios.php");
			}
		})
	})
} 
/*Fin funcion para insertar datos de municipios*/


