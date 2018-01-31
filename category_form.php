<?php require_once '/tools/_db.php'; ?>
<?php
if (isset($_POST ['save'])) {

    $query = $db->prepare('INSERT INTO category (names , description) VALUES (?, ?)');
    $result = $query->execute(
        [
            $_POST['names'],
            $_POST['description']

        ]
    );
}
?>

<!doctype html>

<html>
<head>

    <title>Admin category</title>
</head>
<body>
<form action="category_form.php" method="post">

    <div>
         <textarea name="names" cols="10" rows="6">

    </textarea>
    </div>

    <div>
         <textarea name="description" cols="10" rows="6">

    </textarea>
    </div>


    <div>
        <input type="submit" name="save" value="sauvegarder">
    </div>

</form>


</body>
</html>