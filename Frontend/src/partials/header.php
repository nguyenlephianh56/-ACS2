<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dịch vụ K&A</title>
    <!-- boostrap css -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" 
     rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" 
     crossorigin="anonymous">
    <!-- bootstrap icon -->
     <!-- icon boostrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

     <!-- css -->
        <link rel="stylesheet" href="/K&A/Frontend/src/assests/css/style.css">
    <!-- css reponsive -->
        <link rel="stylesheet" media="screen and (max-width: 768px)" href="/K&A/Frontend/src/assests/css/reponsivecss.css">
</head>

<body>
    <?php
    // Đảm bảo session đã được start ở file cha (index.php) trước khi include file này
    // Kiểm tra biến session để xem người dùng đã đăng nhập chưa
    // Đây là ví dụ, bạn hãy thay 'user_name' bằng key thực tế trong $_SESSION của bạn
    $is_logged_in = isset($_SESSION['user_name']); 
?>

<nav class="navbar navbar-expand-lg navbar-light fixed-top" style="background-color: #EFECE3;">
    <div class="container-fluid">
        
        <a class="navbar-brand me-5" href="index.php">
            <img src="assets/images/logo.png" alt="logo" style="height: 80px; width: auto"> 
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#centeredNav" aria-controls="centeredNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse w-100" id="centeredNav">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0 justify-content-center">
                <li class="nav-item me-4"> 
                    <a class="nav-link text-dark fw-bold" href="#">Kí Túc Xá</a>
                </li>
                <li class="nav-item me-4">
                    <a class="nav-link text-dark fw-bold" href="#">Phòng trọ</a>
                </li>
                <li class="nav-item me-4">
                    <a class="nav-link text-dark fw-bold" href="#">Nguyên Căn</a>
                </li>
                <li class="nav-item me-4">
                    <a class="nav-link text-dark fw-bold" href="#">Chung Cư Mini</a>
                </li>
            </ul>

            <div class="d-flex align-items-center"> 
                
                <a href="#" class="text-secondary fs-4 me-3"><i class="bi bi-heart"></i></a>
                <a href="#" class="text-secondary fs-4 me-4"><i class="bi bi-bell"></i></a>

                <?php if ($is_logged_in): ?>
                    <div class="dropdown me-3">
                        <button class="btn btn-outline-dark dropdown-toggle rounded-pill px-3" type="button" id="userDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                            Chào, <strong><?php echo $_SESSION['user_name']; ?></strong> <i class="bi bi-person-circle"></i>
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="userDropdown">
                            <li><a class="dropdown-item" href="profile.php">Hồ sơ</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item text-danger" href="logout.php">Đăng xuất</a></li>
                        </ul>
                    </div>

                <?php else: ?>
                      <a href="" ><button class="btn btn-custom me-2 px-3 text-nowrap rounded-pill">
                    Đăng nhập <i class="bi bi-person-fill"></i>    
                </button> </a>
                <?php endif; ?>
                <a href="post_news.php">
                    <button class="btn btn-custom me-2 px-3 text-nowrap rounded-pill">
                        Đăng tin <i class="bi bi-pencil-square"></i>
                    </button>
                </a>
                
            </div>
        </div>
    </div>      
</nav>
</body>