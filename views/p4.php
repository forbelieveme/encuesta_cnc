<script>
    var numero_pregunta = 'p4';
    var siguiente = 'views/p5.php';
</script>
<div class="mt-5" id="p4">
    <div class="col-xl-6 offset-xl-3 col-lg-6 offset-lg-3 col-md-8 offset-md-2">
        <form method='POST' 
        onsubmit= "submit_decision(false, 1, 'textarea', numero_pregunta, 
        document.getElementById('P4_textArea').value,siguiente);
         return false;">
            <div class="form-group">
                <div class="jumbotron">
                    <div class="container">
                        <div class="row row-header">
                            <div id="preg_p4" class="col-sm-12">
                            <label>¿Por qué razón calificas con (PONER RESPUESTA DE P3) el cumplimiento de los
                            motivos que te llevaron a venir a la Feria del Hogar 2020? </label>
                            </div>
                        </div>
                    </div>
                </div>
                <textarea id="P4_textArea" name="razon_calificacion" class="md-textarea form-control" rows="3"></textarea>
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