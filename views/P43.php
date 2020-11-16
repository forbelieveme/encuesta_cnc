<script>
    var numero_pregunta = 'p43';
    var siguiente = 'views/finaliza.php'
</script>
<div class="mt-5" id="p43">
    <div class="col-xl-6 offset-xl-3 col-lg-6 offset-lg-3 col-md-8 offset-md-2">
        <form method="post" id="form_p43" class="was-validated" onsubmit="submit_decision(false, 1, 'radio', 
        numero_pregunta,getRadioVal(document.getElementById('form_p43'),'P43'), siguiente);
        return false;">
            <div class="form-group">
                <div class="jumbotron">
                    <label for="P5">43. Tus respuestas serán analizadas sin tener en cuenta tus datos personales
                        a no ser que nos autorices a incluirlos, ¿Nos autorizas a agregar tu nombre y demás datos
                        personales a tus respuestas al entregar la información a nuestro cliente?
                    </label>
                </div>
                <div class="container text-center">
                    <div class="custom-control custom-radio custom-control-inline form-check-inline">
                        <input type="radio" id="P43_1" value='1' name="P43" class="custom-control-input" required>
                        <label class="custom-control-label" for="P43_1">Sí</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline form-check-inline">
                        <input type="radio" id="P43_2" value='2' name="P43" class="custom-control-input" required>
                        <label class="custom-control-label" for="P43_2">No</label>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary btn-lg btn-block">
                SIGUIENTE
            </button>
        </form>
    </div>
</div>