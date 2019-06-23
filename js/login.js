function loginWithEmail(email, password) {
    firebase.auth().signInWithEmailAndPassword(email, password).then(function (success) {
        console.log('successful signin!!');
        document.getElementById('msg2').classList.remove('alert-danger');
        document.getElementById('msg3').classList.remove('alert-danger');
        document.getElementById('msg2').classList.add('alert-success');
        document.getElementById('msg3').classList.add('alert-success');
        document.getElementById('msg2').innerHTML = 'successful sign in! Redirecting...';
        document.getElementById('msg3').innerHTML = 'successful sign in! Redirecting...';
        if (email == 'admin@orderweb.com') {
            setTimeout(function () {
                window.location.href = 'adminpage.html';
            },3000);
        }else {
            setTimeout(function () {
                window.location.href = 'order.html';
            },3000);
        }

    }).catch(function(error) {
        // Handle Errors here.
        var errorCode = error.code;
        var errorMessage = error.message;
        // ...
        document.getElementById('msg2').classList.remove('alert-success');
        document.getElementById('msg3').classList.remove('alert-success');
        document.getElementById('msg2').classList.add('alert-danger');
        document.getElementById('msg3').classList.add('alert-danger');
        document.getElementById('msg2').innerHTML = errorMessage;
        document.getElementById('msg3').innerHTML = errorMessage;
        console.log(errorMessage);
    });
}

$('#loginbtn').on('click',function () {
    var loginEmail = document.getElementById('lemail').value;
    var loginPassword = document.getElementById('lpwd').value;


    loginWithEmail(loginEmail,loginPassword);

});

$('#loginbtn2').on('click',function () {
    console.log('login clicked');
    var loginEmail2 = 'admin@orderweb.com';
    var loginPassword2 = document.getElementById('lpwdadmin').value;

    loginWithEmail(loginEmail2,loginPassword2);

});

