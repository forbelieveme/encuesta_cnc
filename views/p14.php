<div class="mt-5" id="p3">
    <div class="col-xl-6 offset-xl-3 col-lg-6 offset-lg-3 col-md-8 offset-md-2">
        <form method="post">
            <div class="form-group">
                <label for="P1">Teniendo en cuenta una escala de 1 a 10, donde 1 es “Definitivamente no asistiré” y 
                    10 es “Definitivamente si asistiré” ¿Cuál es tu intención de asistir a la próxima versión de la 
                    Feria del Hogar? 
                </label>

                <div class="container">
                    <?php
                    for ($counter = 1; $counter < 11; $counter++) {
                        echo "<div class='form-check form-check-inline col-1'>";
                        echo "<input class='form-check-input' type='radio' name='P3' id='P3_" . $counter . "' value='" . $counter . "'>";
                        echo "<label class='form-check-label escala' for='inlineRadio3'>" . $counter . "</label>";
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