<script>
    var numero_pregunta = 'p33'
    var siguiente = 'views/P34.php';
</script>
<div class="mt-5" id="P33">
    <div class="col-xl-6 offset-xl-3 col-lg-6 offset-lg-3 col-md-8 offset-md-2">
        <form method='POST' class="was-validated" onsubmit="
        submit_decision(false, 1, 'textarea', numero_pregunta,
        document.getElementById('taP34').value,  siguiente);       
         return false;">
            <div class="jumbotron">
                <div class="container">
                    <label id="preg_p33"></label>
                </div>
            </div>
            <div class="form-group mt-5">
                <div class="container">
                    <textarea class="md-textarea form-control col-12 " id="taP34" name="razon_calificacion" rows="5" required></textarea>
                </div>
            </div>
            <button type='submit' class="btn btn-primary btn-block"> SIGUIENTE </button>
        </form>
    </div>
</div>
<script>
    $(document).ready(function() {
        cambia_texto_pregunta("preg_p33");
    });
</script>