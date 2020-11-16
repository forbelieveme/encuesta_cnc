<script>
    var numero_pregunta = 'p14';
    var siguiente = 'views/p15.php';
</script>
<div class="mt-5" id="p3">
    <div class="col-xl-6 offset-xl-3 col-lg-6 offset-lg-3 col-md-8 offset-md-2">
        <form method="post" id="form_p14" class="was-validated" onsubmit="        
        submit_decision(false, 1, 'escala', numero_pregunta,
        getRadioVal(document.getElementById('form_p14'),'P14'),siguiente);
        return false;">
            <div class="form-group">
                <div class="jumbotron">
                    <label for="P1">14. Teniendo en cuenta una escala de 1 a 10, donde 1 es “Definitivamente no asistiré” y
                        10 es “Definitivamente si asistiré” ¿Cuál es tu intención de asistir a la próxima versión de la
                        Feria del Hogar?
                    </label>
                </div>
                <div class="container text-center">
                    <?php
                    for ($counter = 1; $counter < 11; $counter++) {
                        echo "<div class='custom-control custom-radio custom-control-inline form-check-inline escala'>";
                        echo "<input class='custom-control-input' type='radio' name='P14' id='P14_" . $counter . "' value='" . $counter . "' required>";
                        echo "<label class='custom-control-label escala' for='P14_" . $counter . "'>" . $counter . "</label>";
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