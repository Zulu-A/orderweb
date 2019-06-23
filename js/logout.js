firebase.auth().onAuthStateChanged(function(user) {
    if (user) {
        // User is signed in.
        var displayName = user.displayName;
        var email = user.email;
        var emailVerified = user.emailVerified;
        var photoURL = user.photoURL;
        var isAnonymous = user.isAnonymous;
        var uid = user.uid;
        var providerData = user.providerData;
        // ...

        document.getElementById('ordernow').hidden = false;
        document.getElementById('row2').hidden = false;
        document.getElementById('row1').hidden = true;

        console.log(user);
        document.getElementById('hr2').innerText = 'Log Out';
        $('#hr2').on('click',function () {
            firebase.auth().signOut().then(function() {
                // Sign-out successful.
            }, function(error) {
                // An error happened.
            });
        });
    } else {

        document.getElementById('row2').hidden = true;
        document.getElementById('row1').hidden = false;
        document.getElementById('ordernow').hidden = true;
        // User is signed out.
        // ...
        console.log('signed out');
        setTimeout(function () {
            window.location.href = 'login.html';
        },10000);
    }
});