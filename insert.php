<?php
$conn=new mysqli("localhost","root","","crud");
if (isset($_POST['submit'])) {
    $usernames=$_POST['usernames'];
    $password=$_POST['password'];
    $email=$_POST['email'];
    $sql="INSERT INTO `users`(`id`, `usernames`, `password`, `email`) VALUES ('','$usernames','$password','$email')";
    $res=mysqli_querry($conn,$sql);
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $conn=new mysqli("localhost","root","","crud");
    $sql="SELECT * FROM `users`";
    $res=mysqli_query($conn,$sql);
    ?>
    <table border="1">
        <tr>
            <th>id</th>
            <th>usernames</th>
            <th>password</th>
            <th>email</th>
        </tr>
        <?php
        while ($row=mysqli_fetch_assoc($res)) {
            ?>
            <tr>
                <td><?php echo $row['id'];?>id</td>
                <td><?php echo $row['usernames'];?>usernames</td>
                <td><?php echo $row['password'];?>password</td>
                <th><?php echo $row['email'];?>email</th>
                <th><?php echo $row?></th>
            </tr>
            <?php
        }
        ?>
    </table>
</body>
</html>