<script>
    var numero_pregunta = 'p24';
    var siguiente = 'views/P25.php';
</script>
<div class="mt-5" id="P24">
    <div class="col-xl-6 offset-xl-3 col-lg-6 offset-lg-3 col-md-8 offset-md-2">
        <form method='POST' class="was-validated" onsubmit="
        submit_decision(false, 1, 'textarea', numero_pregunta,
        document.getElementById('taP24').value,  siguiente);  
        return false;">
            <div class="jumbotron">
                <div class="container">
                    <label id="preg_p24"></label>
                </div>
            </div>
            <div class="form-group mt-5">
                <div class="container">
                    <textarea id="taP24" name="razon_calificacion" rows="5" class="md-textarea form-control" required></textarea>
                </div>
            </div>
            <button type='submit' class="btn btn-primary btn-lg btn-block  mt-5"> SIGUIENTE </button>
        </form>
    </div>
</div>
<script>
    $(document).ready(function() {
        cambia_texto_pregunta("preg_p24");
    });
</script>