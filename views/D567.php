<script>
    function validar(t1, t2, t3) {
        if ((t1 == "") || (t2 == "") || (t3 == "")) {
            alert('Por favor llenar todos los campos.');
            return false;
        }
        return true;

    }
    var numero_pregunta = 'D567';
    var siguiente = 'views/P43.php';
</script>
<div class="mt-5" id="P42">
    <div class="col-xl-6 offset-xl-3 col-lg-6 offset-lg-3 col-md-8 offset-md-2">
        <form method='POST' class="was-validated" onsubmit="
        t1 = document.getElementById('nombre').value;
        t2 = document.getElementById('correo').value; 
        t3 = document.getElementById('numero').value;
        if (validar(t1,t2,t3)){
            submit_personales(t1,t2,t3,siguiente);
            return false;
        }return false;
        ">
            <div class="jumbotron">
                <div class="container">
                    <div class="row row-header">
                        <div class="col-sm-12">
                            <label>Datos Demográficos</label>
                        </div>
                    </div>
                </div>
            </div>


            <div class="container mb-2">
                <label for='nombre'>Nombre</label>
                <div class="md-form">
                    <i class="fas fa-pencil-alt prefix"></i>
                    <textarea class="md-textarea form-control" id="nombre" rows="1" required></textarea>
                </div>
            </div>
            <div class="container mb-2">
                <label for='correo'>Correo Electrónico</label>
                <div class="md-form">
                    <i class="fas fa-pencil-alt prefix"></i>
                    <textarea class="md-textarea form-control" id="correo" rows="1" required></textarea>
                </div>
            </div>
            <div class="container mb-2">
                <label for='numero'>Número de Teléfono: </label>
                <div class="md-form">
                    <i class="fas fa-pencil-alt prefix"></i>
                    <textarea class="md-textarea form-control" id="numero" rows="1" required></textarea>
                </div>
            </div>
            <button type="submit" name="login" class="btn btn-primary btn-lg btn-block  mt-5"> SIGUIENTE </button>

        </form>
    </div>
</div>