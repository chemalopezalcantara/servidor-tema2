<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <fieldset>
            <legend>Entrada</legend>
            <form action=<?php echo $_SERVER['PHP_SELF'] ?> method="POST" name="formulario">
                <p>
                    Entrada
                    <p>
                        <textarea id="entrada" name="entrada" rows="5" cols="10"></textarea>
                    </p>
                    Repetidas <input type="radio" id="repetidas" name="repetidas"/>
                    Ordenar <input type="radio" id="ordenar" name="ordenar"/>
                    Descendente <input type="checkbox" id="descendente" name="descendente"/>
                </p>
                <p>
                    Salida
                    <p>
                      <textarea id="salida" name="salida" rows="5" cols="10"></textarea>
                    </p>
                    <input type="submit" name="enviar" id="enviar" value="enviar"/>
                    <input type="reset"/>
                </p>
        
            </form>
            
            
        </fieldset>

        <?php
        //declaramos la cadena de caracteres:
        
        
        
        //$cadena = "hola como estas hola";
        //si pulsamos el boton enviar comienza todo.
        if(isset($_POST["enviar"])){
            
            //pasamos la cadena de caracteres a un array
            $cadenaArray = explode(" ", $_POST["entrada"]);
        
            /*
             for($i = 0;$i<count($cadenaArray);$i++){
                echo " " . $cadenaArray[$i];  
            }
             */
            
            echo "</br>";
            if(isset($_POST["ordenar"])){
                ordenar($cadenaArray);
            }
            if(isset($_POST["repetidas"])){
                eliminarRepetidas($cadenaArray);
            }
            
            
        }//final del if enviar
        else{
            echo " ";
        }
        
        
        
        //funciones
        
        function ordenar(&$valor){
            //ordenamos el parametro
            sort($valor);
        //mostramos el resultado del array ordenado:
            for($i = 0;$i<count($valor);$i++){
               echo " ". $valor[$i];
            }//final del for
        }//final de la funcion ordenar
        
        function ordenarInversa(&$valor){
            //ordenamos el parametro
            sort($valor);
        //mostramos el resultado del array ordenado:
            for($i = count($valor)-1;$i>=0; $i--){
               echo " ". $valor[$i];
            }//final del for
        }//final de la funcion ordenar
        
        function eliminarRepetidas(&$valor){
            for($i = 0; $i<count($valor);$i++){
                for($j = 0; $j<count($valor);$j++){
                    if($i!=$j){
                        if($valor[$i]==$valor[$j]){
                            $valor[$j]=" ";
                        }
                    }
                }
            }
            //recorrermos el array para mostrar el resultado
            for($i = 0;$i<count($valor);$i++){
                echo " " . $valor[$i];  
            }//final del for que muestra el contenido del array
            
        }// final de la funcion eliminarRepetidas
        
        
        
        
        ?>
    </body>
</html>
