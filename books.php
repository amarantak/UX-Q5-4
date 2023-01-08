<?php
include 'includes/navbar.php';
?>
<!-- Books Showcase -->
<section class="text-dark p-5 p-lg-0 pt-lg-3 text-center template-header">
    <div class="container">
        <div class="d-sm-flex justify-content">
            <div>
                <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item"><a href="books.php">Books</a></li>
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

<!-- Cards with books -->
<section class="p-5">
    <div class="container">
        <div class="row text-left g-5">
            <div class="col-sm-3">
                <div class="card card-1 text-dark">
                    <img src="img/hobbit-cover.webp" alt="Image of Books">
                    <div class="card-body text-left">
                        <h3 class="card-title mb-3">Title</h3>
                        <p class="card-text">
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit.

                        </p>
                        <p>
                            <b> 21,99$</b>
                        </p>
                        <a href="#" class="btn btn-primary">Buy Now</a>
                        <a href="#" class="btn disabled">See Detail</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card card-2 text-dark">
                    <img src="img/hobbit-cover.webp" alt="Image of Books">
                    <div class="card-body text-left">
                        <h3 class="card-title mb-3">Title</h3>
                        <p class="card-text">
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit.

                        </p>
                        <p>
                            <b> 21,99$</b>
                        </p>
                        <a href="#" class="btn btn-primary">Buy Now</a>
                        <a href="#" class="btn disabled">See Detail</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card card-3 text-dark">
                    <img src="img/hobbit-cover.webp" alt="Image of Books">
                    <div class="card-body text-left">
                        <h3 class="card-title mb-3">Title</h3>
                        <p class="card-text">
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit.

                        </p>
                        <p>
                            <b> 21,99$</b>
                        </p>
                        <a href="#" class="btn btn-primary">Buy Now</a>
                        <a href="#" class="btn disabled">See Detail</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card card-4 text-dark">
                    <img src="img/hobbit-cover.webp" alt="Image of Books">
                    <div class="card-body text-left">
                        <h3 class="card-title mb-3">Title</h3>
                        <p class="card-text">
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit.

                        </p>
                        <p>
                            <b> 21,99$</b>
                        </p>
                        <a href="#" class="btn btn-primary">Buy Now</a>
                        <a href="#" class="btn disabled">See Detail</a>
                    </div>
                </div>
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