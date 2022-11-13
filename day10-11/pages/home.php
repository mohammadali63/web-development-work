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
            <a href="" class="navbar-brand">LOGO</a>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#menu">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="menu">
                <ul class="navbar-nav mx-auto">
                    <li><a href="" class="nav-link">Home</a></li>
                    <li><a href="" class="nav-link">About</a></li>
                    <li class="dropdown">
                        <a href="" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Service</a>
                            <ul class="dropdown-menu">
                                <?php foreach ($categories as $category) { ?>
                                <li><a href=""class="dropdown-item"><?php echo $category['name']?></a></li>
                                <?php } ?>
                            </ul>
                    </li>
                    <li><a href="" class="nav-link">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="bg-secondary py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="card h-100">
                        <img src="assets/img/26.jpg" class="img-fluid" alt="" height="200" width="260"/>
                        <div class="card-body">
                            <h1>This is product heading</h1>
                            <p>This is product description</p>
                            <hr/>
                            <a href="" class="btn btn-outline-danger">Read More</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card h-100">
                        <img src="assets/img/26.jpg" class="img-fluid" alt="" height="200" width="260"/>
                        <div class="card-body">
                            <h1>This is product heading</h1>
                            <p>This is product description</p>
                            <hr/>
                            <a href="" class="btn btn-outline-danger">Read More</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card h-100">
                        <img src="assets/img/26.jpg" class="img-fluid" alt="" height="200" width="260"/>
                        <div class="card-body">
                            <h1>This is product heading</h1>
                            <p>This is product description</p>
                            <hr/>
                            <a href="" class="btn btn-outline-danger">Read More</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card h-100">
                        <img src="assets/img/26.jpg" class="img-fluid" alt="" height="200" width="260"/>
                        <div class="card-body">
                            <h1>This is product heading</h1>
                            <p>This is product description</p>
                            <hr/>
                            <a href="" class="btn btn-outline-danger">Read More</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>



<script src="assets/js/bootstrap.bundle.js"></script>
</body>
</html>
