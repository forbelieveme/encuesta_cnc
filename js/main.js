var cid;
var f1;
var f3;
var preguntaDelMomento;

function generarCodigo() {
    //generación de codigo aleatorio para almacenamiento del registro
    var id = '';
    var characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
    var charactersLength = characters.length;
    for (var i = 0; i < 15; i++) {
        id += characters.charAt(Math.floor(Math.random() * charactersLength));
    }
    console.log("Primer registro")

    //Captura del codigo unico de registro
    cid = id;

    //Obtención del tiempo actual
    var tiempo = new Date();

    //Fecha Calendario
    var dia = tiempo.getDate();
    var mes = (tiempo.getMonth() + 1);


    //Hora 
    var hora = tiempo.getHours();

    //    console.log("El dia es "+dia+" del "+mes+ ". La hora es "+hora+".");

    f1 = valorf1(mes, dia);
    f3 = valorf3(hora);

    console.log("Creando Registro con cid: " + cid + ", f1 = " + f1 + " y f3 = " + f3 + ".");

    $("#pregunta").load("views/F4.php");



    // console.log(cid);
    // $.ajax({
    //     url: './php/actualizar.php',
    //     data: {
    //         query: 'crear',
    //         cedula,
    //     },
    //     type: 'POST',
    //     success: function (datos) {
    //                 console.log('Default', datos);
    //     },
    //     error: function (error) {
    //         console.log(`error`, error);
    //     }
    // });
}
//Calculo del valor f1
function valorf1(mes, dia) {
    if (mes == 11) {
        for (let i = 13; i < 31; i++) {
            if (dia == i)
                return i - 11;
        }

    } else if (mes == 12) {
        for (let i = 1; i < 7; i++) {
            if (dia == i)
                return i + 19;
        }
    } else {
        return 0;
    }

}

//Calculo del valor f3
function valorf3(hora) {
    console.log("Hora: " + hora);
    console.log("Tipo: " + typeof (hora));
    if (10 <= hora && hora < 12) {
        return 1;
    } else if ((12 <= hora) && (hora < 14)) {
        return 2;

    } else if ((14 <= hora) && (hora < 18)) {
        return 3;

    } else if ((18 <= hora) && (hora < 21)) {
        return 4;

    } else if ((21 <= hora) && (hora < 22)) {
        return 5;
    }
    else {
        return 0;
    }

}

function submit_escala(x, siguiente, num_pregunta) {

    console.log(`ENVIO AJAX POST`, x);
    peticionUpdate(x, num_pregunta);



    $("#pregunta").load(siguiente);

}
function submit_decision_binaria(x, siguiente, num_pregunta) {

    console.log(`ENVIO AJAX POST`, x);
    peticionUpdate(x, num_pregunta);

    if (x == '1') {
        $("#pregunta").load(siguiente[0]);
    } else {
        $("#pregunta").load(siguiente[1]);
    }


}

function getSelectValues(select, siguiente, num_pregunta) {
    var result = [];
    var options = select && select.options;
    var opt;

    for (var i = 0, iLen = options.length; i < iLen; i++) {
        opt = options[i];

        if (opt.selected) {
            result.push(opt.value || opt.text);
        }
    }
    console.log(`ENVIO AJAX POST`, result);
    peticionUpdate(result.toString(), num_pregunta);



    $("#pregunta").load(siguiente);

}

function ObtenerChecked(select) {
    var result = [];
    var options = select && select.options;
    var opt;

    for (var i = 0, iLen = options.length; i < iLen; i++) {
        opt = options[i];

        if (opt.selected) {
            result.push(opt.value || opt.text);
        }
    }
    console.log(`Valor del select `, result);
    return result;
}

function getRadioVal(form, name) {
    var val;
    // get list of radio buttons with specified name
    var radios = form.elements[name];

    // loop through list of radio buttons
    for (var i = 0, len = radios.length; i < len; i++) {
        if (radios[i].checked) { // radio checked?
            val = radios[i].value; // if so, hold its value in val
            break; // and break out of for loop
        }
    }
    return val; // return value of checked radio or undefined if none checked
}


function getRadioVal_multiple(form, nameArray) {
    var val = [];
    // get list of radio buttons with specified name

    var radios = [];
    for (i = 0; i < nameArray.length; i++) {
        radios.push(form.elements[nameArray[i]]);
    }

    for (var i = 0, len = radios.length; i < len; i++) {
        for (var j = 0, len2 = radios[i].length; j < len2; j++) {
            if (radios[i][j].checked) { // radio checked?
                val.push(radios[i][j].value); // if so, hold its value in val
                break; // and break out of for loop
            }
        }
    }

    return val;
}

function getTextArea(id_textA, siguiente, num_pregunta) {
    var x = document.getElementById(id_textA).value;

    console.log(`ENVIO AJAX POST`, x);
    peticionUpdate(x, num_pregunta);

    $("#pregunta").load(siguiente);
}

function submit_multiple_escala(form, nameArray, siguiente, num_pregunta) {

    var x = getRadioVal_multiple(form, nameArray);

    console.log(`ENVIO AJAX POST`, x);
    peticionUpdate(x, num_pregunta);


    $("#pregunta").load(siguiente);
}

function getRadioVal_text(id_textA, form, name) {
    var val;
    var x = document.getElementById(id_textA).value;
    // get list of radio buttons with specified name
    var radios = form.elements[name];

    // loop through list of radio buttons
    for (var i = 0, len = radios.length; i < len; i++) {
        if (radios[i].checked) { // radio checked?
            val = radios[i].value; // if so, hold its value in val
            break; // and break out of for loop
        }
    }

    if (val == 5) {
        return x;
    } else {
        return val;
    }
}

function submit_decision_bin(x, siguiente, num_pregunta) {

    console.log(`ENVIO AJAX POST`, x);
    peticionUpdate(x, num_pregunta);


    if (x == '3' || x == '4') {
        $("#pregunta").load(siguiente[0]);
    } else {
        $("#pregunta").load(siguiente[1]);
    }


}

function submit_decision_F4(x, siguiente, num_pregunta,) {

    console.log(`ENVIO AJAX POST`, x);
    peticionUpdate(x, num_pregunta);


    if (x == '2' || x == '3') {
        $("#pregunta").load(siguiente[0]);
    } else {
        $("#pregunta").load(siguiente[1]);
    }


}
function submit_decision_F5(x, siguiente, num_pregunta,) {

    console.log(`ENVIO AJAX POST`, x);
    peticionUpdate(x, num_pregunta);


    if (x == '0') {
        $("#pregunta").load(siguiente[0]);
    } else {
        $("#pregunta").load(siguiente[1]);
    }


}
function submit_decision_bin2(x, siguiente, num_pregunta) {

    console.log(`ENVIO AJAX POST`, x);
    peticionUpdate(x, num_pregunta);


    if (x == '9' || x == '10') {
        $("#pregunta").load(siguiente[0]);
    } else {
        $("#pregunta").load(siguiente[1]);
    }


}

/*Método para insertar más de una pregunta (Update)
idPregunta = P# 
*id sub pregunta lista para la inserciónPregunta = P#
*/
function submit_decisiones(multiples, numero_de_respuestas, tipo_de_pregunta, idPregunta, elemento, siguiente) {
    x = elemento;
    realid = idPregunta.split('');
    realid.shift();
    realid.shift();
    realid.shift();
    realid.shift();
    realid.shift();
    realid = realid.join('');

    var seleccionados = who_is_checked(numero_de_respuestas, 10, chunk(x, 10));

    console.log(seleccionados);
    if (tipo_de_pregunta == "escala") {
        for (let i = 0; i < numero_de_respuestas; i++) {
            submit_escala_porId(seleccionados[i], realid + '_' + (i + 1));
            //console.log(seleccionados[i], realid+'_'+(i+1));
        }
    } if (tipo_de_pregunta == "radio") {
        //metodo
    }
    else {
        return alert('No se econtró el tipo seleccionado');
    }
    $("#pregunta").load(siguiente);
}
//Metodo de prueba
function submit_decision(multiples, numero_de_respuestas, tipo_de_pregunta, idPregunta, elemento, siguiente, pasaInfo) {
    //Multiples respuestas
    if (multiples) {
        x = elemento;

        if (tipo_de_pregunta == "escala") {
            var seleccionados = who_is_checked(numero_de_respuestas, 10, chunk(x, 10));
            console.log(seleccionados);
            for (let i = 0; i < numero_de_respuestas; i++) {
                submit_escala_porId(seleccionados[i], idPregunta + '_' + (i + 1));
                //console.log(seleccionados[i], realid+'_'+(i+1));
            }
        } if (tipo_de_pregunta == "radio") {
            console.log("soy radio multiple y con elemento siguiente " + siguiente);
        }
        else {
            return alert('No se econtró el tipo seleccionado');
        }
        //unica respuesta
    } else if (!multiples) {

        if (tipo_de_pregunta == "escala") {
            console.log(idPregunta, " " + elemento + " y voy para " + siguiente);
            peticionUpdate(elemento, idPregunta);

        } else if (tipo_de_pregunta == "radio") {
            // console.log("soy radio unica y con elemento siguiente "+siguiente
            // + " y valor "+elemento);

            console.log(idPregunta, " " + elemento + " y voy para " + siguiente);
            peticionUpdate(elemento, idPregunta);
        } else if (tipo_de_pregunta == "otrocual") {
            console.log("llegue a otrocual single con valor "
                + elemento + " en la pregunta " + idPregunta + " y voy para " + siguiente)
            peticionUpdate(elemento, idPregunta);

        } else if (tipo_de_pregunta == "textarea") {
            console.log("llegue a textarea single con valor "
                + elemento + " en la pregunta " + idPregunta + " y voy para " + siguiente)
            peticionUpdate(elemento, idPregunta);
        }
        else {
            return console.log("No se encontro el tipo.");
        }

    }
    else {
        return console.log("No se sabe si el multiple o unica respuesta.");
    }
    $("#pregunta").load(siguiente);
    if (pasaInfo) {
        let campo = cambiarTexto(idPregunta, elemento).filter(x =>
             x != undefined
        )
        preguntaDelMomento = campo[0];
    }

}

function cambia_texto_pregunta(id) {
    var labelP = document.createElement("label");
    labelP.textContent = preguntaDelMomento;

    document.getElementById(id).appendChild(labelP);

}

function Obtener_siguiente(idPregunta, x, siguiente) {
    if (typeof (siguiente) == "string") {
        return siguiente;
    }
    if (idPregunta == 'f4') {
        if (x == '2' || x == '3') {
            return siguiente[0];
        } else {
            return siguiente[1];
        }

    }
    if (idPregunta == 'f5') {
        if (x == '0') {
            return siguiente[0];
        } else {
            return siguiente[1];
        }
    }

    if (idPregunta == 'p6') {
        //Caso sí
        if (x == '1') {
            return siguiente[0];
        }
        //Caso No
        else {
            return siguiente[1];
        }
    }

    if (idPregunta == 'p9') {
        //Caso sí
        if (x == '1') {
            return siguiente[0];
        }
        //Caso No
        else {
            return siguiente[1];
        }
    }

}

function submit_escala_porId(elemento, idPregunta) {
    console.log(`ENVIO AJAX POST`, elemento + " " + idPregunta);
    peticionUpdate(elemento, idPregunta);
}

function submit_inicial() {
    generarCodigo();
    console.log(`ENVIO AJAX POST`, "f1= " + f1 + ", f3 = " + f3 + ", cid" + cid);
    peticionInsert(f1, f3, cid);
}


function peticionInsert(f1, f3, cid) {

    $.ajax({
        url: './php/actualizar.php',
        data: {
            query: 'insertar',
            f1,
            f3,
            cid
        },
        type: 'POST',
        success: function (datos) {
            console.log('Default', datos);
        },
        error: function (error) {
            console.log(`error`, error);
        }
    });

}

function peticionUpdate(informacion, num_pregunta) {
    $.ajax({
        url: './php/actualizar.php',
        data: {
            query: 'actualizar',
            informacion,
            num_pregunta,
            cid
        },
        type: 'POST',
        success: function (datos) {
            console.log('Default', datos);
        },
        error: function (error) {
            console.log(`error`, error);
        }
    });

}

function verificar_datos(numero_de_respuestas, tipo_de_pregunta, idPregunta, elemento, siguiente) {
    console.log(numero_de_respuestas);
    console.log(tipo_de_pregunta);
    console.log(idPregunta);
    x = elemento;
    for (let i = 0; i < chunk(x, 10).length - 1; i++) {
        console.log(who_is_checked(5, 10, chunk(x, 10))[i]);
    }
    console.log(siguiente);
    $("#pregunta").load(siguiente);
}

//Metodo ppara divir arreglo en subpartes
function chunk(array, size) {
    const chunked_arr = [];
    for (let i = 0; i < array.length; i++) {
        const last = chunked_arr[chunked_arr.length - 1];
        if (!last || last.length === size) {
            chunked_arr.push([array[i]]);
        } else {
            last.push(array[i]);
        }
    }
    return chunked_arr;
}


//Metodo para ver cuales valores de un conjunto estan checked
function who_is_checked(filas, columnas, arr) {
    var checkedones = [];
    for (let i = 0; i < filas; i++) {
        for (let j = 0; j < columnas; j++) {
            if (arr[i][j].checked) {
                checkedones.push(j + 1);
            }
        }
    }
    return checkedones;
}


//Metodo para ver cuales valores de un conjunto estan checked
function who_is_checked(filas, columnas, arr) {
    var checkedones = [];
    for (let i = 0; i < filas; i++) {
        for (let j = 0; j < columnas; j++) {
            if (arr[i][j].checked) {
                checkedones.push(j + 1);
            }
        }
    }
    return checkedones;
}

// var preg = [
//     "Atención del expositor (Nivel de preparación de los expositores si cuenta con tarjetas, maneja la información requerida, brinda un servicio completo)",
//     "Cantidad de expositores (suficientes)",
//     "Calidad de expositores - Tipo de productos ofrecidos",
//     "Presencia de productos novedosos y/o nuevos productos",
//     "Presencia de empresas y marcas conocidas del sector – representatividad de empresas",
//     "Variedad de Productos y/o servicios",
//     "El diseño de stands",
//     // "Opcion escrita"
// ];
function crear_form_dinamico(preg) {

    var form = document.createElement("form");
    form.setAttribute("method", "post");
    form.setAttribute("id", "form_p2");
    form.setAttribute("onsubmit", "return false;");
    var button = document.createElement("button");
    button.setAttribute("type", "post");
    button.setAttribute("class", "btn btn-primary btn-lg btn-block mt-5 mb-3");
    button.setAttribute("onclick", "submit_multiple_escala(document.getElementById('form_p19'),['P19_1', 'P19_2', 'P19_3', 'P19_4', 'P19_5', 'P19_6', 'P19_7'],'views/p3crear_form_dinamico.php', numero_pregunta)");
    button.textContent = "SIGUENTE";
    for (let i = 0; i < preg.length; i++) {

        // Create a form synamically 

        var div1 = document.createElement("div");
        div1.setAttribute("class", "form-group mt-5");

        var labelP = document.createElement("label");
        labelP.textContent = preg[i];

        var div2 = document.createElement("div");
        div2.setAttribute("class", "container");

        var div3 = document.createElement("div");
        div3.setAttribute("class", "form-check form-check-inline col-1");
        for (let j = 1; j < 11; j++) {

            var input = document.createElement("input");
            input.setAttribute("class", "form-check-input");
            input.setAttribute("type", "radio");
            input.setAttribute("name", `P2_${i}`);
            input.setAttribute("id", `P2_${i}_${j}`);
            input.setAttribute("value", "100001");

            var labelIn = document.createElement("label");
            labelIn.setAttribute("class", "form-check-label escala");
            labelIn.textContent = j;

            div3.append(input);
            div3.append(labelIn);
        }
        div2.append(div3);
        div1.append(labelP);
        div1.append(div2);
        form.append(div1);
    }
    form.append(button);

    document.getElementById("aqui")
        .appendChild(form);
}

function cargarSiguiente(siguiente) {
    $("#pregunta").load(siguiente);
}


function cambiarTexto(pregunta, elemento) {
    var arrPreg = {
        "p3": `¿Por qué razón calificas con ${elemento} el cumplimiento de los motivos que te llevaron a venir a la Feria del Hogar 2020?`,
        "p11": `¿Por qué razón calificas con ${elemento} tu satisfacción en general con la Feria del Hogar 2020?`,
        "p17": `¿Por qué razón calificas con ${elemento} la satisfacción general con los expositores (muestra comercial) de la Feria del Hogar 2020?`,
        "p21": `¿Por qué razón calificas con ${elemento} tu satisfacción con el proceso de compra de la boleta?`,
        "p23": `Por qué razón calificas con ${elemento} tu satisfacción con los servicios generales prestados por Corferias?`,
        "p32": `¿Por qué razón calificas con ${elemento} la publicidad de la Feria del Hogar 2020?`,
        "p36": `¿Por qué razón calificas con ${elemento} la satisfacción con la agenda de actividades de la Feria del Hogar 2020?`
    }
    return Object.entries(arrPreg).map(x => {
        if (x.includes(pregunta)) {
            return x[1];
        }
    })
}