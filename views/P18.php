<script>
    var numero_pregunta = 'p18';
    var siguiente = 'views/p19.php'
</script>
<div class="mt-5" id="p18">
    <div class="col-xl-6 offset-xl-3 col-lg-6 offset-lg-3 col-md-8 offset-md-2">
        
        <form method='POST'  onsubmit="
            submit_decision(false, 1, 'textarea', numero_pregunta,
            document.getElementById('P18_textArea').value,  siguiente);       
            return false;">
                
                <div class="jumbotron">
                    <div class="container">
                        <div class="row row-header">
                            <div class="col-sm-12">
                                <label id="preg_p18"></label>
                            </div>
                        </div>
                    </div>
                </div>
                <textarea id="P18_textArea" name="razon_calificacion" class="md-textarea form-control" rows="3"></textarea>
            
            <button type="submit" name="login" class="btn btn-primary btn-lg btn-block  mt-5">
                SIGUIENTE
            </button>
        </form>
    </div>
</div>
<script>
    $(document).ready(function() {
        cambia_texto_pregunta("preg_p18");
    });
</script>