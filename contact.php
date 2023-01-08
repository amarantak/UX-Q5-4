<?php
include 'includes/navbar.php';
?>
<!-- Faq Showcase -->
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

<!-- Content Section -->
<!-- Contact & Map -->
<section class="p-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-md">
                <h2 class="text-center mb-4">Contact Info</h2>
                <ul class="list-group list-group-flush lead">
                    <li class="list-group-item">
                        <span class="fw-bold">Main Location:</span> 50 Main st Boston MA
                    </li>
                    <li class="list-group-item">
                        <span class="fw-bold">Phone:</span> (555) 555-5555
                    </li>
                    <li class="list-group-item">
                        <span class="fw-bold">Fax</span> (333) 333-3333
                    </li>
                    <li class="list-group-item">
                        <span class="fw-bold">Email:</span> (555)
                        email@email.com
                    </li>
                </ul>
            </div>
            <div class="col-md">
                <div id="map"></div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Form -->
<div class="form-container">
    <!-- Wrapper container -->
    <div class="container py-4">
        <h2 class="text-center mb-4">Send us a message</h2>

        <!-- Bootstrap 5 starter form -->
        <form id="contactForm" data-sb-form-api-token="API_TOKEN">

            <!-- Name input -->
            <div class="mb-3">
                <label class="form-label" for="name">Name</label>
                <input class="form-control" id="name" type="text" placeholder="Name" data-sb-validations="required" />
                <div class="invalid-feedback" data-sb-feedback="name:required">Name is required.</div>
            </div>

            <!-- Email address input -->
            <div class="mb-3">
                <label class="form-label" for="emailAddress">Email Address</label>
                <input class="form-control" id="emailAddress" type="email" placeholder="Email Address" data-sb-validations="required, email" />
                <div class="invalid-feedback" data-sb-feedback="emailAddress:required">Email Address is required.</div>
                <div class="invalid-feedback" data-sb-feedback="emailAddress:email">Email Address Email is not valid.</div>
            </div>

            <!-- Message input -->
            <div class="mb-3">
                <label class="form-label" for="message">Message</label>
                <textarea class="form-control" id="message" type="text" placeholder="Message" style="height: 10rem;" data-sb-validations="required"></textarea>
                <div class="invalid-feedback" data-sb-feedback="message:required">Message is required.</div>
            </div>

            <!-- Form submissions success message -->
            <div class="d-none" id="submitSuccessMessage">
                <div class="text-center mb-3">Form submission successful!</div>
            </div>

            <!-- Form submissions error message -->
            <div class="d-none" id="submitErrorMessage">
                <div class="text-center text-danger mb-3">Error sending message!</div>
            </div>

            <!-- Form submit button -->
            <div class="d-grid">
                <button class="btn btn-lg" id="submitButton" type="submit">Submit</button>
            </div>
        </form>
    </div>
</div>

<!-- SB Forms JS -->
<script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>

<?php
include 'includes/footer.php';
?>