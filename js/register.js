function createusers(email,password) {
    firebase.auth().createUserWithEmailAndPassword(email, password).then(function (success) {
        console.log('successful signin... ');
        document.getElementById('msg1').value = 'Successful signin';

        var fname = document.getElementById('fname').value;
        var lname = document.getElementById('lname').value;
        sendata(fname,lname,email,password);
    }).catch(function(error) {
        // Handle Errors here.
        var errorCode = error.code;
        var errorMessage = error.message;
        // ...

        console.log(error);
        document.getElementById('msg1').innerHTML = errorMessage;
    });
}




$('#register_btn').on('click',function () {
   console.log('register clicked!');

    var regEmail1 = document.getElementById('emailaddress').value;
    var regEmail = regEmail1.toString();

    var r1 = document.getElementById('regPassword').value;
    var p1 = document.getElementById('confirmPassword').value;
    var regPassword = r1.toString();
    var confirmPassword = p1.toString();


   if (checkPwd(regPassword, confirmPassword) == true){

       createusers(regEmail,regPassword);


   }else {
       console.log('fll');
       document.getElementById('msg1').innerHTML = 'passwords do not match';
   }
});


function checkPwd(password1, password2) {
    if (password1 === password2) {
        return true;
    }else {
        return false;
    }
}

function sendata(dbfname, dblname, dbemail) {
    $.ajax({
        type: "post",
        method: "POST",
        data: {dbfname:dbfname,dblname:dblname,dbemail:dbemail},
        url: "php/users.php",
        success: function (response) {
            console.log('response2: '+ response);
        }
    });
}
