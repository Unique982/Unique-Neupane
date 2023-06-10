
<!DOCTYPE HTMl>
<html>
<head>
    <meta charset="UTF-8">
        <meta http-equiv="X-UA-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1">
              <!-- Link section bar -->
        <link rel="stylesheet" href="shoppingnepal.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://kit.fontawesome.com/a076d05399.js">
        </script>
        <!-- Icon link -->
        <link rel="icon" href="ShoppingNepal.jpg"  type="image/x-icon">
      
        
              <!-- Title Bar -->
<title> shopping Neplal</title>

    </head>
    <body>
           <!-- Navbar-section -->
<header id="navbar">
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
           
             <img src="ShoppingNepal.jpg" alt="Logo" style="width:63px; display: block;">
           
           
      <a class="navbar-brand" href="#">Shopping-Nepal</a>
      
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" id="find" onkeyup="search()">
        <button type="button" class="btn btn-success" typr="submit" value="searchbox">Search</button>
      </form>

    <!-- Dark mode button Html and js code inline -->
     
              <!-- Menu box -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
       Menu
      </button>
      <!-- Dark mode button Html and java code inline -->
     <li class="nav-item">
     <i onclick="myFunction()"i class="fa fa-adjust" style="font-size:36px"></i>
    <!-- js code inline -->
     <script>
     function myFunction() {
        var element = document.body;
      
        element.classList.toggle("dark-mode");
     }
     </script>
     </li>
               <!-- Menu bar -->
               <form method="POST">
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
    <!-- Home -->
          <li class="nav-item">
         <a class="nav-link active" aria-current="page" href="#">Home</a>
                <!-- Product -->
            <li class="nav-item">
              <a class="nav-link" href="Product.html">Product</a>
            </li>
            <!-- Contact -->
            <li class="nav-item">
              <a class="nav-link" href="secondproduct.html">Store</a>
              
              </li>
              <!-- Order -->
              <li> <a class="nav-item"></a>
              <a class="nav-link" href="#">Order
              </a>
              <li>
                <!-- Registration pop -->
              <a class="nav-link" href="Register.html">Registration</a></li>
              <!-- List -->
            <li class="nav-item">
            
              <a class="nav-link" href="#">List</a>
            </li>
            <!-- log-Out -->
           
                
               
                <li class="nav-item">
              <a class="nav-link" href="#" name="Logout">Log-Out</a>
              <a href="home.html"></a>
              <span class="text-muted"></span>
              
            </li>
          </ul>
          
    </div>
    </div>
</div>
  </div>
  </form>
</nav>
<?php
if(isset($POST['LogOut']))
{
    session_destroy();
    header(" location: Admin.php");
}
?>
</div>
</header>
</head>
<body>
    
   
    <!-- Product point bar -->

   
    <section id="Product">
<!-- shoes Pic only  -->
        <div class="Product">
        </div>
        <table id="table">
            <tr>

                <th><h1><a  class="nav-link" href="secondproduct.html">Product-List</h1></a></th>
               
            </tr>
        </table>
    <br>
           </div>
           <tr>
            <td colspan="5"><h2>Shoes</h2><hr></td>
            <tr>
           
  <div class="products" id="product-list">
    <div class="product">
        <div class="image">
            <img src="9-rockey-9-magnolia-white-original-imaggutpbvcczyhf.webp" alt="">
        </div>
        <div class="namePrice">
            <h3>Shoes</h3>
            <span>NRS:1500</span>
        </div>
        <p></p>
        <div class="stars">
            <i class="fa fa-star"  style="font-size:25px;color:yellow"></i>
    <i class="fa fa-star"  style="font-size:25px;color:yellow"></i>
    <i class="fa fa-star"  style="font-size:25px;color:yellow"></i>
    <i class="fa fa-star"  style="font-size:25px;color:yellow"></i>
    <i class="fa fa-star"  style="font-size:25px;color:yellow"></i>
        </div>
        <div class="bay">
            <button> Buy Now </button>
        </div>
    </div>
    <div class="product">
        <div class="image">
            <img src="9-rockey-9-magnolia-white-original-imaggutpbvcczyhf.webp" alt="">
        </div>
        <div class="namePrice">
            <h3>Shoes</h3>
            <span>NRS:1500</span>
        </div>
        <p></p>
        <div class="stars">
            <i class="fa fa-star"  style="font-size:25px;color:yellow"></i>
    <i class="fa fa-star"  style="font-size:25px;color:yellow"></i>
    <i class="fa fa-star"  style="font-size:25px;color:yellow"></i>
    <i class="fa fa-star"  style="font-size:25px;color:yellow"></i>
    <i class="fa fa-star"  style="font-size:25px;color:yellow"></i>
        </div>
        <div class="bay">
            <button> Buy Now </button>
        </div>
    </div>
    <div class="product">
        <div class="image">
            <img src="9-rockey-9-magnolia-white-original-imaggutpbvcczyhf.webp" alt="">
        </div>
        <div class="namePrice">
            <h3>Shoes</h3>
            <span>NRS:1500</span>
        </div>
        <p></p>
        <div class="stars">
            <i class="fa fa-star"  style="font-size:25px;color:yellow"></i>
    <i class="fa fa-star"  style="font-size:25px;color:yellow"></i>
    <i class="fa fa-star"  style="font-size:25px;color:yellow"></i>
    <i class="fa fa-star"  style="font-size:25px;color:yellow"></i>
    <i class="fa fa-star"  style="font-size:25px;color:yellow"></i>
        </div>
        <div class="bay">
            <button> Buy Now </button>
        </div>
    </div>
    <div class="product">
        <div class="image">
            <img src="9-rockey-9-magnolia-white-original-imaggutpbvcczyhf.webp" alt="">
        </div>
        <div class="namePrice">
            <h3>Shoes</h3>
            <span>NRS:1500</span>
        </div>
        <p></p>
        <div class="stars">
            <i class="fa fa-star"  style="font-size:25px;color:yellow"></i>
    <i class="fa fa-star"  style="font-size:25px;color:yellow"></i>
    <i class="fa fa-star"  style="font-size:25px;color:yellow"></i>
    <i class="fa fa-star"  style="font-size:25px;color:yellow"></i>
    <i class="fa fa-star"  style="font-size:25px;color:yellow"></i>
        </div>
        <div class="bay">
            <button> Buy Now </button>
        </div>
      </div>
      
        
      <div class="product">
        
          <div class="image">
              <img src="pexels-fernando-arcos-190819.jpg" alt="">
          </div>
          <div class="namePrice">
              <h3>watch</h3>
              <span>NRs:2500</span>
          </div>
          <p></p>
          <div class="stars">
              <i class="fa fa-star"  style="font-size:25px;color:yellow"></i>
              <i class="fa fa-star"  style="font-size:25px;color:yellow"></i>
              <i class="fa fa-star"  style="font-size:25px;color:yellow"></i>
              <i class="fa fa-star"  style="font-size:25px;color:yellow"></i>
              <i class="fa fa-star"  style="font-size:25px;color:yellow"></i>
          </div><div class="bay">
              <button> Buy Now </button>
  </div>
</div>
<!-- Watch Part only here -->

<div class="product">
  <div class="image">
      <img src="pexels-fernando-arcos-190819.jpg" alt="">
  </div>
  <div class="namePrice">
      <h3>watch</h3>
      <span>NRs:2500</span>
  </div>
  <p></p>
  <div class="stars">
      <i class="fa fa-star"  style="font-size:25px;color:yellow"></i>
      <i class="fa fa-star"  style="font-size:25px;color:yellow"></i>
      <i class="fa fa-star"  style="font-size:25px;color:yellow"></i>
      <i class="fa fa-star"  style="font-size:25px;color:yellow"></i>
      <i class="fa fa-star"  style="font-size:25px;color:yellow"></i>
  </div><div class="bay">
      <button> Buy Now </button>
  </div>
  </div>
      <div class="product">
          <div class="image">
              <img src="pexels-fernando-arcos-190819.jpg" alt="">
          </div>
          <div class="namePrice">
              <h3>watch</h3>
              <span>NRs:2500</span>
          </div>
          <p></p>
          <div class="stars">
              <i class="fa fa-star"  style="font-size:25px;color:yellow"></i>
              <i class="fa fa-star"  style="font-size:25px;color:yellow"></i>
              <i class="fa fa-star"  style="font-size:25px;color:yellow"></i>
              <i class="fa fa-star"  style="font-size:25px;color:yellow"></i>
              <i class="fa fa-star"  style="font-size:25px;color:yellow"></i>
          </div><div class="bay">
              <button> BUy Now </button>
              </div>
              </div><div class="product">
                  <div class="image">
                      <img src="pexels-fernando-arcos-190819.jpg" alt="">
                  </div>
                  <div class="namePrice">
                      <h3>watch</h3>
                      <span>NRs:2500</span>
                  </div>
                  <p></p>
                  <div class="stars">
                      <i class="fa fa-star"  style="font-size:25px;color:yellow"></i>
                      <i class="fa fa-star"  style="font-size:25px;color:yellow"></i>
                      <i class="fa fa-star"  style="font-size:25px;color:yellow"></i>
                      <i class="fa fa-star"  style="font-size:25px;color:yellow"></i>
                      <i class="fa fa-star"  style="font-size:25px;color:yellow"></i>
                  </div><div class="bay">
                      <button> Buy Now </button>
                      </div>
                      </div>
                    
                      <!-- Shoes part only here -->
                      <div class="product">
                          <div class="image">
                              <img src="9-rockey-9-magnolia-white-original-imaggutpbvcczyhf.webp" alt="">
                          </div>
                          <div class="namePrice">
                              <h3>Shoes</h3>
                              <span>NRS:1500</span>
                          </div>
                          <p></p>
                          <div class="stars">
                              <i class="fa fa-star"  style="font-size:25px;color:yellow"></i>
                      <i class="fa fa-star"  style="font-size:25px;color:yellow"></i>
                      <i class="fa fa-star"  style="font-size:25px;color:yellow"></i>
                      <i class="fa fa-star"  style="font-size:25px;color:yellow"></i>
                      <i class="fa fa-star"  style="font-size:25px;color:yellow"></i>
                          </div>
                          <div class="bay">
                              <button> Buy Now </button>
                          </div>
                      </div>
                      <div class="product">
                          <div class="image">
                              <img src="9-rockey-9-magnolia-white-original-imaggutpbvcczyhf.webp" alt="">
                          </div>
                          <div class="namePrice">
                              <h3>Shoes</h3>
                              <span>NRS:1500</span>
                          </div>
                          <p></p>
                          <div class="stars">
                              <i class="fa fa-star"  style="font-size:25px;color:yellow"></i>
                      <i class="fa fa-star"  style="font-size:25px;color:yellow"></i>
                      <i class="fa fa-star"  style="font-size:25px;color:yellow"></i>
                      <i class="fa fa-star"  style="font-size:25px;color:yellow"></i>
                      <i class="fa fa-star"  style="font-size:25px;color:yellow"></i>
                          </div>
                          <div class="bay">
                              <button> Buy Now </button>
                          </div>
                      </div>
                      <div class="product">
                          <div class="image">
                              <img src="9-rockey-9-magnolia-white-original-imaggutpbvcczyhf.webp" alt="">
                          </div>
                          <div class="namePrice">
                              <h3>Shoes</h3>
                              <span>NRS:1500</span>
                          </div>
                          <p></p>
                          <div class="stars">
                              <i class="fa fa-star"  style="font-size:25px;color:yellow"></i>
                      <i class="fa fa-star"  style="font-size:25px;color:yellow"></i>
                      <i class="fa fa-star"  style="font-size:25px;color:yellow"></i>
                      <i class="fa fa-star"  style="font-size:25px;color:yellow"></i>
                      <i class="fa fa-star"  style="font-size:25px;color:yellow"></i>
                          </div>
                          <div class="bay">
                              <button> Buy Now </button>
                          </div>
                      </div>
                      <div class="product">
                          <div class="image">
                              <img src="9-rockey-9-magnolia-white-original-imaggutpbvcczyhf.webp" alt="">
                          </div>
                          <div class="namePrice">
                              <h3>Shoes</h3>
                              <span>NRS:1500</span>
                          </div>
                          <p></p>
                          <div class="stars">
                              <i class="fa fa-star"  style="font-size:25px;color:yellow"></i>
                      <i class="fa fa-star"  style="font-size:25px;color:yellow"></i>
                      <i class="fa fa-star"  style="font-size:25px;color:yellow"></i>
                      <i class="fa fa-star"  style="font-size:25px;color:yellow"></i>
                      <i class="fa fa-star"  style="font-size:25px;color:yellow"></i>
                          </div>
                          <div class="bay">
                              <button> Buy Now </button>
                          </div>
                      </div>
                      <!-- Laptop part only here -->
                      <div class="product">
                          <div class="image">
                              <img src="dell-inspiron-3500-price-nepal-cheap-i7-laptop.jpeg" alt="">
                          </div>
                          <div class="namePrice">
                              <h3>laptop</h3>
                              <span>NRs:120000</span>
                          </div>
                          <p></p>
                          <div class="stars">
                              <i class="fa fa-star"  style="font-size:25px;color:yellow"></i>
                      <i class="fa fa-star"  style="font-size:25px;color:yellow"></i>
                      <i class="fa fa-star"  style="font-size:25px;color:yellow"></i>
                      <i class="fa fa-star"  style="font-size:25px;color:yellow"></i>
                      <i class="fa fa-star"  style="font-size:25px;color:yellow"></i>
                          </div>
                          <div class="bay">
                              <button> Buy Now </button>
                          </div>
                      </div>
                      <div class="product">
                          <div class="image">
                              <img src="dell-inspiron-3500-price-nepal-cheap-i7-laptop.jpeg" alt="">
                          </div>
                          <div class="namePrice">
                              <h3>laptop</h3>
                              <span>NRs:120000</span>
                          </div>
                          <p></p>
                          <div class="stars">
                              <i class="fa fa-star"  style="font-size:25px;color:yellow"></i>
                      <i class="fa fa-star"  style="font-size:25px;color:yellow"></i>
                      <i class="fa fa-star"  style="font-size:25px;color:yellow"></i>
                      <i class="fa fa-star"  style="font-size:25px;color:yellow"></i>
                      <i class="fa fa-star"  style="font-size:25px;color:yellow"></i>
                          </div>
                          <div class="bay">
                              <button> Buy Now </button>
                          </div>
                      </div>
                      <div class="product">
                          <div class="image">
                              <img src="dell-inspiron-3500-price-nepal-cheap-i7-laptop.jpeg" alt="">
                          </div>
                          <div class="namePrice">
                              <h3>laptop</h3>
                              <span>NRs:120000</span>
                          </div>
                          <p></p>
                          <div class="stars">
                              <i class="fa fa-star"  style="font-size:25px;color:yellow"></i>
                      <i class="fa fa-star"  style="font-size:25px;color:yellow"></i>
                      <i class="fa fa-star"  style="font-size:25px;color:yellow"></i>
                      <i class="fa fa-star"  style="font-size:25px;color:yellow"></i>
                      <i class="fa fa-star"  style="font-size:25px;color:yellow"></i>
                          </div>
                          <div class="bay">
                              <button> Buy Now </button>
                          </div>
                      </div>
                      <div class="product">
                          <div class="image">
                              <img src="dell-inspiron-3500-price-nepal-cheap-i7-laptop.jpeg" alt="">
                          </div>
                          <div class="namePrice">
                              <h3>laptop</h3>
                              <span>NRs:120000</span>
                          </div>
                          <p></p>
                          <div class="stars">
                              <i class="fa fa-star"  style="font-size:25px;color:yellow"></i>
                      <i class="fa fa-star"  style="font-size:25px;color:yellow"></i>
                      <i class="fa fa-star"  style="font-size:25px;color:yellow"></i>
                      <i class="fa fa-star"  style="font-size:25px;color:yellow"></i>
                      <i class="fa fa-star"  style="font-size:25px;color:yellow"></i>
                          </div>
                          <div class="bay">
                              <button> Buy Now </button>
                          </div>
                      </div>
                      <div class="product">
                          <div class="image">
                              <img src="nokia-110-charcoal-front-int.png" alt="">
                          </div>
                          <div class="namePrice">
                              <h3>Moblie</h3>
                              <span>NRs:1500</span>
                          </div>
                          <p></p>
                          <div class="stars">
                              <i class="fa fa-star"  style="font-size:25px;color:yellow"></i>
                              <i class="fa fa-star"  style="font-size:25px;color:yellow"></i>
                              <i class="fa fa-star"  style="font-size:25px;color:yellow"></i>
                              <i class="fa fa-star"  style="font-size:25px;color:yellow"></i>
                              <i class="fa fa-star"  style="font-size:25px;color:yellow"></i>
                          </div>
                          <div class="bay">
                              <button> Buy Now </button>
                          </div>
                      </div>
                      <div class="product">
                          <div class="image">
                              <img src="nokia-110-charcoal-front-int.png" alt="">
                          </div>
                          <div class="namePrice">
                              <h3>Moblie</h3>
                              <span>NRs:1500</span>
                          </div>
                          <p></p>
                          <div class="stars">
                              <i class="fa fa-star"  style="font-size:25px;color:yellow"></i>
                              <i class="fa fa-star"  style="font-size:25px;color:yellow"></i>
                              <i class="fa fa-star"  style="font-size:25px;color:yellow"></i>
                              <i class="fa fa-star"  style="font-size:25px;color:yellow"></i>
                              <i class="fa fa-star"  style="font-size:25px;color:yellow"></i>
                          </div>
                          <div class="bay">
                              <button> Buy Now </button>
                          </div>
                      </div>
                    </section>



                    <section id="Our-Team">
                        <div id="Our-Team">
                            </div>
                            <div id="OurTeam">
                                <br>
                                
                              <h2 id="pra">Our-Team</h2>

                            </div>
                        </div>
                        <div class="Our-Team">
                            <div class="box">
                                </div>
                                <br>
                                <div class="products" id="product-list">
                                    <div class="product">
                                        <div class="image">
                                            <img src="ShoppingNepal.jpg" alt="">
                                           
                                        </div>
                                <h4>Shopping Nepal</h4>
                        
                    </section>
                    <section class="footer">
                        <footer>
                            <div class="footer">
                                <h1>Address </h1>
                                <li>Emai:</li>
                            <li>phone:-xxxxx</li>
                            <li></li>

                            </div>
                        </footer>
                    </section>
                            
                    <script type="text/javascript">
                        function search() {
    let filter = document.getElementById('find').value.toUppercase();
    let item = document.querySelectorAll('.product');
    Let 1 =document.getElementByIdTagName('h3');
    
    for(var i = 0;i<=l.length;i++){
        Let a=items[i].getElementByIdTagName('h3')[0];
        Let value=a.innerHTML || a.innerTxet || a.textContent;


        if(value.toUppercase().indexOf(filter) >-1){
            item[i].style.display="";
        }
        else{
            item[i].style.display="none";
        }
    }
}     
  </body></html>