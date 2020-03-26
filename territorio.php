<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php $nombreArchivo = "territory_names.csv"; 
 
 $archivo = fopen($nombreArchivo,"r") or die("No se puede abrir el archivo: $nombreArchivo");; 
  
 $datos = array(); 
  
 //imprimimos la etiqueta para empezar una tabla 
 print("<table>"); 
  
 //recorremos el archivo csv registro por registro 
 while(( $datos = fgetcsv($archivo, 0, ',', '"', '"')) !== False){     // imprimimos el incio del renglon de tabla tr 
    print("<tr>"); 
  
     //como ya tenemos el primer registro y ese registro es una lista     
     // recorremos dicha lista, campo por campo         
     foreach($datos as $campo){         
         //imprimimos la etiqueta para el dato de tabla td         
         print("<td>");     //imprimimos el dato: campo          
         print("$campo");   //imprimimos el cierre de </td>         
         print("</td>");     
        }  //imprimimos el cierre del renglon de tabla </tr>     
        print("</tr>");      
    } 
    //imprimimos el cierre de la tabla 
    print("</table>"); 
</body>
</html>