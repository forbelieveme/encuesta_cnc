<script>
    $(".js-example-placeholder-multiple").select2({
        theme: "classic",
        placeholder: "Seleccione...",
    });
    $(function() {
        $(".js-example-basic-multiple").select2();
    });
</script>
<div class="mt-5" id="p1">
    <div class="col-xl-6 offset-xl-3 col-lg-6 offset-lg-3 col-md-8 offset-md-2">
        <form method="post" onsubmit="return false;">
            <!-- <h2 class="text-center black">P1</h2> -->
            <div class="form-group">
                <label for="P1">¿Cuáles son las categorías de producto de la feria que más le interesan?
                </label>
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
                    <option>Otro, ¿Cuál?</option>
                </select>
            </div>

            <button type="submit" name="login" class="btn btn-primary btn-lg btn-block" onclick="var el = document.getElementsByTagName('select')[0];
    getSelectValues(el, 'views/p17.php');">
                INGRESAR
            </button>
        </form>
    </div>
</div>