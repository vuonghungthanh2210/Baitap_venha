<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tinh dien tich HCN</title>
</head>
<body>
    <?php
        $dai = $_POST["dai"];
        $rong = $_POST["rong"];
        $dt = $dai * $rong;
    ?>
    <form id="forml" name="forml" method="post" action="s_hcn.php"></form>
</body>
</html>