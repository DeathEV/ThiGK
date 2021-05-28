<?php

function url()
{
    return sprintf(
        "%s://%s%s",
        isset($_SERVER['HTTP']) && $_SERVER['HTTPS'] != 'off' ? 'http' : 'http',
        $_SERVER['SERVER_NAME'],
        $_SERVER['REQUEST_URI']
    );
}
$url = url();
$index = strrpos($url, 'loai_id=');
$loai_id = substr($url, $index + 8);

$hanghoa = "SELECT * FROM hanghoa WHERE MaLoai = $loai_id";
$queryhh = mysqli_query($connect, $hanghoa);

?>

<div class="container">
    <table border="1">
        <tr>
            <td colspan="2">
                <h1>Hàng Hóa Loại <?php echo $loai_id; ?></h1>
            </td>
        </tr>
        <tr>
            <td>
                <table border="0">
                    <?php
                    while ($rowhh = mysqli_fetch_assoc($queryhh)) {
                    ?>
                        <tr>
                            <td>
                                <p>MaHH: <?php echo $rowhh['MaHH']; ?></p>
                            </td>
                            <td>
                                <p><?php echo $rowhh['TenHH']; ?></p>
                            </td>
                            <td><a href="index.php?page=chitietsanpham&hanghoa_id=<?php echo $rowhh['MaHH']; ?>">Xem Chi Tiết</a></td>
                        </tr>
                    <?php
                    }
                    ?>
                </table>
            </td>
        </tr>
    </table>
</div>