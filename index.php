<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulaire</title>
</head>
<body>
    <form action="validation.php" method="post">
    <label for="Name">Name</label>
    <input type="text" name="Name" id="Name" required>
    <label for="Firstname">Firstname</label>
    <input type="text" name="Firstname" id="Firstname" required>
    <label for="Email address">E-mail address</label>
    <input type="email" name="Email" id="Email" required>
    <label for="Comments">Comments</label>
    <input type="text" name="Comments" id="Comments" required>

    <input type="submit" value="confirm">
</form>
</body>
</html>
