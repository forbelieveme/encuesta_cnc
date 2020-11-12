<div class="mt-5" id="p6">
    <div class="col-xl-6 offset-xl-3 col-lg-6 offset-lg-3 col-md-8 offset-md-2">
        <form method="post" id="form_p6" onsubmit="submit_decision_binaria(getRadioVal(document.getElementById('form_p6'),'P6'), ['views/p8.php','views/p7.php'] ); return false;">
            <div class="form-group">
                <label for="P6">6. ¿Has realizado o realizaste compras en esta feria? 
                </label>
                <div class="container text-center">
                    <div class="custom-control custom-radio custom-control-inline form-check-inline">
                        <input type="radio" id="P6_1" value='1' name="P6" class="custom-control-input">
                        <label class="custom-control-label" for="P6_1">Sí</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline form-check-inline">
                        <input type="radio" id="P6_2"value='2'  name="P6" class="custom-control-input">
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