<?php
    require ('conexion.php');
    
    $query = "SELECT id, nombre_dimension FROM dimensiones ORDER BY nombre_dimension";
    $resultado=$mysqli->query($query);
?>

<html>
    <head>
        <title>ComboBox Ajax, PHP y MySQL</title>
        
        <script language="javascript" src="js/jquery-3.1.1.min.js"></script>
        
        <script language="javascript">
            $(document).ready(function(){
                $("#cbx_dimension").change(function () {

                   // $('#cbx_instrumento').find('option').remove().end().append('<option value="whatever"></option>').val('whatever');
                    
                    $("#cbx_dimension option:selected").each(function () {
                       dimension_id = $(this).val();
                        $.post("includes/getinstrumentos.php", {dimension_id: dimension_id }, function(data){
                            $("#cbx_municipio").html(data);
                        });            
                    });
                })
            });
            
           
        </script>
        
    </head>
    
    <body>
        <body>
        <form id="combo" name="combo" action="guarda.php" method="POST">
           <div>Selecciona Dimension : <select name="cbx_dimension" id="cbx_dimension">
                <option value="0">Seleccionar dimension</option>
                <?php while($row = $resultado->fetch_assoc()) { ?>
                    <option value="<?php echo $row['id']; ?>"><?php echo $row['nombre_dimension']; ?></option>
                <?php } ?>
            </select></div>
            
            <br />
            
            <div>Selecciona instrumento: <select name="cbx_municipio" id="cbx_municipio"></select></div>
            
            <br />
            
            
            
            <br />
            <input type="submit" id="enviar" name="enviar" value="Guardar" />
        </form>
    </body>
</html>