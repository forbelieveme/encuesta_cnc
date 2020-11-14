<script>
    var numero_pregunta = "p37";
    siguiente = "views/P38.php"
</script>
<div class="mt-5" id="P37">
    <div class="col-xl-6 offset-xl-3 col-lg-6 offset-lg-3 col-md-8 offset-md-2">
        <form method='POST' id="form_p37" onsubmit="submit_decision(false, 1, 'escala', numero_pregunta,
        getRadioVal(document.getElementById('form_p37'),'P37'), siguiente, true);
        return false;">
            <div class="jumbotron">
                <div class="container">
                    <label>37. Teniendo en cuenta una escala de 1 a 10, donde 1 es “Muy insatisfecho” y
                        10 es “Muy satisfecho” ¿Qué tan satisfecho te encuentras en general con la agenda de
                        actividades de la Feria del Hogar 2020?
                    </label>
                </div>
            </div>
            <div class="container text-center">
                <?php
                for ($counter = 1; $counter < 11; $counter++) {
                    echo "<div class='custom-control custom-radio custom-control-inline form-check-inline escala'>";
                    echo "<input class='custom-control-input' type='radio' name='P37' id='P37_" . $counter . "' value='" . $counter . "'>";
                    echo "<label class='custom-control-label escala' for='P37_" . $counter . "'>" . $counter . "</label>";
                    echo "</div>";
                }
                ?>
            </div>
            <button type="submit" name="login" class="btn btn-primary btn-lg btn-block  mt-5">
                SIGUIENTE
            </button>
        </form>
    </div>
</div>