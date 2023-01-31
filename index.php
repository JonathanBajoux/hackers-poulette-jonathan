<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulaire</title>
</head>

<body>
    <div style="text-align: center;"> 
    <h1>CONTACT</h1>
    <form action="validation.php" method="post">
        <label for="Name">Name</label><br>
        <input type="text" name="Name" id="Name" required minlenght="2" maxlength="250"><br>
        <label for="Firstname">Firstname</label><br>
        <input type="text" name="Firstname" id="Firstname" required minlenght="2" maxlength="250"><br>
        <label for="Email address">E-mail address</label><br>
        <input type="email" name="Email" id="Email" required minlenght="2" maxlength="250"><br>
        <label for="Comments">Comments</label><br>
        <input type="text" name="Comments" id="Comments" required minlenght="250" maxlength="1000"><br><br>

        <input type="submit" value="confirm">
    </form>
    </div>
</body>

</html>