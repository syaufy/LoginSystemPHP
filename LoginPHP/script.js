function fs() {
    var x = document.getElementById("passee");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}