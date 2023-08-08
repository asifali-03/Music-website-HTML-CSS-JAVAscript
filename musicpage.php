<?php
    session_start();
    if(isset($_SESSION['id']) && isset($_SESSION['Emailid'])) {
    
        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Songs</title>
            <link rel="stylesheet" href="musicpage.css">
        </head>
        <body>
            <div>
                <nav>
                    <ul class='left-side'>
                        <li class="brand"><img src="images/logo.png" alt="Music">Music</li>
                        <li class="username" action='login.php' method="post">Hello, <?php echo $_SESSION['FirstName']?></li>
                        <li class='logoutbtn'><button ><a class='ref'href="logout.php">Logout</a></button></li> 
                    </ul>
                </nav>
            </div>
            <div class="container">
                <div class="songs">
                    <div class="song1">
                        <img src='images/maxresdefault (2).jpg' alt="1">
                        <span class="songName">Dhoom Dhaam Dhosthaan</span>
                        <span class="songlistplay"><span class="timestamp">05:34 <i id="0" class="far songItemPlay fa-play-circle"></i> </span></span>
                    </div>
                    <div class="song1">
                        <img src='images/maxresdefault (1).jpg' alt="1">
                        <span class="songName"> Mass Raja</span>
                        <span class="songlistplay"><span class="timestamp">05:34 <i id="1" class="far songItemPlay fa-play-circle"></i> </span></span>
                        
                    </div>
                    <div class="song1">
                        <img src='images/maxresdefault.jpg' alt="1">
                        <span class="songName">All Most Padipoyinde Pilla</span>
                        <span class="songlistplay"><span class="timestamp">05:34 <i id="2" class="far songItemPlay fa-play-circle"></i> </span></span>
                    </div>
                    <div class="song1">
                        <img src='images/images (1).jpeg' alt="1">
                        <span class="songName">Thaar Maar Thakkar Maar</span>
                        <span class="songlistplay"><span class="timestamp">05:34 <i id="3" class="far songItemPlay fa-play-circle"></i> </span></span>
                    </div>
                    <div class="song1">
                        <img src='images/images.jpeg' alt="1">
                        <span class="songName">Pranam Pothunna</span>
                        <span class="songlistplay"><span class="timestamp">05:34 <i id="4" class="far songItemPlay fa-play-circle"></i> </span></span>
                    </div>
                    <div class="song1">
                        <img src='images/radhe-shyam-tv-premiere-on-april-24-001.jpg' alt="1">
                        <span class="songName">Ninnele</span>
                        <span class="songlistplay"><span class="timestamp">05:34 <i id="5" class="far songItemPlay fa-play-circle"></i> </span></span>
                    </div>
                    <div class="song1">
                        <img src='images/Veera-Simha-Reddy-1.jpg' alt="1">
                        <span class="songName">Jai Balayya Mass Anthem</span>
                        <span class="songlistplay"><span class="timestamp">05:34 <i id="6" class="far songItemPlay fa-play-circle"></i> </span></span>
                    </div>
                </div>
            </div>
            <div class="bottom">
                <input type="range" name="range" id="progressBar" min="0" value="0" max="100">
                <div class="icons">
                    <i class="fa fa-2x fa-step-backward" id="previous"></i>
                    <i class="fa fa-2x fa-play-circle-o" id="masterPlay"></i>
                    <i class="fa fa-2x fa-step-forward" id="next"></i>
                </div>
            </div>
            <script src="musicpagescript.js"></script>
            <script src="https://kit.fontawesome.com/a59bfcc625.js" crossorigin="anonymous"></script>
        </body>
        </html>
        <?php
        }
        /*else{
            header("Location:music.html")
            exit();
        }*/
    ?>
