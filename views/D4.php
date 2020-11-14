<script>
    var numero_pregunta = 'd4';
    var siguiente = 'views/D567.php';
</script>
<div class="mt-5" id="D4">
    <div class="col-xl-6 offset-xl-3 col-lg-6 offset-lg-3 col-md-8 offset-md-2">
        <form method='POST' id="form_d4" onsubmit="
            submit_decision(false, 1, 'radio', 'd4', 
            getRadioVal_text('d4_textArea',document.getElementById('form_d4'),'d4'), 
            Obtener_siguiente('d4', 
            getRadioVal_text('d4_textArea',document.getElementById('form_d4'),'d4'), siguiente)
            );
            return false;">
            <div class="jumbotron">
                <div class="col-12 col-sm-12 ">
                    <hlabel>¿Viniste a la feria con tu…? </hlabel>
                </div>
            </div>
            <div class="container" id="D4">

                <div class="col-sm-12 ">
                    <div class="radioboton">
                        <input class='radio-check' type='radio' name='d4' id='D4_1' value='1'>
                        <label class="radioboton-label" for='D4_1'> Grupo familiar </label>
                    </div>
                    <div class="radioboton">
                        <input class='radio-check' type='radio' name='d4' id='D4_2' value='2'>
                        <label class="radioboton-label" for='D4_2'> Grupo de amigos</label>
                    </div>
                    <div class="radioboton">
                        <input class='radio-check' type='radio' name='d4' id='D4_3' value='3'>
                        <label class="radioboton-label" for='D4_3'> Solo</label>
                    </div>

                    <div class="radioboton">
                        <input class='radio-check' type='radio' name='d4' id='D4_4' value='4'>
                        <label style="margin-left: 10px;" for='D4_4'> Otro, ¿Cuál? </label>
                        <input id="d4_textArea" style="margin-left: 10px;" type="text" name=otro id='D4.1'>
                    </div>


                </div>
                <div class="col-sm-12">
                    <div>
                        <button style="margin-top: 10px;" type='submit' class="btn btn-primary btn-block"> Confirmar </button>
                    </div>
                </div>



            </div>
        </form>
    </div>
</div>