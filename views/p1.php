<script>
    $(".js-example-placeholder-multiple").select2({
        theme: "classic",
        placeholder: "Seleccione...",
    });
    $(function() {
        $(".js-example-basic-multiple").select2();
    });
    var numero_pregunta = 'p1';
    var siguiente = 'views/p3.php';
</script>
<div class="mt-5" id="p1">
    <div class="col-xl-6 offset-xl-3 col-lg-6 offset-lg-3 col-md-8 offset-md-2">
        <div class="jumbotron">
            <label>
                1. Del listado que te vamos a mostrar por favor selecciona: ¿Cuáles son las principales razones qué te motivaron a venir a la Feria del Hogar 2020?
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
                    <option value="1">Encontrar productos nuevos (lanzamientos)</option>
                    <option value="2">Buscar promociones y descuentos</option>
                    <option value="3">Por curiosidad</option>
                    <option value="4">Por tradición / costumbre</option>
                    <option value="5">Realizar compras durante la feria</option>
                    <option value="6">Conocer las novedades y tendencias del mercado</option>
                    <option value="7">Buscar productos que no se encuentran en otros almacenes de la ciudad (novedades)</option>
                    <option value="8">Asistir a la agenda de actividades programadas por la feria</option>
                    <option value="9">Es un plan diferente a ir a un Centro Comercial</option>
                </select>
                <textarea id="form10" class="md-textarea form-control" rows="1" placeholder="Otro ¿Cuál?"></textarea>
            </div>
            <button type="submit" id="btn_p1" class="btn btn-primary btn-lg btn-block" onclick="">
                SIGUIENTE
            </button>
        </form>
    </div>
</div>