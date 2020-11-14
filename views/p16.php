<script>
    $(".js-example-placeholder-multiple").select2({
        theme: "classic",
        placeholder: "Seleccione...",
    });
    $(function() {
        $(".js-example-basic-multiple").select2();
    });
    var numero_pregunta = 'p16';
    var siguiente = 'views/p17.php';
</script>
<div class="mt-5" id="p1">
    <div class="col-xl-6 offset-xl-3 col-lg-6 offset-lg-3 col-md-8 offset-md-2">
        <form method="post" id="form_p16" onsubmit="
    var elementos = ObtenerChecked(document.getElementsByTagName('select')[0]); 
    elementos.push(document.getElementById('form10').value);
    submit_decision(false, 1, 'otrocual', numero_pregunta, elementos.join(','), siguiente);
    return false;">
            <!-- <h2 class="text-center black">P1</h2> -->
            <div class="form-group">
                <label>Ahora te vamos a hacer unas preguntas sobre la muestra comercial, es decir los expositores y stands de la feria.</label>
                <div class="jumbotron">
                    <label for="P1">16. ¿Cuáles son las categorías de producto de la feria que más te interesan? Selecciona todas las opciones que correspondan
                    </label>
                </div>
                <select multiple class="form-control js-example-basic-multiple js-example-placeholder-multiple" id="exampleFormControlSelect2">
                    <option value="1">Mesa y cocina</option>
                    <option value="2">Decoración y acabados</option>
                    <option value="3">Electrodomésticos</option>
                    <option value="4">Muebles interiores y exteriores</option>
                    <option value="5">Colchones</option>
                    <option value="6">Lencería</option>
                    <option value="7">Belleza y cuidado personal</option>
                    <option value="8">Artesanías</option>
                    <option value="9">Moda y confección</option>
                    <option value="10">Marroquinería y calzado</option>
                    <option value="11">Joyas</option>
                    <option value="12">Bisutería y accesorios</option>
                </select>
                <textarea id="form10" class="md-textarea form-control" rows="1" placeholder="Otro ¿Cuál?"></textarea>
            </div>

            <button type="submit" name="login" class="btn btn-primary btn-lg btn-block" onclick="">
                SIGUIENTE
            </button>
        </form>
    </div>
</div>