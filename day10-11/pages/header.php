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
