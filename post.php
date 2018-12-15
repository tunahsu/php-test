<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="progress.php" method="POST">
        <input type="hidden" name="action" value="insert">
        <label for="Author">Author</label><br>
        <input type="text" id="author" name="author" placeholder="Name" required><br><br>
        <label for="Body">Content</label>
        <br>
        <textarea id="body" name="body" rows="6" placeholder="Say something" required></textarea><br><br>
        <input type="submit" value="送出">
    </form>
</body>
</html>