<div class = "P23">

    <div class = "jumbotron">
        <div class = "container">
            <div class = "row row-header">                
                <div class = "col-sm-12">
                    <h4>23. Teniendo en cuenta una escala de 1 a 10, donde 1 es “Muy insatisfecho”
                         y 10 es “Muy satisfecho” ¿Cuál es tu nivel de satisfacción general con 
                         respecto a todos los servicios generales prestados por Corferias a los
                          visitantes? </h4>
                </div>                    
            </div>
        </div>
    </div>

    <div class = "container">
        <form method = 'POST'>
        <?php 
                    for ($counter = 1; $counter < 11; $counter++){
                        echo "<div  class = 'radioboton col-5 col-sm-1'>";                        
                        echo "<input class = 'radio-check' type='radio' name='opcion' id='P23_". $counter."' value='". $counter."'>";
                        echo "<label class = 'radioboton-label' for = 'P23_". $counter."' >". $counter."</label>";
                        echo "</div>";
                    }
                    ?>  
        <button style="margin-top: 10px;" type='submit'  class = "btn btn-primary btn-block"> Confirmar </button>    
        </form>
    </div>

</div>            
    