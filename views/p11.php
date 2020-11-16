<script>
    var numero_pregunta = 'p11';
    var siguiente = 'views/p12.php'; 
</script>
<div class="mt-5" id="p11">
    <div class="col-xl-6 offset-xl-3 col-lg-6 offset-lg-3 col-md-8 offset-md-2">
        <form method="post" class="was-validated" id="form_p11" 
        onsubmit="
        submit_decision(false, 1, 'escala', numero_pregunta,
        getRadioVal(document.getElementById('form_p11'),'P11'), siguiente, true);
        return false;">
            <div class="form-group">
                <div class="jumbotron">
                    <label for="P1">11. Teniendo en cuenta una escala de 1 a 10, donde 1 es “Muy Insatisfecho” y
                        10 es “Muy satisfecho”, en general ¿Qué tan satisfecho estás con la Feria del Hogar 2020?
                    </label>
                </div>
                <div class="container text-center">
                    <?php
                    for ($counter = 1; $counter < 11; $counter++) {
                        echo "<div class='custom-control custom-radio custom-control-inline form-check-inline escala'>";
                        echo "<input class='custom-control-input' type='radio' name='P11' id='P11_" . $counter . "' value='" . $counter . "'>";
                        echo "<label class='custom-control-label escala' for='P11_" . $counter . "'>" . $counter . "</label>";
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