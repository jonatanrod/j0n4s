/*Funcion para botones responsive del menu y menu_lateral*/
$(document).ready(main);

function main(){
	var contador_superior = 1;
	var contador_lateral  = 1;
	$('.boton_menu').click(function despliega_superior(){
		if(contador_superior == 1){
			$('.menu_superior').animate({
				left:'0'
			});
			contador_superior =0;
			if(contador_lateral !=1){
				$('.menu_lat').animate({
				left:'-100%'
				});
			}
		}else {
			contador_superior = 1;
			$('.menu_superior').animate({
				left:'-100%'
			});
		}
	});

	$('.boton_menu_lateral').click(function despliega_lateral(){
		if(contador_lateral == 1){
			$('.menu_lat').animate({
				left:'0'
			});
			contador_lateral =0;
			if(contador_superior !=1){
				$('.menu_superior').animate({
				left:'-100%'
				});
			}
		}else {
			contador_lateral = 1;
			$('.menu_lat').animate({
				left:'-100%'
			});
		}
	});

	/*Mostrar y ocultar sumbenus*/
	$('.submenu').click(function submenu2(){
		$(this).children('.children').slideToggle();
	});
}
/*Fin funcion para botones responsive del menu y menu_lateral*/

	/*Funcion para que al dar clic cargue el div #contenido*/
		/*Carga el administrador de municipios*/
		$(function carga_administrador_municipios() {
			$("#admin_municipios").click(function carga_administrador_municipios(){
				$("#contenido").load("admin_muni/index_municipios.php");
				
				$('.menu_superior').animate({
						left:'-100%'
				});
				//main()
			});
		});
		/*Fin carga el administrador de municipios*/
		/*Carga el creador de contactos*/
		$(function carga_creador_contactos() {
			$("#radicacion_entrada").click(function carga_creador_contactos(){
				$("#contenido").load("radicacion_entrada/index_entrada.php");/*toca cambiar al terminar el 
				modulo ya que no puede quedar en el directorio raiz*/	

				$('.menu_lat').animate({
					left:'-100%'
				});	
			});
		});
		/*Fin carga el creador de contactos*/
	/*Fin funcion para que al dar clic cargue el div #contenido*/







/*<!-- Inicio prueba de acordeon-->	

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
<!-- Fin prueba de acordeon-->	*/