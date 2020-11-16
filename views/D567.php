<script>
    var numero_pregunta = 'D567';
    var siguiente = 'views/P43.php';
</script>
<div class = "mt-5" id = "P42">
    <div class="col-xl-6 offset-xl-3 col-lg-6 offset-lg-3 col-md-8 offset-md-2">
        <form method = 'POST' class="was-validated" onsubmit="
        submit_personales(
        document.getElementById('nombre').value, 
        document.getElementById('correo').value, 
        document.getElementById('numero').value,
        siguiente);
        return false;
        ">
            <div class = "jumbotron">
                <div class = "container">
                    <div class = "row row-header">                
                        <div class = "col-sm-12">
                            <label>Datos Demográficos</label>
                        </div>                    
                    </div>
                </div>
            </div>

            
                <div class = "container mb-2">                    
                    <label for ='nombre'>Nombre</label>
                    <textarea class ="md-textarea form-control col-12 " id ="nombre" name="razon_calificacion" style = "widht:100%" rows="1" ></textarea>
                    
                </div>
                <div class = "container mb-2">  
                    <label for ='correo'>Correo Electrónico</label>                  
                    <textarea class ="md-textarea form-control col-12 " id ="correo" name="razon_calificacion" style = "widht:100%" rows="1" ></textarea>
                    
                </div>
                <div class = "container mb-2">                    
                    <label for ='numero'>Número de Teléfono: </label>
                    <textarea class ="md-textarea form-control col-12 " id ="numero" name="razon_calificacion" style = "widht:100%" rows="1" ></textarea>                    
                </div>
                <button type="submit" name="login" class="btn btn-primary btn-lg btn-block  mt-5"> SIGUIENTE </button>
            
        </form>
    </div>
</div>