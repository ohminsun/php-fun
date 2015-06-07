<html>
    <head>
        <title>The Best Form of Your Life</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    </head>
    <body>
        <center><h2>The Best Form of Your Life</h2></center>
        <center><h3>Fill this out to share your Angry Orchard cider love.</h3></center>
        <?php
        if ($_POST) {
            echo '<pre>';
            echo htmlspecialchars(print_r($_POST, true));
            echo '</pre>';
        }
        ?>
        <form action="" method="post">
            Name: <input type="text" name="personal[name]" /><br />
            Email: <input type="text" name="personal[email]" /><br />
            Angry Orchard first love: <br />
            <select multiple name="cider[]">
                <option value="green">Green Apple</option>
                <option value="cinnful">Cinnful Apple</option>
                <option value="summer">Summer Honey</option>     
            </select><br />
            <input type="submit" value="Submit me!" />
        </form>
    </body>
</html>
