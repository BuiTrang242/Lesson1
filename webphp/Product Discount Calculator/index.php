<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Product Discount Calculator</title>
    <style>
        input[type=text],
        input[type=number] {
            width: 300px;
            font-size: 16px;
            border: 2px solid #ccc;
            border-radius: 4px;
            padding: 12px 10px 12px 10px;
            margin-bottom: 10px;
        }

        #submit {
            border-radius: 2px;
            padding: 10px 32px;
            font-size: 16px;
        }
    </style>
</head>

<body>
    <div style="width=100%;    display: flex;
    justify-content: center;
    height: 100vh;
    align-items: center;">
        <div style="    width: 324px;
    border: 1px solid;
    padding: 35px;">
            <h2>Product Discount Calculator</h2>
            <form action="display_discount.php" method="post">
                <label for="description">Product Description:</label><br>
                <input type="text" name="description" placeholder="Enter product description" required /><br>

                <label for="price">List Price:</label><br>
                <input type="number" name="price" placeholder="Enter list price" step="0.01" required /><br>

                <label for="discount">Discount Percent:</label><br>
                <input type="number" name="discount" placeholder="Enter discount percent" step="0.01" required /><br>

                <input type="submit" id="submit" value="Calculate Discount" />
            </form>
        </div>
    </div>
</body>

</html>