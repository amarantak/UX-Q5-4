<?php
include 'includes/navbar.php';
?>
<!-- Template 2 Showcase -->
<section class="text-dark p-3 p-lg-0 pt-lg-3 text-center template-header">
    <div class="container">
        <div class="d-sm-flex justify-content">
            <div>
                <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Name of the section</li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="justify-content py-5 text-center">
            <h1>
                Name of the section
            </h1>
        </div>
    </div>
</section>

<!-- Content Sections -->
<section id="learn" class="p-5">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-md">
                <img src="img/temp2.jpg" class="img-fluid" alt="" />
            </div>
            <div class="col-md p-5">
                <h2>Title of the section</h2>
                <p class="lead">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                    Similique deleniti possimus magnam corporis ratione facere!
                </p>
                <p>
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cumque
                    reiciendis eius autem eveniet mollitia, at asperiores suscipit
                    quae similique laboriosam iste minus placeat odit velit quos,
                    nulla architecto amet voluptates?
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cumque
                    reiciendis eius autem eveniet mollitia, at asperiores suscipit
                    quae similique laboriosam iste minus placeat odit velit quos,
                    nulla architecto amet voluptates?
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Newsletter -->
<section class="bg-newsletter text-light p-5">
    <div class="container">
        <div class="d-md-flex justify-content-between align-items-center">
            <h3 class="mb-3 mb-md-0">Sign Up For Our Newsletter</h3>

            <div class="input-group news-input">
                <input type="text" class="form-control" placeholder="Enter Email" />
                <button class="btn btn-secondary btn-lg" type="button">Submit</button>
            </div>
        </div>
    </div>
</section>

<?php
include 'includes/footer.php';
?>