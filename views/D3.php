<script>
    var numero_pregunta = 'd3';
    var siguiente = 'views/D4.php';
</script>
<div class="mt-5" id="D4">
    <div class="col-xl-6 offset-xl-3 col-lg-6 offset-lg-3 col-md-8 offset-md-2">
        <form method='POST' id="form_d3" class="was-validated" onsubmit="
                submit_decision(false, 1, 'radio', numero_pregunta,
                getRadioVal(document.getElementById('form_d3'),('d3')), 
                Obtener_siguiente(numero_pregunta,
                getRadioVal(document.getElementById('form_d3'),('d3')),
                siguiente)); return false;">
            <div class="jumbotron">
                <label> ¿En qué ciudad resides actualmente? </label>
            </div>
            <div class="container" id="D3">

                <div class="col-sm-12 ">
                    <div class="radioboton">
                        <input class='radio-check' type='radio' name='d3' id='D3_1' value='1' required>
                        <label class="radioboton-label" for='D3_1'> Bogotá</label>
                    </div>
                    <div class="radioboton">
                        <input class='radio-check' type='radio' name='d3' id='D3_2' value='2' required>
                        <label class="radioboton-label" for='D3_2'> Municipios aledaños de Bogotá </label>
                    </div>
                    <div class="radioboton">
                        <input class='radio-check' type='radio' name='d3' id='D3_3' value='3' required>
                        <label class="radioboton-label" for='D3_3'> En otras ciudades</label>
                    </div>

                </div>
                <div class="col-sm-12">
                    <div>
                        <button  type='submit' class="btn btn-primary btn-block mt-3"> SIGUIENTE </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>