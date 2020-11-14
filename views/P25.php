<script>
    var numero_pregunta = 'p25';
    var siguiente = 'views/P26.php';
</script>
<div class="mt-5" id="P25">
    <div class="col-xl-6 offset-xl-3 col-lg-6 offset-lg-3 col-md-8 offset-md-2">

        <div class="jumbotron">
            <div class="container">
                <div class="row row-header">
                    <div class="col-sm-12">
                        <label>25. Ahora cuál es tu satisfacción específicamente con la… </label>
                    </div>
                </div>
            </div>
        </div>

        <form method='POST' id="form_P25" onsubmit="return false;">
            <div class="form-group mt-5" id="P25_1">
                <label>Facilidad en el ingreso a la feria</label>
                <div class="container">
                    <?php
                    for ($counter = 1; $counter < 11; $counter++) {
                        echo "<div  class = 'form-check form-check-inline col-1'>";
                        echo "<input class = 'form-check-input' type='radio' name='opcion1' id='P25_1_" . $counter . "' value='" . $counter . "'>";
                        echo "<label class = 'form-check-label escala' for = 'P25_1_" . $counter . "' >" . $counter . "</label>";
                        echo "</div>";
                    }
                    ?>
                </div>
            </div>

            <div class="form-group mt-5" id="P25_2">
                <label>Atención del personal en el ingreso a la feria </label>
                <div class="container">
                    <?php
                    for ($counter = 1; $counter < 11; $counter++) {
                        echo "<div  class = 'form-check form-check-inline col-1'>";
                        echo "<input class = 'form-check-input' type='radio' name='opcion2' id='P25_2_" . $counter . "' value='" . $counter . "'>";
                        echo "<label class = 'form-check-label escala' for = 'P25_2_" . $counter . "' >" . $counter . "</label>";
                        echo "</div>";
                    }
                    ?>
                </div>
            </div>

            <div class="form-group mt-5" id="P25_3">
                <label>Aseo en baños y exteriores </label>
                <div class="container">

                    <?php
                    for ($counter = 1; $counter < 11; $counter++) {
                        echo "<div  class = 'form-check form-check-inline col-1'>";
                        echo "<input class = 'form-check-input' type='radio' name='opcion3' id='P25_3_" . $counter . "' value='" . $counter . "'>";
                        echo "<label class = 'form-check-label escala' for = 'P25_3_" . $counter . "' >" . $counter . "</label>";
                        echo "</div>";
                    }
                    ?>
                </div>
            </div>


            <div class="form-group mt-5" id="P25_4">
                <label>Aseo al interior de los pabellones </label>
                <div class="container">
                    <?php
                    for ($counter = 1; $counter < 11; $counter++) {
                        echo "<div  class = 'form-check form-check-inline col-1'>";
                        echo "<input class = 'form-check-input' type='radio' name='opcion4' id='P25_4_" . $counter . "' value='" . $counter . "'>";
                        echo "<label class = 'form-check-label escala' for = 'P25_4_" . $counter . "' >" . $counter . "</label>";
                        echo "</div>";
                    }
                    ?>
                </div>
            </div>

            <div class="form-group mt-5" id="P25_5">
                <label>Atención y amabilidad del Personal de Seguridad
                    <div class="container">
                        y vigilancia </label>
                <?php
                for ($counter = 1; $counter < 11; $counter++) {
                    echo "<div  class = 'form-check form-check-inline col-1'>";
                    echo "<input class = 'form-check-input' type='radio' name='opcion5' id='P25_5_" . $counter . "' value='" . $counter . "'>";
                    echo "<label class = 'form-check-label escala' for = 'P25_5_" . $counter . "' >" . $counter . "</label>";
                    echo "</div>";
                }
                ?>
            </div>
    </div>
    <div class="form-group mt-5" id="P25_6">
        <label>Disponibilidad del Personal de Seguridad y vigilancia</label>
        <div class="container">
            <?php
            for ($counter = 1; $counter < 11; $counter++) {
                echo "<div  class = 'form-check form-check-inline col-1'>";
                echo "<input class = 'form-check-input' type='radio' name='opcion5' id='P25_6_" . $counter . "' value='" . $counter . "'>";
                echo "<label class = 'form-check-label escala' for = 'P25_6_" . $counter . "' >" . $counter . "</label>";
                echo "</div>";
            }
            ?>
        </div>
    </div>


    <div class="form-group mt-5">
        <button type="submit" name="login" class=" col-12 btn btn-primary btn-lg btn-block  mt-5" onclick="
                submit_decision(true, 6, 'escala', 'p25',
                document.getElementById('form_P25'),siguiente);">
            SIGUIENTE </button>
    </div>
    </form>
</div>
</div>