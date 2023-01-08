<!-- Footer -->
<footer class="p-5 bg-light text-dark text-center position-relative">
    <div class="container">
        <div class="row py-3">
            <div class="col-xs-12 col-sm-4 d-block d-flex flex-column justify-content-center text-center">
                <h6>Bookstore</h6>
                <a href="template2.php">About Us</a>
                <div class="social">
                    <a href="#"><i class="bi bi-twitter text-dark mx-1"></i></a>
                    <a href="#"><i class="bi bi-facebook text-dark mx-1"></i></a>
                    <a href="#"><i class="bi bi-linkedin text-dark mx-1"></i></a>
                    <a href="#"><i class="bi bi-instagram text-dark mx-1"></i></a>
                </div>
            </div>
            <div class="col-xs-12 col-sm-4 d-block d-flex flex-column justify-content-center text-center">
                <h6>Help</h6>
                <a href="faq.php">FAQ</a>
                <a href="contact.php">Contact Us</a>
            </div>
            <div class="col-xs-12 col-sm-4 d-block d-flex flex-column justify-content-center text-center">
                <h6>Legal</h6>
                <a href="template3.php">Refund Policy</a>
                <a href="template3.php">Terms</a>
            </div>
        </div>
        <hr />
        <div>
            <p class="lead">Copyright &copy; 2023 Bookstore</p>
        </div>
        <a href="#" class="position-absolute bottom-0 end-0 p-5">
            <i class="bi bi-arrow-up-circle h1"></i>
        </a>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<script src="https://api.mapbox.com/mapbox-gl-js/v2.1.1/mapbox-gl.js"></script>

<script>
    mapboxgl.accessToken =
        "pk.eyJ1IjoiYnRyYXZlcnN5IiwiYSI6ImNrbmh0dXF1NzBtbnMyb3MzcTBpaG10eXcifQ.h5ZyYCglnMdOLAGGiL1Auw";
    var map = new mapboxgl.Map({
        container: "map",
        style: "mapbox://styles/mapbox/streets-v11",
        center: [-71.060982, 42.35725],
        zoom: 18,
    });
</script>
</body>

</html>