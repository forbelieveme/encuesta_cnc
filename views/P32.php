<div class = "mt-5" id="P32">
    <div class="col-xl-6 offset-xl-3 col-lg-6 offset-lg-3 col-md-8 offset-md-2">
        <form method='POST'>    
            <div class = "jumbotron">
                <div class = "container">
                    <div class = "row row-header">                
                        <div class = "col-sm-12">
                            <label>32. Teniendo en cuenta una escala de 1 a 10, donde 1 es “Muy Insatisfecho” y 10
                                es “Muy satisfecho” ¿Qué tan satisfecho te encuentras con la publicidad en
                                general de la Feria del Hogar 2020?</label>
                        </div>                    
                    </div>
                </div>
            </div>
            <div class="form-group mt-5">
                <div class="container">       
                    <div class='form-check form-check-inline col-1'>                           
                        <?php 
                            for ($counter = 1; $counter < 11; $counter++){
                                echo "<div  class = 'radioboton col-5 col-sm-1'>";                        
                                echo "<input class='form-check-input' type='radio' name='P32' id='P32_". $counter."' value='". $counter."'>";
                                echo "<label class='form-check-label escala' for='P32_'>".$counter."</label>";
                                echo "</div>";
                            }
                        ?>  
                    </div>      
                </div>
            </div>
            <div class="form-group mt-5">        
                <button style="margin-top: 10px;" type='submit' class = "btn btn-primary btn-block"> Confirmar </button>                                                        
            </div>
        </form>
    </div>
</div>