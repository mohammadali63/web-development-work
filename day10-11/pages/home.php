<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css"/>
</head>
<body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <div class="container">
            <a href="action.php?page=home" class="navbar-brand">LOGO</a>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#menu">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="menu">
                <ul class="navbar-nav ms-auto">
                    <li><a href="action.php?page=home" class="nav-link">Home</a></li>
                    <li><a href="" class="nav-link">About</a></li>
                    <li class="dropdown">
                        <a href="" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Category</a>
                            <ul class="dropdown-menu">
                                <?php foreach ($categories as $category) { ?>
                                <li><a href=""class="dropdown-item"><?php echo $category['name']?></a></li>
                                <?php } ?>
                            </ul>
                    </li>
                    <li><a href="" class="nav-link">Contact</a></li>
                    <li class="dropdown">
                        <a href="" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Brand</a>
                            <ul class="dropdown-menu">
                                <?php foreach ($brands as $brand) { ?>
                                <li><a href="action.php?page=brand&&id= <?php echo $brand['id']; ?>"class="dropdown-item"><?php echo $brand['name']?></a></li>
                                <?php } ?>
                            </ul>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

    <section class="bg-secondary py-5">
        <div class="container">
            <div class="row">
                <?php
                $i=0;
                foreach ($products as $product): if ($i==8){break;}
                ?>
                <div class="col-md-3 mb-3">
                    <div class="card h-100">
                        <img src="assets/img/<?php echo $product['img']; ?>" class="img-fluid" alt="" height="200" width="260"/>
                        <div class="card-body">
                            <h3><?php echo $product['name']; ?> </h3>
                            <p><?php echo $product['price']; ?></p>
                            <hr/>
                            <a href="" class="btn btn-outline-danger">Read More</a>
                            <a href="" class="btn btn-dark">Add to Cart</a>
                        </div>
                    </div>
                </div>
                <?php $i++; endforeach; ?>
            </div>
        </div>
    </section>



<script src="assets/js/bootstrap.bundle.js"></script>
</body>
</html>
