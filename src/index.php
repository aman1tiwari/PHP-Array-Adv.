<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multi dimensional array</title>

</head>

<body>

    <?php

    $products = array(
        "Electronics" => array(
            "Television" => array(
                array(
                    "id" => "PR001",
                    "name" => "MAX-001",
                    "brand" => "Samsung"
                ),
                array(
                    "id" => "PR002",
                    "name" => "BIG-301",
                    "brand" => "Bravia"
                ),
                array(
                    "id" => "PR003",
                    "name" => "APL-02",
                    "brand" => "Apple"
                )
            ),
            "Mobile" => array(
                array(
                    "id" => "PR004",
                    "name" => "GT-1980",
                    "brand" => "Samsung"
                ),
                array(
                    "id" => "PR005",
                    "name" => "IG-5467",
                    "brand" => "Motorola"
                ),
                array(
                    "id" => "PR006",
                    "name" => "IP-8930",
                    "brand" => "Apple"
                )
            )
        ),
        "Jewelry" => array(
            "Earrings" => array(
                array(
                    "id" => "PR007",
                    "name" => "ER-001",
                    "brand" => "Chopard"
                ),
                array(
                    "id" => "PR008",
                    "name" => "ER-002",
                    "brand" => "Mikimoto"
                ),
                array(
                    "id" => "PR009",
                    "name" => "ER-003",
                    "brand" => "Bvlgari"
                )
            ),
            "Necklaces" => array(
                array(
                    "id" => "PR010",
                    "name" => "NK-001",
                    "brand" => "Piaget"
                ),
                array(
                    "id" => "PR011",
                    "name" => "NK-002",
                    "brand" => "Graff"
                ),
                array(
                    "id" => "PR012",
                    "name" => "NK-003",
                    "brand" => "Tiffany"
                )
            )
        )
    );
    echo " <table border='2px' width='50%'><tr><th>Categories</th><th>Sub-Categories</th><th>ID</th><th>Name</th><th>Brand</th>";
    foreach ($products as $key => $value) {
        foreach ($value as $key1 => $value1) {
            foreach ($value1 as $key2 => $value2) {
                echo "<tr>";
                echo "<td>$key</td>";
                echo "<td>$key1</td>";
                foreach ($value2 as $key2 => $value3) {
                    echo "<td>$value3</td>";
                }
                echo "</tr>";
            }
        }
    };
    echo "<br><br>";
    ?>
    </table><br><br>

    <?php
    echo "<p><b>*After deleting the product with id PR003 and Updating the name of the Product with id PR002, the list is: *</b></p>" . "<br>";
    foreach ($products as $key => $value) {
        foreach ($value as $key1 => $value1) {
            foreach ($value1 as $key2 => $value3) {
                if ($value3["id"] == "PR003") {
                    unset($value3);
                } elseif ($value3["id"] == "PR002") {
                    $value3["name"] = "BIG-555";
                }
                echo "<p> Product ID: $value3[id] <br> Product Name: $value3[name] <br>Product Brand: $value3[brand] <br> Subcategory:$key1 <br> Category: $key</p>";
            }
        }
    };
    ?>




    <?php
    $mobile = array(
            "Mobile" => array(
                array(
                    "id" => "PR004",
                    "name" => "GT-1980",
                    "brand" => "Samsung"
                ),
                array(
                    "id" => "PR005",
                    "name" => "IG-5467",
                    "brand" => "Motorola"
                ),
                array(
                    "id" => "PR006",
                    "name" => "IP-8930",
                    "brand" => "Apple"
                )
            )
    );
    echo "<table border='2px' width='50%'><tr><th>Sub-Category</th><th>ID</th><th>Name</th><th>Brand</th>";
    foreach ($mobile as $key => $value) {
        foreach ($value as $key1 => $value1) {
            echo "<tr>";
            echo "<td>$key</td>";
            foreach ($value1 as $key2 => $value2) {
                echo "<td>$value2</td>";
            }
            echo "</tr>";
        }
    }
    ?>
    </table>

    <?php
    foreach ($products as $key => $value) {
        foreach ($value as $key1 => $value1) {
            foreach ($value1 as $key2 => $value2) {
                if ($value2["brand"] == "Samsung") {
                    echo "<p> Product ID: $value2[id] <br> Product Name: $value2[name] <br>Product Brand: $value2[brand] <br> Subcategory:$key1 <br> Category: $key</p>";
                }
            }
        }
    };

    ?>
</body>

</html>