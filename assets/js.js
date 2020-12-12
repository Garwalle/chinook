$("#editForm").hide();
$("#btn").click(function (e) {
    $("#editForm").show();
    $("#btn").hide();
});


$(".close.icon").click(function () {
    $(this).parent().parent().fadeOut(250);
});

$('.ui.dropdown').dropdown();

var signShowed = false;
var loginShowed = false;
var errorShowed = false;
var signupMessage = $("#signupMessage");
var signup = $("#signup");
var loginMessage = $("#loginMessage");
var login = $("#login");
var errorMessage = $('#errorMessage')

$("#signup").click(function () {
    if (!signShowed) {
        if (loginShowed) {
            loginMessage.hide();
            loginShowed = false;
        }
        if (errorShowed) {
            errorMessage.hide();
            errorShowed = false;
        }
        signupMessage.fadeIn(250);
        signShowed = true;
    }
    else {
        signupMessage.fadeOut(250);
        signShowed = false;
    }
});

$("#login").click(function () {
    if (!loginShowed) {
        if (signShowed) {
            signupMessage.hide();
            signShowed = false;
        }
        if (errorShowed) {
            errorMessage.hide();
            errorShowed = false;
        }
        loginMessage.fadeIn(250);
        loginShowed = true;
    }
    else {
        loginMessage.fadeOut(250);
        loginShowed = false;
    }
});

$(document).mouseup(function (e) {


    if (!signupMessage.is(e.target) && signupMessage.has(e.target).length === 0 && !signup.is(e.target)) {
        signupMessage.fadeOut(250);
        signShowed = false;
    }

    if (!loginMessage.is(e.target) && loginMessage.has(e.target).length === 0 && !login.is(e.target)) {
        loginMessage.fadeOut(250);
        loginShowed = false;
    }
});

if (typeof errorText !== 'undefined') {
    errorMessage.fadeIn(250);
    $('#errorMessage p').html(errorText);
    errorShowed = true;
}