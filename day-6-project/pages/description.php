<?php include 'header.php'?>


        <div>
            <?php foreach ($blogs as $blog) { ?>
                <div class="div">
                    <h3><?php echo $blog['title']?></h3>

                        <div>
                            <img src="assets/img/<?php echo $blog['image']?>" alt="" height="250" width="400"/>
                            <p><?php echo $blog['full_description']?></p>
                        </div>
                </div>
            <?php } ?>
        </div>





<?php include 'fotter.php'?>
