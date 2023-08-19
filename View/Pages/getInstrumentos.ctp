<?php
$id_estado = $_POST['dimension_id'];
    
    $queryM = "SELECT id, nombre_instrumento FROM t_instrumento WHERE dimension_id = '$id_estado' ORDER BY instrumento";
    $resultadoM = $mysqli->query($queryM);
    
    $html= "<option value='0'>Seleccionar instrumento</option>";
    
    while($rowM = $resultadoM->fetch_assoc())
    {
        $html.= "<option value='".$rowM['id_instrumento']."'>".$rowM['instrumento']."</option>";
    }
    
    echo $html;

?>