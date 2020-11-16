<script>
    function validar(arreglodeselect, valor_ta){
        if ((arreglodeselect.length == 0) && (valor_ta == "")){            
            alert('Por favor selecciona al menos una opción');
            return false;
        }
        return true;
    }
    $(".js-example-placeholder-multiple").select2({
        theme: "classic",
        placeholder: "Seleccione...",
    });
    $(function() {
        $(".js-example-basic-multiple").select2();
    });
    var numero_pregunta = 'p22';
    var siguiente = 'views/P23.php';
</script>
<div class="mt-5" id="P22">
    <div class="col-xl-6 offset-xl-3 col-lg-6 offset-lg-3 col-md-8 offset-md-2">        
            <div class="jumbotron">
                <div class="container">
                    <div class="row row-header">
                        <div class="col-sm-12">
                            <label id="preg_p22"></label>
                        </div>
                    </div>
                </div>
            </div>
        <form method='POST' id="form_p22"         
        onsubmit="
        var elementos = ObtenerChecked(document.getElementsByTagName('select')[0]);                  
        var valortexto = document.getElementById('form22').value;
        if(validar(elementos, valortexto)){
            elementos.push(valortexto);
            submit_decision(false, 1, 'otrocual', numero_pregunta, elementos.join(','),
            siguiente);
            return false;
        }
        return false;
        ">

            <div class="form-group">
                <select multiple class="form-control js-example-basic-multiple js-example-placeholder-multiple" id="exampleFormControlSelect2">
                    <option value="1">No me llegó el código QR</option>
                    <option value="2">El proceso de compra fue lento</option>
                    <option value="3">Inconvenientes con la plataforma de pago</option>
                    <option value="4">Problemas con la lectura del código al ingresar </option>
                    <option value="5">Filas muy largas </option>             
                </select>
                <textarea id="form22" class="md-textarea form-control" rows="1" placeholder="Otro ¿Cuál?"></textarea>
            </div>            
                <button type="submit" class="btn btn-primary btn-lg btn-block ">
                    SIGUIENTE
                </button>
            
        </form>
    </div>
</div>
<script>
    $(document).ready(function() {
        cambia_texto_pregunta("preg_p22");
    });
</script>