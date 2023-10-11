<!--Created in collaboration with:-->
<!--Mila-jo Davies (g21d6937), Wynne Edwards (g21e2079), Manusizwe Jourdan (g21j5408)-->
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>HamRat University - where leaders yearn</title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto Condensed">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <script src="js/script.js" defer></script>
        <script src="js/curriculum.js" defer></script>
    </head>
    
    <body>
        <header id="header">
            <h3 id="header-container">
                Logged into LOSS as YoMamma
            </h3>
        </header>
        <nav>
            <div class="nav-elements-container">
                <a >
                    <button id="back-btn" class="material-icons">arrow_back </button>

                </a>
                <a href="./index.php">
                    <span class="material-icons">dashboard</span>
                    <p class="nav-btn-text">My Dashboard</p>
                </a>
                <a href="./about.php">
                    <span class="material-icons">psychology_alt</span>
                    <p class="nav-btn-text">About Us</p>
                </a>
                <a class="current-nav" href="./curriculum.php"> 
                    <span class="material-icons">library_books</span>
                    <p class="nav-btn-text">Curriculum</p>
                </a>
                <a href="./bookings.php">
                    <span class="material-icons">list_alt</span>
                    <p class="nav-btn-text">My Bookings</p>
                </a>
                <a onclick="myFunction()" class="dropdown dropbtn">
                    <span class="material-icons">tune</span>
                    <p class="nav-btn-text">My Utilities</p>
                    <div id="myDropdown" class="dropdown-content">
                        <a href="./reviews.php">Reviews</a>
                        <a href="https://x.com/catshouldnt/status/1706917149984657713?s=20">Cat</a>
                        <a href="https://www.youtube.com/watch?v=L1ung0wil9Y&ab_channel=MITOpenCourseWare">Secret</a>
                    </div>
                </a>
            </div>
        </nav>
    
        <main class="center">
            <p>Get your degree <a href="https://www.youtube.com/watch?v=zuegQmMdy8M">here</a></p>
            <br>
            <div id="slideshow-gallery-container">
                <button onclick="plusSlides(-1)" id="left-btn"><</button>
                <div id="slideshow-gallery" >
                    <img src="images/grad.jpg" alt="">
                    <img src="images/graduation.webp" alt="">
                    <img src="images/graduate.jpg" alt="">
                    <img src="images/mankyrat.png" alt="">
                </div>
                <button onclick="plusSlides(1)" id="right-btn">></button>
            </div>
            <br><br>
            <h3>Ode to Curriculum</h3>
            <hr>    
            <br>
            <p>Change the number of columns in the poem below</p>
            <input type="text" name="col-num" id="col-num" placeholder="Change column number" >
            <button onclick="changeColNum()">Change</button>
            <br><br>
            <div id="marks">
                In the hallowed halls of knowledge's keep,
                A curriculum unfolds, in shadows deep.
                Its pages bound in wisdom's tender touch,
                A journey mapped, for minds to clutch.
                
                Upon the canvas of each eager soul,
                The lessons weave, an intricate scroll.
                From letters penned to numbers vast,
                A symphony of learning, unsurpassed.
                
                In ancient tomes and modern lore,
                The curriculum unveils, a treasure store.
                Each chapter tells a tale untold,
                Of heroes brave and stories bold.
                
                From sciences that probe the cosmic sea,
                To arts that set imaginations free,
                The curriculum, a garden wide,
                Where seeds of thought and dreams abide.
                
                In language's dance, both spoken and scribed,
                A world of voices, intertwined.
                From poets' quills to orators' might,
                The power of words takes its flight.
                
                Through numbers' realm, a landscape vast,
                Equations dance, revealing truths amassed.
                From geometry's grace to algebra's might,
                The language of math takes its flight.
                
                In history's grasp, the past unfurls,
                A tapestry of nations, flags unfurled.
                The rise and fall, the triumphs and woe,
                A legacy for all who dare to know.
                
                From laboratories' hum to nature's call,
                The sciences beckon, one and all.
                Through microscopes and telescopic sight,
                We glimpse the secrets, day and night.
                
                The arts, a mirror to the human soul,
                Expressing passions, making us whole.
                With colors vivid, melodies sweet,
                The world of art, a sacred retreat.
                
                In physical realms, we stretch and grow,
                Our bodies strong, our spirits aglow.
                Through movement, sport, and health's embrace,
                A curriculum of wellness takes its place.
                
                So let us honor this sacred creed,
                The curriculum's call, the soul's deep need.
                For in its grasp, we find our way,
                A path to guide us, come what may.
                
                In every heart, its echoes sound,
                A symphony of knowledge, unbound.
                A curriculum, a gift divine,
                To light our way, to make us shine.
            </div>
        </main>
        
        <footer>
            <div id="top-footer">
                <p class="center">HAMRAT UNIVERSITY<br>Where Leaders Yearn</p> 
                
            </div>
            <div id="bottom-footer">
                <p class="center">&copy 2023 - loss Inc. <br>
                    <a href="mailto:g21j5408@campus.ru.ac.za?cc=g21d6937@campus.ru.ac.za&bcc=g21e2079@campus.ru.ac.za&subject=Feedback for LOSS&body=Add what you want we dont care really">
                    g21j5408@campus.ru.ac.za
                </a>,
                <a href="mailto:g21j5408@campus.ru.ac.za?cc=g21d6937@campus.ru.ac.za&bcc=g21e2079@campus.ru.ac.za&subject=Feedback for LOSS&body=Add what you want we dont care really">
                    g21d6937@campus.ru.ac.za
                </a>,
                <a href="mailto:g21j5408@campus.ru.ac.za?cc=g21d6937@campus.ru.ac.za&bcc=g21e2079@campus.ru.ac.za&subject=Feedback for LOSS&body=Add what you want we dont care really">
                    g21e2079@campus.ru.ac.za
                </a></p>
            </div>
        </footer>
    </body>
</html>