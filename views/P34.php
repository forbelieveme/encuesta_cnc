<script>
    var numero_pregunta = 'p34';
    var siguiente = ['views/P35.php', 'views/P39.php'];
</script>
<div class="mt-5" id="P34">
    <div class="col-xl-6 offset-xl-3 col-lg-6 offset-lg-3 col-md-8 offset-md-2">
        <form method='POST' id="form_p34" onsubmit="submit_decision(false, 1, 'radio', numero_pregunta, 
         getRadioVal(document.getElementById('form_p34'),'P34'), 
         Obtener_siguiente(numero_pregunta, getRadioVal(document.getElementById('form_p34'),'P34'),siguiente) );
          return false;">
            <div class="form-group">
                <div class="jumbotron">
                    <label for="P34">34. ¿Conociste o te enteraste sobre la agenda de actividades de la Feria del Hogar 2020?
                    </label>
                </div>
                <div class="container text-center">
                    <div class="custom-control custom-radio custom-control-inline form-check-inline">
                        <input type="radio" id="P34_1" value='1' name="P34" class="custom-control-input">
                        <label class="custom-control-label" for="P34_1">Sí</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline form-check-inline">
                        <input type="radio" id="P34_2" value='2' name="P34" class="custom-control-input">
                        <label class="custom-control-label" for="P34_2">No</label>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class='form-check form-check-inline col-12'>
                    <button type="submit" name="login" class="btn btn-primary btn-lg btn-block"> SIGUIENTE </button>
                </div>
            </div>
        </form>
    </div>
</div>