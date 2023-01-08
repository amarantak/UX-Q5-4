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
<!-- Question Accordion -->
<section id="questions" class="p-5">
    <div class="container">
        <h2 class="text-center mb-4">Frequently Asked Questions</h2>
        <div class="accordion accordion-flush" id="questions">
            <!-- Item 1 -->
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#question-one">
                        Question?
                    </button>
                </h2>
                <div id="question-one" class="accordion-collapse collapse" data-bs-parent="#questions">
                    <div class="accordion-body">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam
                        beatae fuga animi distinctio perspiciatis adipisci velit maiores
                        totam tempora accusamus modi explicabo accusantium consequatur,
                        praesentium rem quisquam molestias at quos vero. Officiis ad
                        velit doloremque at. Dignissimos praesentium necessitatibus
                        natus corrupti cum consequatur aliquam! Minima molestias iure
                        quam distinctio velit.
                    </div>
                </div>
            </div>
            <!-- Item 2 -->
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#question-two">
                        Question?
                    </button>
                </h2>
                <div id="question-two" class="accordion-collapse collapse" data-bs-parent="#questions">
                    <div class="accordion-body">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam
                        beatae fuga animi distinctio perspiciatis adipisci velit maiores
                        totam tempora accusamus modi explicabo accusantium consequatur,
                        praesentium rem quisquam molestias at quos vero. Officiis ad
                        velit doloremque at. Dignissimos praesentium necessitatibus
                        natus corrupti cum consequatur aliquam! Minima molestias iure
                        quam distinctio velit.
                    </div>
                </div>
            </div>
            <!-- Item 3 -->
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#question-three">
                        Question?
                    </button>
                </h2>
                <div id="question-three" class="accordion-collapse collapse" data-bs-parent="#questions">
                    <div class="accordion-body">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam
                        beatae fuga animi distinctio perspiciatis adipisci velit maiores
                        totam tempora accusamus modi explicabo accusantium consequatur,
                        praesentium rem quisquam molestias at quos vero. Officiis ad
                        velit doloremque at. Dignissimos praesentium necessitatibus
                        natus corrupti cum consequatur aliquam! Minima molestias iure
                        quam distinctio velit.
                    </div>
                </div>
            </div>
            <!-- Item 4 -->
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#question-four">
                        Question?
                    </button>
                </h2>
                <div id="question-four" class="accordion-collapse collapse" data-bs-parent="#questions">
                    <div class="accordion-body">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam
                        beatae fuga animi distinctio perspiciatis adipisci velit maiores
                        totam tempora accusamus modi explicabo accusantium consequatur,
                        praesentium rem quisquam molestias at quos vero. Officiis ad
                        velit doloremque at. Dignissimos praesentium necessitatibus
                        natus corrupti cum consequatur aliquam! Minima molestias iure
                        quam distinctio velit.
                    </div>
                </div>
            </div>
            <!-- Item 5 -->
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#question-five">
                        Question?
                    </button>
                </h2>
                <div id="question-five" class="accordion-collapse collapse" data-bs-parent="#questions">
                    <div class="accordion-body">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam
                        beatae fuga animi distinctio perspiciatis adipisci velit maiores
                        totam tempora accusamus modi explicabo accusantium consequatur,
                        praesentium rem quisquam molestias at quos vero. Officiis ad
                        velit doloremque at. Dignissimos praesentium necessitatibus
                        natus corrupti cum consequatur aliquam! Minima molestias iure
                        quam distinctio velit.
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
include 'includes/footer.php';
?>