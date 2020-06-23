function registerForm() {
    var user = validateUser();
    var pass = validatePass();
    if (!user || !pass) {
        return false;
    }

    return true;

}
function validateUser() {
    var user = document.getElementById('username').value;
    var check = user.search(/^[a-z0-9]{8,}$/);
    if (check == -1) {
        document.getElementById('username').style.borderColor = "red";
        $("#username").after("<br><span style='color: red'>username must be at least 8 letters and/or numbers</span>");
        return false;
    }
    else {
        document.getElementById('username').style.borderColor = "";
        return true;
    }
}
function validatePass() {
    var pass = document.getElementById('password').value;
    var confirmPass = document.getElementById('confirmPassword').value;
    var check = pass.search(/^(?=[a-z0-9]*[a-z])(?=[a-z0-9]*[0-9])[a-z0-9]{6,}$/)
    if (check == -1) {
        document.getElementById('password').style.borderColor = "red";
        document.getElementById('confirmPassword').style.borderColor = "red";
        $("#password").after("<br><span style='color: red'>password must be at least 6 letters and numbers</span>");
        $("#confirmPassword").after("<br><span style='color: red'>password must be at least 6 letters and numbers</span>");
        return false;
    }
    else {
        if (pass == confirmPass) {
            document.getElementById('password').style.borderColor = "";
            return true;
        }
        else {
            document.getElementById('password').style.borderColor = "red";
            document.getElementById('confirmPassword').style.borderColor = "red";
            $("#password").after("<br><span style='color: red'>password and confirm password must match </span>");
            $("#confirmPassword").after("<br><span style='color: red'>password and confirm password must match </span>");
            return false;
        }
    }
}