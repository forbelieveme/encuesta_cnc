<div class="mt-5" id="P22">
    <div class="col-xl-6 offset-xl-3 col-lg-6 offset-lg-3 col-md-8 offset-md-2">
        <form method='POST' id="form_p22" onsubmit="submit_escala(getRadioVal_text('P22_textArea',document.getElementById('form_p22'),'P22'),'views/P23.php'); return false;">
            <div class="jumbotron">
                <div class="container">
                    <div class="row row-header">
                        <div class="col-sm-12">
                            <label>22. ¿Por qué razón calificas con (PONER REPSUESTA DE P21) tu
                                satisfacción con el proceso de compra de la boleta?
                            </label>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">

                <div class="col-sm-12">
                    <div class="radioboton">
                        <input class='radio-check' type='radio' name='P22' id='P22_1' value='1' checked>
                        <label class="radioboton-label" for='P22_1'> No me llegó el código QR </label>
                    </div>
                    <div class="radioboton">
                        <input class='radio-check' type='radio' name='P22' id='P22_2' value='2'>
                        <label class="radioboton-label" for='P22_2'> El proceso de compra fue lento</label>
                    </div>
                    <div class="radioboton">
                        <input class='radio-check' type='radio' name='P22' id='P22_3' value='3'>
                        <label class="radioboton-label" for='P22_3'> Inconvenientes con
                            la plataforma de pago</label>
                    </div>
                    <div class="radioboton">
                        <input class='radio-check' type='radio' name='P22' id='P22_4' value='4'>
                        <label class="radioboton-label" for='P22_4'> Problemas con la lectura del
                            código al ingresar </label>
                    </div>
                    <div class="radioboton">
                        <input class='radio-check' type='radio' name='P22' id='P22_5' value='5'>
                        <label class="radioboton-label" for='P22_5'> Filas muy largas </label>
                    </div>
                    <div class="radioboton">
                        <input class='radio-check' type='radio' name='P22' id='P22_6' value='5'>
                        <label class="radioboton-label" for='P22_6'> Otro, ¿Cuál? </label>
                    </div>
                    <div class="">
                        <textarea id="P22_textArea" class="md-textarea form-control mb-5" rows="1"></textarea>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary btn-lg btn-block ">
                    SIGUIENTE
                </button>
            </div>
        </form>
    </div>
</div>