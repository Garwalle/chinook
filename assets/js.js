$("#editForm").hide();
$("#btn").click(function (e) {
    $("#editForm").show();
    $("#btn").hide();
});


$(".close.icon").click(function () {
    $(this).parent().fadeOut(250);
});

signShowed = false;
$("#signup").click(function () {
    if (!signShowed) {
        if (loginShowed) { $("#loginMessage").hide(); }
        $("#signupMessage").fadeIn(250);
        signShowed = true;
    }
    else {
        $("#signupMessage").fadeOut(250);
        signShowed = false;
    }
});

loginShowed = false;
$("#login").click(function () {
    if (!loginShowed) {
        if (signShowed) { $("#signupMessage").hide(); }
        $("#loginMessage").fadeIn(250);
        loginShowed = true;
    }
    else {
        $("#loginMessage").fadeOut(250);
        loginShowed = false;
    }
});