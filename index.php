<?php
    require_once('includes/header.php');


    $types= array("web","html","wordpress","sites","apps");
?>

<div class="container home">
    <div class="page-header">
        <h1>Portfolio</h1>
    </div>
    <div class="button-group filter-button-group">
        <button data-filter="*">Show All</button>
        <?php
        foreach ($types as &$value) {
            echo '<button data-filter=".'.$value.'">'.$value.'</button> ';
        }
        ?>
    </div>
    <div class="grid">
        
        <?php 
        for ($i=0;$i<15;$i++)
        {
            $class = $types[mt_rand(0, count($types) - 1)];
            ?>
            
            <!-- <div class="pitem hvr-bounce-to-top grid-item thumbnail <?php echo $class ?>"> -->
            <div class="pitem grid-item thumbnail <?php echo $class ?> view  view-first">
                
                <img width="250" height="250" src="img/test.png" alt="...">
                <div class="mask">
                    <h2>Thumbnail label</h2>
                    <p>Thumbnail caption</p>
                    <a href="#" class="btn btn-primary info" role="button">About</a> 
                    <a href="#" class="btn btn-default info" role="button">View Project</a>
                </div>
            </div>
            <?php
        }
        ?>
    </div>
</div>

<?php
    require_once('includes/footer.php');
?>