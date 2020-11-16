<script>
    var numero_pregunta = 'p32';
    var siguiente = 'views/P33.php';
</script>
<div class="mt-5" id="P32">
    <div class="col-xl-6 offset-xl-3 col-lg-6 offset-lg-3 col-md-8 offset-md-2">
        <form method='POST' id="form_p32" class="was-validated" onsubmit="                
        submit_decision(false, 1, 'escala', numero_pregunta,
        getRadioVal(document.getElementById('form_p32'),'P32'),siguiente, true);
        return false;">
            <div class=" jumbotron">
                <div class="container">
                    <div class="row row-header">
                        <div class="col-sm-12">
                            <label>32. Teniendo en cuenta una escala de 1 a 10, donde 1 es “Muy Insatisfecho” y 10
                                es “Muy satisfecho” ¿Qué tan satisfecho te encuentras con la publicidad en
                                general de la Feria del Hogar 2020?</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group mt-5">
                <div class="container">
                    <div class="container text-center">
                        <?php
                        for ($counter = 1; $counter < 11; $counter++) {
                            echo "<div class='custom-control custom-radio custom-control-inline form-check-inline escala'>";
                            echo "<input class='custom-control-input' type='radio' name='P32' id='P32_" . $counter . "' value='" . $counter . "' required>";
                            echo "<label class='custom-control-label escala' for='P32_" . $counter . "'>" . $counter . "</label>";
                            echo "</div>";
                        }
                        ?>
                    </div>
                </div>
            </div>
            <div class="form-group mt-5">
                <button style="margin-top: 10px;" type='submit' class="btn btn-primary btn-block"> SIGUIENTE </button>
            </div>
        </form>
    </div>
</div>