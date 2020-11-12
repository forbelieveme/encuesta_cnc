<script>
    $(".js-example-placeholder-multiple").select2({
        theme: "classic",
        placeholder: "Seleccione...",
    });
    $(function() {
        $(".js-example-basic-multiple").select2();
    });
    var numero_pregunta=['P1'];
</script>
<div class="mt-5" id="p1">
    <div class="col-xl-6 offset-xl-3 col-lg-6 offset-lg-3 col-md-8 offset-md-2">
        <form method="post" id="form_p1" onsubmit="return false;" class="">
            <div class="form-group">
                <label for="P1">1. A continuación, le voy a mostrar una tarjeta con un listado
                    de frases de ese listado por favor me indica ¿Cuáles son las principales razones qué lo
                    motivaron a venir a la Feria del Hogar 2019?, ¿algún otro? </label>
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
            <button type="submit" id="btn_p1" class="btn btn-primary btn-lg btn-block" onclick="var el = document.getElementsByTagName('select')[0];
getSelectValues(el, 'views/p3.php', numero_pregunta);">
                SIGUIENTE
            </button>
        </form>
    </div>
</div>