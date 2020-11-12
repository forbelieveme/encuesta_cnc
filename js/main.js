function submit_escala(x, siguiente) {

    console.log(`ENVIO AJAX POST`, x);


    $("#pregunta").load(siguiente);

}
function submit_decision_binaria(x, siguiente) {

    console.log(`ENVIO AJAX POST`, x);

    if(x=='1'){
        $("#pregunta").load(siguiente[0]);
    } else{
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

   
    $("#pregunta").load(siguiente);

}

function getRadioVal(form, name) {
    var val;
    // get list of radio buttons with specified name
    var radios = form.elements[name];
    
    // loop through list of radio buttons
    for (var i=0, len=radios.length; i<len; i++) {
        if ( radios[i].checked ) { // radio checked?
            val = radios[i].value; // if so, hold its value in val
            break; // and break out of for loop
        }
    }
    return val; // return value of checked radio or undefined if none checked
}

function getTextArea(id_textA, siguiente){
    var x= document.getElementById(id_textA).value;

    console.log(`ENVIO AJAX POST`, x);

    $("#pregunta").load(siguiente);
}