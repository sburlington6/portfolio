<?php
    require_once('includes/header.php');
?>

<div class="container">
    <div class="page-header">
        <h1>Portfolio</h1>
    </div>
    <div class="button-group filter-button-group">
        <button data-filter="*">show all</button>
        <button data-filter=".web">web</button>
    </div>
    <div class="grid">
        <div class="grid-item thumbnail web">
            <img src="..." alt="...">
            <div class="caption">
                <h3>Thumbnail label</h3>
                <p>Thumbnail caption</p>
                <p>
                    <a href="#" class="btn btn-primary" role="button">About</a> 
                    <a href="#" class="btn btn-default" role="button">View Project</a>
                </p>
            </div>
        </div>
        <div class="grid-item thumbnail">
            <img src="..." alt="...">
            <div class="caption">
                <h3>Thumbnail label</h3>
                <p>Thumbnail caption</p>
                <p>
                    <a href="#" class="btn btn-primary" role="button">About</a> 
                    <a href="#" class="btn btn-default" role="button">View Project</a>
                </p>
            </div>
        </div>
        <div class="grid-item thumbnail">
            <img src="..." alt="...">
            <div class="caption">
                <h3>Thumbnail label</h3>
                <p>Thumbnail caption</p>
                <p>
                    <a href="#" class="btn btn-primary" role="button">About</a> 
                    <a href="#" class="btn btn-default" role="button">View Project</a>
                </p>
            </div>
        </div>
    </div>
</div>

<?php
    require_once('includes/footer.php');
?>