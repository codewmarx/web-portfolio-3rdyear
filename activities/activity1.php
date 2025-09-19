<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    // Redirect to login page if user is not logged in
    header("Location: ../main/index.php");
    exit;
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My First Webpage</title>
</head>
<body>
     <!--IMAGE-->
    <center>
        <img src="../images/insterstellar.jpg" width="620" height="300" alt="Interstellar">
    
    <h1>Interstellar (Box Office Hit)</h1>
    <hr>

    <div>
        <a href="home.html">Home | </a>
        <a href="about.html">About | </a>
        <a href="../homepage/home.php">Back</a>
        <a href="contact.html">Contact</a>
        <hr>
    </div>

    <!--TABLE-->
    <table border="5">
        <thead> 
            <tr>
                <th>Interstellar Background Music</th>
                <th>Interstellar Actors</th>
            </tr>
            <tr>
                <td>
                    <ol>
                        <li>Dreaming of the Crash</li>
                        <li>Cornfield Chase</li>
                        <li>Dust</li>
                            <ol type="a">
                                <li>Hans Zimmer</li>
                                <li>Background Music</li>
                                <li>Journey to the Black Hole</li>
                            </ol>
                    </ol>
                </td>
                <td>
                    <ul>
                        <li>Matthew McConaughey</li>
                        <li>Jessica ChastaiN</li>
                        <li>Anne Hathaway</li>
                        <ul>
                            <li>The Dark Knight Rises</li>
                            <li>Ocean's 8</li>
                            <li>Alice in Wonderland</li>
                        </ul>
                    </ul>
                </td>
            </tr>
            <!--AUDIO CLIP-->
            <tr>
                <td>
                    <audio src="../includes/Dorian Marko - Cornfield Chase (Interstellar Piano Cover).mp3" controls muted autoplay >
                    </audio>
                <center>
                    <img src="../images/cornfield.jpg" width="320">
                </center>
                </td>
                <!--Lyrics-->
                <td>
                    <center><p>Lyrics</p></center>
                    <p>I need no one else <br>
                        Feelings off the shel <br>
                        Falling hard as hell <br>
                        My baby give me life for real <br>
                        Fingers on the wheel <br>
                        Pressing on that steel <br>
                        Heartbeat too surreal <br>
                        Our lips are glued we don't conceal <br>
                        Dance all night you can take me back <br>
                        Make my life don't let me crash <br>
                        Hit that gas let the smoke clear fast <br>
                        Left that path behind.
                    </p>
                </td>
            </tr>
            <!--VIDEO CLIP-->
            <td colspan="2">
                <video controls muted autoplay width="600">
                    <source src="../includes/Interstellar 4K HDR IMAX _ Into The Black Hole - Gargantua 1_2.mp4">
                    Your browser may not support this type of video.
                </video>
            </td>
        </thead>
    </table>
        <hr>
        <footer>
            <p>&copy; <strong>2024 Interstellar Corps. All Rights Reserved</strong></p>
            <p>Contact us at: <b><i>www.garado@gmail.com</i></b> | <b>123-456-789</b></p>
        </footer>
        <hr>
</center>
</body>
</html>