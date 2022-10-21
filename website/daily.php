<?php

// Includes Header
include('./includes/header.php');

?>

    <style>

body {
    background-color: white;
}

#wrapper {
    width: 500px;
    margin: 20px auto;
}

#wrapper a {
    text-decoration: none;
    color: <?php echo $color ?>;
}

#wrapper a:hover {
    color: black;
}

h1, h2, h3, p {
    text-align: center;
    font-weight: 100;
}

h3 {
    margin-top: 30px;
}

#wrapper li {
    padding: 5px;
    text-align: center;
    list-style-type: none;
}

#wrapper img {
    width: 500px;
    margin-top: 30px;
}

    </style>

<div id="wrapper">
    <h1>Cartoon of the Day</h1>
    <?php echo $day; ?>
    <img src="./images/<?php echo $pic; ?>" alt="<?php echo $alt; ?>">
    <?php echo $content; ?>
    <br>

    <h3>See This Week's Cartoons</h3>
    <br>
    <ul>
        <li><a href="daily.php?today=Sunday">Sunday</a></li>
        <li><a href="daily.php?today=Monday">Monday</a></li>
        <li><a href="daily.php?today=Tuesday">Tuesday</a></li>
        <li><a href="daily.php?today=Wednesday">Wednesday</a></li>
        <li><a href="daily.php?today=Thursday">Thursday</a></li>
        <li><a href="daily.php?today=Friday">Friday</a></li>
        <li><a href="daily.php?today=Saturday">Saturday</a></li>
    </ul>

</div>
<!-- end wrapper -->

<?php
// Includes footer
include('./includes/footer.php');
?>
