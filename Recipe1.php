
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
       <a class="navbar-brand" href=""><img src="image/Capture2.PNG" alt="logo" style="width:135px ; height: 60px; padding-bottom: 10px; margin-top: -15px ; margin-left: -35px;"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="blog.html"><b>HOME</b></a></li>
        <li><a href="#intro"><b>FOOD</b></a></li>
      
       <li><a href="#intro"><b>FITNESS</b></a></li>
          <li><a href="#"><b>RECIPE</b></a></li>
          <li><a href="#"><b>MENU SUGGESTION</b></a></li>
           <li><a href="http://localhost/calo-calc/calo-calc/dang-nhap.php" target="_blank"><b>LOGIN</b></a>
        </li>
     
     
        <li>       
  
 </li>

      </ul>
    </div>
  </div>
</nav>

<div class="jumbotron text-center">
  <h1>Welcome Count Calo</h1> 
 <p>Web App for recommendation of calories and nutritional menu</p>
 
</div>

<div class="centerContent">
          <div class="centerInnerContent">
            
<div class="breadCrumb">

          <div class="breadCrumb_home"><a href="/Default.aspx" onmouseover="document.bcfshome.src='https://a.ftscrt.com/static/images/def20/nav_breadcrumb_home_alt.png'" onmouseout="document.bcfshome.src='https://a.ftscrt.com/static/images/def20/nav_breadcrumb_home.png'"><img name="bcfshome" src="https://a.ftscrt.com/static/images/def20/nav_breadcrumb_home.png"></a></div>
          <div class="breadCrumb_sep"><img src="https://a.ftscrt.com/static/images/def20/nav_breadcrumb_seperator.png"></div>
          
              <div class="breadcrumb_link"><a title="Recipes" href="/Default.aspx?pa=recsh">Recipes</a></div>
            <div class="breadCrumb_sep"><img src="https://a.ftscrt.com/static/images/def20/nav_breadcrumb_seperator.png"></div>
              <div class="breadcrumb_noLink">Meal Types</div>
            <div class="breadCrumb_sep"><img src="https://a.ftscrt.com/static/images/def20/nav_breadcrumb_seperator.png"></div>
              <div class="breadcrumb_noLink">Appetizer</div>
            
</div>

            
            <div id="content" class="mem">
              

<table class="generic">
  <tbody><tr valign="top">
    <td class="leftCell">
      <div class="leftCellContent">
        <div class="NBBox NBMainBox">
          <div style="" class="topoutbox">
            <table class="generic">
              <tbody><tr valign="middle">
                <td width="*" class="center">
                  <div class="bottom">
                    <h1>Appetizer Recipes</h1>
                  </div>
                </td>
              </tr>
            </tbody></table>
          </div>
        </div>
          
<div class="NBBox NBMainBox NBRecBox">
  <div class="innerBox">
    <table class="generic" style="table-layout:fixed;">
      <colgroup>
        <col width="140">
        <col width="*">
        <col width="140">
      </colgroup>
      <tbody><tr valign="top">
        <td align="left">
        
          <div class="bigFeaturedImage">
            <a href="/recipes/little-liter-deviled-eggs/Default.aspx">
              <img border="0" src="https://m.ftscrt.com/static/recipe/3ce82b2f-4ab7-4429-9cec-12d61523c78e.jpg" width="150">
            </a>
          </div>
        
        </td>
        <td class="center">
          <div class="topPart">
            <div>
              <h3 class="bigFeatured">Featured Recipe</h3>

              <h2 class="bigFeatured"><a href="/recipes/little-liter-deviled-eggs/Default.aspx">Little Liter Deviled Eggs</a></h2>
            </div>
          </div>
          <div class="bigFeaturedDes">
            These deviled eggs make a nice treat that's high in protein. 
            <div class="allRatings">
              <img alt="Average FatSecret member ranking" src="https://a.ftscrt.com/static/images/stars/big-four-star.gif">
              <p>
                average rating</p>
            </div>
            
          </div>
        </td>
       
      </tr>
    </tbody></table>
  </div>
</div>

<table class="generic">
    
      <tbody><tr valign="top">

        <td width="50%" align="left">
          <table class="generic">
            <tbody><tr valign="top">
              <td width="87" align="left">  
                <div class="smFeaturedImage">

                
                  <a href="/recipes/hummus-with-spinach/Default.aspx"><img border="0" src="https://m.ftscrt.com/static/recipe/276f0068-5678-48a7-9fb2-e55b9a6a11ab_sq.jpg"></a>
                
                </div>
              </td>
              <td width="*" align="left">

                
              
                  <img alt="Average FatSecret member ranking" src="https://a.ftscrt.com/static/images/stars/big-five-star.gif" class="smRating">
                    
                
              
                <h2 class="featuredItems"><a href="/recipes/hummus-with-spinach/Default.aspx">Hummus with Spinach</a></h2>
                <div>Fresh spinach combined with chick peas make this tasty dip.</div>

              </td>
            </tr>
          </tbody></table>  
        </td>
        <td width="50%" align="left">
          <table class="generic">
            <tbody><tr valign="top">
              <td width="87" align="left">                  
                <div class="smFeaturedImage">
                
                  <a href="/recipes/rice-rolls/Default.aspx"><img border="0" src="https://m.ftscrt.com/static/recipe/9282f7ef-617f-40e8-bbcc-167cb8acd0ca_sq.jpg"></a>
                
                </div>
              </td>
              <td width="*" align="left">
                
              
                  <img alt="Average FatSecret member ranking" src="https://a.ftscrt.com/static/images/stars/big-four-star.gif" class="smRating">
                    
                
                <h2 class="featuredItems"><a href="/recipes/rice-rolls/Default.aspx">Rice Rolls</a></h2>
                <div>Cold vegetarian spring rolls, wrapped in rice paper rather than battered and deep fried. </div>
              </td>
            </tr>
          </tbody></table>  
        </td> 
      </tr>
      <tr><td colspan="2"><hr></td></tr>
      <tr valign="top">

        <td width="50%" align="left">
          <table class="generic">
            <tbody><tr valign="top">
              <td width="87" align="left">  
                <div class="smFeaturedImage">

                
                  <a href="/recipes/asparagus-mascarpone-tart/Default.aspx"><img border="0" src="https://m.ftscrt.com/static/recipe/d5b44252-e132-4bcd-b72f-7c0882c85327_sq.jpg"></a>
                
                </div>
              </td>
              <td width="*" align="left">

                
              
                  <img alt="Average FatSecret member ranking" src="https://a.ftscrt.com/static/images/stars/big-three-star.gif" class="smRating">
                    
                
              
                <h2 class="featuredItems"><a href="/recipes/asparagus-mascarpone-tart/Default.aspx">Asparagus Mascarpone Tart</a></h2>
                <div>A quick and easy appetizer or side dish.</div>

              </td>
            </tr>
          </tbody></table>  
        </td>
        <td width="50%" align="left">
          <table class="generic">
            <tbody><tr valign="top">
              <td width="87" align="left">                  
                <div class="smFeaturedImage">
                
                  <a href="/recipes/cayenne-deviled-eggs/Default.aspx"><img border="0" src="https://m.ftscrt.com/static/recipe/438ee8f4-50d0-437d-ae34-6556ddbb2b36_sq.jpg"></a>
                
                </div>
              </td>
              <td width="*" align="left">
                
              
                  <img alt="Average FatSecret member ranking" src="https://a.ftscrt.com/static/images/stars/big-four-star.gif" class="smRating">
                    
                
                <h2 class="featuredItems"><a href="/recipes/cayenne-deviled-eggs/Default.aspx">Cayenne Deviled Eggs</a></h2>
                <div>Traditional deviled eggs with a kick.</div>
              </td>
            </tr>
          </tbody></table>  
        </td> 
      </tr>
      
    

</tbody></table>
  
          <br>
          
<div style="width:100%">

  <table class="listtable" width="100%" cellpadding="0" cellspacing="0">
    
    <tbody>

  
    
  
    
    <tr class="listrow">
      <td align="left" valign="top" width="50" class="borderBottom leftimages">
        
            
              <a href="/recipes/conch-fritters/Default.aspx"><img border="0" src="https://m.ftscrt.com/static/recipe/9a3b184c-056e-43ef-bef6-6c20d477b91f_sq.jpg" width="60"></a>
            
        
      </td>
      <td class="borderBottom recipeSummary">
        <b><a href="/recipes/conch-fritters/Default.aspx" class="prominent">
            
            Conch Fritters </a></b>
        <br>
       
        <div class="topicsummary" style="color: black ; font-size: 14px">
          Low carb crispy fritters with conch and mozzarella.
        </div>
        <div class="smallText right" style="color: black ; font-size: 12px">Per serve - Energy: 91kcal | Carb: 2.11g | Prot: 6.88g | Fat: 6.41g</div>
        
        <div style="float: left;" class="smallText">
          <img alt="Average FatSecret member ranking" src="https://a.ftscrt.com/static/images/stars/five-star.gif">
          &nbsp;&nbsp;
        </div>
        
      </td>
    </tr>
    
    
 
    
    <tr class="listrow">
      <td align="left" valign="top" width="50" class="borderBottom leftimages">
        
            
              <a href="/recipes/green-chicken-enchilada-chalupas/Default.aspx"><img border="0" src="https://m.ftscrt.com/static/recipe/cd81e9c7-8f12-4c68-a90b-341f38e9089f_sq.jpg" width="60"></a>
            
        
      </td>
      <td class="borderBottom recipeSummary">
        <b><a href="/recipes/green-chicken-enchilada-chalupas/Default.aspx" class="prominent">
            
            Green Chicken Enchilada Chalupas </a></b>
        <br>
  
        <div class="topicsummary" style="color: black ; font-size: 14px">
          Individual chicken enchiladas in a corn tortilla bowl.
        </div>
        <div class="smallText right" style="color: black ; font-size: 12px">Per serve - Energy: 147kcal | Carb: 11.06g | Prot: 11.62g | Fat: 6.02g</div>
        
        <div style="float: left;" class="smallText">
          <img alt="Average FatSecret member ranking" src="https://a.ftscrt.com/static/images/stars/five-star.gif">
          &nbsp;&nbsp;
        </div>
        
      </td>
    </tr>
    
    <tr class="listrow">
      <td align="left" valign="top" width="50" class="borderBottom leftimages">
        
            
              <a href="/recipes/guacamole-iii/Default.aspx"><img border="0" src="https://m.ftscrt.com/static/recipe/a3f376ec-1d7c-4d70-9f22-3279730d860c_sq.jpg" width="60"></a>
            
        
      </td>
      <td class="borderBottom recipeSummary">
        <b><a href="/recipes/guacamole-iii/Default.aspx" class="prominent">
            
            Guacamole III </a></b>
        <br>
       
        <div class="topicsummary" style="color: black ; font-size: 14px">
          This recipe uses all fresh ingredients.
        </div>
        <div class="smallText right" style="color: black ; font-size: 12px">Per serve - Energy: 61kcal | Carb: 4.66g | Prot: 0.90g | Fat: 4.96g</div>
        
        <div style="float: left;" class="smallText">
          <img alt="Average FatSecret member ranking" src="https://a.ftscrt.com/static/images/stars/five-star.gif">
          &nbsp;&nbsp;
        </div>
        
      </td>
    </tr>
    
    <tr class="listrow">
      <td align="left" valign="top" width="50" class="borderBottom leftimages">
        
            
              <a href="/recipes/jalapeno-poppers-ii/Default.aspx"><img border="0" src="https://m.ftscrt.com/static/recipe/95cf6eac-51d0-499d-ad2c-bc621e97aa13_sq.jpg" width="60"></a>
            
        
      </td>
      <td class="borderBottom recipeSummary">
        <b><a href="/recipes/jalapeno-poppers-ii/Default.aspx" class="prominent">
            
            Jalapeno Poppers II </a></b>
        <br>
     
        <div class="topicsummary" style="color: black ; font-size: 14px">
          Stuffing something with cheese instantly makes it better. If you wrap it in bacon, UNSTOPPABLE.
        </div>
        <div class="smallText right" style="color: black ; font-size: 12px">Per serve - Energy: 66kcal | Carb: 0.81g | Prot: 3.18g | Fat: 5.66g</div>
        
        <div style="float: left;" class="smallText">
          <img alt="Average FatSecret member ranking" src="https://a.ftscrt.com/static/images/stars/five-star.gif">
          &nbsp;&nbsp;
        </div>
        
      </td>
    </tr>
    
    <tr class="listrow">
      <td align="left" valign="top" width="50" class="borderBottom leftimages">
        
            
              <a href="/recipes/keto-potato-less-latkes/Default.aspx"><img border="0" src="https://m.ftscrt.com/static/recipe/ba7a3ea3-e4ae-40d7-bcdd-69598ef8b46d_sq.jpg" width="60"></a>
            
        
      </td>
      <td class="borderBottom recipeSummary">
        <b><a href="/recipes/keto-potato-less-latkes/Default.aspx" class="prominent">
            
            Keto Potato-less Latkes </a></b>
        <br>
      
        <div class="topicsummary" style="color: black ; font-size: 14px">
          A keto potato-less latke based off a fathead keto pizza recipe.
        </div>
        <div class="smallText right" style="color: black ; font-size: 12px">Per serve - Energy: 337kcal | Carb: 4.37g | Prot: 16.62g | Fat: 28.65g</div>
        
        <div style="float: left;" class="smallText">
          <img alt="Average FatSecret member ranking" src="https://a.ftscrt.com/static/images/stars/five-star.gif">
          &nbsp;&nbsp;
        </div>
        
      </td>
    </tr>
    
    <tr class="listrow">
      <td align="left" valign="top" width="50" class="borderBottom leftimages">
        
            
              <a href="/recipes/marinated-jalapenos/Default.aspx"><img border="0" src="https://m.ftscrt.com/static/recipe/45f81445-ab14-4edc-a271-ea36c5b19491_sq.jpg" width="60"></a>
            
        
      </td>
      <td class="borderBottom recipeSummary">
        <b><a href="/recipes/marinated-jalapenos/Default.aspx" class="prominent">
            
            Marinated Jalapenos </a></b>
        <br>
        
        <div class="topicsummary" style="color: black ; font-size: 14px">
          Roasted jalapenos marinated in a soy and rice wine vinegar mixture.
        </div>
        <div class="smallText right" style="color: black ; font-size: 12px">Per serve - Energy: 27kcal | Carb: 4.32g | Prot: 1.38g | Fat: 0.17g</div>
        
        <div style="float: left;" class="smallText">
          <img alt="Average FatSecret member ranking" src="https://a.ftscrt.com/static/images/stars/five-star.gif">
          &nbsp;&nbsp;
        </div>
        
      </td>
    </tr>
    
  
    
    
  </tbody></table>

</div>

        
      </div>
    </td>
    <td class="rightCell">
      <div class="rightCellContent">
        <div class="noPrint">
          
<table class="greybox">
  
  <tbody><tr>

  
</tbody></table>

          <br>
          
<div class="dottedBox main solid icons" style="padding:5px">
  
  <div class="hr">&nbsp;</div>
  <div class="selectable" onclick="onFSBoxItemClick(this)">
    <span class="recipes_bm">&nbsp;</span><a href="/recipes/Default.aspx" onclick="return false">Recipes</a>
  </div>
  
  <div class="hr">&nbsp;</div>
  <div class="topHeader">Meal Types</div>
  
  <div class="selected">
    <div style="padding-left:0px"><span class="recipes_b">&nbsp;</span><a href="/recipes/collections/meal/appetizer/Default.aspx" onclick="return false">Appetizer</a></div>
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
        <div style="padding-left:0px"><span class="recipes_bm">&nbsp;</span><a href="/recipes/collections/nutrition/dairy-free/Default.aspx" onclick="return false">Dairy Free</a></div>
    </div>
    
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
        <div style="padding-left:0px"><span class="recipes_bm">&nbsp;</span><a href="/recipes/collections/nutrition/low-cholesterol/Default.aspx" onclick="return false">Low Cholesterol</a></div>
    </div>
    
    <div class="selectable" onclick="onFSBoxItemClick(this)">
        <div style="padding-left:0px"><span class="recipes_bm">&nbsp;</span><a href="/recipes/collections/nutrition/low-fat/Default.aspx" onclick="return false">Low Fat</a></div>
    </div>
    
    <div class="selectable" onclick="onFSBoxItemClick(this)">
        <div style="padding-left:0px"><span class="recipes_bm">&nbsp;</span><a href="/recipes/collections/nutrition/low-gi/Default.aspx" onclick="return false">Low GI</a></div>
    </div>
    
    <div class="selectable" onclick="onFSBoxItemClick(this)">
        <div style="padding-left:0px"><span class="recipes_bm">&nbsp;</span><a href="/recipes/collections/nutrition/low-sodium/Default.aspx" onclick="return false">Low Sodium</a></div>
    </div>
    
    <div class="selectable" onclick="onFSBoxItemClick(this)">
        <div style="padding-left:0px"><span class="recipes_bm">&nbsp;</span><a href="/recipes/collections/nutrition/low-sugar/Default.aspx" onclick="return false">Low Sugar</a></div>
    </div>
    
    <div class="selectable" onclick="onFSBoxItemClick(this)">
        <div style="padding-left:0px"><span class="recipes_bm">&nbsp;</span><a href="/recipes/collections/nutrition/sugar-free/Default.aspx" onclick="return false">Sugar Free</a></div>
    </div>
    
    <div class="selectable" onclick="onFSBoxItemClick(this)">
        <div style="padding-left:0px"><span class="recipes_bm">&nbsp;</span><a href="/recipes/collections/nutrition/weight-watchers-points/Default.aspx" onclick="return false">Weight Watchers Points</a></div>
    </div>
    
</div>

          <br>
          



          <br>
        
        </div>
      </div>
    </td>
  </tr>
</tbody></table>

            </div>
          </div>
        </div>

<?php
require 'recipes/recipe.php';

$users = getUsers();

?>



<div class="container" style="">
 
<p>Other Recipe</p>
    <table class="listtable" width="100%" cellpadding="0" cellspacing="0" float="left" text-align="left">
       
        <tbody>
        <?php foreach ($users as $user): ?>
            <tr  class="listrow">
                <td align="left" valign="top" width="80" class="borderBottom leftimages" >
                    <?php if (isset($user['extension'])): ?>
                        <img style="width: 70px; height: 70px;" src="<?php echo "recipes/images/${user['id']}.${user['extension']}" ?>" alt="">
                    <?php endif; ?>
                </td>
    
                   
                <td class="borderBottom recipeSummary" >
             
                      <b><a href="/recipes/caramelized-brussels-sprouts/Default.aspx" class="prominent">    <?php echo $user['name'] ?>
            
            </a></b>      
<a href="viewrecipe1.php?id=<?php echo $user['id'] ?>" class="btn btn-sm btn-outline-info">View</a>
  </td>
            

            </tr>
        <?php endforeach;; ?>
        </tbody>
    </table>

</div>














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













  

  <!-- Modal -->
  

