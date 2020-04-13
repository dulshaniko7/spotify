<?php
include_once "includes/classes/Account.php";
//include "includes/config.php";
if (isset($_SESSION['username'])) {
	$username = $_SESSION['username'];
} else {
	header("Location: register.php ");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Spotify- Home</title>
    <link rel="stylesheet" href="includes/assets/css/style.css?v=<?php echo time() ?>">
</head>
<body>
<div class="home">

    <div class="top">
        <div class="nav">
            <ul class="nav-items">
                <li class="navs"><img src="includes/assets/icons/icons8-spotify-50.png" alt="" class="logo"></li>
                <li class="navs"><a href="search.php"></a>Search</li>
                <li class="navs"><a href="browse.php"></a>Browse</li>
                <li class="navs"><a href="yourMusic.php"></a>Your Music</li>
                <li class="navs"><a href="profile.php"></a>name</li>
            </ul>
        </div>
        <div class="mainArea">
            <div class="mainHeading">
                <h1>YOU MIGHT ALSO LIKE <?php echo $username ?></h1>

            </div>
            <div class="mainAlbum">

                <!---<img src="includes/assets/images/TM.jpg" alt="">-->
				<?php
				$albumSQL = mysqli_query($con, "SELECT * FROM albums");
				while ($row = mysqli_fetch_array($albumSQL)) {

					echo "<a href='browse.php?id=" . $row['id'] . "'>";
					echo "<img src='" . $row['artworkPath'] . "'></a>";
				}
				?>

            </div>

        </div>
    </div>


    <div class="player">
        <div class="artwork">
            <span class="album"><img src="./includes/assets/images/art1.jpg" alt="" class="albumMin">
                <div class="albumMinName">Happy Birthday</div>

                <div class="albumMinArtist">Reece Kenney</div></span>
        </div>
        <div class="playerMid">
            <div class="buttons">
                <button class="controlButton shuffle">
                    <img src="includes/assets/icons/icons8-shuffle-50.png" alt="">
                </button>
                <button class="controlButton previous">
                    <img src="includes/assets/icons/icons8-skip-to-start-50.png" alt="">
                </button>
                <button class="controlButton play">
                    <img src="includes/assets/icons/icons8-circled-play-50.png" alt="">
                </button>
                <button class="controlButton pause">
                    <img src="includes/assets/icons/icons8-pause-button-50.png" alt="">
                </button>
                <button class="controlButton next">
                    <img src="includes/assets/icons/icons8-end-50.png" alt="">
                </button>
                <button class="controlButton repeat">
                    <img src="includes/assets/icons/icons8-repeat-50.png" alt="">
                </button>

            </div>
            <div class="bar">
                <div class="time current">0.00</div>
                <div class="progress">
                    <div class="progressBack">
                        <div class="progressFront">

                        </div>
                    </div>
                </div>
                <div class="time remaining">0.00</div>
            </div>
        </div>
        <div class="volume">
            <div class="vol">
                <span><button class="controlButton volume-icon">
                    <img src="includes/assets/icons/icons8-audio-50.png" alt="">
                </button>


            <div class="progressVBack">
                <div class="progressVFront">

                </div>
            </div>
                </span>
            </div>
        </div>
    </div>
</div>

<script src="includes/assets/js/main.js?v=<?php echo time() ?>"></script>
</body>
</html>