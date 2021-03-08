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
    
    <!-- private-information Begin -->
    <section class="product-shop spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 ">
                    <div class="filter-widget">
                        <h5 class="fw-title">
                           <div class="breadcrumb-text">
                           <a href="./account"><i class="fa fa-user"></i> My account fashi</a>
                           </div> 
                        </h5>
                        <ul class="filter-catagories">
                        <li> <a href="./my-orders"><i class="fa fa-shopping-bag"></i><b> my orders</b></a></li><br>
                        <li> <a href="./my-wishlist"><i class="icon_heart_alt"></i><b>  my wishlist</b></a></li><br>   
                        <li> <a href="./adresses"> <b>adresses</b></a></li><br>
                        <li> <a href="./change-pwd"> <b>change password</b></a></li><br>
                        <li> <a href="./login"> <b>LOG OUT</b></a></li>
                        </ul>
                    </div>
                </div>  
                <div class="col-lg-8 order-1 order-lg-2">
                        <div class="col-lg-6">
                            <div class="filter-widget">
                                <h5 class="fw-title">  
                                 <div class="breadcrumb-text">
                                   My_account 
                                 </div> 
                                </h5>
                             <form action="post">
                               <div class="group-input">
                                <label for="first name"> First Name: </label>
                                <input type="text" id="username" size="60%" placeholder="your first name...." >
                               </div>
                               <div class="group-input">
                                <label for="last name">Last Name: </label>
                                <input type="text" id="pass" size="60%" placeholder="your last name...." >
                               </div>
                               <div class="group-input">
                                <label for="e-mail">E-mail: </label>
                                <input type="text" id="pass" size="60%" placeholder="your e-mail...." > 
                               </div>
                              <table>
                               <tr>
                                  <td><label for="pass" >Phone: </label></td>
                                </tr>
                                <tr>  
                                  <td> 
                                   <select name="préfixe"> 
                                         <option selected> +216 </option>
                                         <option selected> +266 </option> 
                                    </select>
                                  </td>
                                  <td>
                                    <input type="text" placeholder="your phone number....."  size="53%">
                                  </td>
                                 </tr>
                              </table>
                              <div class="contenu"> 
                                 <input type="button" value="Add phone" onclick="fAddPhone()" /> 
                                <div id="Cible"></div> 
                              </div> 
                              <table>
                                <tr>
                                  <td><label for="pass" >Adresse: </label></td>
                                </tr>
                               <tr>  
                                 <td> 
                                   <select name="country"> 
                                         <option selected> Tunisia </option>
                                         <option selected> England </option> 
                                    </select>
                                 </td>
                                 <td> 
                                   <select name="gouverment"> 
                                         <option selected> nabeul </option>
                                         <option selected> sousse</option> 
                                    </select>
                                 </td>
                                 <td>
                                 <input type="text" placeholder="your adresse...."  size="42%">
                                 </td>
                                </tr>
                              </table><br>
                              <button type="submit" class="site-btn login-btn">SAVE INFORMATIONS</button>
                             </form>
                            </div>
                        </div>
                </div>
            </div>          
        </div>
        
    </section>   
    <!-- private-information End -->
    

     
    
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