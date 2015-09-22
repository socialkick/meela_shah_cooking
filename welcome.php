<!doctype html>
<html class="no-js" lang="">
    <head>

        <title></title>
        <meta name="description" content="">
        <?php include 'headItems.php';?>

    </head>



    <body>

        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <?php include 'header.php';?>
        <img id="heroImage" src="img/bgTopSpices.jpg" alt="Indian Spices used in cooking traditional cuisine."/>

        <main>
            <section>
                <div id="photoCooking"  class="photoBorder floatLeft">
                    <img src="img/cooking.jpg" alt="Learn to cook Indian food!" />
                </div>
                <div class="textBox floatRight"  style="margin-top: -4em;">
                    <div id="Classes&Events" class="linkAnchor"></div>
                    <h2>Let's Cook Together</h2>
                    <p>
                        I teach classes at various locations around the San Francisco Bay Area.
                        Come learn how to use exotic spices and their incredible health benefits.
                        I also hold demonstrations and events at local businesses
                        where you can come enjoy samples of my cooking.
                    </p>
                    <a href="https://www.facebook.com/pages/Meela-Shah-Indian-Cooking/459450137418684?sk=events&ref=page_internal" target="blank">
                        <button>See Calendar<img src="img/facebookIcon.png" alt="Facebook Icon, link to Meela Shah Indian Cooking" /></button>
                    </a>
                </div>
                <img id="photoMortar" src="img/mortar.png" alt="Mortar and Pestle: used in Indian Cooking to ground spices into powder." />
                <img id="photoChilies" src="img/chilies.png" alt="Chilies: used in many Indian Dishes to add flavor and heat." />
            </section>

            <section>
                    <div id="photoDabba" class="photoBorder floatRight">
                        <img src="img/dabbaNew.jpg" alt="Masal Dabba (Spice Box) with Curry Powder, Turmeric, Chili Powder, Fennel, Fenugreek Herb, Garam Masala Powder, and Mustard Seeds." />
                    </div>
                    <div class="textBox floatLeft">
                    <div id="MasalaDabba" class="linkAnchor"></div>
                    <h2>Masala Dabba<span>(Spice Box)</span></h2>
                    <p>
                        The heart of the Indian kitchen is the Masala Dabba.
                        It contains the spices you'll need to start cooking Indian food at home.
                        A complete Dabba costs $30 (spices included),
                        and you can also purchase additional spices individually.
                    </p>
                    <a href="#">
                        <button>Order a Dabba</button>
                    </a>
                </div>
                <img id="photoCinnamon" src="img/cinnamon.png" alt="Cinnamon: a warm spice with intense flavor that is great for circulatory system health." />
            </section>

            <section>
                <div class="textBox">
                <div id="Recipes" class="linkAnchor"></div>
                    <h2>My Favorite Recipes</h2>
                    <p>
                        I provide recipes at all of my classes and events,
                        but if you’re ready to get started now,
                        here are three simple recipes to get you going!
                    </p>
                </div>
                <ul id="recipeCards">
                    <li>
                        <div class="photoBorder">
                            <img src="img/pakorasZoom.jpg" class="photoBorder" alt="Spinach Pakoras are a fried appetizer made with chickpea flour and vegetables." />
                        </div>
                        <div class="cardInfo">
                            <h4>Spinach Pakoras</h4>
                            <p>makes 16-20</p>
                            <a href="spinach-pakoras.php"><button class="small">View Recipe</button></a>
                        </div>
                    </li>
                    <li>
                        <div class="photoBorder">
                            <img src="img/mattarPaneerZoom.jpg" alt="Mattar Paneer Masala is a traditional Indian dish made with cheese, often served with rice and chapatis." />
                        </div>
                        <div class="cardInfo">
                            <h4>Mattar Paneer Masala</h4>
                            <p>serves 3-4</p>
                            <a href="mattar-paneer-masala.php"><button class="small">View Recipe</button></a>
                        </div>
                    </li>
                    <li>
                        <div class="photoBorder">
                            <img src="img/kulfiZoom.jpg" alt="Kulfi is an ice cream mainly made with saffron, coconut, pistachios, and green cardamom." />
                        </div>
                        <div class="cardInfo">
                            <h4>Kulfi Ice Cream</h4>
                            <p>serves 3-4</p>
                            <a href="kulfi-ice-cream.php"><button class="small">View Recipe</button></a>
                        </div>
                    </li>
                </ul>
            </section>

        </main>

<!--        <div id="Contact" class="linkAnchor"></div> -->
        <?php include 'footer.php';?>






        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.3.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='https://www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>
    </body>
</html>
