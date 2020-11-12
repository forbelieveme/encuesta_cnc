<script>
    var numero_pregunta = ['p13'];
</script>
<div class="mt-5" id="p3">
    <div class="col-xl-6 offset-xl-3 col-lg-6 offset-lg-3 col-md-8 offset-md-2">
        <form method="post" id="form_p13" onsubmit="submit_escala(getRadioVal(document.getElementById('form_p13'),'P13'), 'views/p14.php', numero_pregunta); return false;">
            <div class="form-group">
                <div class="jumbotron">
                    <label for="P1">13. Utilizando una escala de 0 a 10, donde 0 es “Definitivamente no la recomendaría” y
                        10 es “Definitivamente la recomendaría”, ¿qué tanto le recomendarías a un amigo, familiar o
                        colega el asistir a la Feria del Hogar 2020?
                    </label>
                </div>
                <div class="container p13">
                    <?php
                    for ($counter = 0; $counter < 11; $counter++) {
                        echo "<div class='form-check form-check-inline col-1'>";
                        echo "<input class='form-check-input' type='radio' name='P13' id='P13_" . $counter . "' value='" . $counter . "'>";
                        echo "<label class='form-check-label escala p13' for='inlineRadio13'>" . $counter . "</label>";
                        echo "</div";
                    }
                    ?>
                </div>
            </div>
            <button type="submit" name="login" class="btn btn-primary btn-lg btn-block  mt-5">
                INGRESAR
            </button>
        </form>
    </div>
</div>