<!DOCTYPE html>
  <html>
   <head>
   <meta charset="UTF-8">
   <title>Order</title>
   <link rel="stylesheet" type="text/css" href="invoice.css">
   <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Titillium+Web:400,600,700'>
   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
       <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
       <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   </head>
 <!-- ...................................<..................head...................>...................................................................   -->
   
   
   <body>
      <header>

      <div class = "logo">
            <img src = "images/PM-logo-white.png" width ="200" title ="">
            <h1>PM FOODS</h1>
      </div>

      <nav class="navbar navbar-expand-lg " class="navbar navbar-light">

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav">
                  <li class="nav-item active">
                     <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="about.html">About</a>
                  </li>
                  <li class="nav-item">
                        <a class="nav-link" href="order.php">Back to Orders</a>
                     </li>
              </ul>
            </div>
          </nav>
          
      </header>
<!-- .......................................................................................................................................... -->


      <section style="margin-top: 80px;">
          <table class='table table-striped table-dark'>
              <thead>
              <tr>
                  <th scope='col'>#</th>
                  <th scope='col'>invoice name</th>
                  <th scope='col'>invoice amount</th>
                  <th scope='col'>invoice quantity</th>
                  <th scope='col'>invoice time</th>
                  <th scope='col'>invoice user</th>
              </tr>
              </thead>
              <tbody id="tbdy">

              <?php require 'php/checkTotal.php.php'; ?>
              </tbody>
          </table>


      </section>
<!-- ......................................................................................................................................... -->
   
<!-- ........................................order invoice............................................................... -->
    
<!-- ....................................................^...........^.......................................................................       -->

      <script src="https://www.gstatic.com/firebasejs/6.2.0/firebase.js"></script>
      <script src="https://www.gstatic.com/firebasejs/6.2.0/firebase-app.js"></script>
      <script src="https://www.gstatic.com/firebasejs/6.2.0/firebase-auth.js"></script>
      <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>

      <!-- TODO: Add SDKs for Firebase products that you want to use
           https://firebase.google.com/docs/web/setup#config-web-app -->

      <script>
          // Your web app's Firebase configuration
          var firebaseConfig = {
              apiKey: "AIzaSyCOJ8pkJzo3k1X_HOBc3qxINmktRb8hP2c",
              authDomain: "orderweb-6fcda.firebaseapp.com",
              databaseURL: "https://orderweb-6fcda.firebaseio.com",
              projectId: "orderweb-6fcda",
              storageBucket: "",
              messagingSenderId: "821925807231",
              appId: "1:821925807231:web:dc2ce96473af3275"
          };
          // Initialize Firebase
          firebase.initializeApp(firebaseConfig);

          firebase.auth().onAuthStateChanged(function(user) {
              if (user) {
                  // User is signed in.

                  console.log(user.email);
                  var maill = user.email;

                  send2(maill);

        


              } else {
                  // No user is signed in.
              }
          });



          function send2(umail) {
              $.ajax({
                  type: "post",
                  method: "POST",
                  data: {umail:umail},
                  url: "php/checkInvoice.php",
                  success: function (response) {
                      console.log('response2: '+ response);
                      $('#tbdy').append(response);
                  }
              });
          }
      </script>

      </body>
   
   
   
</html>