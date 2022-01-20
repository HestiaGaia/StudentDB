<!DOCTYPE html>
<html>
    <head>
        <title>
            ADD NEW STUDENT
        </title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <form class="input_section" method="POST" enctype="multipart/form-data" action="./include/inc.add.php">
            <input required type="text" name="cin" placeholder="CIN" >
            <input required type="text" name="nom" placeholder="Nom" >
            <input required type="text" name="prenom" placeholder="Prenom" >
            <input required type="text" name="email" placeholder="Email">
            <input required type="file" name="img">
            <input required type="submit" name="submit" value="Go">
            <a href="./home.php">GO BACK</a>
        </form>
    </body>
</html>