<script>
    function validar(cb_status, elementos){
        arr = ObtenerChecked(elementos);
        if((cb_status == false) && (arr.length == 0)){
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
    var numero_pregunta = 'p27';
    var siguiente = ['views/P29.php', 'views/P28.php'];
</script>
<div class = "mt-5" id="P27">
    <div class="col-xl-6 offset-xl-3 col-lg-6 offset-lg-3 col-md-8 offset-md-2">
        <form method = 'POST' onsubmit = "
            if(validar(document.getElementById('ninguno').checked,document.getElementsByTagName('select')[0] )){
                submit_parametro(
                document.getElementById('ninguno').checked,
                document.getElementsByTagName('select')[0],'p27',            
                siguiente            
                );
                return false;
            }return false;">
            <div class = "jumbotron">
                <div class = "container">
                    <div class = "row row-header">                
                        <div class = "col-sm-12">
                            <label>27. ¿Hiciste uso de alguno de los siguientes servicios? </label>
                        </div>                    
                    </div>
                </div>
            </div>
            <div class="form-group mt-5" >
                <select multiple id="select_p27" class="form-control js-example-basic-multiple js-example-placeholder-multiple">
                    <option value="1">Parqueadero Verde</option>
                    <option value="2">Parqueadero Torre</option>
                    <option value="3">Maletero / Paquetero</option>
                    <option value="4">Plazoleta de comidas</option>
                    <option value="7">Punto de información </option>
                    
                </select>                
                <div class = "radioboton form-check">                         
                        <input class = 'form-check-input' type='checkbox' name='opcion' id='ninguno' 
                        onclick="
                        activar_desactivar(
                        document.getElementById('ninguno').checked, 
                        document.getElementsByTagName('select')[0])">
                        <label  class = "radioboton-label" for = 'P27_1' > Ninguno de estos</label>
                </div>   
            </div>
            
            
            <div class = "form-group mt-5"> 
                <button style="margin-top: 10px;" type='submit'  class = "btn btn-primary btn-block"> SIGUIENTE </button>    
            </div>  
                
            
        </form>
    </div>
</div>            
                