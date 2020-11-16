<script>
    var numero_pregunta = 'p21';
    var siguiente = ['views/P23.php', 'views/P22.php'];
</script>
<div class="mt-5" id="p21">
    <div class="col-xl-6 offset-xl-3 col-lg-6 offset-lg-3 col-md-8 offset-md-2">
        <form method='POST' id="form_p21" class="was-validated" onsubmit="
        submit_decision(false, 1, 'radio', numero_pregunta,
        getRadioVal(document.getElementById('form_p21'),'P21'),
        Obtener_siguiente('p21', 
        getRadioVal(document.getElementById('form_p21'),'P21'),
        siguiente), true);
        return false;">
            <div class="form-group">
                <div class="jumbotron">
                    <label>21. Teniendo una escala de 1 a 10 donde 1 es “Muy insatisfecho” y 10 “Muy satisfecho”
                        , ¿Cuál es tu nivel de satisfacción con el proceso de compra de la boleta?
                    </label>
                </div>
                <div class="container text-center">
                    <?php
                    for ($counter = 1; $counter < 11; $counter++) {
                        echo "<div class='custom-control custom-radio custom-control-inline form-check-inline escala'>";
                        echo "<input class='custom-control-input' type='radio' name='P21' id='P21_" . $counter . "' value='" . $counter . "' required>";
                        echo "<label class='custom-control-label escala' for='P21_" . $counter . "'>" . $counter . "</label>";
                        echo "</div>";
                    }
                    ?>
                </div>
            </div>
            <button type="submit" name="login" class="btn btn-primary btn-lg btn-block  mt-5">
                SIGUIENTE
            </button>
        </form>
    </div>
</div>