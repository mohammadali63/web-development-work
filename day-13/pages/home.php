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

<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container">
        <a href="" class="navbar-brand">My php</a>
        <ul class="navbar-nav">
            <li><a href="" class="nav-link">Home</a></li>
            <li><a href="" class="nav-link">About</a></li>
        </ul>
    </div>

</nav>

<section class="py-5 bg-info">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card">
                    <div class="card-header">Full Name Program</div>
                    <div class="card-body">
                        <form action="action.php" method="post">
                            <div class="row mb-3">
                                <label class="col-md-3">First Name</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="first_name"/>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-md-3">Last Name</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="last_name"/>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-md-3">Full Name</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" />
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-md-3"></label>
                                <div class="col-md-9">
                                    <input type="submit" class="btn btn-outline-success px-5" value="Make Full Name" name="full_name_btn"/>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>

        </div>

    </div>
</section>

<script src="assets/js/bootstrap.bundle.js"></script>
</body>
</html>
