<?php
//servidor donde esta la bd
//$servidor = "172.21.72.210";
$servidor = "localhost:5432";
//Nombre de la base de datos de Jonas
//$servicio = "orfeo40";
$servicio = "jonas";
//Usuario de conexion con permisos de modificacion y creacion de objetos en la Base de datos.
//by skinatech (usuario bd)
$usuario = "admin";
//Contraseña del usuario anterior
$contrasena= "jonas";
//Nombre o IP del servidor de BD. Opcional puerto, p.e. 120.0.0.1:1521
$db = $servicio;
//Tipo de Base de datos. Los valores validos son: postgres, oci8, mssql.
$driver = "postgres";
 //Variable que indica el ambiente de trabajo, sus valores pueden ser  desarrollo,prueba,jonas
$ambiente = "desarrollo";
//Servidor que procesa los documentos //AQUI VOY JONAS
$servProcDocs = "127.0.0.1:8000";
//Acronimo de la empresa
$entidad= "FND";
//Nombre de la EmpresaCD
$entidad_largo= 'Federacion Nacional de Departamentos';	//Variable usada generalmente para los t�tulos en informes.
//Telefono o PBX de la empresa.
$entidad_tel = '(1)4870024 - (1)4870040';
//URL de contacto de la empresa o entidad
$entidad_contacto = "http://www.fnd.org.co";
//Direccion de la Empresa.
$entidad_dir = "Avenida Calle 26 No. 69 B - 53";
$entidad_depsal = 999;	//Guarda el codigo de la dependencia de salida por defecto al radicar dcto de salida
			// 0 = Carpeta salida del radicador	>0 = Redirecciona a la dependencia especificada
/**
*	Se crea la variable $ADODB_PATH.
*	El Objetivo es que al independizar ADODB de ORFEO, este (ADODB) se pueda actualizar sin causar
*	traumatismos en el resto del codigo de ORFEO. En adelante se utilizara esta variable para hacer
*	referencia donde se encuentre ADODB
*/

//$ADODB_PATH = "/var/www/orfeo/trunk/include/class/adodb";
$ADODB_PATH = "/var/www/pruebas/adodb";
$ADODB_CACHE_DIR = "/tmp";

$MODULO_RADICACION_DOCS_ANEXOS=1;
$MODULO_ENVIOS = 2;

/**
 * Configuracion LDAP
 */

// Escriba la configuracion en el archivo autenticaLDAP

//Nombre o IP del servidor de autenticacion LDAP
/*$ldapServer = '192.1.1.100';
//Cadena de busqueda en el servidor.
$cadenaBusqLDAP = 'dc=empopasto,dc=com,dc=co';
//Campo seleccionado (de las variables LDAP) para realizar la autenticacion.
$campoBusqLDAP = 'sAMAccountName';*/

/*Configuracion de Fax Server*/
/*if ((!defined(FAXSERVER_IP)) || (!defined(FAXSERVER_SSH_USER)))
{
    //	define(FAXSERVER_IP,'LOCALHOST');
    define(FAXSERVER_IP,'localhost');
    //define(FAXSERVER_SSH_USER,'www-data');
    define(FAXSERVER_SSH_USER,'orfeofax');
}*/
$menuAdicional = 0;

// Variables que se usan para la radicacion del correo electronio
// Sitio en el que encontramos la libreria pear instalada
$PEAR_PATH="/var/www/pruebas/pear/";
// Servidor de Acceso al correo Electronico
$servidor_mail_imap="imap.googlemail.com";
// Servidor de Acceso al correo Electronico
$servidor_mail_smtp="ssl://smtp.googlemail.com";
// Tipo de servidor de correo Usado
$protocolo_mail="imap"; // imap  | pop3
// Puerto del servidor de Mail.
$puerto_mail_imap=993; //Segun servidor defecto 143 | 110
// Puerto del servidor de Mail.
$puerto_mail_smtp=465; //Segun servidor defecto 143 | 110
// Puerto del servidor de Mail.
//$cuenta_mail="orfeo@emaspasto.com.co"; //Segun servidor defecto 143 | 110
$cuenta_mail="orfeo@fnd.org.co"; //Segun servidor defecto 143 | 110
// Puerto del servidor de Mail.
$contrasena_mail=",Fnd0rf30.M41L3r"; //Segun servidor defecto 143 | 110
//Color de Fondo de OrfeoGPL
$colorFondo = "8cacc1";
// Pais Empresa o Entidad
$pais = "Colombia";
// Correo Contacto o Administrador del Sistema
$administrador = " ";
// Directorio de estilos a Usar... Si no se establece una Ruta el sistema usara el que posee por Defecto en el directorio estilos.  orfeo.css para usarlo cree una carpeta con su personalizacion y luego copie el archivo orfeo.css y cambie sus colores.
$ESTILOS_PATH = "/estilos/orfeo38/";
$imagenes = "imagenes";
// Datos configuración para el formulario web pqrs
$depeRadicaFormularioWeb = "460";  // Dependencia a la cual se Es radicado en la Dependencia 990
$usuaRecibeWeb           = 1;  // Usuario que va a recepcionar los radicados web-pqr
$secRadicaFormularioWeb  = "secr_tp2_110";
?>
