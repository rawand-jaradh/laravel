<!DOCTYPE html>
<html lang="en">
<head>
  <title>Online Oline Watch</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <link rel="stylesheet" href="css/animate.css">
  
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/magnific-popup.css">

  <link rel="stylesheet" href="css/bootstrap-datepicker.css">
  <link rel="stylesheet" href="css/jquery.timepicker.css">
  
  <link rel="stylesheet" href="css/flaticon.css">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
 <div class="wrap">
   <div class="container">
    <div class="row justify-content-between">
      <div class="col-12 col-md d-flex align-items-center">
       <p class="mb-0 phone"><span class="mailus">Phone no:</span> <a href="#">+00 1234 567</a> or <span class="mailus">email us:</span> <a href="#">emailsample@email.com</a></p>
     </div>
     <div class="col-12 col-md d-flex justify-content-md-end">
       <div class="social-media">
        <p class="mb-0 d-flex">
         <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"><i class="sr-only">Facebook</i></span></a>
         <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"><i class="sr-only">Twitter</i></span></a>
         <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"><i class="sr-only">Instagram</i></span></a>
         <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-dribbble"><i class="sr-only">Dribbble</i></span></a>
       </p>
     </div>
   </div>
 </div>
</div>
</div>

<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
 <div class="container">
 <a class="navbar-brand d-flex align-items-center" href="index.html"><img src="images/v6.png" style="height:50px; width:50px;"><h1>Beauty<span class="mini">Watch</span></h1></a>
   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
     <span class="oi oi-menu"></span> Menu
   </button>

   <div class="collapse navbar-collapse" id="ftco-nav">
     <ul class="navbar-nav ml-auto">
       <li class="nav-item"><a href="/home" class="nav-link">Home</a></li>
       <li class="nav-item"><a href="/about" class="nav-link">About</a></li>
       <li><a href="/shoppingcart" class="nav-link">
                <span class="badge">
                     {{Session::has('cart') ? Session::get('cart')->totalQty: ''}}
                </span>
                    shopping cart</a></li>
       <li class="nav-item active"><a href="services.html" class="nav-link">Services</a></li>
       <li class="nav-item"><a href="blog.html" class="nav-link">Blog</a></li>
       <li class="nav-item"><a href="pricing.html" class="nav-link">Pricing</a></li>
       <li class="nav-item"><a href="contact.html" class="nav-link">Contact us</a></li>
       <li class="nav-item cta"><a href="#" class="nav-link">Free Consultation</a></li>

     </ul>
   </div>
 </div>
</nav>
<!-- END nav -->

<section class="hero-wrap hero-wrap-2" style="background-image: url('images/d1.jpg'); height:900px" data-stellar-background-ratio="0.5">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text align-items-end justify-content-start">
      <div class="col-md-9 ftco-animate pb-5">
       <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="fa fa-chevron-right"></i></a></span> <span>Services <i class="fa fa-chevron-right"></i></span></p>
       <h1 class="mb-3 bread">Our Services</h1>
     </div>
   </div>
 </div>
</section>

<section class="ftco-section ftco-no-pt ftco-no-pb ftco-services-2">
 <div class="container">
  <div class="row">
    <div class="col-md-12 py-5 text-center">
     <h3 class="appointment-heading">Make An Appointment</h3>
     <div class="appointment-wrap d-flex align-items-center">
       <form action="#" class="appointment-form ftco-animate">
        <div class="row">
         <div class="col-md-3">
          <div class="form-group">
           <input type="text" class="form-control" placeholder="First Name">
         </div>
       </div>
       <div class="col-md-3">
        <div class="form-group">
         <input type="text" class="form-control" placeholder="Last Name">
       </div>
     </div>
     <div class="col-md-3">
      <div class="form-group">
       <div class="form-field">
         <div class="select-wrap">
          <div class="icon"><span class="fa fa-chevron-down"></span></div>
          <select name="" id="" class="form-control">
           <option value="">Select Your Services</option>
           <option value="">Pet Adoption</option>
           <option value="">Pet Grooming</option>
           <option value="">Vaccination</option>
           <option value="">Dog Training</option>
           <option value="">Pet Daycare</option>
           <option value="">Pet Sitter</option>
           <option value="">Veterinary Help</option>
           <option value="">Other Services</option>
         </select>
       </div>
     </div>
   </div>
 </div>
 <div class="col-md-3">
  <div class="form-group">
   <input type="text" class="form-control" placeholder="Phone">
 </div>
</div>
<div class="col-md-3">
  <div class="form-group">
   <div class="input-wrap">
    <div class="icon"><span class="fa fa-calendar"></span></div>
    <input type="text" class="form-control appointment_date" placeholder="Date">
  </div>
</div>
</div>
<div class="col-md-3">
  <div class="form-group">
   <div class="input-wrap">
    <div class="icon"><span class="fa fa-clock-o"></span></div>
    <input type="text" class="form-control appointment_time" placeholder="Time">
  </div>
</div>
</div>
<div class="col-md-3">
  <div class="form-group">
    <textarea name="" id="" cols="30" rows="2" class="form-control" placeholder="Message"></textarea>
  </div>
</div>
<div class="col-md-3">
  <div class="form-group">
    <input type="submit" value="Appointment" class="btn btn-secondary py-3 px-4">
  </div>
</div>
</div>
</form>
</div>
</div>
</div>
</div>.
</section> 


<div class="container">
@foreach($products->chunk(3) as $productChunk)
        <div class="row">
        @foreach($productChunk as $product)
          <div class="col-sm-6 col-md-4">
            <div class="product-item">
              <figure>
              <img src="images/d2.jpg" class="card-img-top" alt="..." style="heigth:400px;margin-top:1%;margin-right:10%">
              </figure>
              <div class="px-4">
                <h3><a href="#">{{$product->title}}</a></h3>
               
                <p class="mb-4">{{$product->description}}</p>
                <h1>{{$product->price}}
                <div>
                  <a href="/addtocart/{{$product->id}}" class="btn btn-black mr-1 rounded-0">Cart</a>
                  <a href="#" class="btn btn-black btn-outline-black ml-1 rounded-0">View</a>
                </div>
              </div>
            </div>
          </div>
          
          @endforeach
        </div>
        
        @endforeach
      </div>
  
    </div>

    <!-- 
<div class="row">
@foreach($products  as $product)
<div class="col-md-4">

<div class="card" style="maring-left:3%">
    <img src="images/d2.jpg" class="card-img-top" alt="..." style="heigth:400px;margin-top:1%;margin-right:10%">
    <div class="card-body">
      <h5 class="card-title">{{$product->title}}</h5>
      <p class="card-text">{{$product->description}}</p>
      <div class="mb-4"> 
                <h3 class="text-black font-weight-bold h5">Price:</h3>
                <div class="price"><del class="mr-2">{{$product->price}}</del> $69.00</div>
              </div>
      <button class="btn-danger" href="/addtocart/{{$product->id}}" style="margin-left:35%;margin-top:15%">Add to cart</button>

    </div>
    @endforeach
  </div>


</div> 


<div class="col-md-4">

<div class="card" style="maring-left:3%">
    <img src="images/d3.jpg" class="card-img-top" alt="..." style="heigth:400px;margin-top:1%;margin-right:10%">
    <div class="card-body">
      <h5 class="card-title">Modren Brown Watch</h5>
      <p class="card-text">A classic watch from a university between the old and the modern style, suitable for formal occasions.</p>
      <div class="mb-4"> 
                <h3 class="text-black font-weight-bold h5">Price:</h3>
                <div class="price"><del class="mr-2">$269.00</del> $69.00</div>
              </div>
      <button class="btn-danger"0 style="margin-left:35%;margin-top:15%">Add to cart</button>
    </div>
    
  </div>


</div> 
<div class="col-md-4">

<div class="card" style="maring-left:3%">
    <img src="images/w2.jpg" class="card-img-top" alt="..." style="heigth:400px;margin-top:1%;margin-right:10%">
    <div class="card-body">
      <h5 class="card-title">Modren Brown Watch</h5>
      <p class="card-text">>A classic watch from a university between old and modern styles, with a distinctive blue design ..</p>
      <div class="mb-4"> 
                <h3 class="text-black font-weight-bold h5">Price:</h3>
                <div class="price"><del class="mr-2">$269.00</del> $69.00</div>
              </div>
      <button class="btn-danger"0 style="margin-left:35%;margin-top:15%">Add to cart</button>
    </div>
    
  </div>


</div> 
</div> <!--end row


<br><br><br><br><br>



<div class="row">
<div class="col-md-4">

<div class="card" style="maring-left:3%">
    <img src="images/2.jpg" class="card-img-top" alt="..." style="heigth:400px;margin-top:1%;margin-right:10%">
    <div class="card-body">
      <h5 class="card-title">Modren Brown Watch</h5>
      <p class="card-text">A modern electronic clock that can browse the screen and open any application you want, with distinct and wonderful features.</p>
      <div class="mb-4"> 
                <h3 class="text-black font-weight-bold h5">Price:</h3>
                <div class="price"><del class="mr-2">$269.00</del> $69.00</div>
              </div>
      <button class="btn-danger"0 style="margin-left:35%">Add to cart</button>
    </div>
    
  </div>


</div> 
<div class="col-md-4">

<div class="card" style="maring-left:3%">
    <img src="images/d5.jpg" class="card-img-top" alt="..." style="heigth:400px;margin-top:1%;margin-right:10%">
    <div class="card-body">
      <h5 class="card-title">Modren Brown Watch</h5>
      <p class="card-text">An interchangeable watch that suits administrative work with high quality and attractive brown leather.show equal height action..</p>
      <div class="mb-4"> 
                <h3 class="text-black font-weight-bold h5 price1">Price:</h3>
                <div class="price"><del class="mr-2">$269.00</del> $69.00</div>
              </div>
      <button class="btn-danger"0 style="margin-left:35%">Add to cart</button>
    </div>
    
  </div>


</div> 
<div class="col-md-4">

<div class="card" style="maring-left:3%">
    <img src="images/3.jpg" class="card-img-top" alt="..." style="heigth:400px;margin-top:1%;margin-right:10%">
    <div class="card-body">
      <h5 class="card-title">Modren Brown Watch</h5>
      <p class="card-text">This ias a natural lead-in to additional content. This card has even longer content than the first to show that equal height action..</p>
      <div class="mb-4"> 
                <h3 class="text-black font-weight-bold h5">Price:</h3>
                <div class="price"><del class="mr-2">$269.00</del> $69.00</div>
              </div>
      <button class="btn-danger"0 style="margin-left:35%">Add to cart</button>
    </div>
    
  </div>


</div> 
<div class="clearfix"></div>



</div> <!--end row 
<br><br><br><br><br>




<div class="row">
<div class="col-md-4">

<div class="card" style="maring-left:3%">
    <img src="images/f3.jpg" class="card-img-top" alt="..." style="heigth:400px;margin-top:1%;margin-right:10%">
    <div class="card-body">
      <h5 class="card-title">Modren Brown Watch</h5>
      <p class="card-text">A youth watch with a distinctive wide strap and a delicate design in beautiful colors and red hour hands..</p>
      <div class="mb-4"> 
                <h3 class="text-black font-weight-bold h5">Price:</h3>
                <div class="price"><del class="mr-2">$269.00</del> $69.00</div>
              </div>
      <button class="btn-danger"0 style="margin-left:35%">Add to cart</button>
    </div>
    
  </div>


</div> 
<div class="col-md-4">

<div class="card" style="maring-left:3%">
    <img src="images/f2.jpg" class="card-img-top" alt="..." style="heigth:400px;margin-top:1%;margin-right:10%">
    <div class="card-body">
      <h5 class="card-title">Modren Brown Watch</h5>
      <p class="card-text"> A youth watch with a distinctive wide strap and a delicate design in beautiful colors and red hour hands..</p>
      <div class="mb-4"> 
                <h3 class="text-black font-weight-bold h5">Price:</h3>
                <div class="price"><del class="mr-2">$269.00</del> $69.00</div>
              </div>
      <button class="btn-danger"0 style="margin-left:35%">Add to cart</button>
    </div>
    
  </div>


</div> 
<div class="col-md-4">

<div class="card" style="maring-left:3%">
    <img src="images/f1.jpg" class="card-img-top" alt="..." style="heigth:400px;margin-top:1%;margin-right:10%">
    <div class="card-body">
      <h5 class="card-title">Modren Brown Watch</h5>
      <p class="card-text">A watch with an attractive and distinctive design, with a modern classic system..</p>
      <div class="mb-4"> 
                <h3 class="text-black font-weight-bold h5">Price:</h3>
                <div class="price"><del class="mr-2">$269.00</del> $69.00</div>
              </div>
      <button class="btn-danger"0 style="margin-left:35%">Add to cart</button>
    </div>
    
  </div>


</div> 
<div class="clearfix"></div>
</div> <!--end row 

<br><br><br><br><br>

</div> <!--end contanier 








<!-- 
<div class="card-deck">
  <div class="card" style="maring-left:3%">
    <img src="images/d2.jpg" class="card-img-top" alt="..." style="heigth:400px;margin-top:1%;margin-right:10%">
    <div class="card-body">
      <h5 class="card-title">Modren Brown Watch</h5>
      <p class="card-text">Brown practical watch with raw genuine leather.
Clear hour hands..</p>
      <div class="mb-4"> 
                <h3 class="text-black font-weight-bold h5">Price:</h3>
                <div class="price"><del class="mr-2">$269.00</del> $69.00</div>
              </div>
      <button class="btn-danger"0 style="margin-left:35%">Add to cart</button>
    </div>
    
  </div>
  <div class="card">
    <img src="images/d3.jpg" class="card-img-top" alt="..." style="heigth:200px;margin-top:1%;margin-right:10%">
    <div class="card-body">
      <h5 class="card-title">Classic Watch</h5>
      <p class="card-text">A classic watch from a university between the old and the modern style, suitable for all practical and formal occasions.</p>
      <div class="mb-4"> 
                <h3 class="text-black font-weight-bold h5">Price:</h3>
                <div class="price"><del class="mr-2">$269.00</del> $69.00</div>
              </div>
      <button class="btn-danger"0 style="margin-left:35%">Add to cart</button>
    </div>
 
  </div>
  <div class="card">
    <img src="images/w2.jpg" class="card-img-top" alt="..." style="heigth:200px;margin-top:2%">
    <div class="card-body">
      <h5 class="card-title">Classic Watch</h5>
     
      <p class="card-text">A classic watch from a university between old and modern styles, with a distinctive blue design and clear and beautiful-looking hands.</p>
      <div class="mb-4"> 
                <h3 class="text-black font-weight-bold h5">Price:</h3>
                <div class="price"><del class="mr-2">$269.00</del> $69.00</div>
              </div>
      <button class="btn-danger"0 style="margin-left:35%">Add to cart</button>
    </div>
 
  </div>
</div>
<br><br><br>
<!-- the second watch  row
<div class="card-deck">
<div class="container">

  <div class="card" style="maring-left:3%">
    <img src="images/2.jpg" class="card-img-top" alt="..." style="heigth:200px;margin-top:2%">
    <div class="card-body">
      <h5 class="card-title">Electric Watch</h5>
      <p class="card-text">A modern electronic clock that can browse the screen and open any application you want, with distinct and wonderful features.</p>
      <div class="mb-4"> 
                <h3 class="text-black font-weight-bold h5">Price:</h3>
                <div class="price"><del class="mr-2">$269.00</del> $69.00</div>
              </div>
      <button class="btn-danger"0 style="margin-left:35%">Add to cart</button>
    </div>
    
  </div>
  <div class="card">
    <img src="images/d5.jpg" class="card-img-top" alt="..." style="heigth:200px;margin-top:2%">
    <div class="card-body">
      <h5 class="card-title">Brown Watch </h5>
      <p class="card-text">An interchangeable watch that suits administrative work with high quality and attractive brown leather.</p>
      <div class="mb-4"> 
                <h3 class="text-black font-weight-bold h5">Price:</h3>
                <div class="price"><del class="mr-2">$269.00</del> $69.00</div>
              </div>
      <button class="btn-danger"0 style="margin-left:35%">Add to cart</button>
    </div>
 
  </div>
  <div class="card" style="heigth:590px">
    <img src="images/3.jpg" class="card-img-top" alt="..." style="heigth:400px;margin-top:2%">
    <div class="card-body">
      <h5 class="card-title">Classic Watch</h5>
     
      <p class="card-text">This ias a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
      <div class="mb-4"> 
                <h3 class="text-black font-weight-bold h5">Price:</h3>
                <div class="price"><del class="mr-2">$269.00</del> $69.00</div>
              </div>
      <button class="btn-danger"0 style="margin-left:35%">Add to cart</button>
    </div>
 
  </div>
</div>
<br><br><br>
<!-- the third watch  row 
<div class="card-deck">
  <div class="card" style="maring-left:3%">
    <img src="images/f3.jpg" class="card-img-top" alt="..." style="heigth:200px;margin-top:2%">
    <div class="card-body">
      <h5 class="card-title">Modren Watch</h5>
      <p class="card-text">A youth watch with a distinctive wide strap and a delicate design in beautiful colors and red hour hands..</p>
      <div class="mb-4"> 
                <h3 class="text-black font-weight-bold h5">Price:</h3>
                <div class="price"><del class="mr-2">$269.00</del> $69.00</div>
              </div>
      <button class="btn-danger"0 style="margin-left:35%">Add to cart</button>
    </div>
    
  </div>
  <div class="card">
    <img src="images/f2.jpg" class="card-img-top" alt="..." style="heigth:200px;margin-top:2%">
    <div class="card-body">
      <h5 class="card-title">Classic Watch</h5>
      <p class="card-text">
      A youth watch with a distinctive wide strap and a delicate design in beautiful colors and red hour hands.
</p>
      <div class="mb-4"> 
                <h3 class="text-black font-weight-bold h5">Price:</h3>
                <div class="price"><del class="mr-2">$269.00</del> $69.00</div>
              </div>
      <button class="btn-danger"0 style="margin-left:35%">Add to cart</button>
    </div>
 
  </div>
  <div class="card float-left">
    <img src="images/f1.jpg" class="card-img-top" alt="..." style="heigth:200px;margin-top:2%">
    <div class="card-body">
      <h5 class="card-title">Classic Watch</h5>
     
      <p class="card-text">A watch with an attractive and distinctive design, with a modern classic system, and a distinctive youthful modern design.</p>
      <div class="mb-4"> 
                <h3 class="text-black font-weight-bold h5">Price:</h3>
                <div class="price"><del class="mr-2">$269.00</del> $69.00</div>
              </div>
      <button class="btn-danger"0 style="margin-left:35%">Add to cart</button>
    </div>
 
  </div>
  </div>
</div>
-->
<br><br><br><br><br><br>
<footer class="ftco-footer">
  <div class="container mb-5 pb-4">
    <div class="row">
      <div class="col-lg col-md-6">
        <div class="ftco-footer-widget">
          <h2 class="logo d-flex align-items-center">
           <a href="#" class="d-flex align-items-center">
            <div class="icon"><a class="navbar-brand d-flex align-items-center" href="index.html"><img src="images/v6.png" style="height:40px; width:40px;"><h1>Beauty<span class="mini">Watch</span></h1></a></div>
           
         </a>
       </h2>
       <p>Free delivery and affordable prices for everyone.</p>
       <ul class="ftco-footer-social list-unstyled mt-4">
        <li><a href="#"><span class="fa fa-twitter"></span></a></li>
        <li><a href="#"><span class="fa fa-facebook"></span></a></li>
        <li><a href="#"><span class="fa fa-instagram"></span></a></li>
      </ul>
    </div>
  </div>
<br><hr><hr><hr><hr>

  <div class="col-lg col-md-6">
    <div class="ftco-footer-widget">
      <h2 class="ftco-heading-2">Services</h2>
      <ul class="list-unstyled">
        <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Sale


</a></li>
        <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Repairing</a></li>
        <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Show</a></li>
        <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>marketing</a></li>
        <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Battery change</a></li>
        <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Belt changed</a></li>
        <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>The clock changes</a></li>
      </ul>
    </div>
  </div>

  <div class="col-lg-2 col-md-6">
    <div class="ftco-footer-widget">
      <h2 class="ftco-heading-2">Links</h2>
      <ul class="list-unstyled">
        <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Home</a></li>
        <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>About</a></li>
        <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Services</a></li>
        <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Groomer</a></li>
        <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Blog</a></li>
        <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Pricing</a></li>
        <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Contact</a></li>
      </ul>
    </div>
  </div>

  <div class="col-lg col-md-6">
    <div class="ftco-footer-widget">
     <h2 class="ftco-heading-2">Have a Questions?</h2>
     <div class="block-23 mb-3">
       <ul>
         <li><span class="fa fa-map-marker mr-3"></span><span class="text">Gaza Omar al-Mukhtar next to Jerada for bags.</span></li>
         <li><a href="#"><span class="fa fa-phone mr-3"></span><span class="text">+2 392 3929 210</span></a></li>
         <li><a href="#"><span class="fa fa-paper-plane mr-3"></span><span class="text">info@yourdomain.com</span></a></li>
       </ul>
     </div>
   </div>
 </div>
</div>
</div>
<div class="container-fluid bg-primary py-5">
 <div class="row">
  <div class="col-md-12 text-center">
   
    <p class="mb-0"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
      Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Rawand Jaradh</a>
      <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
    </div>
  </div>
</div>
</footer>



<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

<script src="js/jquery.min.js"></script>
<script src="js/jquery-migrate-3.0.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/jquery.stellar.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/jquery.animateNumber.min.js"></script>
<script src="js/bootstrap-datepicker.js"></script>
<script src="js/jquery.timepicker.min.js"></script>
<script src="js/scrollax.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="js/google-map.js"></script>

<script src="js/main.js"></script>

</body>
</html>