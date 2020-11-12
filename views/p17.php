<div class="mt-5" id="p3">
    <div class="col-xl-6 offset-xl-3 col-lg-6 offset-lg-3 col-md-8 offset-md-2">
        <form method="post" id="form_p17" onsubmit="submit_escala(getRadioVal(document.getElementById('form_p17'),'P17'), 'views/p18.php'); return false;">
            <div class="form-group">
                <div class="jumbotron">
                    <label for="P1">Teniendo en cuenta una escala de 1 a 10, donde 1 es “Muy insatisfecho” y
                        10 es “Muy satisfecho” ¿Qué tan satisfecho te encuentras en general con los expositores,
                        es decir con la muestra comercial de la Feria del Hogar 2020?
                    </label>
                </div>
                <div class="container">
                    <?php
                    for ($counter = 1; $counter < 11; $counter++) {
                        echo "<div class='form-check form-check-inline col-1'>";
                        echo "<input class='form-check-input' type='radio' name='P18' id='P18_" . $counter . "' value='" . $counter . "'>";
                        echo "<label class='form-check-label escala' for='inlineRadio18'>" . $counter . "</label>";
                        echo "</div";
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