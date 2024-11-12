<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Future Value Result</title>
</head>

<body>
    <div style="width=100%;display: flex;justify-content: center;height: 100vh;align-items: center;">
        <div style="    width: 324px;border: 1px solid;padding: 35px;">
            <h2>Future Value Calculation Result</h2>
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if (isset($_POST["investment"]) && isset($_POST["rate"]) && isset($_POST["years"])) {
                    $investment = $_POST["investment"];
                    $rate = $_POST["rate"];
                    $years = $_POST["years"];

                    $futureValue = $investment;
                    for ($i = 0; $i < $years; $i++) {
                        $futureValue += $futureValue * ($rate / 100);
                    }

                    echo "<p>Investment Amount: <strong>" . number_format($investment, 2) . "</strong></p>";
                    echo "<p>Yearly Interest Rate: <strong>" . number_format($rate, 2) . "%</strong></p>";
                    echo "<p>Number of Years: <strong>$years</strong></p>";
                    echo "<p>Future Value: <strong>" . number_format($futureValue, 2) . "</strong></p>";
                } else {
                    echo "<p>Invalid input. Please go back and enter all required fields.</p>";
                }
            }
            ?>
        </div>
    </div>
</body>

</html>