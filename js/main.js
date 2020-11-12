function submit_escala(x, siguiente) {

    console.log(`ENVIO AJAX POST`, x);


    $("#pregunta").load(siguiente);

}
function submit_decision_binaria(x, siguiente) {

    console.log(`ENVIO AJAX POST`, x);

    if (x == '1') {
        $("#pregunta").load(siguiente[0]);
    } else {
        $("#pregunta").load(siguiente[1]);
    }


}

function getSelectValues(select, siguiente) {
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
    peticionUpdate(result.toString());



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

function getTextArea(id_textA, siguiente) {
    var x = document.getElementById(id_textA).value;

    console.log(`ENVIO AJAX POST`, x);

    $("#pregunta").load(siguiente);
}

function submit_multiple_escala(form, nameArray, siguiente) {

    var x = getRadioVal_multiple(form, nameArray);

    console.log(`ENVIO AJAX POST`, x);

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

    if (x == '3' || x == '4') {
        $("#pregunta").load(siguiente[0]);
    } else {
        $("#pregunta").load(siguiente[1]);
    }


}
function submit_decision_bin2(x, siguiente) {

    console.log(`ENVIO AJAX POST`, x);

    if (x == '9' || x == '10') {
        $("#pregunta").load(siguiente[0]);
    } else {
        $("#pregunta").load(siguiente[1]);
    }


}

function peticionUpdate(cedula) {
    $.ajax({
        url: './php/actualizar.php',
        data: {
            query: 'actualizar',
            cedula,
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
