<div class = "P26">

    <div class = "jumbotron">
        <div class = "container">
            <div class = "row row-header">                
                <div class = "col-sm-12">
                    <h4>26. Ahora teniendo en cuenta una escala de 1 a 10, donde 1 es “Muy insatisfecho” 
                        y 10 es “Muy satisfecho” ¿Cuál es tu nivel de satisfacción con los siguientes 
                        aspectos de la infraestructura y señalización de Corferias? </h4>
                </div>                    
            </div>
        </div>
    </div>
    <div class = "container">
        <form method = 'POST'>        
                <div class = "row" id = "P26_1">

                    <div class = "col-12" ><h5>Señalización de la feria fuera de los pabellones 
                        - taquillas y áreas exteriores dentro de Corferias.</h5></div>
                    <?php 
                    for ($counter = 1; $counter < 11; $counter++){
                        echo "<div  class = 'radioboton col-5 col-sm-1'>";                        
                        echo "<input class = 'radio-check' type='radio' name='opcion1' id='P26_1_". $counter."' value='". $counter."'>";
                        echo "<label class = 'radioboton-label' for = 'P26_1_". $counter."' >". $counter."</label>";
                        echo "</div>";
                    }
                    ?>                                                                                           
                </div>   
                <br>   
                <div class = "row" id = "P26_2">

                    <div class = "col-12" ><h5>Señalización dentro de los pabellones - Ubicación, 
                        mapas o guías de los expositores, nombre y numeración de los stands</h5></div>
                    <?php 
                    for ($counter = 1; $counter < 11; $counter++){
                        echo "<div  class = 'radioboton col-5 col-sm-1'>";                        
                        echo "<input class = 'radio-check' type='radio' name='opcion2' id='P26_2_". $counter."' value='". $counter."'>";
                        echo "<label class = 'radioboton-label' for = 'P26_2_". $counter."' >". $counter."</label>";
                        echo "</div>";
                    }
                    ?>                                                                                           
                </div>    
                <br>
                <div class = "row" id = "P26_3">

                    <div class = "col-12" ><h5>Infraestructura de Corferias (parqueaderos, baños, 
                        zonas de comidas, áreas de descanso al aire libre en buen estado) </h5></div>
                    <?php 
                    for ($counter = 1; $counter < 11; $counter++){
                        echo "<div  class = 'radioboton col-5 col-sm-1'>";                        
                        echo "<input class = 'radio-check' type='radio' name='opcion3' id='P26_3_". $counter."' value='". $counter."'>";
                        echo "<label class = 'radioboton-label' for = 'P26_3_". $counter."' >". $counter."</label>";
                        echo "</div>";
                    }
                    ?>                                                                                           
                </div>   
                
                <br>
                <div class = "row" id = "P26_4">

                    <div class = "col-12" ><h5>Señalización de los servicios de Corferias como baños, 
                        puntos de información, plazoleta de comidas, etc.</h5></div>
                    <?php 
                    for ($counter = 1; $counter < 11; $counter++){
                        echo "<div  class = 'radioboton col-5 col-sm-1'>";                        
                        echo "<input class = 'radio-check' type='radio' name='opcion4' id='P26_4_". $counter."' value='". $counter."'>";
                        echo "<label class = 'radioboton-label' for = 'P26_4_". $counter."' >". $counter."</label>";
                        echo "</div>";
                    }
                    ?>                                                                                           
                </div>    
                <br>
                <div class = "row" id = "P26_5">

                    <div class = "col-12" ><h5>Señalización e información sobre los protocolos de
                              bioseguridad</h5></div>
                    <?php 
                    for ($counter = 1; $counter < 11; $counter++){
                        echo "<div  class = 'radioboton col-5 col-sm-1'>";                        
                        echo "<input class = 'radio-check' type='radio' name='opcion5' id='P26_5_". $counter."' value='". $counter."'>";
                        echo "<label class = 'radioboton-label' for = 'P26_5_". $counter."' >". $counter."</label>";
                        echo "</div>";
                    }
                    ?>                                                                                           
                </div>    
                <br>
                
                
            <button style="margin-top: 10px;" type='submit'  class = "btn btn-primary btn-block"> Confirmar </button>    
        </form>
    </div>
</div>