$("#editForm").hide();
$("#btn").click(function (e) {
    $("#editForm").show();
    $("#btn").hide();
});


$(".close.icon").click(function () {
    $(this).parent().parent().fadeOut(250);
});



signShowed = false;
loginShowed = false;
$("#signup").click(function () {
    if (!signShowed) {
        if (loginShowed) {
            $("#loginMessage").hide();
            loginShowed = false;
        }
        $("#signupMessage").fadeIn(250);
        signShowed = true;
    }
    else {
        $("#signupMessage").fadeOut(250);
        signShowed = false;
    }
});

$("#login").click(function () {
    if (!loginShowed) {
        if (signShowed) {
            $("#signupMessage").hide();
            signShowed = false;
        }
        $("#loginMessage").fadeIn(250);
        loginShowed = true;
    }
    else {
        $("#loginMessage").fadeOut(250);
        loginShowed = false;
    }
});

$(document).mouseup(function (e) {
    var signupMessage = $("#signupMessage");
    var signup = $("#signup");
    var loginMessage = $("#loginMessage");
    var login = $("#login");

    if (!signupMessage.is(e.target) && signupMessage.has(e.target).length === 0 && !signup.is(e.target)) {
        signupMessage.fadeOut(250);
        signShowed = false;
    }

    if (!loginMessage.is(e.target) && loginMessage.has(e.target).length === 0 && !login.is(e.target)) {
        loginMessage.fadeOut(250);
        loginShowed = false;
    }
});

function alertEmailTaken() {
    $(document).ready(function () {
        alert("I am an alert box!");
    });
}