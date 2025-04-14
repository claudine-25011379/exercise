<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>website string</title>
</head>
<body>
    <?php
    function good() {
        $name = "Munyeshuri manzi Alain Patrick";
        $nameArray = str_split($name);
        $nameArray[0] = "2400101807";
        return implode("", $nameArray);
    }

    echo good();
    ?>
</body>
</html>