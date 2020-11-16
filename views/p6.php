<script>
    var numero_pregunta = 'p6';
    var siguiente = ['views/p8.php', 'views/p7.php'];
</script>
<div class="mt-5" id="p6">
    <div class="col-xl-6 offset-xl-3 col-lg-6 offset-lg-3 col-md-8 offset-md-2">
        <form method="post" class="was-validated" id="form_p6" onsubmit="submit_decision(false, 1, 'radio', numero_pregunta, 
         getRadioVal(document.getElementById('form_p6'),'P6'), 
         Obtener_siguiente(numero_pregunta, getRadioVal(document.getElementById('form_p6'),'P6'),siguiente) );
          return false;">
            <div class="form-group">
                <div class="jumbotron">
                    <label for="P6">6. ¿Hiciste alguna compra en esta Feria del Hogar 2020?
                    </label>
                </div>
                <div class="container text-center">
                    <div class="custom-control custom-radio custom-control-inline form-check-inline">
                        <input type="radio" id="P6_1" value='1' name="P6" class="custom-control-input">
                        <label class="custom-control-label" for="P6_1">Sí</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline form-check-inline">
                        <input type="radio" id="P6_2" value='2' name="P6" class="custom-control-input">
                        <label class="custom-control-label" for="P6_2">No</label>
                    </div>
                </div>
            </div>
            <button type="submit" name="login" class="btn btn-primary btn-lg btn-block">
                SIGUIENTE
            </button>
        </form>
    </div>
</div>