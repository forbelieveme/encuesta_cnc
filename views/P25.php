<div class = "P25">

    <div class = "jumbotron">
        <div class = "container">
            <div class = "row row-header">                
                <div class = "col-sm-12">
                    <h4>25. Ahora cuál es tu satisfacción específicamente con la… </h4>
                </div>                    
            </div>
        </div>
    </div>
    <div class = "container">
        <form method = 'POST'>        
                <div class = "row" id = "P25_1">

                    <div class = "col-12" ><h5>Facilidad en el ingreso a la feria</h5></div>
                    <?php 
                    for ($counter = 1; $counter < 11; $counter++){
                        echo "<div  class = 'radioboton col-5 col-sm-1'>";                        
                        echo "<input class = 'radio-check' type='radio' name='opcion1' id='P25_1_". $counter."' value='". $counter."'>";
                        echo "<label class = 'radioboton-label' for = 'P25_1_". $counter."' >". $counter."</label>";
                        echo "</div>";
                    }
                    ?>                                                                                           
                </div>   
                <br>   
                <div class = "row" id = "P25_2">

                    <div class = "col-12" ><h5>Atención del personal en el ingreso a la feria </h5></div>
                    <?php 
                    for ($counter = 1; $counter < 11; $counter++){
                        echo "<div  class = 'radioboton col-5 col-sm-1'>";                        
                        echo "<input class = 'radio-check' type='radio' name='opcion2' id='P25_2_". $counter."' value='". $counter."'>";
                        echo "<label class = 'radioboton-label' for = 'P25_2_". $counter."' >". $counter."</label>";
                        echo "</div>";
                    }
                    ?>                                                                                           
                </div>    
                <br>
                <div class = "row" id = "P25_3">

                    <div class = "col-12" ><h5>Aseo en baños y exteriores </h5></div>
                    <?php 
                    for ($counter = 1; $counter < 11; $counter++){
                        echo "<div  class = 'radioboton col-5 col-sm-1'>";                        
                        echo "<input class = 'radio-check' type='radio' name='opcion3' id='P25_3_". $counter."' value='". $counter."'>";
                        echo "<label class = 'radioboton-label' for = 'P25_3_". $counter."' >". $counter."</label>";
                        echo "</div>";
                    }
                    ?>                                                                                           
                </div>   
                
                <br>
                <div class = "row" id = "P25_4">

                    <div class = "col-12" ><h5>Aseo al interior de los pabellones </h5></div>
                    <?php 
                    for ($counter = 1; $counter < 11; $counter++){
                        echo "<div  class = 'radioboton col-5 col-sm-1'>";                        
                        echo "<input class = 'radio-check' type='radio' name='opcion4' id='P25_4_". $counter."' value='". $counter."'>";
                        echo "<label class = 'radioboton-label' for = 'P25_4_". $counter."' >". $counter."</label>";
                        echo "</div>";
                    }
                    ?>                                                                                           
                </div>    
                <br>
                <div class = "row" id = "P25_5">

                    <div class = "col-12" ><h5>Atención y amabilidad del Personal de Seguridad 
                        y vigilancia </h5></div>
                    <?php 
                    for ($counter = 1; $counter < 11; $counter++){
                        echo "<div  class = 'radioboton col-5 col-sm-1'>";                        
                        echo "<input class = 'radio-check' type='radio' name='opcion5' id='P25_5_". $counter."' value='". $counter."'>";
                        echo "<label class = 'radioboton-label' for = 'P25_5_". $counter."' >". $counter."</label>";
                        echo "</div>";
                    }
                    ?>                                                                                           
                </div>    
                <br>
                <div class = "row" id = "P25_6">

                    <div class = "col-12" ><h5>Disponibilidad del Personal de Seguridad 
                        y vigilancia </h5></div>
                    <?php 
                    for ($counter = 1; $counter < 11; $counter++){
                        echo "<div  class = 'radioboton col-5 col-sm-1'>";                        
                        echo "<input class = 'radio-check' type='radio' name='opcion6' id='P25_6_". $counter."' value='". $counter."'>";
                        echo "<label class = 'radioboton-label' for = 'P25_6_". $counter."' >". $counter."</label>";
                        echo "</div>";
                    }
                    ?>                                                                                           
                </div>   
                <br>     
                
                
            <button style="margin-top: 10px;" type='submit'  class = "btn btn-primary btn-block"> Confirmar </button>    
        </form>
    </div>
</div>