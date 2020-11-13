<script>
    var numero_pregunta = 'p15';
    var siguiente = 'views/p16.php';
</script>
<div class="mt-5" id="p3">
    <div class="col-xl-6 offset-xl-3 col-lg-6 offset-lg-3 col-md-8 offset-md-2">
        <form method="post" id="form_p15" 
        onsubmit="                
        submit_decision(false, 1, 'escala', numero_pregunta,
        getRadioVal(document.getElementById('form_p15'),'P15'),siguiente);
        return false;">
        
            <div class="form-group">
                <div class="jumbotron">
                    <label for="P1">15. Con una escala del 1 al 10, donde 1 es “Muy insatisfecho” y
                        10 “Muy satisfecho”, ¿Cuál es tu satisfacción con los protocolos de seguridad
                        implementados por Corferias durante tu visita a la Feria del Hogar?
                    </label>
                </div>
                <div class="container">
                    <?php
                    for ($counter = 1; $counter < 11; $counter++) {
                        echo "<div class='form-check form-check-inline col-1'>";
                        echo "<input class='form-check-input' type='radio' name='P15' id='P15_" . $counter . "' value='" . $counter . "'>";
                        echo "<label class='form-check-label escala' for='inlineRadio15'>" . $counter . "</label>";
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