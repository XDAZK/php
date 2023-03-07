<?php
require_once("/xampp/htdocs/LAB5/Entities/product.class.php");

if (isset($_POST["btnsubmit"])) {
    $productName = $_POST["txtName"];
    $cateID = $_POST["txtCateID"];
    $price = $_POST["txtprice"];
    $quantity = $_POST["txtquantity"];
    $description = $_POST["txtdesc"];
    $picture = $_POST["txtpic"];

    $newProduct = new Product($productName, $cateID, $price, $quantity, $description, $picture);

    $result = $newProduct->save();
    if (!$result) {
        header("Location: add_product.php?failure");
    } else {
        header("Location: add_product.php?inserted");
    }
}
?>
<?php include_once("header.php"); ?>
<?php
if (isset($_GET["inserted"])) {
    echo "<h2> add sản phẩm thành công rồi nhe :3 </h2>";
}
?>
<form method="post">
    <!-- tên sản phẩm -->
    <div class="row">
        <div class="lbltitle">
            <label">Product Name</label>
        </div>
        <div class="lblinput">
            <input type="text" name="txtName" value="<?php echo isset($_POST["txtName"]) ? $_POST["txtName"] : ""; ?>" />
        </div>
    </div>
    <!-- mô tả sản phẩm -->
    <div class="row">
        <div class="lbltitle">
            <label>Mô tả sản phẩm</label>
        </div>
        <div class="lblinput">
            <textarea name="txtdesc" cols="21" rows="10" value="<?php echo isset($_POST["txtdesc"]) ? $_POST["txtdesc"] : ""; ?>"></textarea>
        </div>
    </div>
    <!-- số lượng -->
    <div class="row">
        <div class="lbltitle">
            <label">Số lượng sản phẩm</label>
        </div>
        <div class="lblinput">
            <input type="text" name="txtquantity" value="<?php echo isset($_POST["txtquantity"]) ? $_POST["txtquantity"] : ""; ?>" />
        </div>
    </div>

    <!-- giá sản phẩm -->
    <div class="row">
        <div class="lbltitle">
            <label">Giá sản phẩm</label>
        </div>
        <div class="lblinput">
            <input type="text" name="txtprice" value="<?php echo isset($_POST["txtprice"]) ? $_POST["txtprice"] : ""; ?>" />
        </div>
    </div>

    <!-- loại sản phẩm -->
    <div class="row">
        <div class="lbltitle">
            <label">Loại sản phẩm</label>
        </div>
        <select value = "<?php echo isset($_POST["txtdesc"]) ? $_POST["txtdesc"] : ""; ?>"></select>
    </div>

    <!-- hình ảnh -->
    <div class="row">
        <div class="lbltitle">
            <label">Hình ảnh</label>
        </div>
        <div class="lblinput">
            <input type="text" name="txtpic" value="<?php echo isset($_POST["txtpic"]) ? $_POST["txtpic"] : ""; ?>" />
        </div>
    </div>
    <!-- nut gửi form -->
    <div class="row">
        <div class="submit">
            <input type="submit" name="btnsubmit" value="Add Product" />
        </div>
    </div>
</form>
<?php include_once("footer.php"); ?>