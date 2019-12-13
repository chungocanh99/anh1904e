<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<pre>
    gán giá trị mặc định cho tham số trong hàm
    nếu gán giá trị mặc định cho tham số thì khi gọi hàm không nhất thiết phải truyền biến vào
    nếu truyền vào thì sẽ lấy giái trị của biến truyền vào
    ngược lại sẽ lấy giá trị mặc định
</pre>

<?php
function tinhluong($luongthang=8000000, $songaycong=24) {
    // những biến khai báo trong hàm là biến cục bộ
    $tongngaycong=24;
    /**
     * tham số trong hàm sẽ là biến cục bộ
     */
    $luongthuclinh=($luongthang*$songaycong)/$tongngaycong;
    return $luongthuclinh;
}
//gọi hàm
/**
 * biến khai báo ngoài làm là biến toàn cục
 */
$x=10000000;
$y=12;
echo "<br> lương tháng: " .tinhluong($x,$y);
echo "<br> Lương tháng: " .tinhluong();
?>
</body>
</html>
