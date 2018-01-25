<?php require_once '/tools/_db.php'; ?>
<?php 


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin category</title>
</head>
<body>

<div>

    <label for="firstName">FIRST NAME</label>
    <input id="firstName" name="firstname" value="" type="text" placeholder="first name"/>

    <label for="lastName">LASTNAME</label>
    <input id="lastName" name="lastname" value="" type="text" placeholder="Last name" />

    <label for="Email">EMAIL</label>
    <input id="email" name="email" value="" type="email" placeholder="Email"/>

    <label for="Password">PASSWORD</label>
    <input id="password" name="password" value="" type="password" placeholder="Password" />

    <textarea name="bio" cols="10" rows="6">

    </textarea>

    <label>FIRST NAME<input type="checkbox" name="is_admin" /></label>

    <input type="submit" name="save" value="Sauvegarder"/>
</div>

<?php



?>

</body>
</html>