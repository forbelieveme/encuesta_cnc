<script>
    var numero_pregunta = 'p10';
    var siguiente = 'views/p11.php'
</script>
<div class="mt-5" id="p10">
    <div class="col-xl-6 offset-xl-3 col-lg-6 offset-lg-3 col-md-8 offset-md-2">
        <form method="post" class="was-validated" onsubmit="
        submit_decision(false, 1, 'textarea', numero_pregunta, 
        document.getElementById('P10_textArea').value,siguiente);
         return false;">
            <div class="form-group">
                <div class="jumbotron">
                    <label for="P10">10. ¿Qué querías comprar que no encontraste?
                    </label>
                </div>
                <div class="md-form">
                    <i class="fas fa-pencil-alt prefix"></i>
                    <textarea id="P10_textArea" class="md-textarea form-control" rows="3" required></textarea>
                </div>
            </div>
            <button type="submit" class="btn btn-primary btn-lg btn-block ">
                SIGUIENTE
            </button>
        </form>
    </div>
</div>