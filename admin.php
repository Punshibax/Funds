<?php
// Fetch all user data from localStorage (or a data file, for example, data.json)
$dataFile = 'uploads/data.json'; // Change to your file path
if (file_exists($dataFile)) {
    $users = json_decode(file_get_contents($dataFile), true);
} else {
    $users = [];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f4f4f4;
        }

        .container {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
        }

        table {
            width: 100%;
            margin-top: 20px;
            border-collapse: collapse;
        }

        table, th, td {
            border: 1px solid #ddd;
            text-align: left;
        }

        th, td {
            padding: 10px;
        }

        img {
            width: 150px;
        }

        .btn {
            padding: 10px;
            margin-top: 20px;
            font-size: 16px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }

        .btn:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Admin Dashboard</h1>
    <h3>User Submissions</h3>

    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Screenshot</th>
                <th>IP Address</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user): ?>
                <tr>
                    <td><?= htmlspecialchars($user['name']); ?></td>
                    <td><img src="data:image/jpeg;base64,<?= htmlspecialchars($user['screenshot']); ?>" alt="Screenshot"></td>
                    <td><?= htmlspecialchars($user['ip']); ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <div>
        <button class="btn" onclick="location.href='clearData.php'">Clear All Data</button>
        <button class="btn" onclick="location.href='exportData.php'">Export Data</button>
        <button class="btn" onclick="location.href='logout.php'">Logout</button>
    </div>
</div>

</body>
</html>