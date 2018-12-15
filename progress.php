<?php
    require_once('connection.php');

    @$action = $_GET['action'] ? $_GET['action'] : $_POST['action'];
    @$id = $_GET['id'];
    @$author = $_POST['author'];
    @$body = $_POST['body'];

    if($action) {
        switch($action) {
            case 'delete':
                $sql = "DELETE FROM `comment` where `id` = '$id'";
                mysql_query($sql) or die(mysql_error());
                echo 'Deleted !';
                echo '<meta http-equiv="refresh" content="2;url=index.php" />';
                break;

            case 'insert':
                if(!$author || !$body) {
                    echo 'Bad Request !!';
                    echo '<meta http-equiv="refresh" content="2;url=post.php" />';
                }
                else {
                    $author = str_replace("'", "\'", $author);
                    $body = str_replace("'", "\'", $body);
            
                    $sql = "INSERT INTO `comment`(`author`, `body`) VALUES('$author', '$body')";
                    mysql_query($sql) or die(mysql_error());
            
                    echo 'Submit success !!';
                    echo '<meta http-equiv="refresh" content="2;url=index.php" />';
                }
                break;
        }
    }
?>