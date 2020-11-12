<script>
    var numero_pregunta = ['p9'];
</script>
<div class="mt-5" id="p3">
    <div class="col-xl-6 offset-xl-3 col-lg-6 offset-lg-3 col-md-8 offset-md-2">
        <form method="post" id="form_p9" onsubmit="submit_decision_binaria(getRadioVal(document.getElementById('form_p9'),'P9'), ['views/p11.php','views/p10.php'] ); return false;">
            <div class="form-group">
                <div class="jumbotron">
                    <label for="P4">¿Encontraste todo lo que querías comprar?
                    </label>
                </div>
                <div class="container text-center">
                    <div class="custom-control custom-radio custom-control-inline form-check-inline">
                        <input type="radio" id="P9_1" name="P9" class="custom-control-input">
                        <label class="custom-control-label" for="P9_1">Sí</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline form-check-inline">
                        <input type="radio" id="P9_2" name="P9" class="custom-control-input">
                        <label class="custom-control-label" for="P9_2">No</label>
                    </div>
                </div>
            </div>
            <button type="submit" name="login" class="btn btn-primary btn-lg btn-block">
                INGRESAR
            </button>
        </form>
    </div>
</div>