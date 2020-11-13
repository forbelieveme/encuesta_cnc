
<script>
    var numero_pregunta = ['f4'];
</script>
<div class = "mt-5" id = "F4">
    <div class="col-xl-6 offset-xl-3 col-lg-6 offset-lg-3 col-md-8 offset-md-2">
        <form method = 'POST' id="form_f4" onsubmit = "submit_decision_F4(getRadioVal(document.getElementById('form_f4'),'F4'), ['views/finaliza.php','views/F5.php'], numero_pregunta ); return false;" >

            <div class = "jumbotron">
                <div class = "container">
                    <div class = "row row-header">                
                        <div class = "col-sm-12">
                            <label>¿Tú o alguien de tú familia cercana en alguno de los siguientes tipos de empresa?</label>
                        </div>                    
                    </div>
                </div>
            </div>

           

            
            <div class="container">
                <div class="custom-control custom-radio custom-control-inline form-check-inline">
                    <input type="radio" id="F4_1" value='2' name="F4" class="custom-control-input">
                    <label class="custom-control-label" for="F4_1">Trabaja en conferias</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline form-check-inline">
                    <input type="radio" id="F4_2" value='3' name="F4" class="custom-control-input">
                    <label class="custom-control-label" for="F4_2">Trabaja en una empresa expositora de la feria</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline form-check-inline">
                    <input type="radio" id="F4_3" value='1' name="F4" class="custom-control-input">
                    <label class="custom-control-label" for="F4_3">Ninguna</label>
                </div>
            </div>
            <div class = "container">                                
                <button type="submit" name="login" class="btn btn-primary btn-lg btn-block  mt-5"  onclick = "">Continuar </button>
            </div>
        </form>
    </div>
</div>