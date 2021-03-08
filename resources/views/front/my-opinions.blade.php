<!DOCTYPE html>
<html lang="zxx">

<head>
@include('front.includes.head')
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    @include('front.includes.header')
    <!-- Header End -->

    <!-- my opinions begin -->
    <section class="product-shop spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 ">
                    <div class="filter-widget">
                        <h5 class="fw-title">
                           <div class="breadcrumb-text">
                           <a href="./account"><i class="fa fa-user"></i> My account fashi</a>
                           </div> 
                        </h5>
                        <ul class="filter-catagories">
                        <li> <a href="./my-orders"><i class="fa fa-shopping-bag"></i><b> my orders</b></a></li><br>
                        <li> <a href="./my-wishlist"><i class="icon_heart_alt"></i><b>  my wishlist</b></a></li><br>   
                        <li><a href="./my-opinions"><i class="fa fa-comment"></i><b> My opinions</b></a></li><hr>
                       
                        <li> <a href="./adresses"> <b>adresses</b></a></li><br>
                        <li> <a href="./change-pwd"> <b>change password</b></a></li><br>
                        <li> <a href="./login"> <b>LOG OUT</b></a></li>
                        </ul>
                    </div>
                </div>
                
                <div class="col-lg-9 order-1 order-lg-2">
                   <div class="row">
                      <div class="col-lg-6">
                           <div class="filter-widget">
                             <h5 class="fw-title">
                                 <div class="breadcrumb-text">
                                 My_opinions
                                </div> 
                              </h5>
                           </div>
                      </div>
        </div>          
    </div>
        
</section>          

    <!-- my opinions end-->


 <!-- Partner Logo Section Begin -->
 @include('front.includes.partner')
     <!-- Partner Logo Section End -->

     <!-- Footer Section Begin -->
     @include('front.includes.footer')
    <!-- Footer Section End -->

     <!-- Js Plugins -->
     @include('front.includes.scripts')


    </body>

</html>