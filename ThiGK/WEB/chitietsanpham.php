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
$index = strrpos($url, 'hanghoa_id=');
$hanghoa_id = substr($url, $index + 11);

$hanghoa = "SELECT * FROM hanghoa WHERE MaHH = $hanghoa_id";
$queryhh = mysqli_query($connect, $hanghoa);

?>

<div class="container">
    <table border="1">
        <tr>
            <td colspan="4">
                <h1>Sản Phẩm MaHH <?php echo $hanghoa_id; ?></h1>
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
                                <p id="mahh">MaHH: <?php echo $rowhh['MaHH']; ?></p>
                            </td>
                            <td>
                                <p id="tenhh"><?php echo $rowhh['TenHH']; ?></p>
                            </td>
                            <td>
                                <p id="gia">Giá: <?php echo $rowhh['DonGia']; ?> VNĐ</p>
                            </td>
                            <td>
                                <img src="IMAGE/<?php echo $rowhh['Hinh']; ?>">
                            </td>
                            <td><a href="index.php?page=hoadon" id="btnthem">Thêm Vào Hóa Đơn</a></td>
                        </tr>
                    <?php
                    }
                    ?>
                </table>
            </td>
        </tr>
    </table>
</div>
<script src="JS/chitietsanpham.js"></script>