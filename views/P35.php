<script>
    $(".js-example-placeholder-multiple").select2({
        theme: "classic",
        placeholder: "Seleccione...",
    });
    $(function() {
        $(".js-example-basic-multiple").select2();
    });
    var numero_pregunta = 'p35';
    var siguiente = ['views/p39.php','views/p36.php'];
</script>
<div class="mt-5" id="p1">
    <div class="col-xl-6 offset-xl-3 col-lg-6 offset-lg-3 col-md-8 offset-md-2">
        <div class="jumbotron">
            <label>
                35. Del listado de actividades de Feria del Hogar 2020 ¿En cuáles actividades participaste?
            </label>
        </div>
        <form method="post" onsubmit="        
            submit_parametro(
            document.getElementById('ninguno').checked,
            document.getElementsByTagName('select')[0],'p35',            
            siguiente            
            );
            return false;">


            <select multiple id="select_p35" class="form-control js-example-basic-multiple js-example-placeholder-multiple" id="exampleFormControlSelect2">
                <option value="1">Charlas “Un café con expertos</option>
                <option value="2">Asesorías “Hazlo tú mismo” en el pabellón 6 y 17</option>
                <option value="3">Actividades y compras del Blackfriday (SÓLO APARECE EL 27 DE NOVIEMBRE)</option>
                <option value="4">Actividades Y compras en el trasnochón (SÓLO APARECE EL 4 DE DICIEMBRE)</option>
            </select>
            <div class="radioboton form-check">
                <input class='form-check-input' type='checkbox' name='opcion' id='ninguno' onclick="
                        activar_desactivar(
                        document.getElementById('ninguno').checked, 
                        document.getElementsByTagName('select')[0])">
                <label class="radioboton-label" for='P27_1'> Ninguno de estos</label>
            </div>

            <button type="submit" id="btn_p1" class="btn btn-primary btn-lg btn-block mt-5" onclick="">
                SIGUIENTE
            </button>
        </form>
    </div>
</div>