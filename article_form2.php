<?php require_once '/tools/_db.php'; ?>
<?php
if (isset($_POST ['save'])) {

    $query = $db->prepare('INSERT INTO article (category_id, title, created_at, content, summary, is_published) VALUES (?, ?,NOW(), ?, ?, ?)');
    $result = $query->execute(
        [
            $_POST['category_id'],
            $_POST['title'],
            $_POST['content'],
            $_POST['summary'],
            $_POST['is_published'],
        ]
    );
}
?>
<!doctype html>
<head>

    <title>Document</title>
</head>
<body>

<form action="article_form2.php" method="post">

    <label for="category_id">Category</label>
    <input id="category_ID" name="category_id" value="" type="text" placeholder="category_id"/>
    </div>

    <div>
        <label for="">title</label>
        <input id="title" name="title" value="" type="text" placeholder="title" />
    </div>

    <div>
        <label for="content">content</label>
        <input id="content" name="content" value="" type="" placeholder="content" />
    </div>

    <div>
         <textarea name="summary" cols="10" rows="6">

        </textarea>

    </div>
    

    <div>
        <label for="is_published">is_published</label>
        <input id="is_published" name="is_published" value="" type="text" placeholder="is_published" />
    </div>

    <div>
        <input type="submit" name="save" value="sauvegarder">
    </div>

</form>
</body>
</html>
<div>
