<div class = "mt-5" id= "P29">
    <div class="col-xl-6 offset-xl-3 col-lg-6 offset-lg-3 col-md-8 offset-md-2">
        <form method = 'POST'>      
            <div class = "jumbotron">
                <div class = "container">
                    <div class = "row row-header">                
                        <div class = "col-sm-12">
                            <h4>29. Teniendo en cuenta una escala de 1 a 10, donde 1 es “Muy insatisfecho” y 10
                                es “Muy satisfecho” ¿Cuál es Tu nivel de satisfacción con los siguientes aspectos
                                de la plazoleta de comidas? (INDUCIDA, ÚNICA RESPUESTA POR FILA) </h4>
                        </div>                    
                    </div>
                </div>
            </div>
            <div class = "container">
                  
                <div class = "row" id = "P29_1">

                    <div class = "col-12" ><h5>Tiempo de atención en la plazoleta de comidas</h5></div>
                    <?php 
                    for ($counter = 1; $counter < 11; $counter++){
                        echo "<div  class = 'radioboton col-5 col-sm-1'>";                        
                        echo "<input class = 'radio-check' type='radio' name='opcion1' id='P29_1_". $counter."' value='". $counter."'>";
                        echo "<label class = 'radioboton-label' for = 'P29_1_". $counter."' >". $counter."</label>";
                        echo "</div>";
                    }
                    ?>                                                                                           
                </div>   
                <br>   
                <div class = "row" id = "P29_2">

                    <div class = "col-12" ><h5>Aseo en la plazoleta de comidas y comedores</h5></div>
                    <?php 
                    for ($counter = 1; $counter < 11; $counter++){
                        echo "<div  class = 'radioboton col-5 col-sm-1'>";                        
                        echo "<input class = 'radio-check' type='radio' name='opcion2' id='P29_2_". $counter."' value='". $counter."'>";
                        echo "<label class = 'radioboton-label' for = 'P29_2_". $counter."' >". $counter."</label>";
                        echo "</div>";
                    }
                    ?>                                                                                           
                </div>    
                <br>
                <div class = "row" id = "P29_3">

                    <div class = "col-12" ><h5>Disponibilidad de sillas y mesas para comer</h5></div>
                    <?php 
                    for ($counter = 1; $counter < 11; $counter++){
                        echo "<div  class = 'radioboton col-5 col-sm-1'>";                        
                        echo "<input class = 'radio-check' type='radio' name='opcion3' id='P29_3_". $counter."' value='". $counter."'>";
                        echo "<label class = 'radioboton-label' for = 'P29_3_". $counter."' >". $counter."</label>";
                        echo "</div>";
                    }
                    ?>                                                                                           
                </div>   
                
                <br>
                <button style="margin-top: 10px;" type='submit'  class = "btn btn-primary btn-block"> Confirmar </button>    
          
            </div>
        </form>
    </div>
</div>