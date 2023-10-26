<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>commend section</title>
</head>
<body>
<iframe width="560" height="315" src="https://www.youtube.com/embed/gfHbg53ykPY?si=l7oqItIKjH_NSHpM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    <form action="index.php" method="post">
        <br>
        <label for="name">name: </label><input type="text" name="name"> <br> <br>
        <label for="comment">comment: </label><input type="text" name="comment">
        <input type="submit" value="submit">
    </form>
</body>
</html>
<?php include_once "db.php"; ?>
