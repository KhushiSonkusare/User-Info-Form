<?php
    require 'create.php';
    require 'Form.php';

    $pdo = connectToDb();


    $statement = $pdo->prepare('SELECT * from datastored'); 
    $statement->execute();
    $datas = $statement->fetchAll(PDO::FETCH_CLASS, 'Form');

    
    
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tasks</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css"/>
    <link rel="stylesheet" href="assets/css/utilities.css"/>

    <style>
        table {
            border-collapse: collapse;
            width: 80%; 
            margin: 20px auto; 
        }

        th, td {
            border: 1px solid #000;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2; 
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1 style="text-align: center">REGISTERED USERS</h1>
<table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Gender</th>
            <th>City</th>
        </tr>
        <?php foreach ($datas as $data): ?>
            <tr>
                <td><?= $data->id ?></td>
                <td><?= $data->name ?></td>
                <td><?= $data->email ?></td>
                <td><?= $data->gender ?></td>
                <td><?= $data->city ?></td>
            </tr>
        <?php endforeach; ?>
</table>

<?php echo "<br><a href='index.view.php'>Go back</a>"; ?>
</body>