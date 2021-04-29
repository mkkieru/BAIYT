$(document).ready(function() {
    $("#phone").click(function() {
        $(".show").slideToggle(700);

    });
    $("#address").click(function() {
        $("#address2").slideToggle(700);

    });
    $("#email").click(function() {
        $("#email2").slideToggle(700);

    });
});

function submit() {

    var text = document.getElementById("text").value;
    var email = document.getElementById("email").value;
    var textarea = document.getElementById("textarea").value;


    if (text == '') {
        alert("Please insert all fields");
    } else if (email == '') {
        alert("Please insert all fields");
    } else if (textarea == '') {
        alert("Please insert all fields");
    } else {
        alert("Your message has been received. \nWe will get back to u as soon as possible.");
    }

}