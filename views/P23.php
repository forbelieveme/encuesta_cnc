<div class = "mt-5" id= "P23">
    <div class="col-xl-6 offset-xl-3 col-lg-6 offset-lg-3 col-md-8 offset-md-2">
        <form method = 'POST'>
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
                
                <?php 
                            for ($counter = 1; $counter < 11; $counter++){
                                echo "<div  class = 'radioboton col-5 col-sm-1'>";                        
                                echo "<input class = 'radio-check' type='radio' name='opcion' id='P23_". $counter."' value='". $counter."'>";
                                echo "<label class = 'radioboton-label' for = 'P23_". $counter."' >". $counter."</label>";
                                echo "</div>";
                            }
                            ?>  
                <button style="margin-top: 10px;" type='submit'  class = "btn btn-primary btn-block"> Confirmar </button>    
                
            </div>
        </form>
    </div>
</div>            
    