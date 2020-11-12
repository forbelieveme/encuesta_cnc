<div class = "mt-5" id= "P28">
    <div class="col-xl-6 offset-xl-3 col-lg-6 offset-lg-3 col-md-8 offset-md-2">
        <form method = 'POST'> 
            <div class = "jumbotron">
                <div class = "container">
                    <div class = "row row-header">                
                        <div class = "col-sm-12">
                            <h4>28. Ahora teniendo en cuenta una escala de 1 a 10, donde 1 es “Muy insatisfecho”
                                y 10 es “Muy satisfecho” ¿Cuál es tu nivel de satisfacción con … (PONER LOS
                                SERVICIO UTILIZADOS EN P27)? </h4>
                        </div>                    
                    </div>
                </div>
            </div>


            <div class = "form-group mt-5">                       
                <div class = "container" id = "P28_1">
                    <h5>Parqueadero Verde</h5>
                    <div class = "form-check form-check-inline col-sm-1" >
                        <?php 
                        for ($counter = 1; $counter < 11; $counter++){
                            echo "<div  class = 'radioboton col-5 col-sm-1'>";                        
                            echo "<input class = 'form-check-input' type='radio' name='opcion1' id='P28_1_". $counter."' value='". $counter."'>";
                            echo "<label class = 'form-check-label escala' for = 'P28_1_". $counter."' >". $counter."</label>";
                            echo "</div>";
                        }
                        ?>   
                    </div>                                                                                        
                </div>   
            </div>

            <div class = "form-group mt-5">
                <div class = "container" id = "P28_2">
                    <h5>Parqueadero Torre</h5>
                    <div class = "form-check form-check-inline col-1" >
                        <?php 
                        for ($counter = 1; $counter < 11; $counter++){
                            echo "<div  class = 'radioboton col-5 col-sm-1'>";                        
                            echo "<input class = 'form-check-input' type='radio' name='opcion2' id='P28_2_". $counter."' value='". $counter."'>";
                            echo "<label class = 'form-check-label escala' for = 'P28_2_". $counter."' >". $counter."</label>";
                            echo "</div>";
                        }
                        ?>             
                    </div>                                                                              
                </div>    
            </div>
            
            <div class = "form-group mt-5">
                <div class = "container" id = "P28_3">
                    <h5>Maletero / Paquetero</h5>
                    <div class = "form-check form-check-inline col-1" >
                        <?php 
                        for ($counter = 1; $counter < 11; $counter++){
                            echo "<div  class = 'radioboton col-5 col-sm-1'>";                        
                            echo "<input class = 'form-check-input' type='radio' name='opcion3' id='P28_3_". $counter."' value='". $counter."'>";
                            echo "<label class = 'form-check-label escala' for = 'P28_3_". $counter."' >". $counter."</label>";
                            echo "</div>";
                        }
                        ?>       
                    </div>                                                                                    
                </div>   
                        

            </div>
            
            <div class = "form-group mt-5">
                        
                <div class = "container" id = "P28_4">
                    <h5>Plazoleta de comidas</h5>
                    <div class = "form-check form-check-inline col-1" >
                        <?php 
                        for ($counter = 1; $counter < 11; $counter++){
                            echo "<div  class = 'radioboton col-5 col-sm-1'>";                        
                            echo "<input class = 'form-check-input' type='radio' name='opcion4' id='P28_4_". $counter."' value='". $counter."'>";
                            echo "<label class = 'form-check-label escala' for = 'P28_4_". $counter."' >". $counter."</label>";
                            echo "</div>";
                        }
                        ?>             
                    </div>                                                                              
                </div>    

            </div>
            
            <div class = "form-group mt-5">
                
                <div class = "container" id = "P28_5">
                    <h5>Punto de información</h5>
                    <div class = "form-check form-check-inline col-1" >
                        <?php 
                        for ($counter = 1; $counter < 11; $counter++){
                            echo "<div  class = 'radioboton col-5 col-sm-1'>";                        
                            echo "<input class = form-check-input' type='radio' name='opcion5' id='P28_5_". $counter."' value='". $counter."'>";
                            echo "<label class = 'form-check-label escala' for = 'P28_5_". $counter."' >". $counter."</label>";
                            echo "</div>";
                        }
                        ?>                                                  
                    </div>                                         
                </div>    
                    
            </div>              
            <div class = "form-group mt-5">                                  
                <button style="margin-top: 10px;" type='submit'  class = "btn btn-primary btn-block"> Confirmar </button>    
            </div>    
          
            
        </form>
    </div>
</div>