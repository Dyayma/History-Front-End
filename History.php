<?php
$conn = mysqli_connect("localhost", "root", "", "lms_db");

$query = "SELECT * FROM history ORDER BY date_created DESC";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html>
<head>
    <title>History</title>

    <style>
        body{
            font-family: Arial;
            background-color: #f4f4f4;
            padding: 20px;
        }

        .container{
            background: white;
            padding: 20px;
            border-radius: 10px;
        }

        h2{
            margin-bottom: 20px;
        }

        table{
            width: 100%;
            border-collapse: collapse;
        }

        table, th, td{
            border: 1px solid #ddd;
        }

        th{
            background-color: #007bff;
            color: white;
            padding: 12px;
        }

        td{
            padding: 10px;
            text-align: center;
        }

        tr:nth-child(even){
            background-color: #f9f9f9;
        }
    </style>
</head>

<body>

<div class="container">

    <h2>History Records</h2>

    <table>
        <tr>
            <th>ID</th>
            <th>User ID</th>
            <th>Book ID</th>
            <th>Action</th>
            <th>Date</th>
        </tr>

        <?php while($row = mysqli_fetch_assoc($result)) { ?>

        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['user_id']; ?></td>
            <td><?php echo $row['book_id']; ?></td>
            <td><?php echo $row['action']; ?></td>
            <td><?php echo $row['date_created']; ?></td>
        </tr>

        <?php } ?>

    </table>

</div>

</body>
</html>
