<?php 
  $name="Rafie Ishaq";
  $hobby=["Read","Play game","Gym"]
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Biodata | Rafie Ishaq Maulana</title>

    <!-- CSS LINK -->
    <link rel="stylesheet" href="style.css" />

    <!-- GOOGLE FONT -->
    <link href="https://fonts.googleapis.com/css2?family=Kanit&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Inconsolata:wght@500&display=swap" rel="stylesheet" />
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar">
        <div class="title">
            <h3>Biodata</h3>
        </div>
        <ul>
            <div class="menu">
                <li>
                    <a href="gmail.com"><img src="002-mail.png" alt="mail-img" /></a>
                </li>
                <li>
                    <a href="instagram.com"><img src="001-instagram.png" alt="instagram-img" /></a>
                </li>
                <li>
                    <a href="github.com"><img src="003-github-sign.png" alt="github-img" /></a>
                </li>
            </div>
        </ul>
    </nav>

    <!-- Name Box -->
    <div class="name">
        <div class="text-name">
            <h2 style="margin: 15px">Hello, Iam <?= $name; ?>, <?= date("y")-date("y", mktime(0,0,0,3,18,2003))  ?> y.o.
            </h2>
            <h3 style="margin: 15px">Student of UPN Veteran Jawa Timur</h3>
        </div>
        <div class="foto"><img src="foto.png" alt="foto-img" /></div>
    </div>

    <!-- Description Box -->
    <div class="box">
        <div class="desc-1">
            <h3>Place and Date of Birth</h3>
            <p>Probolinggo, <?= date("d F Y", mktime(0,0,0,3,18,2003)) ?></p>
            <br />
            <h3>Address</h3>
            <p>Jl. Kalimas Perum Kalirejo, Dringu, Probolinggo</p>
            <br />
            <h3>Hobby</h3>
            <ul>
                <?php foreach($hobby as $hobi): ?>
                <li><?= $hobi ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
        <div class="desc-2">
            <h3>Education</h3>
            <ol>
                <li>Junior Highschool 5 Probolinggo</li>
                <li>Senior Highschool 1 Probolinggo</li>
                <li>UPN Veteran Jawa Timur University</li>
            </ol>
            <br />
            <h3>Organization Experience</h3>
            <ol>
                <li>Secretary of scout at junior highschool 5</li>
                <li>Vice leader at Garudaraka youth organization</li>
            </ol>
        </div>
    </div>
</body>

</html>