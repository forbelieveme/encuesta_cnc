<script>
    $(".js-example-placeholder-multiple").select2({
        theme: "classic",
        placeholder: "Seleccione...",
    });
    $(function() {
        $(".js-example-basic-multiple").select2();
    });
    var numero_pregunta = 'p31';
    var siguiente = 'views/p32.php';
</script>
<div class="mt-5" id="p31">
    <div class="col-xl-6 offset-xl-3 col-lg-6 offset-lg-3 col-md-8 offset-md-2">
        <div class="jumbotron">
            <label>
            31. ¿En qué medio recuerdas haber visto, leído o escuchado publicidad de la Feria
            del Hogar 2020?
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
                    <option value="1">Invitación de un expositor</option>
                    <option value="2">Página web de la feria [https://feriadelhogar.com/es/]</option>
                    <option value="3">Pauta en internet (cortinillas, banner) diferente a la página web</option>
                    <option value="4">Pauta en televisión</option>
                    <option value="5">Pauta en radio</option>
                    <option value="6">Redes sociales (Facebook, Twitter, Linkedin, etc.)</option>
                    <option value="9">Amigo / conocido o referido (Enc. Ésta opción incluye WhatsApp)</option>
                    <option value="11">Revistas y Prensa</option>
                </select>
                <textarea id="form10" class="md-textarea form-control" rows="1" placeholder="Otro ¿Cuál?"></textarea>
            </div>
            <button type="submit" id="btn_p1" class="btn btn-primary btn-lg btn-block" onclick="">
                SIGUIENTE
            </button>
        </form>
    </div>
</div>