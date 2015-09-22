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
                <div class="column6 floatLeft photoBorder">
                    <img id="photoCooking" src="img/cooking.jpg" alt="Learn to cook Indian food!" />
                </div>
                <div class="column6 floatRight textBox" style="margin-top: -4em;">
                    <div class="linkAnchor" id="ClassesAndEvents"></div>
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
                <div class="column6 floatRight switch mobileHide">
                    <img class="accentImage" id="photoMortar" src="img/mortar.png" alt="Mortar and Pestle: used in Indian Cooking to ground spices into powder." />
                </div>
                <div class="column6 floatLeft switch">
                    <img class="accentImage" id="photoChilies" src="img/chilies.png" alt="Chilies: used in many Indian Dishes to add flavor and heat." />
                </div>
            </section>

            <section>
                <div class="column6 floatRight photoBorder">
                    <img id="photoDabba" src="img/dabbaNew.jpg" alt="Masal Dabba (Spice Box) with Curry Powder, Turmeric, Chili Powder, Fennel, Fenugreek Herb, Garam Masala Powder, and Mustard Seeds." />
                </div>

                <div class="column6 floatLeft textBox" style="margin-top: 4em;">
                    <div class="linkAnchor" id="MasalaDabba"></div>
                    <h2>Masala Dabba<span>(Spice Box)</span></h2>
                    <p>
                        The heart of the Indian kitchen is the Masala Dabba.
                        It contains the spices you'll need to start cooking Indian food at home.
                        A complete Dabba costs $30 (spices included),
                        and you can also purchase additional spices individually.
                    </p>
                    <a href="#" target="blank">
                        <button>Order a Box</button>
                    </a>
                </div>
                <div class="column6 floatLeft">
                    <img class="accentImage" id="photoCinnamon" src="img/cinnamon.png" alt="Cinnamon: a warm spice with intense flavor that is great for circulatory system health." />
                </div>
            </section>

            <section>
                <div class="column6 textBox">
                    <div class="linkAnchor" id="Recipes"></div>
                    <h2>My Favorite Recipes</h2>
                    <p>
                        I provide recipes at all of my classes and events,
                        but if you’re ready to get started now,
                        here are three simple recipes to get you going!
                    </p>
                </div>
                <ul id="recipeCards">
                    <li class="column4">
                        <img src="img/pakorasZoom.jpg" class="photoBorder" alt="Spinach Pakoras are a fried appetizer made with chickpea flour and vegetables." />
                        <div class="cardInfo">
                            <h4>Spinach Pakoras</h4>
                            <p>makes 16-20</p>
                            <a href="spinach-pakoras.php"><button class="small">View Recipe</button></a>
                        </div>
                    </li>
                    <li class="column4">
                        <img src="img/mattarPaneerZoom.jpg" alt="Mattar Paneer Masala is a traditional Indian dish made with cheese, often served with rice and chapatis." />
                        <div class="cardInfo">
                            <h4>Mattar Paneer Masala</h4>
                            <p>serves 3-4</p>
                            <a href="mattar-paneer-masala.php"><button class="small">View Recipe</button></a>
                        </div>
                    </li>
                    <li class="column4">
                        <img src="img/kulfiZoom.jpg" alt="Kulfi is an ice cream mainly made with saffron, coconut, pistachios, and green cardamom." />
                        <div class="cardInfo">
                            <h4>Kulfi Ice Cream</h4>
                            <p>serves 3-4</p>
                            <a href="kulfi-ice-cream.php"><button class="small">View Recipe</button></a>
                        </div>
                    </li>
                </ul>
            </section>

        </main>

        <?php include 'footer.php';?>
        <div id="Contact" class="linkAnchor"></div>
        <?php include 'bottomScripts.php';?>

    </body>

</html>
