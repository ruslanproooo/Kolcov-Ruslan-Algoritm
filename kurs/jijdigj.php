<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Данные о нефтепродуктах</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
    </style>
</head>
<body>
    <h1>Данные о нефтепродуктах</h1>
    <table>
        <tr>
            <th>Наименование</th>
            <th>Количество</th>
        </tr>
        <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "oil";

            $conn = new mysqli($servername, $username, $password, $dbname);

            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $sql = "SELECT nazvanie & kolichestvo_nefteprodukta FROM 'Kolichestvo'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<tr><td>" . $row["nazvanie"] . "</td><td>" . $row["kolichestvo_nefteprodukta"] . "</td></tr>";
                }
            } else {
                echo "0 результатов";
            }

            $conn->close();
        ?>
    </table>
</body>
</html>