<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Print prime numbers</title>
</head>

<body>
    <div style="width=100%;    display: flex;
    justify-content: center;
    height: 100vh;
    align-items: center;">
        <div style="    width: 324px;
    border: 1px solid;
    padding: 35px;">
            <h2>Print prime numbers</h2>
            <?php
            function isPrime($num)
            {
                if ($num <= 1) {
                    return false;
                }
                for ($i = 2; $i <= sqrt($num); $i++) {
                    if ($num % $i == 0) {
                        return false;
                    }
                }
                return true;
            }
            $n = 100;
            for ($i = 2; $i <= $n; $i++) {
                if (isPrime($i)) {
                    echo $i . " ";
                }
            }
            ?>
        </div>
    </div>
</body>

</html>