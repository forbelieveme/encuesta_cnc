<script>
    var numero_pregunta = 'd1';
    var siguiente = 'views/D2.php';
</script>
<div class="mt-5" id="D1">
    <div class="col-xl-6 offset-xl-3 col-lg-6 offset-lg-3 col-md-8 offset-md-2">
        <form method='POST' id="form_d1" class="was-validated" onsubmit="
                submit_decision(false, 1, 'radio', numero_pregunta,
                getRadioVal(document.getElementById('form_d1'),('d1')), 
                Obtener_siguiente(numero_pregunta,
                getRadioVal(document.getElementById('form_d1'),('d1')),
                siguiente)); return false;">
            <div class="jumbotron">
                <label>Género</label>
            </div>
            <div class="container" id="D1">

                <div class="radioboton">
                    <input class='radio-check' type='radio' name='d1' id='D1_2' value='2' required>
                    <label class="radioboton-label" for='D1_2'>Femenino </label>
                </div>
                <div class="radioboton">
                    <input class='radio-check' type='radio' name='d1' id='D1_1' value='1' required>
                    <label class="radioboton-label" for='D1_1'>Masculino </label>
                </div>
                <div class="radioboton">
                    <input class='radio-check' type='radio' name='d1' id='D1_3' value='3' required>
                    <label class="radioboton-label" for='D1_3'>Otro </label>
                </div>
                <div class="radioboton">
                    <input class='radio-check' type='radio' name='d1' id='D1_4' value='4' required>
                    <label class="radioboton-label" for='D1_4'>Prefiero no responder </label>
                </div>
                <button  type='submit' class="btn btn-primary btn-block mt-3"> SIGUIENTE </button>

            </div>
        </form>
    </div>
</div>