<!DOCTYPE html>
  <html>
   <head>
   <meta charset="UTF-8">
   <title>Order</title>
   <link rel="stylesheet" type="text/css" href="order.css">
   <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Titillium+Web:400,600,700'>
   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
       <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>

       <style>
           .about-section {
               position: absolute;
               min-height: 100%;
               padding-top: 100px;
               left: 5px;
               text-align: center;
               
           }
           .head-section {
               min-height: 0px;
               padding-top: 50px;
               text-align: center;
           }

       </style>
   </head>
 <!-- ...................................<..................head navigation...................>...................................................................   -->
 
   <body>
      <section class="head-section">
          <header>

              <div class = "logo">
                  <img src = "images/PM-logo-white.png" width ="100" title ="">
                  <!-- <h1>PM FOODS</h1> -->
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
                              <a class="nav-link" href="about.html" id="abt1">About</a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link" href="invoice.php">Cart</a>
                          </li>
                      </ul>
                  </div>
              </nav>

          </header>
      </section>

<!-- ........................................order menu bootstrap cards............................................................... -->
      <section id="about" class="about-section">
          <div class="container">
              <div class="row">

                  <?php require 'php/checkItems.php'?>

              </div>
          </div>
      </section>


      <script src="https://www.gstatic.com/firebasejs/6.2.0/firebase-app.js"></script>
      <script src="https://www.gstatic.com/firebasejs/6.2.0/firebase-auth.js"></script>
      <script src="https://www.gstatic.com/firebasejs/6.2.0/firebase-storage.js"></script>
      <script src="https://www.gstatic.com/firebasejs/6.2.0/firebase-database.js"></script>
      <script type="text/javascript" src="cart-js/cart.js"></script>
      <script type="text/javascript">


          var firebaseConfig = {
              apiKey: "AIzaSyCOJ8pkJzo3k1X_HOBc3qxINmktRb8hP2c",
              authDomain: "orderweb-6fcda.firebaseapp.com",
              databaseURL: "https://orderweb-6fcda.firebaseio.com",
              projectId: "orderweb-6fcda",
              storageBucket: "orderweb-6fcda.appspot.com",
              messagingSenderId: "821925807231",
              appId: "1:821925807231:web:dc2ce96473af3275"
          };
          // Initialize Firebase
          firebase.initializeApp(firebaseConfig);

          var user1 = firebase.auth().currentUser;
          console.log(user1);
          var name, email, photoUrl, uid, emailVerified;

          /*if (user1 != null) {

              console.log(user1);
              name = user1.displayName;
              email = user1.email;
              photoUrl = user1.photoURL;
              emailVerified = user1.emailVerified;
              uid = user1.uid;  // The user's ID, unique to the Firebase project. Do NOT use
                               // this value to authenticate with your backend server, if
                               // you have one. Use User.getToken() instead.

              $('#cartBtn').on('click',function () {
                  var nm = document.getElementById('nm').value;
                  var amnt = document.getElementById('amntT').value;
                  var qty = document.getElementById('valval').value;
                  var user = uid;
                  console.log('click');

                  sendcart(user,nm,amnt,qty,displayTime());


              });
          }*/

          var snacks = ['Cake', 'Pancakes', 'Snickers','Tea','Sausage','Samosa','Fries'];


          firebase.auth().onAuthStateChanged(function(user) {
              if (user) {
                  // User is signed in.

                  console.log(user.email);
                  var maill = user.email;

                  /*if (user.email != 'admin@orderweb.com') {
                      window.location.href = 'order.html';
                  }*/

                  $('#cartBtn').on('click',function () {
                      var nm = document.getElementById('nm').value;
                      var amnt = document.getElementById('amntT').value;
                      var qty = document.getElementById('valval').value;
                      var user = uid;
                      console.log('click');



                      sendcart(maill,snacks[Math.floor(Math.random()* 8)],Math.floor(Math.random()* 100),Math.floor(Math.random() * 8)+1,displayTime());

                  });

              } else {
                  // No user is signed in.
              }
          });

          /*$('#cartBtn').on('click',function () {
              var nm = document.getElementById('nm').value;
              var amnt = document.getElementById('amntT').value;
              var qty = document.getElementById('valval').value;
              var user = uid;
              console.log('click');

              sendcart(user,nm,amnt,qty,displayTime());


          });*/



          Cart.init();
          Cart.on('added', function(argumentsObject) {
              console.log("You've added " + argumentsObject.item.id + " item(s).");
          });

          Cart.addItem({
              id: '123456',
              price: 499,
              quantity: 5,
              label: 'Water based marker',
              image: "/img/product/123456.jpg"
          });

          Cart.itemsCount();








          function sendcart(uid,name,amnt,quantity,time) {
              $.ajax({
                  type: "post",
                  method: "POST",
                  data: {uid:uid,name:name,quantity:quantity,time:time,amnt:amnt},
                  url: "php/addInventory.php",
                  success: function (response) {
                      console.log('response2: '+ response);
                  }
              });
          }

          function displayTime() {
              var str = "";

              var currentTime = new Date();
              var hours = currentTime.getHours();
              var minutes = currentTime.getMinutes();
              var seconds = currentTime.getSeconds();
              var year = currentTime.getFullYear();
              var month = currentTime.getMonth();
              var date = currentTime.getDate();

              var monthName = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul","Aug", "Sep", "Oct", "Nov", "Dec"];

              if (minutes < 10) {
                  minutes = "0" + minutes
              }
              if (seconds < 10) {
                  seconds = "0" + seconds
              }
              str += hours + ":" + minutes + ":" + seconds + " ";
              if(hours > 11){
                  str += "PM "+ date +" " + monthName[month] + " " + year
              } else {
                  str += "AM " + date +" " + monthName[month] + " " + year
              }
              return str;
          }

      </script>
<!-- ....................................................^...........^.......................................................................       -->

      </body>
   
   
   
</html>