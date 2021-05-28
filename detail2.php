
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
            


            
            <div id="content" class="mem">
              
<style>
  .smallText .memberImage{vertical-align:middle}
  #content .NBRecBox h2{ color:#999;margin-bottom:2px;text-transform:none;font-size:15px }
  #content .NBBox h3{ text-transform:none;font-size:15px;margin-top:8px; }
  ul.plain{ margin:0px;padding:0px;list-style:none;list-image:none; }
  ol.noind{ margin-top:0px;margin-left:11px;padding-left:10px;}
  div.analysis .list tr.header td{ padding:2px;background-color:#BACFE6;color:#FFF!important;font-weight:bold;text-transform:capitalize;font-size:11px;}
  div.servings{ padding: 10px;margin-top:30px;font-size:14px;line-height:15px;width:140px;}
  div.servings b{ color: #666; }
  div.imgFrame{ border:1px solid #EBF9FC;background-color:#EBF9FC }
  div.imgAdd{margin:5px 0px 3px 5px;}
</style>
<table class="generic">
<tbody><tr>
  <td class="leftCell">
    <div class="leftCellContent">
     <div class="NBBox NBRecBox">
        <div class="innerBox">
          <table class="generic">
            <tbody><tr valign="top">
              <td width="140" class="center" style="padding:2px 0px 0px 12px">
                
                <div class="imgFrame" align="center">
                
                  <div style="margin:5px">
                    <a href="/Default.aspx?pa=recimd&amp;recipeid=28584">
                      <img border="0" src="https://m.ftscrt.com/static/recipe/2afd1619-01c7-4abc-9a52-2aeffcef6c62.jpg" width="130" class="photo">
                    </a>
                  </div>
                
                </div>
                
                 
                
                <div class="bottom">
              
                  
                  <div id="servings" class="leftBox">
                    <div class="label">Yields:</div><div class="yield">4 servings</div>
                  </div>
                  
                  
                    <div id="cooktime" class="leftBox">
                      
                        <div class="label">Prep Time:</div><div class="prepTime">10 mins<span class="value-title" title="PT10M"></span></div>
                      
                        <div class="label">Cook Time:</div><div class="cookTime">15 mins<span class="value-title" title="PT15M"></span></div>
                      
                    </div>
                                    
                    <div id="mealtypes" class="leftBox">
                      <div class="label">Meal Type:</div>
                      
                        <div class="tag">Side Dishes</div>
                      
                    </div>
                  
                  
                  <div id="rating" class="leftBox">
                    <div class="label">Rating:</div>
                    
                      <img alt="Average FatSecret member ranking" src="https://a.ftscrt.com/static/images/stars/big-four-star.gif" style="margin-top:5px;margin-bottom:5px">
                    
                  </div>                  
                </div>      
              </td>
              <td width="*" class="center" style="width:100%">
                <div class="top">
                  <div style="padding-bottom:8px">
                 
                  <h1 class="fn" style="margin-top:6px">Caramelized Brussels Sprouts</h1>
                  </div>
                </div>
                <div style="margin-top:5px;margin-bottom:10px">
                  <span class="summary">Brussel sprout haters will be sure to change their mind after enjoying this fantastic dish.</span>
                  <h3 id="ingredients" class="borderBottom" style="margin-bottom:10px;padding-bottom:0;">Ingredients</h3> 
                  <ul class="plain ingredients">
                  
                      <li class="ingredient"><a title="Garlic Powder " href="/calories-nutrition/usda/garlic-powder?entryname=garlic&amp;portionid=29595&amp;portionamount=0.500">1/2 tsp garlic</a></li>
                    
                      <li class="ingredient"><a title="Black Pepper " href="/calories-nutrition/usda/black-pepper?entryname=pepper&amp;portionid=29616&amp;portionamount=2.000">2 dashes pepper</a></li>
                    
                      <li class="ingredient"><a title="Salt " href="/calories-nutrition/usda/salt?entryname=salt&amp;portionid=29654&amp;portionamount=2.000">2 dashes salt</a></li>
                    
                      <li class="ingredient"><a title="Olive Oil " href="/calories-nutrition/usda/olive-oil?entryname=extra+virgin+olive+oil&amp;portionid=30460&amp;portionamount=3.000">3 tbsps extra virgin olive oil</a></li>
                    
                      <li class="ingredient"><a title="Brussels Sprouts " href="/calories-nutrition/usda/brussels-sprouts?entryname=brussel+sprouts&amp;portionid=33989&amp;portionamount=3.000">3 cups brussel sprouts</a></li>
                    
                      <li class="ingredient"><a title="Onions " href="/calories-nutrition/usda/onions?entryname=onion&amp;portionid=34294&amp;portionamount=1.000">1 <span class="measurestring" title="medium (2-1/2&quot; dia)">medium</span> onion</a></li>
                    
                  </ul>
                  
                  <h3 id="directions" class="borderBottom" style="margin-bottom:10px;padding-bottom:0;">Directions</h3>
                  <ol class="noind instructions">
                  <li class="instruction">Cut off the brown ends of the brussels sprouts and pull off any yellow outer leaves.  Cut them in half.  Slice a medium onion in to long strips.</li><li class="instruction">Coat the bottom of your skillet with olive oil and set on medium-high heat.</li><li class="instruction">Add onions and brussels sprouts and stir.  Make sure to coat as much of the vegetables as possible.  Season with salt and pepper to taste.  Garlic is great in this as well.</li><li class="instruction">Constantly stir sprouts and onions to avoid burning.</li><li class="instruction">Brussels sprouts will wilt and leaves will turn black and brown this is a good thing.</li><li class="instruction">Continue to cook and stir veggies until onions are clear and sprouts are soft.</li><li class="instruction">Serve hot.  No butter needed!</li>
                  </ol>
                  
                  
                  
                </div>
         
                

              </td>
            </tr>
          </tbody></table>
        </div>
        <div class="botBox">&nbsp;
        </div>
      </div>
      

    <br>


    </div></td>
    
    
  <td class="rightCell">
    <div class="rightCellContent">
      
<table class="greybox">
  


          <h3>Other Related Recipes</h3>
          
  <table class="generic">
    
        <tbody><tr>
          <td class="borderBottom" style="padding-top:5px;padding-bottom:5px">
            
            <div><a href="/recipes/almond-coconut-cookies/Default.aspx"><b>Almond Coconut Cookies</b></a></div>
            <div style="padding-left:4px" class="smallText">Gluten free and sugar free.</div>
            
          </td>
        </tr>
      
        <tr>
          <td class="borderBottom" style="padding-top:5px;padding-bottom:5px">
         
            <div><a href="/recipes/paleo-coconut-banana-chocolate-chip-cookies/Default.aspx"><b>Paleo Coconut Banana Chocolate Chip Cookies</b></a></div>
            <div style="padding-left:4px" class="smallText">Yummy tasty cookies for those snack times.</div>
            
          </td>
        </tr>
      
        <tr>
          <td class="borderBottom" style="padding-top:5px;padding-bottom:5px">
            
            <div><a href="/recipes/pumpkin-oatmeal-cookies/Default.aspx"><b>Pumpkin Oatmeal Cookies</b></a></div>
            <div style="padding-left:4px" class="smallText">Sensational oatmeal cookies with pumpkin and blueberries.
</div>
            
          </td>
        </tr>
      
        <tr>
          <td class="borderBottom" style="padding-top:5px;padding-bottom:5px">
          
            <div><a href="/recipes/chocolate-dipped-macaroons/Default.aspx"><b>Chocolate Dipped Macaroons</b></a></div>
            <div style="padding-left:4px" class="smallText">Light, delicious dessert or a sublime sweet treat.</div>
            
          </td>
        </tr>
      
        <tr>
          <td class="borderBottom" style="padding-top:5px;padding-bottom:5px">
           
            <div><a href="/recipes/flax-cookies/Default.aspx"><b>Flax Cookies</b></a></div>
            <div style="padding-left:4px" class="smallText">Kids will not even think about chocolate chips after biting into these tasty yet nutritious cookies.</div>
            
          </td>
        </tr>
      
        <tr>
          <td class="borderBottom" style="padding-top:5px;padding-bottom:5px">
           
            <div><a href="/recipes/low-carb-peanut-butter-cookies/Default.aspx"><b>Low Carb Peanut Butter Cookies</b></a></div>
            <div style="padding-left:4px" class="smallText">Flourless peanut butter cookies make a great treat.</div>
            
          </td>
        </tr>
      
    </tbody></table>
    
   
          
           <div style="padding:20px 0px; background-color:#EDF1E9;width:100% ;">
     <img src="/../../calo-calc/calo-calc/image/9.png">
</div>

    </td>
  </tr>
  
</tbody></table>
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
    
    
    

    <br>
 

        

          


      
      </div>
    </div>
    <br>
    
    
    </div>
  </td>
</tr>
</tbody></table>

            </div>
          </div>
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
  

