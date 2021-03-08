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

    <!-- change password begin -->
    <section class="product-shop spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="filter-widget">
                        <h5 class="fw-title">
                           <div class="breadcrumb-text">
                           <a href="./account"><i class="fa fa-user"></i> My account fashi</a>
                           </div> 
                        </h5>
                        <ul class="filter-catagories">
                        <li> <a href="./my-orders"><i class="fa fa-shopping-bag"></i><b> my orders</b></a></li><br>
                        <li> <a href="./my-wishlist"><i class="icon_heart_alt"></i><b>  my wishlist</b></a></li><br>   
                        <li><h5 class="fw-title">
                         
                        <li> <a href="./adresses"> <b>adresses</b></a></li><br>
                        <li> <a href="./change-pwd"> <b>change password</b></a></li><br>
                        <li> <a href="./login"> <b>LOG OUT</b></a></li>
                        </ul>
                    </div>
                </div>
                
                <div class="col-lg-6 offset-lg-1">
                    <div class="filter-widget">
                        <h5 class="fw-title">
                           <div class="breadcrumb-text">
                              Change password
                           </div> 
                        </h5> 
                    </div> 
                    <form action="post">
                               <div class="group-input">
                                <label for="pass"> curent  Password: </label>
                                <input type="text" id="username" size="60%" placeholder="your curent  Password:...." >
                               </div>
                               <div class="group-input">
                                <label for="pass">new  Password: </label>
                                <input type="text" id="pass" size="60%" placeholder="new  Password:...." >
                               </div>
                               <div class="group-input">
                                <label for="pass">confirm password: </label>
                                <input type="text" id="pass" size="60%" placeholder="confirm password...." > 
                               </div>
                    </form> <br> <br>          
                    <button type="submit" class="site-btn login-btn" align="center">change password</button>
             
                </div>

                
            </div>
        </div>
    </section>        

    <!-- change password end-->


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