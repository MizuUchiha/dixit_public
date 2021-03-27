<?php require_once "../includes/header.php";
//$food = new Food(); ?>
<div class="container">
    <div id="carousel_index_top" class="carousel slide mt-2" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carousel_index_top" data-slide-to="0" class="active"></li>
            <li data-target="#carousel_index_top" data-slide-to="1"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100 img-fluid" src="../assets/img/index%20(2).jpg" alt="Second slide">
                <div class="carousel-caption p-2">
                    <h5>Lorem Ipsum</h5>
                    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vel massa vehicula,
                        ultrices nunc
                        ac, molestie arcu. Aliquam tincidunt sem a augue fringilla, ac condimentum libero euismod. In
                        sed porta mi. Donec vitae euismod nisi. Donec venenatis est nisi, non egestas justo pellentesque
                        sit amet. Nunc finibus dui eu commodo congue. Suspendisse potenti. Quisque egestas elit et arcu
                        cursus, non commodo lacus dictum. Mauris tempus ligula eget congue rhoncus. Praesent est purus,
                        lacinia eget quam a, pharetra maximus ipsum. Mauris risus nisl, pellentesque eget fermentum
                        eget, condimentum ac nunc. </p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100 img-fluid" src="../assets/img/index%20(3).jpg" alt="Third slide">
                <div class="carousel-caption p-2">
                    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi dictum vulputate
                        tortor eu semper.
                        Aliquam ullamcorper porta purus in porta. Cras sed tincidunt nunc. Aenean faucibus ex massa, sit
                        amet ultricies augue laoreet at. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Suspendisse quis hendrerit dolor, malesuada pretium tellus. Fusce fermentum sodales euismod.
                        Pellentesque feugiat ex in odio vehicula, quis placerat ex fringilla. Aliquam ornare commodo
                        leo, quis pretium est tempor eget. Morbi vehicula mi tempor, malesuada lectus vel, suscipit
                        odio.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="clearfix mb-3"></div>
<!--    <div class="row no-margin">-->
<!--        --><?php //foreach ($food->getCategory() as $index => $category) { ?>
<!--            <div class="--><?//= ((($index + 1) % 4 != 0)) ? 'col-6 col-md-4' : 'col-6 col-md-12' ?><!-- mb-1  d-flex align-items-stretch">-->
<!--                <div class="card">-->
<!--                    <h4 class="text-uppercase text-center">--><?//= $category['catname']; ?><!--</h4>-->
<!--                    --><?php //foreach ($food->getProduct("WHERE categoryid = " . $category['categoryid']) as $i => $product) { ?>
<!--                        <img src="../assets/img/products/--><?//= $product['photo']; ?><!--" class="img-fluid" alt="--><?//= $product['productname']; ?><!--">-->
<!--                    --><?php //} ?>
<!--                </div>-->
<!--            </div>-->
<!--        --><?php //} ?>
<!--    </div>-->
</div>
<?php require_once "../includes/footer.php"; ?>
