<?php
require_once 'config/db.php';
?>
<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:ital,wght@0,300;1,300&display=swap" rel="stylesheet">
</head>

<body>
    <?php
    if (isset($_GET['page'])) {
        switch ($_GET['page']) {
            case 'loai':
                require_once 'WEB/loai.php';
                break;
            case 'hanghoa':
                require_once 'WEB/hanghoa.php';
                break;
            case 'chitietsanpham':
                require_once 'WEB/chitietsanpham.php';
                break;
            case 'hoadon':
                require_once 'WEB/hoadon.php';
                break;
            case 'chitiethoadon':
                require_once 'WEB/chitiethoadon.php';
                break;
            case 'edit':
                require_once 'WEB/edit.php';
                break;
            default:
                require_once 'WEB/loai.php';
                break;
        }
    } else {
        require_once 'WEB/loai.php';
    }
    ?>
</body>

</html>