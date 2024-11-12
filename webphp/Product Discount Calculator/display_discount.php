<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Discount Calculation Result</title>
</head>

<body>
      <div style="width=100%;    display: flex;
    justify-content: center;
    height: 100vh;
    align-items: center;">
        <div style="    width: 324px;
    border: 1px solid;
    padding: 35px;">
    <h2>Discount Calculation Result</h2>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST["description"]) && isset($_POST["price"]) && isset($_POST["discount"])) {
            $description = $_POST["description"];
            $price = $_POST["price"];
            $discountPercent = $_POST["discount"];

            $discountAmount = $price * $discountPercent * 0.01;
            $discountPrice = $price - $discountAmount;


            echo "<p>Product Description: <strong>$description</strong></p>";
            echo "<p>List Price: <strong>" . number_format($price, 2) . "</strong></p>";
            echo "<p>Discount Percent: <strong>" . number_format($discountPercent, 2) . "%</strong></p>";
            echo "<p>Discount Amount: <strong>" . number_format($discountAmount, 2) . "</strong></p>";
            echo "<p>Discount Price: <strong>" . number_format($discountPrice, 2) . "</strong></p>";
        } else {
            echo "<p>Invalid input. Please go back and enter all required fields.</p>";
        }
    }
    ?>
    </div>
    </div>
</body>

</html>