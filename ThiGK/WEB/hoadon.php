<?php

$khachhang = "SELECT * FROM khachhang where MaKH = 1";
$querykh = mysqli_query($connect, $khachhang);
$rowkh = mysqli_fetch_assoc($querykh);

$makh = $rowkh['MaKH'];
$hoadon = "SELECT * FROM hoadon where MaKH = $makh";
$queryhd = mysqli_query($connect, $hoadon);
$rowhd = mysqli_fetch_assoc($queryhd);

$mahd = $rowhd['MaHD'];
$chitiethd = "SELECT * FROM chitiethoadon where MaHD = $mahd";
$querychitiethd = mysqli_query($connect, $chitiethd);
?>

<div class="container">
    <table border="1">
        <tr>
            <td colspan="2">
                <h1>Thông Tin Khách Hàng</h1>
            </td>
        </tr>
        <tr>
            <td>
                <table border="0">
                    <tr>
                        <td>
                            <p>MaKH</p>
                            <p>Họ Tên</p>
                            <p>Điện Thoại</p>
                            <p>Email</p>
                        </td>
                        <td>
                            <p><?php echo $rowkh['MaKH']; ?></p>
                            <p><?php echo $rowkh['HoTen']; ?></p>
                            <p><?php echo $rowkh['DienThoai']; ?></p>
                            <p><?php echo $rowkh['Email']; ?></p>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td colspan="4">
                <h1>Sản Phẩm Trong Hóa Đơn</h1>
            </td>
        </tr>
        <tr>
            <td>
                <table border="0">
                    <?php
                    while ($rowcthd = mysqli_fetch_assoc($querychitiethd)) {
                    ?>
                        <tr>
                            <td>
                                <p>MaHD: <?php echo $rowcthd['MaHD']; ?></p>
                            </td>
                            <td>
                                <p>MaHH: <?php echo $rowcthd['MaHH']; ?></p>
                            </td>
                            <td>
                                <p>SoLuong: <?php echo $rowcthd['SoLuong']; ?></p>
                            </td>
                            <td>
                                <button>Xóa</button>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </table>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <table>
                    <tr>
                        <td>Tổng Tiền</td>
                        <td>555 VNĐ</td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</div>