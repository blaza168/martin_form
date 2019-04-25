<?php
if ($_POST) {
    $text = $_POST['text'];
    file_put_contents('form.txt', $text);
}
?>
<html>
<head>
    <meta charset="utf-8" >
</head>
<body>
    <div style="height: 2000px; width: 100%; background-color: black; margin-bottom: 50px"></div>
    <form method="POST" id="form" action="#form">
    <?php
    if ($_POST) {
        echo '<p style="color: green">Formulář byl úspěšně odeslán.</p>';
    }
    ?>
        <input type="text" name="text" />
        <input type="submit" value="odeslat" />
    </form>

    <script>
        <?php
            if ($_POST) {
             echo '        setTimeout(function () {
                    console.log("timeout");
        }, 3000);';
            }
        ?>
    </script>
</body>
</html>