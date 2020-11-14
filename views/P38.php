<script>
    var numero_pregunta = 'p38';
    var siguiente = 'views/P40.php';
</script>
<div class="mt-5" id="P38">
    <div class="col-xl-6 offset-xl-3 col-lg-6 offset-lg-3 col-md-8 offset-md-2">
        <form method='POST' onsubmit="
        submit_decision(false, 1, 'textarea', numero_pregunta,
        document.getElementById('taP38').value,  siguiente);       
         return false;">
            <div class="jumbotron">
                <div class="container">
                    <div class="row row-header">
                        <div class="col-sm-12">
                            <label>38. ¿Por qué razón calificas con (PONER REPSUESTA DE P37) la satisfacción con la
                                agenda de actividades de la Feria del Hogar 2020? </label>
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