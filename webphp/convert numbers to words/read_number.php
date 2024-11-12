<!DOCTYPE html>
<html>

<head>
    <title>Ứng dụng đọc số thành chữ</title>
</head>

<body>
    <div style="width=100%;    display: flex;
    justify-content: center;
    height: 100vh;
    align-items: center;">
        <div style="    width: 324px;
    border: 1px solid;
    padding: 35px;">
            <h2>Ứng dụng đọc số thành chữ</h2>
            <form method="post">
                <input type="number" name="number" placeholder="Nhập số (0-999)" required>
                <input type="submit" value="Đọc số">
            </form>

            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $number = $_POST["number"];
                echo "Number: $number<br>";
                if ($number < 0 || $number > 999) {
                    echo "out of ability";
                } else {
                    echo "Kết quả: " . readNumberToWords($number);
                }
            }

            function readNumberToWords($num)
            {
                $ones = ["", "one", "two", "three", "four", "five", "six", "seven", "eight", "nine"];
                $teens = ["ten", "eleven", "twelve", "thirteen", "fourteen", "fifteen", "sixteen", "seventeen", "eighteen", "nineteen"];
                $tens = ["", "", "twenty", "thirty", "forty", "fifty", "sixty", "seventy", "eighty", "ninety"];

                if ($num < 10) {
                    return $ones[$num];
                } elseif ($num < 20) {
                    return $teens[$num - 10];
                } elseif ($num < 100) {
                    $tensPart = (int) ($num / 10);
                    $onesPart = $num % 10;
                    return $tens[$tensPart] . ($onesPart != 0 ? " " . $ones[$onesPart] : "");
                } else {
                    $hundredsPart = (int) ($num / 100);
                    $remainder = $num % 100;
                    $remainderText = $remainder != 0 ? " and " . readNumberToWords($remainder) : "";
                    return $ones[$hundredsPart] . " hundred" . $remainderText;
                }
            }
            ?>
        </div>
    </div>
</body>

</html>