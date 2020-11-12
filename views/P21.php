<div class="mt-5" id="p21">
    <div class="col-xl-6 offset-xl-3 col-lg-6 offset-lg-3 col-md-8 offset-md-2">
        <form method='POST' id="form_p21" onsubmit="submit_decision_bin2(getRadioVal(document.getElementById('form_p21'),'P21'), ['views/P23.php','views/P22.php']); return false;">
            <div class="form-group">
                <div class="jumbotron">
                    <label>21. Teniendo una escala de 1 a 10 donde 1 es “Muy insatisfecho” y 10 “Muy satisfecho”
                        , ¿Cuál es tu nivel de satisfacción con el proceso de compra de la boleta?
                    </label>
                </div>
                <div class="container">
                    <?php
                    for ($counter = 1; $counter < 11; $counter++) {
                        echo "<div class='form-check form-check-inline col-1'>";
                        echo "<input class='form-check-input' type='radio' name='P21' id='P21_" . $counter . "' value='" . $counter . "'>";
                        echo "<label class='form-check-label escala' for='inlineRadio21'>" . $counter . "</label>";
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