<script>
    var numero_pregunta = 'p12';
</script>
<div class="mt-5" id="p4">
    <div class="col-xl-6 offset-xl-3 col-lg-6 offset-lg-3 col-md-8 offset-md-2">
        <form method='POST' onsubmit="getTextArea('P12_textArea', 'views/p13.php', numero_pregunta); return false;">
            <div class="form-group">
                <div class="jumbotron">
                    <div class="container">
                        <div class="row row-header">
                            <div id="preg_p12" class="col-sm-12">
                            </div>
                        </div>
                    </div>
                </div>
                <textarea id="P12_textArea" name="razon_calificacion" class="md-textarea form-control" rows="3"></textarea>
            </div>
            <button type="submit" name="login" class="btn btn-primary btn-lg btn-block mt-5">
                SIGUIENTE
            </button>
        </form>
    </div>
</div>
<script>
    $(document).ready(function() {
        cambia_texto_pregunta("preg_p12");
    });
</script>