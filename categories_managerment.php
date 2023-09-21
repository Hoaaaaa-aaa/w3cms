<?php 
$conn = mysqli_connect(hostname: 'localhost', username: 'root',password: '',database:'index');

if (!$conn){
    die("Can not connect");
}

$sql = "SELECT * FROM groups ORDER BY Group_name";

$result = $conn->query($sql);

if ($result->num_rows > 0){
    $data = [];
    while ($row = $result->fetch_assoc()){
        $data[] = $row;
    }

    // echo "<pre>";
    // print_r($data);
    // echo "</pre>";
}
?>

<!doctype html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hompage of Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
</head>
<style>
    .nav-link{
        color:red;
    }
    .nav-link:hover{
        color:red;
        font-weight: bold;
    }
    li a>i{
        padding-right: 5px;
    }
</style>
<body>
    <div class = "container-fluid">
        <div class = "row">
            <?php
                include('layout/sidebar.html');
            ?>
            <div class = "col-md-9 nav bg-light" style = "padding: 0px 20px;">   
                <nav class="navbar" style="width: 100%;">
                    <div>
                        <i class="bi bi-list"></i>
                        <a class="navbar-brand" style = "font-weight: bold;">GROUPS</a>
                    </div>
                    <?php
                        include('layout/navbar.html');
                    ?>
                </nav>
                <div>
                <button class="btn btn-danger"><i class="bi bi-person-add"></i>Add Group</button>
                </div>
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">Group Name</th>
                        <th scope="col">User Count</th>
                        <th scope="col">Perm Count</th>
                        <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Sử dụng vòng lặp for để tạo các dòng -->
                        <?php
                        foreach($data as $value){
                        ?>
                            <tr>
                                <td><?= $value['Group_name'];?></td>
                                <td><?= $value['User_count'];?></td>
                                <td><?= $value['Perm_count'];?></td>
                                <td>
                                    <a href=''><i class='bi bi-pencil-square'  style="color: red;"></i></a>
                                    <a href =''><i class='bi bi-trash3'  style="color: red;"></i></a>
                                </td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>             
            </div>              
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>