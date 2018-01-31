<?php require_once '/tools/_db.php'; ?>
<?php
if (isset($_POST ['save'])) {

    $query = $db->prepare('INSERT INTO user (firstname, lastname, email, password, bio, is_admin) VALUES (?, ?, ?, ?, ?, ?)');
    $result = $query->execute(
        [
            $_POST['firstname'],
            $_POST['lastname'],
            $_POST['email'],
            $_POST['password'],
            $_POST['bio'],
            $_POST['is_admin'],

        ]
    );
}

?>

<!doctype html>
<html lang="en">
<head>

    <title>Admin category</title>
</head>
<body>
<form action="admin.php" method="post">

    <div>
        <label for="firstName">FIRST NAME</label>
        <input id="firstName" name="firstname" value="" type="text" placeholder="first name"/>
    </div>

    <div>
        <label for="lastName">LASTNAME</label>
        <input id="lastName" name="lastname" value="" type="text" placeholder="Last name" />
    </div>

    <div>
        <label for="Email">EMAIL</label>
        <input id="email" name="email" value="" type="email" placeholder="Email"/>
    </div>

    <div>
        <label for="Password">PASSWORD</label>
        <input id="password" name="password" value="" type="password" placeholder="Password" />
    </div>

    <div>
         <textarea name="bio" cols="10" rows="6">

    </textarea>
    </div>

    <div>
        <select name="is_admin">
            <option value="1">oui</option>
            <option value="0">non</option>
        </select>
    </div>

    <div>
        <input type="submit" name="save" value="sauvegarder">
    </div>




</form>






</body>
</html>