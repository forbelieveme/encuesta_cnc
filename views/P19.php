<script>
    var numero_pregunta = ['p19_1', 'p19_2', 'p19_3', 'p19_4', 'p19_5', 'p19_6', 'p19_7'];
</script>
<div class="mt-5" id="p19">
    <div class="col-xl-6 offset-xl-3 col-lg-6 offset-lg-3 col-md-8 offset-md-2">
        <form method='POST' id="form_p19" onsubmit="return false;">
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
            <div class="form-group">
                <label>Atención del expositor (Nivel de preparación de los expositores
                    si cuenta con tarjetas, maneja la información requerida, brinda un servicio completo)
                </label>
                <div class="container">
                    <?php
                    for ($counter = 1; $counter < 11; $counter++) {
                        echo "<div class='form-check form-check-inline col-1'>";
                        echo "<input class='form-check-input' type='radio' name='P19_1' id='P19_1_" . $counter . "' value='" . $counter . "'>";
                        echo "<label class='form-check-label escala' for='inlineRadio19_1'>" . $counter . "</label>";
                        echo "</div";
                    }
                    ?>
                </div>
            </div>
            <div class="form-group mt-5">
                <label>Cantidad de expositores (suficientes)
                </label>
                <div class="container">
                    <?php
                    for ($counter = 1; $counter < 11; $counter++) {
                        echo "<div class='form-check form-check-inline col-1'>";
                        echo "<input class='form-check-input' type='radio' name='P19_2' id='P19_2_" . $counter . "' value='" . $counter . "'>";
                        echo "<label class='form-check-label escala' for='inlineRadio19_2'>" . $counter . "</label>";
                        echo "</div";
                    }
                    ?>
                </div>
            </div>
            <div class="form-group mt-5">
                <label>Calidad de expositores - Tipo de productos ofrecidos
                </label>
                <div class="container">
                    <?php
                    for ($counter = 1; $counter < 11; $counter++) {
                        echo "<div class='form-check form-check-inline col-1'>";
                        echo "<input class='form-check-input' type='radio' name='P19_3' id='P19_3_" . $counter . "' value='" . $counter . "'>";
                        echo "<label class='form-check-label escala' for='inlineRadio19_3'>" . $counter . "</label>";
                        echo "</div";
                    }
                    ?>
                </div>
            </div>
            <div class="form-group mt-5">
                <label>Presencia de productos novedosos y/o nuevos productos
                </label>
                <div class="container">
                    <?php
                    for ($counter = 1; $counter < 11; $counter++) {
                        echo "<div class='form-check form-check-inline col-1'>";
                        echo "<input class='form-check-input' type='radio' name='P19_4' id='P19_4_" . $counter . "' value='" . $counter . "'>";
                        echo "<label class='form-check-label escala' for='inlineRadio19_4'>" . $counter . "</label>";
                        echo "</div";
                    }
                    ?>
                </div>
            </div>
            <div class="form-group mt-5">
                <label>Presencia de empresas y marcas conocidas del sector – representatividad de empresas
                </label>
                <div class="container">
                    <?php
                    for ($counter = 1; $counter < 11; $counter++) {
                        echo "<div class='form-check form-check-inline col-1'>";
                        echo "<input class='form-check-input' type='radio' name='P19_5' id='P19_5_" . $counter . "' value='" . $counter . "'>";
                        echo "<label class='form-check-label escala' for='inlineRadio19_5'>" . $counter . "</label>";
                        echo "</div";
                    }
                    ?>
                </div>
            </div>
            <div class="form-group mt-5">
                <label>Variedad de Productos y/o servicios
                </label>
                <div class="container">
                    <?php
                    for ($counter = 1; $counter < 11; $counter++) {
                        echo "<div class='form-check form-check-inline col-1'>";
                        echo "<input class='form-check-input' type='radio' name='P19_6' id='P19_6_" . $counter . "' value='" . $counter . "'>";
                        echo "<label class='form-check-label escala' for='inlineRadio19_6'>" . $counter . "</label>";
                        echo "</div";
                    }
                    ?>
                </div>
            </div>
            <div class="form-group mt-5">
                <label>El diseño de stands
                </label>
                <div class="container">
                    <?php
                    for ($counter = 1; $counter < 11; $counter++) {
                        echo "<div class='form-check form-check-inline col-1'>";
                        echo "<input class='form-check-input' type='radio' name='P19_7' id='P19_7_" . $counter . "' value='" . $counter . "'>";
                        echo "<label class='form-check-label escala' for='inlineRadio19_7'>" . $counter . "</label>";
                        echo "</div";
                    }
                    ?>
                </div>
            </div>
            <button type="submit" name="login" class="btn btn-primary btn-lg btn-block  mt-5" 
            onclick="submit_multiple_escala(document.getElementById('form_p19'),['P19_1', 'P19_2', 'P19_3', 'P19_4', 'P19_5', 'P19_6', 'P19_7'],'views/P20.php', numero_pregunta)">
                SIGUIENTE
            </button>
        </form>
    </div>
</div>