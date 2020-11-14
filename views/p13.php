<script>
    var numero_pregunta = 'p13';
    var siguiente = 'views/p14.php';
</script>
<div class="mt-5" id="p13">
    <div class="col-xl-6 offset-xl-3 col-lg-6 offset-lg-3 col-md-8 offset-md-2">
        <form method="post" id="form_p13" onsubmit="
         submit_decision(false, 1,'escala', numero_pregunta, 
         getRadioVal(document.getElementById('form_p13'),'P13'), siguiente); 
         return false;">
            <div class="form-group">
                <div class="jumbotron">
                    <label for="P1">13. Utilizando una escala de 0 a 10, donde 0 es “Definitivamente no la recomendaría” y
                        10 es “Definitivamente la recomendaría”, ¿qué tanto le recomendarías a un amigo, familiar o
                        colega el asistir a la Feria del Hogar 2020?
                    </label>
                </div>
                <div class="container text-center">
                    <?php
                    for ($counter = 1; $counter < 11; $counter++) {
                        echo "<div class='custom-control custom-radio custom-control-inline form-check-inline escala'>";
                        echo "<input class='custom-control-input' type='radio' name='P13' id='P13_" . $counter . "' value='" . $counter . "'>";
                        echo "<label class='custom-control-label escala' for='P13_" . $counter . "'>" . $counter . "</label>";
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