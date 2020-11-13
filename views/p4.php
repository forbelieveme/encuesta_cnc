<script>
    var numero_pregunta = 'p14';
</script>
<div class="mt-5" id="p4">
    <div class="col-xl-6 offset-xl-3 col-lg-6 offset-lg-3 col-md-8 offset-md-2">
        <form method='POST' onsubmit="getTextArea('P4_textArea', 'views/p5.php', numero_pregunta); return false;">
            <div class="form-group">
                <div class="jumbotron">
                    <div class="container">
                        <div class="row row-header">
                            <div id="preg_p4" class="col-sm-12">
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