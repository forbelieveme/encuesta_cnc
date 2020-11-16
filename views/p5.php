<script>
    var numero_pregunta = 'p5';
    var siguiente = 'views/p6.php'
</script>
<div class="mt-5" id="p¿5">
    <div class="col-xl-6 offset-xl-3 col-lg-6 offset-lg-3 col-md-8 offset-md-2">
        <form method="post" class="was-validated" id="form_p5" 
        onsubmit="submit_decision(false, 1, 'radio', 
        numero_pregunta,getRadioVal(document.getElementById('form_p5'),'P5'), siguiente);
        return false;">
            <div class="form-group">
                <div class="jumbotron">
                    <label for="P5">5. ¿Asististe a la Feria del Hogar 2019?
                    </label>
                </div>
                <div class="container text-center">
                    <div class="custom-control custom-radio custom-control-inline form-check-inline">
                        <input type="radio" id="P5_1" value='1' name="P5" class="custom-control-input">
                        <label class="custom-control-label" for="P5_1">Sí</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline form-check-inline">
                        <input type="radio" id="P5_2" value='2' name="P5" class="custom-control-input">
                        <label class="custom-control-label" for="P5_2">No</label>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary btn-lg btn-block">
                SIGUIENTE
            </button>
        </form>
    </div>
</div>