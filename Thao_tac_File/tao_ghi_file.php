<?php error_reporting(0); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tạo - ghi file</title>
</head>
<body>
    <form method="post" action="form.php">
        <span>Ten file:</span>
        <input type="text" name="ten_file" id="ten_file" value="<?php echo $_POST["ten_file"];?>"/>
        <span>Noi dung: </span>
        <textarea name="noi_dung" id="noi_dung" cols="30" rows="10"><?php echo $_POST["noi_dung"];?></textarea>
        <input type="submit" name="Submit" value="Ghi va doc file"/>
    </form>
    <?php 
        if(isset($_POST["ten_file"]) && isset($_POST["noi_dung"])){
            $ten_file = $_POST["ten_file"];
            $noi_dung = $_POST["noi_dung"];
            // ghi file
                $file = fopen("$ten_file", "w+");
                fwrite($file, $noi_dung);
                echo "ghi file thanh cong";
                fclose($file);
            // xuat file vua ghi ra man hinh
                $file = fopen("$ten_file", "r");
                echo "Noi dung cua file: ";
                while(!feof($file)){
                    $noi_dung = fgets($file, 1000);
                    echo nl2br($noi_dung);
                }
                echo "Doc file thanh cong";
                fclose($file);
        }
        else
            echo "Hay nhap day du noi dung"
    ?>
</body>
</html>