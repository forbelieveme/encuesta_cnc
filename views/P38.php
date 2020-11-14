<script>
    var numero_pregunta = 'p38';
    var siguiente = 'views/P40.php';
</script>
<div class="mt-5" id="P38">
    <div class="col-xl-6 offset-xl-3 col-lg-6 offset-lg-3 col-md-8 offset-md-2">
        <form method='POST' onsubmit="
        submit_decision(false, 1, 'textarea', numero_pregunta,
        document.getElementById('taP38').value, siguiente, true);       
         return false;">
            <div class="jumbotron">
                <div class="container">
                    <div class="row row-header">
                        <div class="col-sm-12">
                            <label id="preg_p38"></label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="container">
                    <textarea id="taP38" name="razon_calificacion" style="width:100%" rows="10"></textarea>
                    <button type="submit" name="login" class="btn btn-primary btn-lg btn-block  mt-5"> SIGUIENTE </button>
                </div>
            </div>
        </form>
    </div>
</div>
<script>
    $(document).ready(function() {
        cambia_texto_pregunta("preg_p38");
    });
</script>