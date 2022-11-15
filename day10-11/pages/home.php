<?php include 'header.php'?>

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

<?php include 'footer.php'?>



