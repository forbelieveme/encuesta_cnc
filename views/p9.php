<script>
    var numero_pregunta = 'p9';
    var siguiente = ['views/p11.php', 'views/p10.php'];
</script>
<div class="mt-5" id="p9">
    <div class="col-xl-6 offset-xl-3 col-lg-6 offset-lg-3 col-md-8 offset-md-2">
        <div class="jumbotron">
                <label for="form_p9">9. ¿Encontraste todo lo que querías comprar?
                </label>
        </div>
        <form method="post" id="form_p9" onsubmit="
                submit_decision(false, 1,'radio', numero_pregunta,
                getRadioVal(document.getElementById('form_p9'),'P9'), 
                Obtener_siguiente(numero_pregunta, 
                getRadioVal(document.getElementById('form_p9'),'P9'), siguiente));
                return false;">
            <div class="container text-center">
                <div class="custom-control custom-radio custom-control-inline form-check-inline">
                    <input type="radio" id="P9_1" value="1" name="P9" class="custom-control-input">
                    <label class="custom-control-label" for="P9_1">Sí</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline form-check-inline">
                    <input type="radio" id="P9_2" value="2" name="P9" class="custom-control-input">
                    <label class="custom-control-label" for="P9_2">No</label>
                </div>
            </div>
            <button type="submit" name="login" class="btn btn-primary btn-lg btn-block mt-5">
                SIGUIENTE
            </button>
        </form>
    </div>
</div>