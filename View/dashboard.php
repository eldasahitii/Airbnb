<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>SURNAME</th>
            <th>EMAIL</th>
            <th>PASSWORD</th>
            <th>CONFIRM PASSWORD</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        <?php
        include_once '..Repository/userRepository.php';
$userRepository=new UserRepository();
$users=($users as $user){
    echo 
    "<tr>
     "
            <tr>
                <td>$user[Id]</td>
                <td>$user[Name]</td> 
                <td>$user[Surname]</td> 
                <td>$user[Email]</td> 
                <td>$user[Password]</td>
                <td>$user[ConfirmP]</td>
                <td><a href='edit.php?id=$user[Id]'>Edit</a></td>
                <td><a href='delete.php?id=$user[Id]'>Delete</a></td>
            </tr>
            ";"
}

        ?>
    </table>
</body>
</html>