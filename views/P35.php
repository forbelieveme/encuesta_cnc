<script>
    $(".js-example-placeholder-multiple").select2({
        theme: "classic",
        placeholder: "Seleccione...",
    });
    $(function() {
        $(".js-example-basic-multiple").select2();
    });
    var numero_pregunta = 'p1';
    var siguiente = 'views/p2.php';
</script>
<div class="mt-5" id="p1">
    <div class="col-xl-6 offset-xl-3 col-lg-6 offset-lg-3 col-md-8 offset-md-2">
        <div class="jumbotron">
            <label>
                35. ¿Conociste o te enteraste sobre la agenda de actividades de la Feria del Hogar 2020?
            </label>
        </div>
        <form method="post" id="form_p1" onsubmit="
        var elementos = ObtenerChecked(document.getElementsByTagName('select')[0]);        
        elementos.push(document.getElementById('form10').value);
        submit_decision(false, 1, 'otrocual', numero_pregunta, elementos.join(','),
        siguiente);
        return false;" class="">
            <div class="form-group">
                <select multiple class="form-control js-example-basic-multiple js-example-placeholder-multiple" id="exampleFormControlSelect2">
                    <option value="1">Charlas “Un café con expertos</option>
                    <option value="2">Asesorías “Hazlo tú mismo” en el pabellón 6 y 17</option>
                    <option value="3">Actividades y compras del Blackfriday (SÓLO APARECE EL 27 DE NOVIEMBRE)</option>
                    <option value="4">Actividades Y compras en el trasnochón (SÓLO APARECE EL 4 DE DICIEMBRE)</option>
                </select>
                <div class="radioboton form-check">
                    <input class='form-check-input' type='radio' name='opcionn' id='P27_6' value='6'>
                    <label class='form-check-label' for='P27_6'>Ninguno de estos</label>
                </div>
            </div>
            <button type="submit" id="btn_p1" class="btn btn-primary btn-lg btn-block mt-5" onclick="">
                SIGUIENTE
            </button>
        </form>
    </div>
</div>