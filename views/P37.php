<div class = "P37">

    <div class = "jumbotron">
        <div class = "container">
            <div class = "row row-header">                
                <div class = "col-sm-12">
                    <h4>37. Teniendo en cuenta una escala de 1 a 10, donde 1 es “Muy insatisfecho” y 10
                    es “Muy satisfecho” ¿Qué tan satisfecho te encuentras en general con la agenda de 
                    actividades de la Feria del Hogar 2020?</h4>
                </div>                    
            </div>
        </div>
    </div>

    <div class = "container">
        <form method = 'POST'>
            <div class = "row" id = "P37">
                <?php 
                for ($counter = 1; $counter < 11; $counter++){
                    echo "<div  class = 'radioboton col-5 col-sm-1'>";                        
                    echo "<input class = 'radio-check' type='radio' name='opcion1' id='P37_". $counter."' value='". $counter."'>";
                    echo "<label class = 'radioboton-label' for = 'P37_". $counter."' >". $counter."</label>";
                    echo "</div>";
                }
                ?>                                                                                           
            </div> 
            <button style="margin-top: 10px;" type='submit'  class = "btn btn-primary btn-block"> Confirmar </button>    
        </form>
    </div>
</div>