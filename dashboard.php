<?php
session_start();
include "authFunc.php";
$data = getData();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css">
    <link rel="stylesheet" href="./assets/style.css">
</head>

<body>
    <section>
        <?php include_once './partials/nav.php' ?>
    </section>
    <section class="users">
        <div class="user-list">
            <h2>User list</h2>
            <div>
                <table>
                    <thead>
                        <tr>
                            <th>User name</th>
                            <th>Email</th>
                            <th>photo</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($data as $user) : ?>
                            <tr>
                                <td><?= $user[0] ?></td>
                                <td><?= $user[2] ?></td>
                                <td class="user-img"><img src="./uploads/<?= $user[3] ?>" alt=""></td>
                            </tr>
                        <?php endforeach; ?>

                    </tbody>
                </table>
            </div>
        </div>
    </section>
</body>

</html>