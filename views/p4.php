<script>
    var numero_pregunta = 'p4';
    var siguiente = 'views/p5.php';
</script>
<div class="mt-5" id="p4">
    <div class="col-xl-6 offset-xl-3 col-lg-6 offset-lg-3 col-md-8 offset-md-2">
        <form method='POST' class="was-validated" onsubmit="submit_decision(false, 1, 'textarea', numero_pregunta, 
        document.getElementById('P4_textArea').value,siguiente);
         return false;">
            <div class="jumbotron">
                <div class="container">
                    <label id="preg_p4"></label>
                </div>
            </div>
            <div class="form-group mt-5">
                <div class="container">
                    <textarea id="P4_textArea" name="razon_calificacion" class="md-textarea form-control" rows="3" required></textarea>
                </div>
            </div>
            <button type="submit" name="login" class="btn btn-primary btn-lg btn-block  mt-5">
                SIGUIENTE
            </button>
        </form>
    </div>
</div>
<script>
    $(document).ready(function() {
        cambia_texto_pregunta("preg_p4");
    });
</script>