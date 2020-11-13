<div class = "mt-5" id= "P37">
    <div class="col-xl-6 offset-xl-3 col-lg-6 offset-lg-3 col-md-8 offset-md-2">
        <form method = 'POST'>
            <div class = "jumbotron">
                <div class = "container">
                    <div class = "row row-header">                
                        <div class = "col-sm-12">
                            <label id="preg_p18"></label>
                        </div>                    
                    </div>
                </div>
            </div>
            <div class="form-group mt-5">
                <div class = "container">         
                    <div class='form-check form-check-inline col-1'>                           
                        <?php 
                            for ($counter = 1; $counter < 11; $counter++){
                                echo "<div  class = 'radioboton col-5 col-sm-1'>";                        
                                echo "<input class='form-check-input' type='radio' name='P37' id='P37_". $counter."' value='". $counter."'>";
                                echo "<label class='form-check-label escala' for='P37_'>".$counter."</label>";
                                echo "</div>";
                            }
                        ?>    
                    </div>                                                                                          
                    
                    <button type="submit" name="login" class="btn btn-primary btn-lg btn-block  mt-5"> SIGUIENTE </button>
                    
                </div>
            </div>
        </form>
    </div>
</div>
<script>
    $(document).ready(function() {
        cambia_texto_pregunta("preg_p37");
    });
</script>