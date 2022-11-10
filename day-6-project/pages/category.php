<?php include 'header.php';?>
<?php foreach ($blogs as $blog) { ?>
<div class="div">
    <img src="assets/img/<?php echo $blog['image']?>" alt="" height="250" width="300"/>
    <div>
        <h3><?php echo $blog['title'];?> </h3>
        <p><?php echo $blog['description'];?>></p>
        <a href=""><button class="btn time text-center ">Read More</button></a>
    </div>

</div>
<?php } ?>

<?php include 'fotter.php'?>
