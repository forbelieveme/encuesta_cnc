function submit_by_id() {
    var name = document.getElementById("form_p1").elements;

    console.log(`R: `, name);

    // $("#btn_p1").click(function() {
        $("#pregunta").load("views/p3.php");
        //     $("#pregunta").load("views/p3.php");
    // });

    // if (validation()) // Calling validation function
    // {
    //     // document.getElementById("form_id").submit(); //form submission
    //     // alert(" Name : " + name + " n Email : " + email + " n Form Id : " + document.getElementById("form_id").getAttribute("id") + "nn Form Submitted Successfully......");
    // }
}