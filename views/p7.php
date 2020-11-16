<script>
    var numero_pregunta = 'p7';
    var siguiente = 'views/p11.php'
</script>
<div class="mt-5" id="p7">
    <div class="col-xl-6 offset-xl-3 col-lg-6 offset-lg-3 col-md-8 offset-md-2">

        <div class="jumbotron">
            <label for="P7_textArea">7. ¿Por qué no realizaste compras?
            </label>
        </div>
        <form method="post" class="was-validated" onsubmit="
                submit_decision(false, 1, 'textarea', numero_pregunta,
                document.getElementById('P7_textArea').value,  siguiente);
                return false;">
            <div class="form-group mt-5">
                <div class="container">
                    <textarea id="P7_textArea" class="md-textarea form-control" rows="3"></textarea>
                </div>
            </div>
            <button type="submit" class="btn btn-primary btn-lg btn-block ">
                SIGUIENTE
            </button>
        </form>
    </div>
</div>