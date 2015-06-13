<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <title>Future Value Calculator</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
</head>
<body>
    <div id="content">
        <h1>Future Value Calculator</h1>
        <?php if (!empty($error_message)) { ?>
            <p class="error"><?php echo $error_message; ?></p>
        <? php } ?>
        <form action="display_results.php" method="post">
            <div id="data">
                <label>Investment Amount:</label>
                <input type="text" name="investment" value="<?php echo $investment; ?>"/><br />
                <label>Yearly Interest Rate:</label>
                <input type="text" name="interest_rate" value="<?php echo $interest_rate; ?>"/><br />
                <label>Number of Years:</label>
                <input type="text" name="years" value="<?php echo $years; ?>"/><br />
            </div>
            <div id="buttons">
                <label>&nbsp;</label>
                <input type="submit" value="Calculate!"/><br />
            </div>
        </form>
    </div>
</body>
</html>
