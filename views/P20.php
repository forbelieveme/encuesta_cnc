<script>
    var numero_pregunta = 'p20';
    var siguiente = ['views/P23.php', 'views/P21.php'];
</script>
<div class="mt-5" id="P20">
    <div class="col-xl-6 offset-xl-3 col-lg-6 offset-lg-3 col-md-8 offset-md-2">
        <label>Ahora vamos a hablar de los servicios básicos de Corferias
        </label>
        <div class="jumbotron">
            <label>
                20. ¿Por qué medio adquiriste tu boleta de ingreso a la Feria del Hogar 2020?
            </label>
        </div>
        <form method='POST' id="form_p20" onsubmit="
            submit_decision(false, 1, 'radio', 'p20', 
            getRadioVal_text('P20_textArea',document.getElementById('form_p20'),'P20'), 
            Obtener_siguiente('p20', getRadioVal_text('P20_textArea',document.getElementById('form_p20'),'P20'), siguiente)
            );
            return false;">
            <div class="container">
                <div class="col-12">
                    <div class="radioboton">
                        <input class='radio-check' type='radio' name='P20' id='P20_1' value='1' checked>
                        <label class="radioboton-label" for='P20_1'> Taquilla de la feria </label>
                    </div>
                    <div class="radioboton">
                        <input class='radio-check' type='radio' name='P20' id='P20_2' value='2'>
                        <label class="radioboton-label" for='P20_2'> Boletería Online (página web)</label>
                    </div>
                    <div class="radioboton">
                        <input class='radio-check' type='radio' name='P20' id='P20_3' value='3'>
                        <label class="radioboton-label" for='P20_3'> Convenio </label>
                    </div>
                    <div class="radioboton">
                        <input class='radio-check' type='radio' name='P20' id='P20_4' value='4'>
                        <label class="radioboton-label" for='P20_4'> Invitación de los organizadores y/o
                            expositores </label>
                    </div>
                    <div class="radioboton">
                        <input class='radio-check' type='radio' name='P20' id='P20_5' value='5'>
                        <label class="radioboton-label" for='P20_5'> Otro, ¿Cuál? </label>
                        <textarea id="P20_textArea" class="md-textarea form-control mb-5" rows="1"></textarea>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary btn-lg btn-block ">
                    SIGUIENTE
                </button>
            </div>
        </form>
    </div>
</div>