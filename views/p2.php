<?php
$p2 = [
    "Atención del expositor (Nivel de preparación de los expositores si cuenta con tarjetas, maneja la información requerida, brinda un servicio completo)",
    "Cantidad de expositores (suficientes)",
    "Calidad de expositores - Tipo de productos ofrecidos",
    "Presencia de productos novedosos y/o nuevos productos",
    "Presencia de empresas y marcas conocidas del sector – representatividad de empresas",
    "Variedad de Productos y/o servicios",
    "El diseño de stands",
    "Opcion escrita"
]
?>
<div class="mt-5" id="p19">
    <div class="col-xl-6 offset-xl-3 col-lg-6 offset-lg-3 col-md-8 offset-md-2">
        <div class="jumbotron">
            <div class="container">
                <div class="row row-header">
                    <div class="col-sm-12">
                        <label>2. Teniendo en cuenta una escala de 1 a 10, donde 1 es “Muy insatisfecho” Y
                            10 “Muy satisfecho”, ¿Cuál es tú nivel de satisfacción con respecto al
                            cumplimiento de cada uno de los motivos que te llevaron a venir a la Feria del Hogar 2020?
                        </label>
                    </div>
                </div>
            </div>
        </div>
        <form method='POST' id="form_p2" onsubmit="return false;">
            <?php
                for ($i = 0; $i < 3; $i++) {
                    echo "<div class='form-group mt-5'>";
                    echo "<label>".$p2[$i];
                    echo "</label>";
                    echo "<div class='container'>";
                    for ($counter = 1; $counter < 11; $counter++) {
                        echo "<div class='form-check form-check-inline col-1'>";
                        echo "<input class='form-check-input' type='radio' name='P2_2' id='P2_2_" . $counter . "' value='" . $counter . "'>";
                        echo "<label class='form-check-label escala' for='inlineRadio2_" . $counter . "'>" . $counter . "</label>";
                        echo "</div";
                    }
                    echo "</div>";
                    echo "</div>";
                    echo "</div>";
                }
                ?>
            <!-- <div class="form-group mt-5"> -->
                <!-- <label>Cantidad de expositores (suficientes) -->
                <!-- </label> -->
                <!-- <div class="container"> -->
                    <?php
                    // for ($counter = 1; $counter < 11; $counter++) {
                    //     echo "<div class='form-check form-check-inline col-1'>";
                    //     echo "<input class='form-check-input' type='radio' name='P19_2' id='P19_2_" . $counter . "' value='" . $counter . "'>";
                    //     echo "<label class='form-check-label escala' for='inlineRadio19_2'>" . $counter . "</label>";
                    //     echo "</div";
                    // }
                    ?>
                <!-- </div> -->
            <!-- </div> -->

            <button type="submit" name="login" class="btn btn-primary btn-lg btn-block  mt-5" onclick="submit_multiple_escala(document.getElementById('form_p19'),['P19_1', 'P19_2', 'P19_3', 'P19_4', 'P19_5', 'P19_6', 'P19_7'],'views/P20.php', numero_pregunta)">
                SIGUIENTE
            </button>
        </form>
    </div>
</div>