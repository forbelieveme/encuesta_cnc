<script>
    var numero_pregunta = 'p26';
    var siguiente = 'views/P27.php';
</script>
<div class = "mt-5" id="P26">
    <div class="col-xl-6 offset-xl-3 col-lg-6 offset-lg-3 col-md-8 offset-md-2">
         
            <div class = "jumbotron">
                <div class = "container">
                    <div class = "row row-header">                
                        <div class = "col-sm-12">
                            <label>26. Ahora teniendo en cuenta una escala de 1 a 10, donde 1 es “Muy insatisfecho” 
                                y 10 es “Muy satisfecho” ¿Cuál es tu nivel de satisfacción con los siguientes 
                                aspectos de la infraestructura y señalización de Corferias? </label>
                        </div>                    
                    </div>
                </div>
            </div>
            
        <form method = 'POST' id="form_P26" onsubmit="return false;">              
                    <div class = "form-group mt-5" id = "P26_1">
                        <div class = "container" >
                            <h5>Señalización de la feria fuera de los pabellones 
                            - taquillas y áreas exteriores dentro de Corferias.</h5>
                            <div class = " form-check-inline col-1">
                                <?php 
                                for ($counter = 1; $counter < 11; $counter++){
                                    echo "<div  class = 'radioboton col-5 col-sm-1'>";                        
                                    echo "<input class = 'form-check-input' type='radio' name='opcion1' id='P26_1_". $counter."' value='". $counter."'>";
                                    echo "<label class = 'form-check-label escala' for = 'P26_1_". $counter."' >". $counter."</label>";
                                    echo "</div>";
                                }
                                ?>     
                            </div>      
                        </div>                                                                                  
                    </div>   
                     
                    <div class = "form-group mt-5" id = "P26_2">
                        <div class = "container" >
                            <h5>Señalización dentro de los pabellones - Ubicación, 
                                mapas o guías de los expositores, nombre y numeración de los stands</h5>
                            <div class = " form-check-inline col-1">
                                <?php 
                                for ($counter = 1; $counter < 11; $counter++){
                                    echo "<div  class = 'radioboton col-5 col-sm-1'>";                        
                                    echo "<input class = 'form-check-input' type='radio' name='opcion2' id='P26_2_". $counter."' value='". $counter."'>";
                                    echo "<label class = 'form-check-label escala' for = 'P26_2_". $counter."' >". $counter."</label>";
                                    echo "</div>";
                                }
                                ?>     
                            </div>       
                        </div>                                                                                 
                    </div>    
                   
                    <div class = "form-group mt-5" id = "P26_3">

                        <div class = "col-12" >
                            <h5>Infraestructura de Corferias (parqueaderos, baños, 
                            zonas de comidas, áreas de descanso al aire libre en buen estado) </h5>
                            <div class = " form-check-inline col-1">
                                <?php 
                                for ($counter = 1; $counter < 11; $counter++){
                                    echo "<div  class = 'radioboton col-5 col-sm-1'>";                        
                                    echo "<input class = 'form-check-input' type='radio' name='opcion3' id='P26_3_". $counter."' value='". $counter."'>";
                                    echo "<label class = 'form-check-label escala' for = 'P26_3_". $counter."' >". $counter."</label>";
                                    echo "</div>";
                                }
                                ?>     
                            </div>        
                        </div>                                                                                
                    </div>   
                    
                   
                    <div class = "form-group mt-5" id = "P26_4">

                        <div class = "col-12" >
                            <h5>Señalización de los servicios de Corferias como baños, 
                            puntos de información, plazoleta de comidas, etc.</h5>
                            <div class = " form-check-inline col-1">
                                <?php 
                                for ($counter = 1; $counter < 11; $counter++){
                                    echo "<div  class = 'radioboton col-5 col-sm-1'>";                        
                                    echo "<input class = 'form-check-input' type='radio' name='opcion4' id='P26_4_". $counter."' value='". $counter."'>";
                                    echo "<label class = 'form-check-label escala' for = 'P26_4_". $counter."' >". $counter."</label>";
                                    echo "</div>";
                                }
                                ?>                                                                                           
                            </div>  
                        </div>
                    </div>    
                   
                    <div class = "form-group mt-5" id = "P26_5">
                        <div class = "col-12" >
                            <h5>Señalización e información sobre los protocolos de
                                bioseguridad</h5>
                            <div class = " form-check-inline col-1">
                                <?php 
                                for ($counter = 1; $counter < 11; $counter++){
                                    echo "<div  class = 'radioboton col-5 col-sm-1'>";                        
                                    echo "<input class = 'form-check-input' type='radio' name='opcion5' id='P26_5_". $counter."' value='". $counter."'>";
                                    echo "<label class = 'form-check-label escala' for = 'P26_5_". $counter."' >". $counter."</label>";
                                    echo "</div>";
                                }
                                ?>       
                            </div>      
                        </div>                                                                                
                    </div>    
                 
                    
            <div class = "form-group mt-5">    
            <button style="margin-top: 10px;" type='submit'  class = "btn btn-primary btn-block"
            onclick = "submit_decision(true, 5, 'escala', 'p26',
            document.getElementById('form_P26'),siguiente );"
            > Confirmar </button>    
            </div>            
        </form>
    </div>
</div>