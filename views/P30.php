<script>
    var numero_pregunta = 'p30';
    var siguiente = ['views/P31.php', 'views/P34.php'];
</script>
<div class="mt-5" id="p30">
    <div class="col-xl-6 offset-xl-3 col-lg-6 offset-lg-3 col-md-8 offset-md-2">
        <form method="post" id="form_p30" onsubmit="submit_decision(false, 1, 'radio', numero_pregunta, 
         getRadioVal(document.getElementById('form_p30'),'P30'), 
         Obtener_siguiente(numero_pregunta, getRadioVal(document.getElementById('form_p30'),'P30'),siguiente) );
          return false;">
            <div class="form-group">
                <div class="jumbotron">
                    <label for="P30">30. ¿Recuerdas haber visto, leído o escuchado publicidad de la Feria del Hogar 2020?
                    </label>
                </div>
                <div class="container text-center">
                    <div class="custom-control custom-radio custom-control-inline form-check-inline">
                        <input type="radio" id="P30_1" value='1' name="P30" class="custom-control-input">
                        <label class="custom-control-label" for="P30_1">Sí</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline form-check-inline">
                        <input type="radio" id="P30_2" value='2' name="P30" class="custom-control-input">
                        <label class="custom-control-label" for="P30_2">No</label>
                    </div>
                </div>
            </div>
            <button type="submit" name="login" class="btn btn-primary btn-lg btn-block">
                SIGUIENTE
            </button>
        </form>
    </div>
</div>