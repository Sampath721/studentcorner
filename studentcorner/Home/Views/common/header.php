<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Student Corner</title>
    <link href="<?= base_url() ?>public/assets/css/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>public/assets/css/style.css" rel="stylesheet">
    <link href="<?= base_url() ?>public/assets/css/font-awesome.css" rel="stylesheet">
    <link href="<?= base_url() ?>public/assets/css/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="<?= base_url() ?>public/assets/css/font-awesome.min.css" rel="stylesheet">
    <link rel="icon" href="<?= base_url() ?>public/assets/images/studentcorner.png" type="image/png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  </head>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg fixed-top" style="background: linear-gradient(90deg, rgba(0,174,255,1) 0%, rgba(14,123,160,1) 0%, rgba(32,100,127,1) 100%); ">
        <div class="container">
            <a class="navbar-brand" href="<?= base_url() ?>">Student Corner</a>
            <button class="navbar-toggler shadow none border-0" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class=""><img src="<?= base_url() ?>public/assets/images/icons8-drag-list-down-48.png"
                        style="height: 35px;width:35px" alt="" srcset=""></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="<?=base_url('/books') ?>">View Books To Buy</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?=base_url('/previous_notes') ?>">Download Notes</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#college">About Us</a>
                    </li>
                    <?php if (!session()->has('loginname')) { ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?=base_url('/login') ?>">Log In</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('/signup') ?>">Sign Up</a>
                        </li>
                    <?php } ?>
                    <?php if (session()->has('loginname')) { ?>
                
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('/signup') ?>"><i class="fa-regular fa-comments"></i> Messages </a>
                        </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="#college"><i class="fa-regular fa-user" style="color: #ffffff;"></i> Hii, <?php !empty(session('loginname')) ? ucfirst(session('loginname')) : ''; ?></a>
                    </li> -->
                    <!-- Dropdown Menu -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa-regular fa-user" style="color: #ffffff;"></i> Hii, <?php echo !empty(session('loginname')) ? ucfirst(session('loginname')):''; ?>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Profile</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item"  href="<?= base_url('/exit') ?>">Logout</a>
                        </div>
                    </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </nav>