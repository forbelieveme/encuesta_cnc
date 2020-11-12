<div class = "P19">

    <div class = "jumbotron">
        <div class = "container">
            <div class = "row row-header">                
                <div class = "col-sm-12">
                    <h4>19. Teniendo en cuenta una escala de 1 a 10, donde 1 es “Muy insatisfecho” y 10 es 
                        “Muy satisfecho”, ¿Cómo evalúas a los expositores específicamente en cuanto ala…?
                    </h4>
                </div>                    
            </div>
        </div>
    </div>
    <div class = "container">
        <form method = 'POST'>        
                <div class = "row" id = "P19_1">

                    <div class = "col-12" ><h5>Atención del expositor (Nivel de preparación de los expositores
                         si cuenta con tarjetas, maneja la información requerida, brinda un servicio completo) 
                        </h5></div>
                    <?php 
                    for ($counter = 1; $counter < 11; $counter++){
                        echo "<div  class = 'radioboton col-5 col-sm-1'>";                        
                        echo "<input class = 'radio-check' type='radio' name='opcion' id='P19_1_". $counter."' value='". $counter."'>";
                        echo "<label class = 'radioboton-label' for = 'P19_1_". $counter."' >". $counter."</label>";
                        echo "</div>";
                    }
                    ?>                                                                                           
                </div>   
                <br>   
                <div class = "row" id = "P19_2">

                    <div class = "col-12" ><h5>Cantidad de expositores (suficientes) </h5></div>
                    <?php 
                    for ($counter = 1; $counter < 11; $counter++){
                        echo "<div  class = 'radioboton col-5 col-sm-1'>";                        
                        echo "<input class = 'radio-check' type='radio' name='opcion' id='P19_2_". $counter."' value='". $counter."'>";
                        echo "<label class = 'radioboton-label' for = 'P19_2_". $counter."' >". $counter."</label>";
                        echo "</div>";
                    }
                    ?>                                                                                           
                </div>    
                <br>
                <div class = "row" id = "P19_3">

                    <div class = "col-12" ><h5>Calidad de expositores - Tipo de productos ofrecidos </h5></div>
                    <?php 
                    for ($counter = 1; $counter < 11; $counter++){
                        echo "<div  class = 'radioboton col-5 col-sm-1'>";                        
                        echo "<input class = 'radio-check' type='radio' name='opcion' id='P19_3_". $counter."' value='". $counter."'>";
                        echo "<label class = 'radioboton-label' for = 'P19_3_". $counter."' >". $counter."</label>";
                        echo "</div>";
                    }
                    ?>                                                                                           
                </div>   
                
                <br>
                <div class = "row" id = "P19_4">

                    <div class = "col-12" ><h5>Presencia de productos novedosos y/o nuevos productos </h5></div>
                    <?php 
                    for ($counter = 1; $counter < 11; $counter++){
                        echo "<div  class = 'radioboton col-5 col-sm-1'>";                        
                        echo "<input class = 'radio-check' type='radio' name='opcion' id='P19_4_". $counter."' value='". $counter."'>";
                        echo "<label class = 'radioboton-label' for = 'P19_4_". $counter."' >". $counter."</label>";
                        echo "</div>";
                    }
                    ?>                                                                                           
                </div>    
                <br>
                <div class = "row" id = "P19_5">

                    <div class = "col-12" ><h5>Presencia de empresas y marcas conocidas del sector – 
                        representatividad de empresas </h5></div>
                    <?php 
                    for ($counter = 1; $counter < 11; $counter++){
                        echo "<div  class = 'radioboton col-5 col-sm-1'>";                        
                        echo "<input class = 'radio-check' type='radio' name='opcion' id='P19_5_". $counter."' value='". $counter."'>";
                        echo "<label class = 'radioboton-label' for = 'P19_5_". $counter."' >". $counter."</label>";
                        echo "</div>";
                    }
                    ?>                                                                                           
                </div>    
                <br>
                <div class = "row" id = "P19_6">

                    <div class = "col-12" ><h5>Variedad de Productos y/o servicios </h5></div>
                    <?php 
                    for ($counter = 1; $counter < 11; $counter++){
                        echo "<div  class = 'radioboton col-5 col-sm-1'>";                        
                        echo "<input class = 'radio-check' type='radio' name='opcion' id='P19_6_". $counter."' value='". $counter."'>";
                        echo "<label class = 'radioboton-label' for = 'P19_6_". $counter."' >". $counter."</label>";
                        echo "</div>";
                    }
                    ?>                                                                                           
                </div>   
                <br>                                                       
                <div class = "row" id = "P19_7">

                    <div class = "col-12" ><h5>El diseño de stands  </h5></div>
                    <?php 
                    for ($counter = 1; $counter < 11; $counter++){
                        echo "<div  class = 'radioboton col-5 col-sm-1'>";                        
                        echo "<input class = 'radio-check' type='radio' name='opcion' id='P19_7_". $counter."' value='". $counter."'>";
                        echo "<label class = 'radioboton-label' for = 'P19_7_". $counter."' >". $counter."</label>";
                        echo "</div>";
                    }
                    ?>                                                                                           
                </div>    
                <br>                
                    


            <button style="margin-top: 10px;" type='submit'  class = "btn btn-primary btn-block"> Confirmar </button>    
        </form>
    </div>
</div>