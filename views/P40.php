<script>
    var numero_pregunta = 'p40'
    var siguiente = 'views/P41.php';
</script>
<div class="mt-5" id="P40">
    <div class="col-xl-6 offset-xl-3 col-lg-6 offset-lg-3 col-md-8 offset-md-2">
        <form method='POST' onsubmit="
        submit_decision(false, 1, 'textarea', numero_pregunta,
        document.getElementById('taP40').value,  siguiente);       
         return false;">
            <div class="jumbotron">
                <div class="container">
                    <div class="row row-header">
                        <div class="col-sm-12">
                            <label>40. ¿Qué crees que es lo más importante que debería hacer o tener la
                                Feria del Hogar? </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group mt-5">
                <div class="container">
                    <textarea class="md-textarea form-control col-12 " id="taP40" name="razon_calificacion" style="width:100%" rows="10"></textarea>
                    <button type="submit" name="login" class="btn btn-primary btn-lg btn-block  mt-5"> SIGUIENTE </button>
                </div>
            </div>
        </form>
    </div>
</div>