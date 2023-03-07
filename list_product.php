<?php
require_once("/xampp/htdocs/LAB5/Entities/product.class.php")
?>

<?php
    include_once("header.php");
    $prods = Product::list_product();
    //sinh viên tự thiết kế màn hình này sao chođẹp măt

    foreach($prods as $item){
        echo "<p>Product Name".$item["ProductName"]."</p>";
    }
    include_once("footer.php");
?>

