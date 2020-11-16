<script>
    var numero_pregunta = 'p41'
    var siguiente = 'views/P42.php';
</script>
<div class="mt-5" id="P41">
    <div class="col-xl-6 offset-xl-3 col-lg-6 offset-lg-3 col-md-8 offset-md-2">
        <form method='POST' class="was-validated" onsubmit="
        submit_decision(false, 1, 'textarea', numero_pregunta,
        document.getElementById('taP41').value,  siguiente);       
         return false;">
            <div class="jumbotron">
                <div class="container">
                    <div class="row row-header">
                        <div class="col-sm-12">
                            <label>41. ¿Qué fue lo que más te gustó de la Feria del Hogar 2020? </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class='form-check form-check-inline col-12'>
                <div class="container">
                    <textarea class="md-textarea form-control col-12" id="taP41" name="razon_calificacion" rows="5" required></textarea>
                </div>
            </div>
            <button type="submit" name="login" class="btn btn-primary btn-lg btn-block  mt-5"> SIGUIENTE </button>
        </form>
    </div>
</div>