<script>
    var numero_pregunta = 'd2';
    var siguiente = 'views/D3.php';
</script>
<div class="mt-5" id="D2">
    <div class="col-xl-6 offset-xl-3 col-lg-6 offset-lg-3 col-md-8 offset-md-2">
        <form method='POST' id="form_d2" class="was-validated" onsubmit="
                submit_decision(false, 1, 'radio', numero_pregunta,
                getRadioVal(document.getElementById('form_d2'),('d2')), 
                Obtener_siguiente(numero_pregunta,
                getRadioVal(document.getElementById('form_d2'),('d2')),
                siguiente)); return false;">

            <div class="jumbotron">
                <label> ¿Cuál es el estrato al que corresponde tu hogar (el que figura en el
                    recibo de servicios públicos)?</label>
            </div>
            <div class="container" id="D2">
                <div class="radioboton">
                    <input class='radio-check' type='radio' name='d2' id='D2_1' value='1' required>
                    <label class="radioboton-label" for='D2_1'>1 </label>
                </div>
                <div class="radioboton">
                    <input class='radio-check' type='radio' name='d2' id='D2_2' value='2' required>
                    <label class="radioboton-label" for='D2_2'>2 </label>
                </div>
                <div class="radioboton">
                    <input class='radio-check' type='radio' name='d2' id='D2_3' value='3' required>
                    <label class="radioboton-label" for='D2_3'>3 </label>
                </div>
                <div class="radioboton">
                    <input class='radio-check' type='radio' name='d2' id='D2_4' value='4' required>
                    <label class="radioboton-label" for='D2_4'>4</label>
                </div>

                <div class="radioboton">
                    <input class='radio-check' type='radio' name='d2' id='D2_5' value='5' required>
                    <label class="radioboton-label" for='D2_5'>5</label>
                </div>

                <div class="radioboton">
                    <input class='radio-check' type='radio' name='d2' id='D2_6' value='6' required>
                    <label class="radioboton-label" for='D2_6'>6</label>
                </div>

                <div class="radioboton">
                    <input class='radio-check' type='radio' name='d2' id='D2_7' value='998' required>
                    <label class="radioboton-label" for='D2_7'>N/R</label>
                </div>
                <button type='submit' class="btn btn-primary btn-block mt-3"> SIGUIENTE </button>
            </div>
        </form>
    </div>
</div>