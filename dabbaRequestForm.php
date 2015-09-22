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

        <?php include 'headerSubpage.php';?>

        <main class="dabba">

            <section>

                <div class="column6 textBox">
                    <h2>Request a Masala Dabba</h2>
                    <p>
                        My dabbas are made to order to ensure freshness, so availability can be limited.
                        Please contact me for more information.
                    </p>
                    <hr>

                    <form action="dabbaEmailScript.php" method="post" enctype="multipart/form-data">

                        <label>Name:</label>
                        <input name="name" required="required" placeholder="Your Name">

                        <label>Email:</label>
                        <input name="email" type="email" required="required" placeholder="Your Email">

                        <label>How many would you like?</label>
                        <input name="amount" type="number" required="required" value="1">

                        <label>Ideal day for pickup:</label>
                        <input name="date" type="date">

                        <label>Message (optional):</label>
                        <textarea name="message" cols="20" rows="5" placeholder="Message"></textarea>

                        <button id="submit" class="primary" name="submit" type="submit" value="Send Request">
                            Send Request
                        </button>

                    </form>


                </div>

            </section>

        </main>

        <?php include 'footer.php';?>
        <div id="Contact" class="linkAnchor"></div>
        <?php include 'bottomScripts.php';?>

    </body>

</html>
