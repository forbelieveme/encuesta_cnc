<script>
    function validar(){
        if (document.getElementById('P12_textArea').value == ""){
            alert("Por favor llenar todos los campos.");
            return false;
        }
        return true;
    }
    var numero_pregunta = 'p12';
</script>
<div class="mt-5" id="p4">
    <div class="col-xl-6 offset-xl-3 col-lg-6 offset-lg-3 col-md-8 offset-md-2">
        <form method='POST' class="was-validated" class="was-validated" onsubmit="
        if(validar()){getTextArea('P12_textArea', 'views/p13.php', numero_pregunta); return false;}
        return false
        ">
            <div class="form-group">
                <div class="jumbotron">
                    <div class="container">
                        <div class="row row-header">
                            <div id="preg_p12" class="col-sm-12">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="md-form">
                    <i class="fas fa-pencil-alt prefix"></i>
                    <textarea id="P12_textArea" class="md-textarea form-control" rows="3" required></textarea>
                </div>
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