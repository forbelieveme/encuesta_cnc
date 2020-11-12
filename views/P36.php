<div class = "P36">

    <div class = "jumbotron">
        <div class = "container">
            <div class = "row row-header">                
                <div class = "col-sm-12">
                    <h4>Teniendo en cuenta una escala de 1 a 10, donde 1 es “Muy Insatisfecho” y 10
                     es “Muy satisfecho” ¿cuál es tu nivel de satisfacción con…? (PREGUNTAR A LOS
                     QUE RESPONDIÓ EN P35)</h4>
                </div>                    
            </div>
        </div>
    </div>
    <div class = "container">
        <form method = 'POST'>
           <div class = "row" id = "P36_1">

                <div class = "col-12" ><h5>Shows tarimas artistas invitados</h5></div>
                    <?php 
                    for ($counter = 1; $counter < 11; $counter++){
                        echo "<div  class = 'radioboton col-5 col-sm-1'>";                        
                        echo "<input class = 'radio-check' type='radio' name='opcion1' id='P36_1_". $counter."' value='". $counter."'>";
                        echo "<label class = 'radioboton-label' for = 'P36_1_". $counter."' >". $counter."</label>";
                        echo "</div>";
                    }
                    ?>                                                                                           
                </div>   
                <br>   
                <div class = "row" id = "P36_2">

                    <div class = "col-12" ><h5>Charlas auditorio principal</h5></div>
                    <?php 
                    for ($counter = 1; $counter < 11; $counter++){
                        echo "<div  class = 'radioboton col-5 col-sm-1'>";                        
                        echo "<input class = 'radio-check' type='radio' name='opcion2' id='P36_2_". $counter."' value='". $counter."'>";
                        echo "<label class = 'radioboton-label' for = '36_2_". $counter."' >". $counter."</label>";
                        echo "</div>";
                    }
                    ?>                                                                                           
                </div>    
                <br>
            <button style="margin-top: 10px;" type='submit'  class = "btn btn-primary btn-block"> Confirmar </button>    
        </form>
    </div>
</div>