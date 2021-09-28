<html>
<body>
<h1>Welcome to class</h1>
<h1 style="color: red">IT18A1.11</h1>
<h1>Tên của bạn là: <?php
    echo $ten;
    ?></h1>
<h1>Tuổi của bạn là:
    <?php
    echo $tuoi;
    ?>
</h1>
<h1>
    <?php
    if($tuoi>=18)
        echo "Bạn có thể vào xem tiếp video này.";
    else
        echo "Bạn chưa đủ tuổi để vào xem video này";
    ?>
</h1>
</body>
</html>
