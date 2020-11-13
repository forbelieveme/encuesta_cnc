<script>
    var numero_pregunta = ['f5'];
</script>
<div class = "mt-5" id = "F5">
    <div class="col-xl-6 offset-xl-3 col-lg-6 offset-lg-3 col-md-8 offset-md-2">
        <form method = 'POST' id="form_f5" onsubmit = "submit_decision_F5(getRadioVal(document.getElementById('form_f5'),'F5'), ['views/finaliza.php','views/p1.php'], numero_pregunta ); return false;" >

            <div class = "jumbotron">
                <div class = "container">
                    <div class = "row row-header">                
                        <div class = "col-sm-12">
                            <label>¿En qué rango de edad te encuentras? (ÚNICA RESPUESTA) (SI RESPONDE MENOS DE 18 AÑOS TERMINA). </label>
                        </div>                    
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="custom-control custom-radio custom-control-inline form-check-inline">
                    <input type="radio" id="F5_1" value='0' name="F5" class="custom-control-input">
                    <label class="custom-control-label" for="F5_1">Menos de 18 años</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline form-check-inline">
                    <input type="radio" id="F5_2" value='1' name="F5" class="custom-control-input">
                    <label class="custom-control-label" for="F5_2">De 18 -24 años</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline form-check-inline">
                    <input type="radio" id="F5_3" value='2' name="F5" class="custom-control-input">
                    <label class="custom-control-label" for="F5_3">25-34 años</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline form-check-inline">
                    <input type="radio" id="F5_4" value='3' name="F5" class="custom-control-input">
                    <label class="custom-control-label" for="F5_4">35-44 años</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline form-check-inline">
                    <input type="radio" id="F5_5" value='4' name="F5" class="custom-control-input">
                    <label class="custom-control-label" for="F5_5">45-54 años</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline form-check-inline">
                    <input type="radio" id="F5_6" value='5' name="F5" class="custom-control-input">
                    <label class="custom-control-label" for="F5_6">55-64 años</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline form-check-inline">
                    <input type="radio" id="F5_7" value='6' name="F5" class="custom-control-input">
                    <label class="custom-control-label" for="F5_7">65-74 años </label>
                </div>
                <div class="custom-control custom-radio custom-control-inline form-check-inline">
                    <input type="radio" id="F5_8" value='7' name="F5" class="custom-control-input">
                    <label class="custom-control-label" for="F5_8">NR</label>
                </div>
            </div>
            <div class = "container">                                
                <button type="submit" name="login" class="btn btn-primary btn-lg btn-block  mt-5">Continuar </button>
            </div>
        </form>
    </div>
</div>