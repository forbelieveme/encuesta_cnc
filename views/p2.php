<script>
    var numero_pregunta = 'p2';
    var siguiente = 'views/p3.php'
</script>
<div class="mt-5" id="p19">
    <div class="col-xl-6 offset-xl-3 col-lg-6 offset-lg-3 col-md-8 offset-md-2">
        <div class="jumbotron">
            <div class="container">
                <div class="row row-header">
                    <div class="col-sm-12">
                        <label id="label_P2">2. Teniendo en cuenta una escala de 1 a 10, donde 1 es “Muy insatisfecho” Y
                            10 “Muy satisfecho”, ¿Cuál es tú nivel de satisfacción con respecto al
                            cumplimiento de cada uno de los motivos que te llevaron a asistir a la Feria del Hogar 2020? 
                        </label>
                    </div>
                </div>
            </div>
        </div>

        <div id="formulario">
        </div>
    </div>
</div>
<script>
    var preg = [
        "Atención del expositor (Nivel de preparación de los expositores si cuenta con tarjetas, maneja la información requerida, brinda un servicio completo)",
        "Cantidad de expositores (suficientes)",
        // "Calidad de expositores - Tipo de productos ofrecidos",
        "Presencia de productos novedosos y/o nuevos productos",
        "Presencia de empresas y marcas conocidas del sector – representatividad de empresas",
        // "Variedad de Productos y/o servicios",
        "El diseño de stands",
        // "Opcion escrita"
    ];

    $(document).ready(function() {
        formulario_dim('p2');
    });
</script>