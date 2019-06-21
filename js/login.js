function loginWithEmail(email, password) {
    firebase.auth().signInWithEmailAndPassword(email, password).then(function (success) {
        console.log('successful signin!!');
        document.getElementById('msg2').innerHTML = 'successful sign in! Redirecting...';
        setTimeout(function () {
            window.location.href = 'index.html';
        },3000);

    }).catch(function(error) {
        // Handle Errors here.
        var errorCode = error.code;
        var errorMessage = error.message;
        // ...
        document.getElementById('msg2').innerHTML = errorMessage;
        console.log(errorMessage);
    });
}

$('#loginbtn').on('click',function () {
    var loginEmail = document.getElementById('lemail').value;
    var loginPassword = document.getElementById('lpwd').value;


    loginWithEmail(loginEmail,loginPassword);

});


