<?php
    require_once('connection.php');

    $sql = "SELECT * FROM `comment`";
    $res = mysql_query($sql);
    if (!$res) {
        die("could get the res:\n" . mysql_error());
    }

    while ($row = mysql_fetch_assoc($res)) {
?>
    <div>
        <div>
            <label for="Author">Author:</label>
            <?= $row['author'] ?>
        </div>
        <br>
        <div>
            <label for="CreateTime">Create Time:</label>
            <?= $row['create_time'] ?>
        </div>
        <br>
        <div>
            <label for="Body">Content:</label>
            <?= $row['body'] ?>
        </div>
        <hr>
    </div>
<?php
    }
?>