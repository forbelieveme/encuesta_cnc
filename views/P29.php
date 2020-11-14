<script>
    var numero_pregunta = 'p29';
    var siguiente = 'views/P30.php';
</script>
<div class="mt-5" id="P29">
    <div class="col-xl-6 offset-xl-3 col-lg-6 offset-lg-3 col-md-8 offset-md-2">

        <div class="jumbotron">
            <div class="container">
                <label>29. Teniendo en cuenta una escala de 1 a 10, donde 1 es “Muy insatisfecho” y 10
                    es “Muy satisfecho” ¿Cuál es Tu nivel de satisfacción con los siguientes aspectos
                    de la plazoleta de comidas?</label>
            </div>
        </div>

        <form method='POST' id="form_P29" onsubmit="return false;">
            <div class="form-group mt-5">
                <div class="container " id="P29_1">
                    <label>Tiempo de atención en la plazoleta de comidas</label>
                    <div class="form-check form-check-inline col-1">
                        <?php
                        for ($counter = 1; $counter < 11; $counter++) {
                            echo "<div  class = 'form-check form-check-inline col-1'>";
                            echo "<input class = 'form-check-input ' type='radio' name='opcion1' id='P29_1_" . $counter . "' value='" . $counter . "'>";
                            echo "<label class = 'form-check-label escala' for = 'P29_1_" . $counter . "' >" . $counter . "</label>";
                            echo "</div>";
                        }
                        ?>
                    </div>
                </div>
            </div>
            <div class="form-group mt-5">
                <div class="container" id="P29_2">
                    <label>Aseo en la plazoleta de comidas y comedores</label>
                    <div class="form-check-inline col-1">
                        <?php
                        for ($counter = 1; $counter < 11; $counter++) {
                            echo "<div class='form-check form-check-inline col-1'>";
                            echo "<input class='form-check-input' type='radio' name='P29' id='P29_2_" . $counter . "' value='" . $counter . "'>";
                            echo "<label class='form-check-label escala' for='inlineRadio29_2_'>" . $counter . "</label>";
                            echo "</div";
                        }
                        ?>
                    </div>
                </div>
            </div>
            <div class="form-group mt-5">
                <div class="container" id="P29_3">
                    <label>Disponibilidad de sillas y mesas para comer</label>
                    <div class="form-check form-check-inline col-1">
                        <?php
                        for ($counter = 1; $counter < 11; $counter++) {
                            echo "<div  class = 'form-check form-check-inline col-1'>";
                            echo "<input class = 'form-check-input' type='radio' name='opcion3' id='P29_3_" . $counter . "' value='" . $counter . "'>";
                            echo "<label class = 'form-check-label escala' for = 'P29_3_" . $counter . "' >" . $counter . "</label>";
                            echo "</div>";
                        }
                        ?>
                    </div>
                </div>

            </div>
            <div class="form-group mt-5">
                <button type="submit" name="login" class=" col-12 btn btn-primary btn-lg btn-block  mt-5" onclick="submit_decision(true, 3, 'escala', 'p29',
                document.getElementById('form_P29'),siguiente );"> SIGUIENTE </button>
            </div>
        </form>
    </div>
</div>