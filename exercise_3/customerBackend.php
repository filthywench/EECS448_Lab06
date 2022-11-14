<!DOCTYPE html>
<html>
    <head>
      <title>Receipt</title>
      <link href="style.css" rel="stylesheet" type="text/css">
    </head>
    <body>

        <?php
            $username = $_POST["email"];
            $password = $_POST["password"];
            $chris_quantity = $_POST["chris"];
            $chris_cost = twoDecimalPlaces($chris_quantity * 2.00);
            $anti_quantity = $_POST["anti"];
            $anti_cost = twoDecimalPlaces($anti_quantity * 2.50);
            $bball_quantity = $_POST["bball"];
            $bball_cost = twoDecimalPlaces($bball_quantity * 3.50);
            $shipping = $_POST["ship"];
            $shippingType;
            $shippingCost;
            $orderMessage;

            if ($shipping == "a") {
                $shippingType = "Free 7-day";
                $shippingCost = twoDecimalPlaces(0.00);
                $orderMessage = "It should arrive in 7 days.";
            }
            elseif ($shipping == "b") {
                $shippingType = "3-day";
                $shippingCost = twoDecimalPlaces(5.00);
                $orderMessage = "It should arrive in 3 days.";
            }
            elseif ($shipping == "c") {
                $shippingType = "Overnight";
                $shippingCost = twoDecimalPlaces(50.00);
                $orderMessage = "It should arrive tomorrow.";
            }

            echo "<h1>Welcome <em>$username</em>!</h1>";

            // echo "<p>Thanks for choosing Coding Christopher Studios for your sticker shopping. We appreciate your business!<p><br>";

            echo "<b>Your Username</b>: $username<br>";
            echo "<b>Your Password</b>: $password<br>";
            
            

            echo "<h3>Your Receipt:</h3>";

            echo "<table>";
                echo "<tr>";
                    echo "<th></th>";
                    echo "<th>Quantity</th>";
                    echo "<th>Cost per Item</th>";
                    echo "<th>Subtotal</th>";
                echo "</tr>";
                echo "<tr>";
                    echo "<th>Traditional Christopher</th>";
                    echo "<td>$chris_quantity</td>";
                    echo "<td>$2.00</td>";
                    echo "<td>$$chris_cost</td>";
                echo "</tr>";
                echo "<tr>";
                    echo "<th>Anti-Chris</th>";
                    echo "<td>$anti_quantity</td>";
                    echo "<td>$2.50</td>";
                    echo "<td>$$anti_cost</td>";
                echo "</tr>";
                echo "<tr>";
                    echo "<th>Basketball Chris</th>";
                    echo "<td>$bball_quantity</td>";
                    echo "<td>$3.50</td>";
                    echo "<td>$$bball_cost</td>";
                echo "</tr>";
                echo "<tr>";
                    echo "<th>Shipping</th>";
                    echo "<td colspan=2>$shippingType</td>";
                    echo "<td>$$shippingCost</td>";
                echo "</tr>";
                $total = twoDecimalPlaces($chris_cost + $anti_cost + $bball_cost + $shippingCost);
                echo "<tr>";
                    echo "<th colspan=3>Total</th>";
                    echo "<td>$$total</td>";
                echo "</tr>";
            echo "</table><br>";

            echo "Thank you for your order! $orderMessage";

            function twoDecimalPlaces ($number) {
                return number_format((float)$number, 2, '.', '');
            }
        ?>
    </body>
</html>