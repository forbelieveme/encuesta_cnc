<script>
    var numero_pregunta = 'p26';
    var siguiente = 'views/P27.php';
</script>
<div class="mt-5" id="P26">
    <div class="col-xl-6 offset-xl-3 col-lg-6 offset-lg-3 col-md-8 offset-md-2">

        <div class="jumbotron">
            <div class="container">
                <div class="row row-header">
                    <div class="col-sm-12">
                        <label>26. Ahora teniendo en cuenta una escala de 1 a 10, donde 1 es “Muy insatisfecho”
                            y 10 es “Muy satisfecho” ¿Cuál es tu nivel de satisfacción con los siguientes
                            aspectos de la infraestructura y señalización de Corferias? </label>
                    </div>
                </div>
            </div>
        </div>

        <form method='POST' id="form_P26" onsubmit="return false;">
            <div class="form-group mt-5" id="P26_1">
                <label class="mb-4">Señalización de la feria fuera de los pabellones - taquillas y áreas exteriores dentro de Corferias.</label>
                <div class="container text-center">
                    <?php
                    for ($counter = 1; $counter < 11; $counter++) {
                        echo "<div class='custom-control custom-radio custom-control-inline form-check-inline escala'>";
                        echo "<input class='custom-control-input' type='radio' name='P26_1' id='P26_1_" . $counter . "' value='" . $counter . "'>";
                        echo "<label class='custom-control-label escala' for='P26_1_" . $counter . "'>" . $counter . "</label>";
                        echo "</div>";
                    }
                    ?>
                </div>
            </div>

            <div class="form-group mt-5" id="P26_2">
                <label class="mb-4">Señalización dentro de los pabellones - Ubicación, mapas o guías de los expositores, nombre y numeración de los stands</label>
                <div class="container text-center">
                    <?php
                    for ($counter = 1; $counter < 11; $counter++) {
                        echo "<div class='custom-control custom-radio custom-control-inline form-check-inline escala'>";
                        echo "<input class='custom-control-input' type='radio' name='P26_2' id='P26_2_" . $counter . "' value='" . $counter . "'>";
                        echo "<label class='custom-control-label escala' for='P26_2_" . $counter . "'>" . $counter . "</label>";
                        echo "</div>";
                    }
                    ?>
                </div>
            </div>

            <div class="form-group mt-5" id="P26_3">
                <label class="mb-4">Infraestructura de Corferias (parqueaderos, baños y áreas de descanso en buen estado) </label>
                <div class="container text-center">
                    <?php
                    for ($counter = 1; $counter < 11; $counter++) {
                        echo "<div class='custom-control custom-radio custom-control-inline form-check-inline escala'>";
                        echo "<input class='custom-control-input' type='radio' name='P26_3' id='P26_3_" . $counter . "' value='" . $counter . "'>";
                        echo "<label class='custom-control-label escala' for='P26_3_" . $counter . "'>" . $counter . "</label>";
                        echo "</div>";
                    }
                    ?>
                </div>
            </div>
            <div class="form-group mt-5" id="P26_4">
                <label class="mb-4">Señalización de los servicios de Corferias como baños, puntos de información, plazoleta de comidas, etc.</label>
                <div class="container text-center">
                    <?php
                    for ($counter = 1; $counter < 11; $counter++) {
                        echo "<div class='custom-control custom-radio custom-control-inline form-check-inline escala'>";
                        echo "<input class='custom-control-input' type='radio' name='P26_4' id='P26_4_" . $counter . "' value='" . $counter . "'>";
                        echo "<label class='custom-control-label escala' for='P26_4_" . $counter . "'>" . $counter . "</label>";
                        echo "</div>";
                    }
                    ?>
                </div>
            </div>

            <div class="form-group mt-5" id="P26_5">
                <label class="mb-4">Señalización e información sobre los protocolos de bioseguridad</label>
                <div class="container text-center">
                    <?php
                    for ($counter = 1; $counter < 11; $counter++) {
                        echo "<div class='custom-control custom-radio custom-control-inline form-check-inline escala'>";
                        echo "<input class='custom-control-input' type='radio' name='P26_5' id='P26_5_" . $counter . "' value='" . $counter . "'>";
                        echo "<label class='custom-control-label escala' for='P26_5_" . $counter . "'>" . $counter . "</label>";
                        echo "</div>";
                    }
                    ?>
                </div>
            </div>
            <div class="form-group mt-5">
                <button style="margin-top: 10px;" type='submit' class="btn btn-primary btn-block" onclick="submit_decision(true, 5, 'escala', 'p26',
            document.getElementById('form_P26'),siguiente );"> SIGUIENTE </button>
            </div>
        </form>
    </div>
</div>