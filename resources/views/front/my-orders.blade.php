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

    <!-- my orders begin -->
    <section class="product-shop spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="filter-widget">
                        <h5 class="fw-title">
                           <div class="breadcrumb-text">
                           <a href="./account"><i class="fa fa-user"></i> My account fashi</a>
                           </div> 
                        </h5>
                        <ul class="filter-catagories">
                        <li> <a href="./my-orders"><i class="fa fa-shopping-bag"></i><b> My orders</b></a></li><br>
                        <li> <a href="./my-wishlist"><i class="icon_heart_alt"></i><b> My wishlist</b></a></li><br>   
                        <li><h5 class="fw-title">
                       
                        <li> <a href="./adresses"> <b>Adresses</b></a></li><br>
                        <li> <a href="./change-pwd"> <b>Change password</b></a></li><br>
                        <li> <a href="./login"> <i class="fas fa-sign-out-alt"><b>LOG OUT</b></i></a></li>
                        </ul>
                    </div>
                </div>
                
                <div class="col-lg-6 offset-lg-1">
                    <div class="filter-widget">
                        <h5 class="fw-title">
                           <div class="breadcrumb-text">
                            My orders 
                           </div> 
                        </h5>
                           <div class="cart-table">
                            <table>
                              <thead>
                              </thead>
                              <tbody>
                                <tr>
                                    <td class="cart-pic first-row"><img src="img/cart-page/product-1.jpg" alt=""></td>
                                    <td class="cart-pic first-row">
                                    <img src="img/cart-page/product-1.jpg" alt=""> 
                                    </td>
                                    <td class="p-title first-row">
                                    <span style="float:left">
                                    Order #123645879 <br>
                                    Date: 02/02/2020 <br>
                                    Statut: Livré </span>
                                     <spam style="float:right" style="backgroundcolor:orange"><button><a href="./order-detail" style="color:orange"> details</a></button></spam>
                                    </td>
                                    <td>
                                    </td>
                                    <td ></td>
                                    <td ></td>
                                </tr>
                              </tbody>
                            </table>
                           </div>
                    </div> 
                   
                </div>

                
            </div>
        
    </section>          

    <!-- my orders end-->


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