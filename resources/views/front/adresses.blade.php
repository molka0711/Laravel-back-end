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

    <!-- adresses begin -->
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
                        <li> <a href="./my-orders"><i class="fa fa-shopping-bag"></i><b> my orders</b></a></li><br>
                        <li> <a href="./my-wishlist"><i class="icon_heart_alt"></i><b>  my wishlist</b></a></li><br>   
                        <li><h5 class="fw-title">
                       
                        <li> <a href="./adresses"> <b>adresses</b></a></li><br>
                        <li> <a href="./change-pwd"> <b>change password</b></a></li><br>
                        <li> <a href="./login"> <b>LOG OUT</b></a></li>
                        </ul>
                    </div>
                </div>
                
                <div class="col-lg-8 order-1 order-lg-2">
                    <div class="filter-widget">
                        <h5 class="fw-title">
                           <div class="breadcrumb-text">
                            My adresses       
                        </h5> 
                    </div> 
                    <table border="" cellspacing="10" cellpadding="10" height="100" width="70%">
                                <tr> <th> adresses </th>  </tr>          
                                <tr> 
                                    <td>
                                        Ranim mechmech<br>
                                        rue zaiir<br>
                                        dar chaabane fehri, nabeul<br>
                                        Tunisia<br>
                                        +216 90464098<br>
                                    </td>    
                                </tr>
                                <tr>
                                    <td>     
                                     <span style="float:left">default adresse: </span>
                                     <spam><i class="fa fa-edit" style="float:right"> </i></spam>
                                    </td>
                                </tr>
                    </table><br><br>
                    <button class="primary-btn pd-cart"> add adresse </button> 
                </div>

                
            </div>
        
    </section>              
                                
                          

             

    <!-- adresses end-->


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