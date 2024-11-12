<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Future Value Calculator</title>
    <style>
        input[type=text],
        input[type=number] {
            width: 300px;
            font-size: 16px;
            border: 2px solid #ccc;
            border-radius: 4px;
            padding: 12px 10px;
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

            <h2>Future Value Calculator</h2>
            <form action="display_future_value.php" method="post">
                <label for="investment">Investment Amount:</label><br>
                <input type="number" name="investment" placeholder="Enter investment amount" step="0.01" required /><br>

                <label for="rate">Yearly Interest Rate (%):</label><br>
                <input type="number" name="rate" placeholder="Enter yearly interest rate" step="0.01" required /><br>

                <label for="years">Number of Years:</label><br>
                <input type="number" name="years" placeholder="Enter number of years" required /><br>

                <input type="submit" id="submit" value="Calculate" />
            </form>
        </div>
    </div>
</body>

</html>