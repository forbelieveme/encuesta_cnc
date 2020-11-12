var cid;

function generarCodigo() {
    //generación de codigo aleatorio para almacenamiento del registro
    var id = '';
    var characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
    var charactersLength = characters.length;
    for (var i = 0; i < 15; i++) {
        id += characters.charAt(Math.floor(Math.random() * charactersLength));
    }

    cid = id;

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

function getTextArea(id_textA, siguiente, num_pregunta, num_pregunta) {
    var x = document.getElementById(id_textA).value;

    console.log(`ENVIO AJAX POST`, x);
    peticionUpdate(x, num_pregunta);

    $("#pregunta").load(siguiente);
}

function submit_multiple_escala(form, nameArray, siguiente) {

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

function submit_decision_bin(x, siguiente) {

    console.log(`ENVIO AJAX POST`, x);
    peticionUpdate(x, num_pregunta);


    if (x == '3' || x == '4') {
        $("#pregunta").load(siguiente[0]);
    } else {
        $("#pregunta").load(siguiente[1]);
    }


}
function submit_decision_bin2(x, siguiente) {

    console.log(`ENVIO AJAX POST`, x);
    peticionUpdate(x, num_pregunta);


    if (x == '9' || x == '10') {
        $("#pregunta").load(siguiente[0]);
    } else {
        $("#pregunta").load(siguiente[1]);
    }


}

function peticionUpdate(informacion, num_pregunta) {
    $.ajax({
        url: './php/actualizar.php',
        data: {
            query: 'actualizar',
            informacion,
            num_pregunta
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
