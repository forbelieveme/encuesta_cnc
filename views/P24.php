<script>
    var numero_pregunta = 'p24';
    var siguiente = 'views/P25.php';
</script>
<div class = "mt-5" id= "P24">
    <div class="col-xl-6 offset-xl-3 col-lg-6 offset-lg-3 col-md-8 offset-md-2">
        
            <div class = "jumbotron">
                <div class = "container">
                    <div class = "row row-header">                
                        <div class = "col-sm-12">
                            <h4>24. ¿Por qué razón calificas con (PONER RESPUESTA DE P23)
                                tu satisfacción con los servicios generales prestados por
                                Corferias?  </h4>
                        </div>                    
                    </div>
                </div>
            </div>
        <form method = 'POST' onsubmit="
        submit_decision(false, 1, 'textarea', numero_pregunta,
        document.getElementById('taP24').value,  siguiente);  
        return false;">
            <div class = "container">                
                    <textarea id ="taP24" name="razon_calificacion" style="width:100%" rows = "10"></textarea>
                    <button style="margin-top: 10px;" type='submit'  class = "btn btn-primary btn-block"> Confirmar </button>                    
            </div>
        </form>
    </div>
</div>                    