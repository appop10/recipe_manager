<?php
// make a Date Object to put in the footer
$currentDate = date('d-m-Y');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Contact page for All Things Pasta">
    <title>ATP | Contact</title>

    <link rel="stylesheet" href="stylesheets/contact/contact.css">
    <link rel="stylesheet" href="stylesheets/contact/contact_mq.css">

    <script src="javascript/main.js"></script>
</head>
<body>
    <nav class="transforming"><!-- Navbar -->
        <div>
            <a href="home.html"><img src="../images/logo_white.png" alt="all things pasta logo"></a>

            <div class="hamburger" onclick="dropMenu()">
                <p id="bar1"></p>
                <p id="bar2"></p>
                <p id="bar3"></p>
            </div>
        </div>

        <ul>
            <li><a href="recipes.php">Recipes</a></li>
            <li><a>About</a></li>
            <li><a href="contact.html">Contact</a></li>
            <li><a class="signin" href="../admin_pages/loginPage.php">Sign In</a></li>
        </ul>
    </nav><!-- Navbar -->

    <header><!-- Header -->
        <h1>I Apprecite Your Feedback</h1>
        <p>I would love to hear from you about any and all things related to pasta! Recipes you want to see, improvements to ones you've already seen, or questions you have about the ones already posted, I'm excited to hear from you.</p>
    </header><!-- Header -->

    <main><!-- Form -->
        <div class="form-container"><!-- form container -->
            <form method="post" action="contact.php"><!-- form body -->
                <legend>Send Me A Message</legend>

                <div>
                    <p>
                        <label for="firstName">First Name</label>
                        <input type="text" name="firstName" id="firstName" placeholder="Jane" required>
                    </p>

                    <p>
                        <label for="lastName">Last Name</label>
                        <input type="text" name="lastName" id="lastName" placeholder="Doe" required>
                    </p>
                </div>

                <div>
                    <p>
                        <label for="emailAddress">Email</label>
                        <input type="email" name="emailAddress" id="emailAddress" placeholder="janedoe@email.com" required>
                    </p>

                    <p>
                        <label for="confirmEmail">Confirm Email</label>
                        <input type="email" name="confirmEmail" id="confirmEmail" required>
                    </p>
                </div>

                <div>
                    <p>
                        <label for="messageSubject">Subject</label>
                        <input type="text" name="messageSubject" id="messageSubject" placeholder="Recipe Suggestion" required>
                    </p>

                    <p>
                        <label for="phoneNumber">Phone Number</label>
                        <input type="tel" name="phoneNumber" id="phoneNumber">
                    </p>
                </div>

                <div>
                    <p>
                        <label for="messageText">Message</label>
                        <textarea name="messageText" id="messageText" rows="5"></textarea>
                    </p>
                </div>

                <div>
                    <input type="submit" name="submit" id="submit" value="Send">
                    <input type="reset" name="reset" id="reset" value="Clear">
                </div>
            </form><!-- form body -->
        </div><!-- form container -->
    </main><!-- Form -->

    <footer><!-- Footer -->
        <section>
            <a href="#"><img src="../images/logo_white.png" alt="all things pasta logo"></a>

            <div><!-- Browse -->
                <h3>Browse</h3>
                <p><a>All Recipes</a></p>
                <p><a>Recipes by Category</a></p>
                <p><a>Recipes by Ingredient</a></p>
            </div><!-- Browse -->

            <div><!-- Shop -->
                <h3>Shop</h3>
                <p><a>My Cookbook</a></p>
                <p><a>Cookware</a></p>
                <p><a>Merchandise</a></p>
            </div><!-- Shop -->

            <div><!-- Connect -->
                <h3>Connect</h3>
                <p><a>About</a></p>
                <p><a>Contact</a></p>
            </div><!-- Connect -->
        </section>

        <div>
            <p>Photo and Recipe Credits</p>
            <a href="credits/credits.html" target="_blank" class="signin">View</a>
            <span>&copy; <?php echo $currentDate; ?></span>
        </div>
    </footer><!-- Footer -->
</body>
</html>