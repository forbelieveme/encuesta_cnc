<script>
    var numero_pregunta = 'f4';
    var siguiente = ['views/finaliza.php', 'views/F5.php'];
</script>
<div class="mt-5" id="F4">
    <div class="col-xl-6 offset-xl-3 col-lg-6 offset-lg-3 col-md-8 offset-md-2">


        <div class="jumbotron">
            <div class="container">
                <label>¿Tú o alguien de tu familia cercana trabaja en alguna de las siguientes empresas?</label>
            </div>
        </div>


        <form method='POST' class="was-validated" id="form_f4" onsubmit="submit_decision(false, 1, 'radio', numero_pregunta,
        getRadioVal(document.getElementById('form_f4'),('F4')), 
        Obtener_siguiente(numero_pregunta,getRadioVal
        (document.getElementById('form_f4'),('F4')),
        siguiente)); return false;">

            <div class="container">
                <div class="custom-control custom-radio">
                    <input type="radio" id="F4_1" value='2' name="F4" class="custom-control-input" required>
                    <label class="custom-control-label" for="F4_1">Trabaja en conferias</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="F4_2" value='3' name="F4" class="custom-control-input" required>
                    <label class="custom-control-label" for="F4_2">Trabaja en una empresa expositora de la feria</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="F4_3" value='4' name="F4" class="custom-control-input" required>
                    <label class="custom-control-label" for="F4_3">Ninguna</label>
                </div>
            </div>
            <div class="container">
                <button type="submit" name="login" class="btn btn-primary btn-lg btn-block  mt-5" onclick="">SIGUIENTE </button>
            </div>
        </form>
    </div>
</div>
<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    // (function() {
    //     'use strict';
    //     window.addEventListener('load', function() {
    //         // Fetch all the forms we want to apply custom Bootstrap validation styles to
    //         var forms = document.getElementsByClassName('needs-validation');
    //         // Loop over them and prevent submission
    //         var validation = Array.prototype.filter.call(forms, function(form) {
    //             form.addEventListener('submit', function(event) {
    //                 if (form.checkValidity() === false) {
    //                     event.preventDefault();
    //                     event.stopPropagation();
    //                 }
    //                 form.classList.add('was-validated');
    //             }, false);
    //         });
    //     }, false);
    // })();
</script>