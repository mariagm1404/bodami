<?php
    include("conexion.php");
    if(isset($_POST["register"])){
        if(
            isset($_POST["name"])&&
            isset($_POST["apellido"]) &&
            isset($_POST["grupos"]) 
        ){
            $names= $_POST["name"];
            $apellidos= $_POST["apellido"];
            $grupos= $_POST["grupos"];
            $alergias= $_POST["alergia"] ?? "";
            $fecha= date("d/m/y");

            
            for($i = 0;$i<count($names); $i++){
                $name= ($names[$i]);
                $apellido= ($apellidos[$i]);
                $van=$grupos[$i];
                $alergia=isset($alergias[$i]) ? $alergias[$i]: "";
                $consulta="INSERT INTO datos(nombre,apellidos,van,alergia,fecha)
                VALUES('$name','$apellido','$van','$alergia','$fecha')
            ";
            $resultado = mysqli_query($conex,$consulta);
            if($resultado){
                ?><h3>Tu registro se ha completado</h3>
                <?php
            }
            else{
                ?><h3>Ocurrio un error</h3>
                <?php
            }
        }  

        }
        else{
            ?><h3>Ocurrio un error</h3>
            <?php
        }
    }
?>