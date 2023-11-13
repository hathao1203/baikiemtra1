<!-- Trắc nghiệm
Câu 1: 5
Câu 2: D
Câu 3: D
Câu 4: A
Câu 5: A
-->

<!-- Bài 1: Viết một chương trình PHP để kiểm tra xem một số nguyên dương nào đó có phải là số nguyên tố hay không. Yêu cầu:
Tạo một hàm isPrime nhận một số nguyên dương và trả về true nếu nó là số nguyên tố, ngược lại trả về false.
Sử dụng hàm để hiển thị danh sách các số nguyên tố từ 1 đến 100.-->

<?php
function isPrime($number) {
    if ($number <= 1) {
        return false;
    }
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            return false;
        }
    }
    return true;
}
echo "Prime numbers from 1 to 100:<br>";
for ($i = 1; $i <= 100; $i++) {
    if (isPrime($i)) {
        echo $i . " ";
    }
}
?>


<!-- Bài 2: Viết một ứng dụng PHP để quản lý thông tin về sản phẩm trong một cửa hàng sử dụng mảng kết hợp. Yêu cầu:
Tạo một mảng kết hợp chứa thông tin về sản phẩm với các khóa như name, price, và quantity.
Hiển thị thông tin của tất cả sản phẩm trong mảng.
Viết hàm để tính tổng giá trị của tất cả sản phẩm (price * quantity). -->

<?php
echo "<br><br>";
$products = array(
    array("name" => "Shirt", "price" => 10, "quantity" => 5),
    array("name" => "Glasses", "price" => 20, "quantity" => 3),
    array("name" => "Shoes", "price" => 15, "quantity" => 7)
);
echo "Product information:<br>";
foreach ($products as $product) {
    echo "Name: " . $product['name'] . ", Price: $" . $product['price'] . ", Quantity: " . $product['quantity'] . "<br>";
}
function totalValue($products) {
    $totalValue = 0;
    foreach ($products as $product) {
        $totalValue += $product['price'] * $product['quantity'];
    }
    return $totalValue;
}
echo "Total value of all products:" . totalValue($products);
?>