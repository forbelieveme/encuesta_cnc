<div id="pag2">
    <div class="col-xl-6 offset-xl-3 col-lg-6 offset-lg-3 col-md-8 offset-md-2">
        <h1>2</h1>
        <form method="post">
            <h2 class="text-center black">Cumplimiento de Objetivos</h2>
            <div class="form-group">
                <label for="P1">A continuación, le voy a mostrar una tarjeta con un listado
                    de frases de ese listado por favor me indica ¿Cuáles son las principales razones qué lo
                    motivaron a venir a la Feria del Hogar 2019?, ¿algún otro? </label>
                <select multiple class="form-control" id="exampleFormControlSelect2">
                    <option>Encontrar productos nuevos (lanzamientos)</option>
                    <option>Buscar promociones y descuentos</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                </select>
            </div>
            <div class="form-group">
                <label for="P1">A continuación, le voy a mostrar una tarjeta con un listado
                    de frases de ese listado por favor me indica ¿Cuáles son las principales razones qué lo
                    motivaron a venir a la Feria del Hogar 2019?, ¿algún otro?
                </label>
                <div class="container">
                    <div class="row justify-content-center box">

                        <div class="col-4">
                            <input class='form-check-input' type='radio' name='P2' id='P2_1' value='1'>
                        </div>
                        <div class="col-4">
                            <input class='form-check-input' type='radio' name='P2' id='P2_2' value='2'>
                        </div>
                        <div class="col-4">
                            <input class='form-check-input' type='radio' name='P2' id='P2_3' value='3'>
                        </div>
                    </div>
                    <div class="row justify-content-center box">
                        <div class="col-4">
                            1
                        </div>
                        <div class="col-4">
                            2
                        </div>
                        <div class="col-4">
                            3
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="P2">Teniendo en cuenta una escala de 1 a 10, donde 1 es “Muy insatisfecho” Y
                    10 “Muy satisfecho”, quiero que me diga ¿Cuál es su nivel de satisfacción con respecto
                    al cumplimiento de cada uno de los motivos que lo llevaron a venir a la Feria del Hogar 2019?</label>

                <?php

                for ($counter = 1; $counter < 11; $counter++) {
                    echo "<div class='form-check form-check-inline'>";
                    echo "<label class='form-check-label ' for='inlineRadio10'>" . $counter . "</label>";
                    echo "<input class='form-check-input' type='radio' name='P2' id='P2_" . $counter . "' value='" . $counter . "'>";
                    echo "</div>";
                }

                ?>
                <button type="submit" name="login" class="btn btn-primary btn-lg btn-block">
                    INGRESAR
                </button>
        </form>
    </div>
</div>