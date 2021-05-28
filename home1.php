       

<html xmlns="http://www.w3.org/1999/xhtml"><head>
      <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <title>Recipes</title>
    <meta name="keywords" content="Recipes">
    <meta name="description" content="Find great, healthy recipes for any food, meal or dietary requirement.">
    <meta property="og:image" content="https://a.ftscrt.com/static/images/og_fatsecret.png">
    <link rel="icon" href="/favicon.png" type="image/png">
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="/touch-icon-iphone.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/touch-icon-ipad.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/touch-icon-iphone-retina.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/touch-icon-ipad-retina.png">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,900&amp;display=swap">
    <link rel="stylesheet" href="https://a.ftscrt.com/static/css/default_35.css" type="text/css">
    <link rel="stylesheet" href="https://a.ftscrt.com/static/css/recipes/collections_2.css" type="text/css">
    <script type="text/javascript" async="" src="https://ssl.google-analytics.com/ga.js"></script><script src="https://a.ftscrt.com/static/script/Chart-custom.js" type="text/javascript"></script>

  <style>
  body {
    font: 400 15px Lato, sans-serif;
    line-height: 1.8;
    color: #818181;
  }
  h2 {
    font-size: 24px;
    text-transform: uppercase;
    color: #303030;
    font-weight: 600;
    margin-bottom: 30px;
  }
  h4 {
    font-size: 19px;
    line-height: 1.375em;
    color: #303030;
    font-weight: 400;
    margin-bottom: 30px;
  }  
  .jumbotron {
    background-color: #7fd858;
    color: #245365;
    padding: 100px 25px;
    font-family: Montserrat, sans-serif;
  }
  .container-fluid {
    padding: 60px 50px;
  }
  .bg-grey {
    background-color: #f6f6f6;
  }
  .logo-small {
    color: #f4511e;
    font-size: 50px;
  }
  .logo {
    color: #f4511e;
    font-size: 200px;
  }
  .thumbnail {
    padding: 0 0 15px 0;
    border: none;
    border-radius: 0;
  }
  .thumbnail img {
    width: 100%;
    height: 100%;
    margin-bottom: 10px;
  }
  .carousel-control.right, .carousel-control.left {
    background-image: none;
    color: #f4511e;
  }
  .carousel-indicators li {
    border-color: #f4511e;
  }
  .carousel-indicators li.active {
    background-color: #f4511e;
  }
  .item h4 {
    font-size: 19px;
    line-height: 1.375em;
    font-weight: 400;
    font-style: italic;
    margin: 70px 0;
  }
  .item span {
    font-style: normal;
  }
  .panel {
    border: 1px solid #f4511e; 
    border-radius:0 !important;
    transition: box-shadow 0.5s;
  }
  .panel:hover {
    box-shadow: 5px 0px 40px rgba(0,0,0, .2);
  }
  .panel-footer .btn:hover {
    border: 1px solid #f4511e;
    background-color: #fff !important;
    color: #f4511e;
  }
  .panel-heading {
    color: #fff !important;
    background-color: #f4511e !important;
    padding: 25px;
    border-bottom: 1px solid transparent;
    border-top-left-radius: 0px;
    border-top-right-radius: 0px;
    border-bottom-left-radius: 0px;
    border-bottom-right-radius: 0px;
  }
  .panel-footer {
    background-color: white !important;
  }
  .panel-footer h3 {
    font-size: 32px;
  }
  .panel-footer h4 {
    color: #aaa;
    font-size: 14px;
  }
  .panel-footer .btn {
    margin: 15px 0;
    background-color: #f4511e;
    color: #fff;
  }
  .navbar {
    margin-bottom: 0;
    background-color: #7fd858;
    z-index: 9999;
    border: 0;
    font-size: 12px !important;
    line-height: 1.42857143 !important;
    letter-spacing: 4px;
    border-radius: 0;
    font-family: Montserrat, sans-serif;
  }
  .navbar li a, .navbar .navbar-brand {
    color: blue !important;
  }
  .navbar-nav li a:hover, .navbar-nav li.active a {
    color: #f4511e !important;
    background-color: #fff !important;
  }
  .navbar-default .navbar-toggle {
    border-color: transparent;
    color: #fff !important;
  }
  footer .glyphicon {
    font-size: 20px;
    margin-bottom: 20px;
    color: #f4511e;
  }
  .slideanim {visibility:hidden;}
  .slide {
    animation-name: slide;
    -webkit-animation-name: slide;
    animation-duration: 1s;
    -webkit-animation-duration: 1s;
    visibility: visible;
  }
  @keyframes slide {
    0% {
      opacity: 0;
      transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      transform: translateY(0%);
    }
  }
  @-webkit-keyframes slide {
    0% {
      opacity: 0;
      -webkit-transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      -webkit-transform: translateY(0%);
    }
  }
  @media screen and (max-width: 768px) {
    .col-sm-4 {
      text-align: center;
      margin: 25px 0;
    }
    .btn-lg {
      width: 100%;
      margin-bottom: 35px;
    }
  }
  @media screen and (max-width: 480px) {
    .logo {
      font-size: 150px;
    }
  }
      @media not all, (-webkit-transform-3d)
.carousel-inner>.item {
    /* -webkit-transition: -webkit-transform .6s ease-in-out; */
    -o-transition: -o-transform .6s ease-in-out;
    transition: -webkit-transform .6s ease-in-out;
    /* transition: transform .6s ease-in-out; */
    /* transition: transform .6s ease-in-out,-webkit-transform .6s ease-in-out,-o-transform .6s ease-in-out; */
    /* -webkit-backface-visibility: hidden; */
    backface-visibility: hidden;
    -webkit-perspective: 1000px;
    perspective: 1000px;
}
  </style>
  </head>
  <body data-new-gr-c-s-check-loaded="14.1008.0" data-gr-ext-installed="">
    <form method="post" action="./Default.aspx?pa=recsh" id="ctl00" style="margin:0px">
<div class="aspNetHidden">
<input type="hidden" name="__EVENTTARGET" id="__EVENTTARGET" value="">
<input type="hidden" name="__EVENTARGUMENT" id="__EVENTARGUMENT" value="">
<input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="eJk6ndEMLv3SagJbYhGTPX/iHQSVcddIO48HnNe+vTyWB66AtHxdFz620VvUnv2qifPWfWuTqBrUWS3hWWqqu+9DaXfFE5Mn/2dDzSi2KDTlr4DkrKtaAiegpHuQx+2tCiETo0q2MQ39JQlf">
</div>


<nav class="navbar navbar-default navbar-fixed-top" width="1000px">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
       <a class="navbar-brand" href=""><img src="image/Capture2.PNG" alt="logo" style="width:125px ; height: 60px; padding-bottom: 10px; margin-top: -15px ; margin-left: -35px;"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="blog.html"><b>HOME</b></a></li>
        <li><a href="#intro"><b>FOOD</b></a></li>
      
       <li><a href="#intro"><b>FITNESS</b></a></li>
          <li><a href="#"><b>RECIPE</b></a></li>
          <li><a href="#"><b>MENU SUGGESTION</b></a></li>
          
        </li>
      <li><?php
        require 'users1/users.php';

        $users = getUsers();?>

      


 
           
            <table class="" style="padding-top: 10px; margin-top: 10px;">
                <thead hidden="">
                <tr hidden="">
                  
                    <th>Name</th>
                    
                     <th>Age</th>
                     <th>Height</th>
                      <th>Weight</th>
                      <th>Gender</th>
                       <th>PAL</th>

                       <th>BMR  </th>
                         <th colspan="1">TDEE  </th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($users as $user): ?>
                    <tr hidden="">
                   

                           
                        <td><?php echo $user['name'] ?></td>
                    
                   
                        
                         <td><?php echo $user['age'] ?></td>
                         <td><?php echo $user['weight'] ?></td>
                         <td><?php echo $user['height'] ?></td>
                         <td><?php echo $user['gender'] ?></td>
                         <td><?php echo $user['tdee']?></td>
                          
                                   

                       <td> BMR= <?php 
                   
                   $age=$user ['age'];
                    $weight=$user ['weight'];
                    $height = $user ['height'];
                    $calories="0.0215183";
                    $gender=$user ['gender'];
                
                        switch ($gender){
                            case 'Female':
                                $gender= 655 + (9.6 * $weight ) + (1.8 * $height) - (4.7 * $age);
                                echo   "<p>$gender </p>";
                                

                                break;
                                case 'Male':
                                    $gender=66 + (13.7 *$weight) + (5 * $height) - (6.8 * $age);
                                    echo  "<p>$gender </p>";
                                    
                                    
            // references of calorie calculator: http://www.bodybuildbid.com/articles/weightloss/calorie-calculator.html
                        }
        ?></td> 

                       <td> BMR= <?php 
              
                    $gender=$user ['gender'];
                      $tdee=$user ['tdee'];
                       $age=$user ['age'];
                    $weight=$user ['weight'];
                    $height = $user ['height'];
                    $calories="0.0215183";
                 
                switch ($gender) {
                            case 'Female':
                                $gender= 655 + (9.6 * $weight ) + (1.8 * $height) - (4.7 * $age);
                                echo   "<p>$gender </p>";
                                

                                break;
                                case 'Male':
                                    $gender=66 + (13.7 *$weight) + (5 * $height) - (6.8 * $age);
                                    echo  "<p>$gender </p>";
                                    
                                    
            
                        } ?>
     TDEE=  <?php 
                        switch ($tdee){
                            case 'Sedentary people':
                                $tdee=  ($gender * 1.2) ;
                                echo   "<p>$tdee </p>";
                                

                                break;
                                  case'People can do sports about 2-3 sessions / week':
                                $tdee=  $gender* 1.5 ;
                                echo   "<p>$tdee </p>";
                                

                                break;
                                  case 'People with high frequency of movement, 4-5 sessions / week':
                                $tdee=  $gender* 1.7 ;
                                echo   "<p>$tdee </p>";
                                

                                break;
                                case 'High intensity workout (all week)':
                                    $tdee= $gender* 1.9;
                                    echo  "<p>$tdee </p>";
                                    
                                    
            // references of calorie calculator: http://www.bodybuildbid.com/articles/weightloss/calorie-calculator.html
                        }
        ?> </td> 
                    

                        
                    </tr>
                  
                <?php endforeach;; ?>
                </tbody>
                  <td>
                            <a href="viewuser1.php?id=<?php echo $user['id'] ?>" class="btn btn-sm btn-outline-info"><b><?php echo $user['name'] ?></b></a>
                               
                        </td>
            </table>
      
  

</li>

   
      </ul>
    </div>
  </div>
</nav>

<div class="jumbotron text-center">
  <h1>Welcome Count Calo</h1> 
 <p>Web App for recommendation of calories and nutritional menu</p>
 
</div>
<br>


<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class=""></li>
      <li data-target="#myCarousel" data-slide-to="1" class=""></li>
      <li data-target="#myCarousel" data-slide-to="2" class="active"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item">
        <img src="image/re1.jpg" alt="New York" width="1350" style="height: 480px !important;" float="center">
        <div class="carousel-caption">
          <h3>Roast Pumpkin Salad
</h3>
          <p>A light summer salad that's sure to tempt with the perfect mix of flavors.</p>
        </div>      
      </div>

      <div class="item">
        <img src="image/2.jpg" alt="Chicago" width="1350" style="height: 480px !important;" float="center">
        <div class="carousel-caption">
          <h3>
7-Day Weight-Loss Healthy Meal Plan</h3>
        
        </div>      
      </div>
    
      <div class="item active">
        <img src="image/3.jpg" alt="Los Angeles" width="1350" style="height: 480px !important;" float="center">
        <div class="carousel-caption">
          <h3>Caculator Food Calories</h3>
       
        </div>      
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>
<br>

<div class="aspNetHidden">

  <input type="hidden" name="__VIEWSTATEGENERATOR" id="__VIEWSTATEGENERATOR" value="CA0B0334">
</div>
      



      <div class="mainContent">
        <div class="logoPanel">
          <div class="centerContent">
            <div class="centerInnerContent">
              <div class="logoContent">
               


              </div>
            </div>
          </div>
        </div>
    
        <div class="centerContent">
          <div class="centerInnerContent">
            


            
            <div id="content" class="mem">
              

<table class="generic">
  <tbody><tr valign="top">
    <td class="leftCell">
      <div class="leftCellContent">
        <div class="TopLevelHeader recipe">
          <h1>Recipes</h1>
          <div class="desc">Find great recipes for any meal, food or diet, rated and reviewed for you.</div>
          <br>
          
          <div style="padding:0px 15px">
            <table class="generic">
              <tbody><tr valign="top">
                <td rowspan="4" width="245">
                  <div class="featurebox">
                    <h2 id="featuredHeading">Featured Today</h2>
                    <h3 class="bigFeatured"><a href="/recipes/collections/meal/dessert/Default.aspx">Dessert Recipes</a></h3>
                    
                      <div class="realimg"><a href="/recipes/chocolate-no-bake-cookies/Default.aspx"><img border="0" src="https://m.ftscrt.com/static/recipe/a8331dcb-2b58-4d73-a3ba-ba2e6175e303.jpg" width="200"></a></div>
                    
                    <h2 style="margin-top:6px" class="bigFeatured"><a href="/recipes/chocolate-no-bake-cookies/Default.aspx">Chocolate No Bake Cookies</a></h2>
                    <div class="bottomfeaturebox">
                      Quick and easy yummy chocolate cookies that require no baking.
                      
                        <div class="ratingimage">
                          <img alt="Average FatSecret member ranking" src="https://a.ftscrt.com/static/images/stars/big-four-star.gif">
                        </div>
                      
                      <div align="right" class="smallText viewmore"><b><a href="/recipes/collections/meal/dessert/Default.aspx">view more dessert recipes </a></b></div>
                    </div>
                  </div>
                </td>
                <td valign="top">
                
                  <table class="featureditem" cellpadding="0" cellspacing="0">
                    <tbody><tr valign="top">
                      <td width="87" align="left">
                        <div class="itemratingimg">
                          
                            <a href="/recipes/double-chocolate-brownies/Default.aspx"><img border="0" src="https://m.ftscrt.com/static/recipe/da0421f2-aa0f-4193-886e-ad03e3a8b760_sq.jpg"></a>
                          
                        </div>
                      </td>
                      <td align="left">
                        <h2 class="bigFeatured"><a href="/recipes/double-chocolate-brownies/Default.aspx">Double Chocolate Brownies</a></h2>
                        Moist fudgy and so yummy chocolate brownies.
                        <br>
                        
                          <img alt="Average FatSecret member ranking" src="https://a.ftscrt.com/static/images/stars/three-star.gif">  
                        
                      </td>
                    </tr>
                  </tbody></table>
                
                </td>
              </tr>
              
                <tr valign="top">
                  <td>
                    <table class="featureditems" cellpadding="0" cellspacing="0">
                      <tbody><tr valign="top">
                        <td width="87" align="left">  
                          <div class="itemratingimg">
                            
                              <a href="/recipes/banana-zucchini-carrot-bread/Default.aspx"><img border="0" src="https://m.ftscrt.com/static/recipe/a37832cc-2542-4957-892a-16bdbb294403_sq.jpg"></a>                    
                            
                          </div>
                        </td>
                        <td align="left" width="100%">
                          <h2 class="bigFeatured"><a href="/recipes/banana-zucchini-carrot-bread/Default.aspx">Banana Zucchini Carrot Bread</a></h2>
                          Classic banana bread (or muffins) with a twist. 
                          <br>
                          
                            <img alt="Average FatSecret member ranking" src="https://a.ftscrt.com/static/images/stars/four-star.gif">
                          
                        </td>
                      </tr>
                    </tbody></table>
                  </td>
                </tr>
                
                <tr valign="top">
                  <td>
                    <table class="featureditems" cellpadding="0" cellspacing="0">
                      <tbody><tr valign="top">
                        <td width="87" align="left">  
                          <div class="itemratingimg">
                            
                              <a href="/recipes/cheese-blintz/Default.aspx"><img border="0" src="https://m.ftscrt.com/static/recipe/d1e20607-875c-4dcd-83b0-b8671c52a120_sq.jpg"></a>                   
                            
                          </div>
                        </td>
                        <td align="left" width="100%">
                          <h2 class="bigFeatured"><a href="/recipes/cheese-blintz/Default.aspx">Cheese Blintz</a></h2>
                          A low carb, high protein cheese blintz.
                          <br>
                          
                            <img alt="Average FatSecret member ranking" src="https://a.ftscrt.com/static/images/stars/three-star.gif">
                          
                        </td>
                      </tr>
                    </tbody></table>
                  </td>
                </tr>
                
                <tr valign="top">
                  <td>
                    <table class="featureditems" cellpadding="0" cellspacing="0">
                      <tbody><tr valign="top">
                        <td width="87" align="left">  
                          <div class="itemratingimg">
                            
                              <a href="/recipes/flourless-chocolate-chip-cookies/Default.aspx"><img border="0" src="https://m.ftscrt.com/static/recipe/cf9935da-5d77-4d63-b57f-262e49e22757_sq.jpg"></a>                    
                            
                          </div>
                        </td>
                        <td align="left" width="100%">
                          <h2 class="bigFeatured"><a href="/recipes/flourless-chocolate-chip-cookies/Default.aspx">Flourless Chocolate Chip Cookies</a></h2>
                          A sweet treat for carb counters.
                          <br>
                          
                            <img alt="Average FatSecret member ranking" src="https://a.ftscrt.com/static/images/stars/two-star.gif">
                          
                        </td>
                      </tr>
                    </tbody></table>
                  </td>
                </tr>
                  
            </tbody></table>
          </div>
        </div>
        <br>
        
      
        

  
      </div>
    </td>
    <td class="rightCell">
      <div class="rightCellContent">
        <div class="noPrint">
          
<script language="javascript">
  function ctl08__ctrl_0_kitchenSearchDowned(evt){
    if(evt.keyCode == 13){
      ctl08__ctrl_0_kitchenSearch();
      return false;
    }
    return true;
  }
  function ctl08__ctrl_0_kitchenSearch(){
    var url = '';
    if(document.getElementById('ctl08__ctrl_0food').checked)
      url = '/calories-nutrition/search?q=';
    else if(document.getElementById('ctl08__ctrl_0meals').checked)
      url = '/calories-nutrition/meals?q=';
    else
      url = '/Default.aspx?pa=rs&recipe=';
      
    var exp = document.getElementById('ctl08__ctrl_0keywords').value;
    if(exp == 'Enter search') exp = '';
    window.location.href = url + escape(exp);
  }
  function ctl08__ctrl_0_OnClick(el){
    if(el.style.color != '#000000' && el.style.color != 'rgb(0, 0, 0)'){
      el.value='';
      el.style.color='#000000';
    }
    else
    {
      if(navigator.userAgent.indexOf('Chrome') != -1 || navigator.userAgent.indexOf('Apple') != -1)
        el.select();
    }
  }
  function ctl08__ctrl_0_OnFocus(el){
    if(el.style.color == '#000000' || el.style.color == 'rgb(0, 0, 0)'){
      if(!(navigator.userAgent.indexOf('Chrome') != -1 || navigator.userAgent.indexOf('Apple') != -1))
        el.select();
    }
  }
  function ctl08__ctrl_0_OnBlur(el){
    if(el.value==''){
      el.value='Enter search';
      el.style.color='#BFC3C2';
    }
  }
</script>


          <br>
          
<div class="fs_advert">
<div class="advertising">

<div id="div-gpt-ad-Local_Default_ATF_Right_300x250" style="height:250px; width:300px;">
<script type="text/javascript">
  googletag.cmd.push(function() { googletag.display('div-gpt-ad-Local_Default_ATF_Right_300x250'); });
</script>
</div>

</div>
</div>
          
<div class="dottedBox main solid icons" style="padding:5px">
  <h2><span style="line-height:30px;padding-left:15px">Browse Recipes Deeper</span></h2>
  <div class="hr">&nbsp;</div>
  <div class="selected">
    <span class="recipes_b">&nbsp;</span><a href="/recipes/Default.aspx" onclick="return false">Recipes</a>
  </div>
  
  <div class="hr">&nbsp;</div>
  <div class="topHeader">Meal Types</div>
  
  <div class="selectable" onclick="onFSBoxItemClick(this)">
    <div style="padding-left:0px"><span class="recipes_bm">&nbsp;</span><a href="/recipes/collections/meal/appetizer/Default.aspx" onclick="return false">Appetizer</a></div>
  </div>
  

  
  <div class="selectable" onclick="onFSBoxItemClick(this)">
    <div style="padding-left:0px"><span class="recipes_bm">&nbsp;</span><a href="/recipes/collections/meal/breakfast/Default.aspx" onclick="return false">Breakfast</a></div>
  </div>
  
  <div class="selectable" onclick="onFSBoxItemClick(this)">
    <div style="padding-left:0px"><span class="recipes_bm">&nbsp;</span><a href="/recipes/collections/meal/dessert/Default.aspx" onclick="return false">Dessert</a></div>
  </div>
  

  
  <div class="selectable" onclick="onFSBoxItemClick(this)">
    <div style="padding-left:0px"><span class="recipes_bm">&nbsp;</span><a href="/recipes/collections/meal/lunch/Default.aspx" onclick="return false">Lunch</a></div>
  </div>
  
  
  <div class="selectable" onclick="onFSBoxItemClick(this)">
    <div style="padding-left:0px"><span class="recipes_bm">&nbsp;</span><a href="/recipes/collections/meal/salad/Default.aspx" onclick="return false">Salad</a></div>
  </div>
  
  
  
  
  <div class="hr">&nbsp;</div>
  <div class="topHeader">Foods &amp; Ingredients</div>
  
  <div class="selectable" onclick="onFSBoxItemClick(this)">
    <div style="padding-left:0px"><span class="recipes_bm">&nbsp;</span><a href="/recipes/collections/ingredients/dairy/Default.aspx" onclick="return false">Dairy</a></div>
  </div>
  
  <div class="selectable" onclick="onFSBoxItemClick(this)">
    <div style="padding-left:0px"><span class="recipes_bm">&nbsp;</span><a href="/recipes/collections/ingredients/fruit/Default.aspx" onclick="return false">Fruit</a></div>
  </div>
  
  <div class="selectable" onclick="onFSBoxItemClick(this)">
    <div style="padding-left:0px"><span class="recipes_bm">&nbsp;</span><a href="/recipes/collections/ingredients/grain/Default.aspx" onclick="return false">Grain</a></div>
  </div>
  
  <div class="selectable" onclick="onFSBoxItemClick(this)">
    <div style="padding-left:0px"><span class="recipes_bm">&nbsp;</span><a href="/recipes/collections/ingredients/herbs-spices-and-sauces/Default.aspx" onclick="return false">Herbs, Spices and Sauces</a></div>
  </div>
  
  <div class="selectable" onclick="onFSBoxItemClick(this)">
    <div style="padding-left:0px"><span class="recipes_bm">&nbsp;</span><a href="/recipes/collections/ingredients/meat/Default.aspx" onclick="return false">Meat</a></div>
  </div>
  
  <div class="selectable" onclick="onFSBoxItemClick(this)">
    <div style="padding-left:0px"><span class="recipes_bm">&nbsp;</span><a href="/recipes/collections/ingredients/seafood/Default.aspx" onclick="return false">Seafood</a></div>
  </div>
  
  <div class="selectable" onclick="onFSBoxItemClick(this)">
    <div style="padding-left:0px"><span class="recipes_bm">&nbsp;</span><a href="/recipes/collections/ingredients/vegetable/Default.aspx" onclick="return false">Vegetable</a></div>
  </div>
  
  <div class="hr">&nbsp;</div>

  <div class="topHeader">Diet &amp; Nutrition</div>
  

  <div class="selectable" onclick="onFSBoxItemClick(this)">
    <div style="padding-left:0px"><span class="recipes_bm">&nbsp;</span><a href="/recipes/collections/nutrition/diabetic/Default.aspx" onclick="return false">Diabetic</a></div>
  </div>
  
  <div class="selectable" onclick="onFSBoxItemClick(this)">
    <div style="padding-left:0px"><span class="recipes_bm">&nbsp;</span><a href="/recipes/collections/nutrition/gluten-free/Default.aspx" onclick="return false">Gluten Free</a></div>
  </div>
  
  <div class="selectable" onclick="onFSBoxItemClick(this)">
    <div style="padding-left:0px"><span class="recipes_bm">&nbsp;</span><a href="/recipes/collections/nutrition/high-fiber/Default.aspx" onclick="return false">High Fiber</a></div>
  </div>
  
  <div class="selectable" onclick="onFSBoxItemClick(this)">
    <div style="padding-left:0px"><span class="recipes_bm">&nbsp;</span><a href="/recipes/collections/nutrition/high-protein/Default.aspx" onclick="return false">High Protein</a></div>
  </div>
  
  <div class="selectable" onclick="onFSBoxItemClick(this)">
    <div style="padding-left:0px"><span class="recipes_bm">&nbsp;</span><a href="/recipes/collections/nutrition/low-calorie/Default.aspx" onclick="return false">Low Calorie</a></div>
  </div>
  
  <div class="selectable" onclick="onFSBoxItemClick(this)">
    <div style="padding-left:0px"><span class="recipes_bm">&nbsp;</span><a href="/recipes/collections/nutrition/low-carb/Default.aspx" onclick="return false">Low Carb</a></div>
  </div>
  

  
  <div class="selectable" onclick="onFSBoxItemClick(this)">
    <div style="padding-left:0px"><span class="recipes_bm">&nbsp;</span><a href="/recipes/collections/nutrition/low-fat/Default.aspx" onclick="return false">Low Fat</a></div>
  </div>
  
  

  

  
  <div class="selectable" onclick="onFSBoxItemClick(this)">
    <div style="padding-left:0px"><span class="recipes_bm">&nbsp;</span><a href="/recipes/collections/nutrition/sugar-free/Default.aspx" onclick="return false">Sugar Free</a></div>
  </div>

  
</div>

          



          


        </div>
      </div>
    </td>
  </tr>
</tbody></table>

            </div>
          </div>
        </div>
      </div>
<div id="services" class="container-fluid text-center">
  <h2>FUNCTION</h2>
 
  <br>
  <div class="row slideanim slide">
    <div class="col-sm-6">
      <span class="glyphicon glyphicon-grain logo-small"></span>
      <h4>FOOD</h4>
      <p>Add food to caculator total Food calories consumed</p>
    </div>
    <div class="col-sm-6">
      <span class="glyphicon glyphicon-heart logo-small"></span>
      <h4>FITNESS</h4>
      <p>Add fitness to caculator total Exercise calories burned</p>
    </div>
   
  </div>
  <br><br>
  <div class="row slideanim slide">
      <div class="col-sm-6">
      <span class="glyphicon glyphicon-cutlery logo-small"></span>
      <h4>RECIPE</h4>
      <p>Xem các hướng dẫn , công thức nấu ăn</p>
    </div>
    <div class="col-sm-6">
      <span class="glyphicon glyphicon-leaf logo-small"></span>
      <h4>SUGGESTION MENU</h4>
      <p>Xem các đề nghị menu theo goal</p>
    </div>
  

  </div>
</div>

<!-- Container (Portfolio Section) -->
<div id="portfolio" class="container-fluid text-center bg-grey">
  <h2>Suggestion Menu</h2><br>
  <h4></h4>
  <div class="row text-center slideanim slide">
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="paris.jpg" alt="Paris" width="400" height="300">
        <p><strong>Paris</strong></p>
        <p>Yes, we built Paris</p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="newyork.jpg" alt="New York" width="400" height="300">
        <p><strong>New York</strong></p>
        <p>We built New York</p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="sanfran.jpg" alt="San Francisco" width="400" height="300">
        <p><strong>San Francisco</strong></p>
        <p>Yes, San Fran is ours</p>
      </div>
    </div>
  </div><br>
  



  <h2>What our customers say</h2>
  <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class=""></li>
      <li data-target="#myCarousel" data-slide-to="1" class=""></li>
      <li data-target="#myCarousel" data-slide-to="2" class="active"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
       <div class="item">
     
        

    
     
   <div class="col-sm-4"> 

<img src="http://localhost/calo-calc/calo-calc/images/4.png" alt="New York" width="350" height="350">
    
         <a href="" target="_blank" style="text-decoration: none !important;"><p style="text-align: center;  word-break: break-word;word-spacing: normal;word-wrap: break-word; color: #009580;font-size: 22px; padding-top: 12px; font-family: inherit;
    font-weight: 500;
    line-height: 1.1;">Vegetarian </p></a>
  
    </div>
    
         
        
 
   <div class="col-sm-4"> 

<img src="http://localhost/calo-calc/calo-calc/images/1.png" alt="New York" width="350" height="350">
    
         <a href="" target="_blank" style="text-decoration: none !important;"><p style="text-align: center;  word-break: break-word;word-spacing: normal;word-wrap: break-word; color: #009580;font-size: 22px; padding-top: 12px; font-family: inherit;
    font-weight: 500;
    line-height: 1.1;">Healthy Eating </p></a>
  
    </div>
    
      

   <div class="col-sm-4"> 

<img src="http://localhost/calo-calc/calo-calc/images/5.png" alt="New York" width="350" height="350">
    
         <a href="" target="_blank" style="text-decoration: none !important;"><p style="text-align: center;  word-break: break-word;word-spacing: normal;word-wrap: break-word; color: #009580;font-size: 22px; padding-top: 12px; font-family: inherit;
    font-weight: 500;
    line-height: 1.1;">Eat salty </p></a>
  
    </div>
    

        

      </div>

      <div class="item">
       
    
          
        <img class="col-sm-4" src="http://localhost/calo-calc/calo-calc/images/Capture1.PNG" alt="New York" width="100" height="100">
        <div class="carousel-caption">
          <h3>New York</h3>
          <p>The atmosphere in New York is lorem ipsum.</p>
        </div>  
     
 
   
    
      <img class="col-sm-4" src="/image/Capture1.PNG" alt="New York" width="100" height="100">
        <div class="carousel-caption">
          <h3>New York</h3>
          <p>The atmosphere in New York is lorem ipsum.</p>
        </div>  


     
      <img class="col-sm-4" src="image/Capture1.PNG" alt="New York" width="100" height="100">
        <div class="carousel-caption">
          <h3>New York</h3>
          <p>The atmosphere in New York is lorem ipsum.</p>
        </div>  
     
    
      </div>
    
      <div class="item active">
            <img class="col-sm-4" src="image/Capture2.PNG" alt="New York" width="100" height="100">
        <div class="carousel-caption">
          <h3>New York</h3>
          <p>The atmosphere in New York is lorem ipsum.</p>
        </div>  
     
 
   
    
      <img class="col-sm-4" src="image/Capture2.PNG" alt="New York" width="100" height="100">
        <div class="carousel-caption">
          <h3>New York</h3>
          <p>The atmosphere in New York is lorem ipsum.</p>
        </div>  


     
      <img class="col-sm-4" src="image/Capture2.PNG" alt="New York" width="100" height="100">
        <div class="carousel-caption">
          <h3>New York</h3>
          <p>The atmosphere in New York is lorem ipsum.</p>
        </div>  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>


<br>
<br>


<hr>
<br>

      <div class="footerPanel" align="right">
        

<div class="middlePanel">
    <div class="social">
        <a target="blank" href="">
            <img src="https://a.ftscrt.com/static/images/social/but_social_facebook.svg" width="40">
        </a>
        <a target="blank" href="">
            <img src="https://a.ftscrt.com/static/images/social/but_social_instagram.svg" width="40">
        </a>
        <a target="blank" href="">
            <img src="https://a.ftscrt.com/static/images/social/but_social_twitter.svg" width="40">
        </a>
    </div>
    <div class="top">
        <a href="/">food list</a>
        <a href="">brand list</a>
        <a target="blank" href="">platform</a>
        <a target="blank" href="">professional</a>
        <a href="/">contact</a>
    </div>
    <div class="bottom">
        <a href="/">find people</a>
        <span class="sep">|</span>
        <a href="/">faq</a>
        <span class="sep">|</span>
        <a target="blank" href="">blog</a>
        <span class="sep">|</span>
        <a href="/">terms</a>
        <span class="sep">|</span>
        <a href="/">privacy</a>
        <span class="sep">|</span>
        <a href="">report abuse</a>
    </div>
</div>
<div class="bottomPanel">
    <div class="centerContent">
        <div class="centerInnerContent">
            <span> 2021 CountCalo. All rights reserved.</span>
            <span>VIETNAM</span>

        </div>
    </div>
</div>
      </div>
    </form>
    
  <script type="text/javascript">
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-716779-1']);
    _gaq.push(['_setCustomVar', 1, 'member-name', 'datle123', 1]);
    _gaq.push(['_trackPageview']);

    (function () {
      var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
      ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
      var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();
  </script>

  
</body></html>