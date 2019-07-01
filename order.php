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
                              <a class="nav-link" href="invoice.html">Cart</a>
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


      <script type="text/javascript" src="cart-js/cart.js"></script>
      <script type="text/javascript">
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


      </script>
<!-- ....................................................^...........^.......................................................................       -->

      </body>
   
   
   
</html>