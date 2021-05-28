<?php

$loai = "SELECT * FROM loai";
$queryloai = mysqli_query($connect, $loai);

?>

<div class="container">
    <table border="1">
        <tr>
            <td colspan="3">
                <h1>LOẠI SẢN PHẨM</h1>
            </td>
        </tr>
        <tr>
            <td>
                <table border="0">
                    <?php
                    while ($rowloai = mysqli_fetch_assoc($queryloai)) {
                    ?>
                        <tr>
                            <td>
                                <p><?php echo $rowloai['TenLoai']; ?></p>
                            </td>
                            <td>
                                <p><?php echo $rowloai['MoTa']; ?></p>
                            </td>
                            <td><a href="index.php?page=hanghoa&loai_id=<?php echo $rowloai['MaLoai']; ?>">Xem</a></td>
                        </tr>
                    <?php
                    }
                    ?>
                </table>
            </td>
        </tr>
    </table>
</div>