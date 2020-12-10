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

$("#signup, #signupMessage, #login, #loginMessage").click(function (e) {
    e.stopPropagation();
    return false;
});

$(document).click(function () {
    if (signShowed) {
        $("#signupMessage").fadeOut(250);
        signShowed = false;
    }
    else if (loginShowed) {
        $("#loginMessage").fadeOut(250);
        loginShowed = false;
    }
});


