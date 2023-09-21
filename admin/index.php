<?php 
$conn = mysqli_connect(hostname: 'localhost', username: 'root',password: '',database:'index');

if (!$conn){
    die("Can not connect");
}
$currentPage = isset($_GET['page']) ? $_GET['page'] : 1; // Trang hiện tại, mặc định là trang 1
    $itemsPerPage = 10; // Số mục trên mỗi trang
    $offset = ($currentPage - 1) * $itemsPerPage; // Vị trí bắt đầu của trang hiện tại
    //thực hiện truy vấn
    $sql = "SELECT * FROM users ORDER BY User_id ASC LIMIT $itemsPerPage OFFSET $offset";
    $result = $conn->query($sql);

    //Xử lý kết quả 
if ($result->num_rows > 0){
    $data = [];
    while ($row = $result->fetch_assoc()){// Fetch_assoc: Lấy ra kết quả dưới dạng kết hợp
        $data[] = $row;
    }
// $users = mysqli_fetch_all($result);
    // echo "<pre>";
    // print_r($data);
    // echo "</pre>";
    $totalItems = 50/* tổng số mục dữ liệu từ truy vấn SQL */;
    $totalPages = ceil($totalItems / $itemsPerPage); // Tổng số trang
}
// try{
//     $conn = new PDO('mysql:host= localhost;dbname=index', username: 'root',password: '');
//     $sql = "SELECT * FROM users ORDER BY created_at DESC LIMIT 10";
//     $stmt = $conn->prepare($sql);
//     $stmt->execute();

//     $users = $stmt->fetchAll();
// }
// catch(PDOException $e){
//     echo $e->getMessage();
// }
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
            <div class = "col-md-9 nav bg-light" style = "padding: 10px 20px;">   
                <nav class="navbar" style="width: 100%;">
                    <div>
                        <i class="bi bi-list"></i>
                        <a class="navbar-brand" style = "font-weight: bold;">USERS</a>
                    </div>
                    <?php
                        include('layout/navbar.html');
                    ?>
                </nav>
                <div>
                <button class="btn btn-danger"><i class="bi bi-person-add"></i>Add a new user</button>
                </div>
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <!-- <th scope="col">Pass</th> -->
                        <th scope="col">Date</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Detail</th>
                        <th scope="col">Delete</th>
                        </tr>
                    </thead>
                <tbody>
                <!-- Sử dụng vòng lặp for để tạo các dòng -->
                    <?php if (isset($data) && isset($totalPages)) {
                        foreach($data as $value): ?>
                            <tr>
                                <td><?= $value['User_id']; ?></td>
                                <td><?= $value['Username']; ?></td>
                                <td><?= $value['Email']; ?></td>
                                <!-- <td><?= $value['Pass']; ?></td> -->
                                <td><?= $value['Created_at']; ?></td>
                                <td><a href="#" class=""><i class='bi bi-pencil-square' style="color: red;"></i></a></td>
                                <td><a href="#" class=""><i class='bi bi-eye'  style="color: red;"></i></a></td>
                                <td><a href="users_delete.php ?id=<?= $users[0];?>" class=""><i class='bi bi-trash3'  style="color: red;"></i></a>

                                <div class="modal fade" tabindex="-1" role="dialog">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Modal title</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <p>Modal body text goes here.</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-primary">Save changes</button>
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                            
                            </td>
                            </tr>
                    <?php endforeach;
                    }?>
                </tbody>
                </table>  
                <nav aria-label="Page navigation">
                    <ul class="pagination">
                        <li class="page-item">
                            <a class="page-link" href="?page=<?= $currentPage - 1; ?>" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                            </a>
                        </li>
                        <?php for ($i = 1; $i <= $totalPages; $i++): ?>
                            <li class="page-item <?= $i == $currentPage ? 'active' : ''; ?>">
                                <a class="page-link" href="?page=<?= $i; ?>"><?= $i; ?></a>
                            </li>
                        <?php endfor; ?>
                        <li class="page-item <?= $currentPage == $totalPages ? 'disabled' : ''; ?>">
                            <a class="page-link" href="?page=<?= $currentPage + 1; ?>" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>              
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>