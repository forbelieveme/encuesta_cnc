<script>
    var numero_pregunta = 'p23';
    var siguiente = 'views/P24.php';
</script>
<div class="mt-5" id="P23">
    <div class="col-xl-6 offset-xl-3 col-lg-6 offset-lg-3 col-md-8 offset-md-2">

        <div class="jumbotron">
            <div class="container">
                <div class="row row-header">
                    <div class="col-sm-12">
                        <label>23. Teniendo en cuenta una escala de 1 a 10, donde 1 es “Muy insatisfecho”
                            y 10 es “Muy satisfecho” ¿Cuál es tu nivel de satisfacción general con
                            respecto a todos los servicios prestados por Corferias a los
                            visitantes?
                        </label>
                    </div>
                </div>
            </div>
        </div>
        <form method='POST' id="form_p23" onsubmit="
        submit_decision(false, 1, 'escala', numero_pregunta,
        getRadioVal(document.getElementById('form_p23'),'P23'), siguiente, true);
        return false;">
            <div class="container text-center">
                <?php
                for ($counter = 1; $counter < 11; $counter++) {
                    echo "<div class='custom-control custom-radio custom-control-inline form-check-inline escala'>";
                    echo "<input class='custom-control-input' type='radio' name='P23' id='P23_" . $counter . "' value='" . $counter . "'>";
                    echo "<label class='custom-control-label escala' for='P23_" . $counter . "'>" . $counter . "</label>";
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