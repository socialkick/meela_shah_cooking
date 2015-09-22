<!doctype html>
<html class="no-js" lang="">
    <head>
        <title>Meela Shah Indian Cooking</title>
        <meta name="description" content="My name is Meela Shah I teach Indian cooking classes in the San Francisco Bay Area. Learn how to use exotic spices and their incredible health benefits. I also hold demonstrations and events at local businesses where you can come enjoy samples of my cooking.">
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
                <div class="linkAnchor" id="ClassesAndEvents"></div>
                <div class="column6 overlap moveRight photoBorder">
                    <img id="photoCooking" src="img/cooking.jpg" alt="Learn to cook Indian food!" />
                </div>
                <div class="column6 overlap moveLeft textBox" style="margin-top: -4em;">
                    <h2>Let's Cook Together</h2>
                    <p>
                        My name is Meela Shah and I teach Indian cooking classes in the San Francisco Bay Area,
                        sharing knowledge of exotic spices and their health benefits.
                        I also hold demonstrations at events and local businesses where you can come enjoy samples of my cooking.
                    </p>
                    <a href="https://www.facebook.com/pages/Meela-Shah-Indian-Cooking/459450137418684?sk=events&ref=page_internal" target="blank">
                        <button class="primary">See Calendar<img src="img/facebookIcon.png" alt="Facebook Icon, link to Meela Shah Indian Cooking" /></button>
                    </a>
                </div>
                <div class="column6">
                    <img class="accentImage" id="photoChilies" src="img/chilies.png" alt="Chilies: used in many Indian Dishes to add flavor and heat." />
                </div>
                <div class="column6 rightFloat mobileHide">
                    <img class="accentImage" id="photoMortar" src="img/mortar.png" alt="Mortar and Pestle: used in Indian Cooking to ground spices into powder." />
                </div>
            </section>

            <section class="rightToLeft">
                <div class="linkAnchor" id="SpiceBoxes"></div>
                <div class="column6 overlap moveLeft photoBorder">
                    <img id="photoDabba" src="img/dabba.jpg" alt="Masal Dabba (Spice Box) with Curry Powder, Turmeric, Chili Powder, Fennel, Fenugreek Herb, Garam Masala Powder, and Mustard Seeds." />
                </div>
                <div class="column6 overlap moveRight textBox" style="margin-top: -2em;">
                    <h2>Masala Dabba<span>(Spice Box)</span></h2>
                    <p>
                        The heart of the Indian kitchen is the Masala Dabba.
                        It contains the spices you'll need to start cooking Indian food at home.
                        A complete Dabba costs $30 (spices included).
                    </p>
                    <a href="javascript:delay('dabbaRequestForm')">
                        <button class="primary">Request a Dabba</button>
                    </a>
                </div>
                <div class="column6 mobileHide0000001v">
                </div>
                <div class="column6">
                    <img class="accentImage" id="photoCinnamon" src="img/cinnamon.png" alt="Cinnamon: a warm spice with intense flavor that is great for circulatory system health." />
                </div>
            </section>

            <section>
                <div class="linkAnchor" id="Recipes"></div>
                <div class="column6 textBox" style="margin-top:-4em;">
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
                            <a href="javascript:delay('spinach-pakoras')"><button class="primary small">View Recipe</button></a>
                        </div>
                    </li>
                    <li class="column4">
                        <img src="img/mattarPaneerZoom.jpg" alt="Mattar Paneer Curry is a traditional Indian dish made with cheese, often served with rice and chapatis." />
                        <div class="cardInfo">
                            <h4>Mattar Paneer Curry</h4>
                            <p>serves 3-4</p>
                            <a href="javascript:delay('mattar-paneer-curry')"><button class="primary small">View Recipe</button></a>
                        </div>
                    </li>
                    <li class="column4">
                        <img src="img/kulfiZoom.jpg" alt="Kulfi is an ice cream mainly made with saffron, coconut, pistachios, and green cardamom." />
                        <div class="cardInfo">
                            <h4>Kulfi Ice Cream</h4>
                            <p>serves 3-4</p>
                            <a href="javascript:delay('kulfi-ice-cream')"><button class="primary small">View Recipe</button></a>
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
