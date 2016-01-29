<?
/* genera_fecha es la clase que obtiene un string con una fecha (mm/dd/yyy) y lo convierte en diferentes formatos */

class genera_fecha
{

/* Traduce una fecha en formato mm/dd/yyy a formato texto en castellano.
   Desde la pagina hacemos el include de "genera_fecha.php"; y llamaremos a la variable $fecha_hoy (por ejemplo) 
   ó echo traducefecha("11/15/2003");  
   Donde la fecha ponemos la variable que queremos traducir en formato mm/dd/yyyy 
*/ 
function traducefecha($fecha){
  if (strlen(trim($fecha))==0)	
   	return ("<Fecha no especificada>");
      
  $fecha= strtotime($fecha); // convierte la fecha de formato mm/dd/yyyy a marca de tiempo 
  $diasemana=date("w", $fecha);// se obtiene el número del dia de la semana. El 0 es domingo 
  
  switch ($diasemana){ 
    case "0": 
      $diasemana="Domingo"; 
      break; 
    case "1": 
      $diasemana="Lunes"; 
      break; 
    case "2": 
      $diasemana="Martes"; 
      break; 
    case "3": 
      $diasemana="Miercoles"; 
      break; 
    case "4": 
      $diasemana="Jueves"; 
      break; 
    case "5": 
      $diasemana="Viernes"; 
      break; 
    case "6": 
      $diasemana="Sabado"; 
      break; 
  } 

  $dia=date("d",$fecha); // día del mes en número 
  $mes=date("m",$fecha); // número del mes de 01 a 12 
  
  switch($mes){ 
    case "01": 
      $mes="Enero"; 
      break; 
    case "02": 
      $mes="Febrero"; 
      break; 
    case "03": 
      $mes="Marzo"; 
      break; 
    case "04": 
      $mes="Abril"; 
      break; 
    case "05": 
      $mes="Mayo"; 
      break; 
    case "06": 
      $mes="Junio"; 
      break; 
    case "07": 
      $mes="Julio"; 
      break; 
    case "08": 
      $mes="Agosto"; 
      break; 
    case "09": 
       $mes="Septiembre"; 
       break; 
    case "10": 
      $mes="Octubre"; 
      break; 
    case "11": 
      $mes="Noviembre"; 
      break; 
    case "12": 
      $mes="Diciembre"; 
      break; 
  } 

  $ano=date("Y",$fecha); // Se obtiene el año en formato 4 digitos 
  $fecha= $diasemana." ".$dia." de ".$mes." de ".$ano; // SE concatena el resultado en una sola cadena 
  return $fecha; //retorna la fecha  
}
	
function traducefecha_sinDia($fecha) { 
  if (strlen(trim($fecha))==0)
    return ("<Fecha no especificada>");
        		
  $fecha= strtotime($fecha); // convierte la fecha de formato mm/dd/yyyy a marca de tiempo 
  $dia=date("d",$fecha); // día del mes en número 
  $mes=date("m",$fecha); // número del mes de 01 a 12 

    switch($mes){ 
      case "01": 
        $mes="Enero"; 
        break; 
      case "02": 
        $mes="Febrero"; 
        break; 
      case "03": 
        $mes="Marzo"; 
        break; 
      case "04": 
        $mes="Abril"; 
        break; 
      case "05": 
        $mes="Mayo"; 
        break; 
      case "06": 
        $mes="Junio"; 
        break; 
      case "07": 
        $mes="Julio"; 
        break; 
      case "08": 
        $mes="Agosto"; 
        break; 
      case "09": 
        $mes="Septiembre"; 
        break; 
      case "10": 
        $mes="Octubre"; 
        break; 
      case "11": 
        $mes="Noviembre"; 
        break; 
      case "12": 
        $mes="Diciembre"; 
        break; 
    }
    switch($dia){ 
      case "1": 
        $dia="un"; 
        break; 
      case "2": 
        $dia="dos"; 
        break; 
      case "3": 
        $dia="tres"; 
        break; 
      case "4": 
        $dia="cuatro"; 
        break; 
      case "5": 
        $dia="cinco"; 
        break; 
      case "6": 
        $dia="seis"; 
        break; 
      case "7": 
        $dia="siete"; 
        break; 
      case "8": 
        $dia="ocho"; 
        break; 
      case "9": 
        $dia="nueve"; 
        break; 
      case "10": 
        $dia="diez"; 
        break; 
      case "11": 
        $dia="once"; 
        break; 
      case "12": 
        $dia="doce"; 
        break; 
	    case "13": 
        $dia="trece"; 
        break; 
      case "14": 
        $dia="catorce"; 
        break;
      case "15": 
        $dia="quince"; 
        break;
      case "16": 
        $dia="dieciseis"; 
        break; 
      case "17": 
        $dia="diecisiete"; 
        break; 
      case "18": 
        $dia="dieciocho"; 
        break; 
      case "19": 
        $dia="dicinueve"; 
        break; 
      case "20": 
        $dia="veinte"; 
        break; 
      case "21": 
        $dia="veintiun"; 
        break; 
      case "22": 
        $dia="veintidos"; 
        break; 
      case "23": 
        $dia="veintitres"; 
        break; 
      case "24": 
        $dia="veinticuatro"; 
        break; 
      case "25": 
        $dia="veinticinco"; 
        break; 
      case "26": 
        $dia="veintiseis"; 
        break; 
      case "27": 
        $dia="veintisiete"; 
        break;
      case "28": 
        $dia="veintiocho"; 
        break;
      case "29": 
        $dia="veintiueve"; 
        break;
      case "30": 
        $dia="treinta"; 
        break;
      case "31": 
        $dia="treinta y un"; 
        break; 	
    }	  

    $ano=date("Y",$fecha); // Se obtiene el año en formato 4 digitos 
    $fecha= $dia." dia(s) del mes de ".$mes." de ".$ano; // Se une el resultado en una sola cadena 
    return $fecha; //retorna la fecha 

  }//Fin de traducefecha_sindia()

	function traducefechaDocto($fecha){ 
    	
    if (strlen(trim($fecha))==0)	
    	return ("<NO ESPECIFICADA>");
    	  		
    $fecha= strtotime(trim($fecha)); // convierte la fecha de formato mm/dd/yyyy a marca de tiempo      
    $dia=date("d",$fecha); // día del mes en número 
    $mes=date("m",$fecha); // número del mes de 01 a 12 
       
    switch($mes){ 
       case "01": 
          $mes="Enero"; 
          break; 
       case "02": 
          $mes="Febrero"; 
          break; 
       case "03": 
          $mes="Marzo"; 
          break; 
       case "04": 
          $mes="Abril"; 
          break; 
       case "05": 
          $mes="Mayo"; 
          break; 
       case "06": 
          $mes="Junio"; 
          break; 
       case "07": 
          $mes="Julio"; 
          break; 
       case "08": 
          $mes="Agosto"; 
          break; 
       case "09": 
          $mes="Septiembre"; 
          break; 
       case "10": 
          $mes="Octubre"; 
          break; 
       case "11": 
          $mes="Noviembre"; 
          break; 
       case "12": 
          $mes="Diciembre"; 
          break; 
    }
	  switch($dia){ 
       case "1": 
          $dia="un"; 
          break; 
       case "2": 
          $dia="dos"; 
          break; 
       case "3": 
          $dia="tres"; 
          break; 
       case "4": 
          $dia="cuatro"; 
          break; 
       case "5": 
          $dia="cinco"; 
          break; 
       case "6": 
          $dia="seis"; 
          break; 
       case "7": 
          $dia="siete"; 
          break; 
       case "8": 
          $dia="ocho"; 
          break; 
       case "9": 
          $dia="nueve"; 
          break; 
       case "10": 
          $dia="diez"; 
          break; 
       case "11": 
          $dia="once"; 
          break; 
       case "12": 
          $dia="doce"; 
          break; 
			case "13": 
          $dia="trece"; 
          break; 
			case "14": 
          $dia="catorce"; 
          break;
			case "15": 
          $dia="quince"; 
          break; 
			case "16": 
          $dia="dieciseis"; 
          break; 
       case "17": 
          $dia="diecisiete"; 
          break; 
       case "18": 
          $dia="dieciocho"; 
          break; 
       case "19": 
          $dia="dicinueve"; 
          break; 
       case "20": 
          $dia="veinte"; 
          break; 
       case "21": 
          $dia="veintiun"; 
          break; 
       case "22": 
          $dia="veintidos"; 
          break; 
       case "23": 
          $dia="veintitres"; 
          break; 
       case "24": 
          $dia="veinticuatro"; 
          break; 
       case "25": 
          $dia="veinticinco"; 
          break; 
       case "26": 
          $dia="veintiseis"; 
          break; 
       case "27": 
          $dia="veintisiete"; 
          break; 
			case "28": 
          $dia="veintiocho"; 
          break; 
			case "29": 
          $dia="veintiueve"; 
          break;
			case "30": 
          $dia="treinta"; 
          break; 
			case "31": 
          $dia="treinta y un"; 
          break; 			
    }	 

    $ano=date("Y",$fecha); // Se obtiene el año en formato 4 digitos 
    $fecha= $dia." de ".$mes." de ".$ano; // Se une el resultado en una sola cadena 
    return $fecha; //retorna la fecha  
    } 
}
    $b = new genera_fecha();
    $date =  date("m/d/Y");
    $fecha_hoy = $b->traducefecha($date);
    //$fecha_e = $b->traducefecha($radi_fech_radi);
    $fechaDocumento2 = $b->traducefecha_sinDia($fechaDocumento);
    $fechaDocumento = $b->traducefechaDocto($fechaDocumento);
         
    //echo "fechas $date <br> fecha_hoy $fecha_hoy <br>fechaDocumento2 $fechaDocumento2 <br>fechaDocumento $fechaDocumento<br>";
?>
   
