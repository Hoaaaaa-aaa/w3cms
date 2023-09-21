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
            <div class = "col-md-9 nav bg-light" style = "padding: 10px 20px;">   
                <nav class="navbar" style="width: 100%;">
                    <div>
                        <i class="bi bi-list"></i>
                        <a class="navbar-brand" style = "font-weight: bold;">PERMISSIONS</a>
                    </div>
                    <?php
                        include('layout/navbar.html');
                    ?>
                </nav>
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Class</th>
                        <th scope="col">Age</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Detail</th>
                        <th scope="col">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Sử dụng vòng lặp for để tạo các dòng -->
                        <?php
                        for ($i = 1; $i <= 10; $i++) {
                            echo "<tr>";
                            echo "<td>$i</td>";
                            echo "<td>Tên $i</td>";
                            echo "<td>Lớp $i</td>";
                            echo "<td>Tuổi $i</td>";
                            echo "<td><i class='bi bi-pencil-square'></i></td>";
                            echo "<td><i class='bi bi-eye'></i></td>";
                            echo "<td><i class='bi bi-trash3'></i></td>";
                            echo "</tr>";
                        }
                        ?>
                    </tbody>
                </table>             
                <ul class="pagination">
                    <li class="page-item"><a class="page-link" href="#">Trang trước</a></li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">Trang sau</a></li>
                </ul>
            </div>              
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>