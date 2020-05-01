

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Mostra Query</title>
    <style>
        .color{
            color:black;
            font-size: 15px;
            border-radius: 50%;
        }
        body{
           background-image: url("https://marketplace.canva.com/MADGx7Kn5GA/4/screen_2x/canva-pink-and-white-flowers-MADGx7Kn5GA.jpg");
        }
        table tr th td{
            border-collapse: collapse;
            border-radius: 1em;
            overflow: hidden;
        }
    </style>

</head>

<body>

    <div>
        <table class="table table-hover table-dark">
            <tr class="table-danger color">
                <th>Flowers</th>
                <th>Special Occasion</th>
                <th>Description</th>
            </tr>
            <?php
foreach ($query as $row) {
    echo "<tr class=\"table-info color\">";
    echo "<td>" . $row->name . "</td>";
    echo "<td>" . $row->Opportunities['name'] . "</td>";
    echo "<td>" . $row->Opportunities['description'] . "</td>";
    echo "</tr>";
}
?>
        </table>
    </div>
</body>

</html>