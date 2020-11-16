<script>
    var numero_pregunta = 'p19';
    var siguiente = 'views/P20.php'
</script>
<div class="mt-5" id="p19">
    <div class="col-xl-6 offset-xl-3 col-lg-6 offset-lg-3 col-md-8 offset-md-2">


        <div class="jumbotron">
            <div class="container">
                <div class="row row-header">
                    <div class="col-sm-12">
                        <label>19. Teniendo en cuenta una escala de 1 a 10, donde 1 es “Muy insatisfecho” y
                            10 es “Muy satisfecho”, ¿Cómo evalúas a los expositores específicamente en cuanto a la...?
                        </label>
                    </div>
                </div>
            </div>
        </div>
        <form method='POST' id="form_p19" class="was-validated" onsubmit="return false;">
            <div class="form-group mt-5" >
                <label class="mb-4">Atención del expositor (Nivel de preparación de los expositores
                    si cuenta con tarjetas, maneja la información requerida, brinda un servicio completo)
                </label>
                <div class="container text-center">
                    <?php
                    for ($counter = 1; $counter < 11; $counter++) {
                        echo "<div class='custom-control custom-radio custom-control-inline form-check-inline escala'>";
                        echo "<input class='custom-control-input' type='radio' name='P19_1' id='P19_1_" . $counter . "' value='" . $counter . "' required>";
                        echo "<label class='custom-control-label escala' for='P19_1_" . $counter . "'>" . $counter . "</label>";
                        echo "</div>";
                    }
                    ?>
                </div>
            </div>
            <div class="form-group mt-5" >
                <label class="mb-4">Cantidad de expositores (suficientes)
                </label>
                <div class="container text-center">
                    <?php
                    for ($counter = 1; $counter < 11; $counter++) {
                        echo "<div class='custom-control custom-radio custom-control-inline form-check-inline escala'>";
                        echo "<input class='custom-control-input' type='radio' name='P19_2' id='P19_2_" . $counter . "' value='" . $counter . "' required>";
                        echo "<label class='custom-control-label escala' for='P19_2_" . $counter . "'>" . $counter . "</label>";
                        echo "</div>";
                    }
                    ?>
                </div>
            </div>
            <div class="form-group mt-5" >
                <label class="mb-4">Calidad de expositores - Tipo de productos ofrecidos
                </label>
                <div class="container text-center">
                    <?php
                    for ($counter = 1; $counter < 11; $counter++) {
                        echo "<div class='custom-control custom-radio custom-control-inline form-check-inline escala'>";
                        echo "<input class='custom-control-input' type='radio' name='P19_3' id='P19_3_" . $counter . "' value='" . $counter . "' required>";
                        echo "<label class='custom-control-label escala' for='P19_3_" . $counter . "'>" . $counter . "</label>";
                        echo "</div>";
                    }
                    ?>
                </div>
            </div>
            <div class="form-group mt-5">
                <label class="mb-4">Presencia de productos novedosos y/o nuevos productos
                </label>
                <div class="container text-center">
                    <?php
                    for ($counter = 1; $counter < 11; $counter++) {
                        echo "<div class='custom-control custom-radio custom-control-inline form-check-inline escala'>";
                        echo "<input class='custom-control-input' type='radio' name='P19_4' id='P19_4_" . $counter . "' value='" . $counter . "' required>";
                        echo "<label class='custom-control-label escala' for='P19_4_" . $counter . "'>" . $counter . "</label>";
                        echo "</div>";
                    }
                    ?>
                </div>
            </div>
            <div class="form-group mt-5">
                <label class="mb-4">Presencia de empresas y marcas conocidas del sector – representatividad de empresas
                </label>
                <div class="container text-center">
                    <?php
                    for ($counter = 1; $counter < 11; $counter++) {
                        echo "<div class='custom-control custom-radio custom-control-inline form-check-inline escala'>";
                        echo "<input class='custom-control-input' type='radio' name='P19_5' id='P19_5_" . $counter . "' value='" . $counter . "' required>";
                        echo "<label class='custom-control-label escala' for='P19_5_" . $counter . "'>" . $counter . "</label>";
                        echo "</div>";
                    }
                    ?>
                </div>
            </div>
            <div class="form-group mt-5" >
                <label class="mb-4">Variedad de Productos y/o servicios
                </label>
                <div class="container text-center">
                    <?php
                    for ($counter = 1; $counter < 11; $counter++) {
                        echo "<div class='custom-control custom-radio custom-control-inline form-check-inline escala'>";
                        echo "<input class='custom-control-input' type='radio' name='P19_6' id='P19_6_" . $counter . "' value='" . $counter . "' required>";
                        echo "<label class='custom-control-label escala' for='P19_6_" . $counter . "'>" . $counter . "</label>";
                        echo "</div>";
                    }
                    ?>
                </div>
            </div>

            <div class="form-group mt-5" >
                <label class="mb-4">El diseño de stands
                </label>
                <div class="container text-center">
                    <?php
                    for ($counter = 1; $counter < 11; $counter++) {
                        echo "<div class='custom-control custom-radio custom-control-inline form-check-inline escala'>";
                        echo "<input class='custom-control-input' type='radio' name='P19_7' id='P19_7_" . $counter . "' value='" . $counter . "' required>";
                        echo "<label class='custom-control-label escala' for='P19_7_" . $counter . "'>" . $counter . "</label>";
                        echo "</div>";
                    }
                    ?>
                </div>
            </div>


            <button type="submit" name="login" class="btn btn-primary btn-lg btn-block  mt-5" onclick="
            submit_decision(true, 7, 'escala', 'p19',
            document.getElementById('form_p19'), siguiente);">
                SIGUIENTE
            </button>
        </form>
    </div>
</div>