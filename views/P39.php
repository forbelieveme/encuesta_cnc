<script>
    var numero_pregunta = 'p39'
    var siguiente = 'views/P40.php';
</script>
<div class="mt-5" id="P39">
    <div class="col-xl-6 offset-xl-3 col-lg-6 offset-lg-3 col-md-8 offset-md-2">
        <form method='POST' onsubmit="
        submit_decision(false, 1, 'textarea', numero_pregunta,
        document.getElementById('taP39').value,  siguiente);       
         return false;">
            <div class="jumbotron">
                <div class="container">
                    <div class="row row-header">
                        <div class="col-sm-12">
                            <label>39. ¿Por qué no participó en ninguna de las actividades
                                de la Feria del Hogar 2020? </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group mt-5">
                <div class="container">
                    <textarea class="md-textarea form-control col-12 " id="taP39" name="razon_calificacion" style="width:100%" rows="10"></textarea>
                    <button type="submit" name="login" class="btn btn-primary btn-lg btn-block  mt-5"> SIGUIENTE </button>
                </div>
            </div>
        </form>
    </div>
</div>