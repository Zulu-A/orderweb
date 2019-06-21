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

        console.log(user);
        document.getElementById('hr1').innerText = 'Log Out';
        $('#hr1').on('click',function () {
            firebase.auth().signOut().then(function() {
                // Sign-out successful.
            }, function(error) {
                // An error happened.
            });
        });
    } else {
        // User is signed out.
        // ...
        console.log('signed out');
        setTimeout(function () {
            window.location.href = 'login.html';
        },1000);
    }
});