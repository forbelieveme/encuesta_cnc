<script>
    function vme(){    
        var checkopt_arr = document.getElementsByTagName('input');
        var num_preg = checkopt_arr.length/10;
        var total_respondidas = 0;
        for (let i = 0; i < checkopt_arr.length; i++){
            if (checkopt_arr[i].checked){
                total_respondidas = total_respondidas + 1;
            }
        }
        if(total_respondidas == num_preg){
            return true;
        }
        alert("Por favor responder todas las preguntas.")
        return false;
    }
    var numero_pregunta = 'p36';
    var siguiente = 'views/P37.php';
</script>
<div class="mt-5" id="p36">
    <div class="col-xl-6 offset-xl-3 col-lg-6 offset-lg-3 col-md-8 offset-md-2">


        <div class="jumbotron">
            <div class="container">
                <div class="row row-header">
                    <div class="col-sm-12">
                        <label>36. Teniendo en cuenta una escala de 1 a 10, donde 1 es “Muy Insatisfecho” y 
                            10 es “Muy satisfecho” ¿cuál es tu nivel de satisfacción con. . . ?</label>
                    </div>
                </div>
            </div>
        </div>

        <div id="formulario">
        </div>

    </div>
</div>
<script>
    $(document).ready(function() {
        formulario_dim('p36');
    });
</script>