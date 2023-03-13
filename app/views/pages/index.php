<?php require APPROOT . '/views/inc/header.php'; ?>
<div class="jumbotron jumbotron-flud text-center">
  <div class="container">
    <img src="./public/img/logoBlack.svg" alt="Logo" width="300" height="100">
    <!-- <h1 class="display-3"><?php echo $data['title']; ?></h1> -->
    <p class="lead"><?php echo $data['description']; ?></p>
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="./public/img/office1.jpg" class="d-block w-100" alt="Innovation slide"
          style="filter: brightness(50%);">
        <div class="carousel-caption d-none d-md-block">
          <h5>Innovation</h5>
          <p> Embracing new ideas and technology to develop better products and services that meet the changing needs
            of customers.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="./public/img/office2.jpg" class="d-block w-100" alt="Diversity and Inclusion slide"
          style="filter: brightness(50%);">
        <div class="carousel-caption d-none d-md-block">
          <h5>Diversity and Inclusion</h5>
          <p>Creating a welcoming, supportive, and respectful workplace culture that values and celebrates the
            differences in people and ensures equal opportunities for all.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="./public/img/office3.jpg" class="d-block w-100" alt="Integrity slide"
          style="filter: brightness(50%);">
        <div class="carousel-caption d-none d-md-block">
          <h5>Integrity</h5>
          <p>Operating with transparency, fairness, and accountability, and upholding the highest standards of ethical
            behavior to build and maintain trust with customers, employees, and stakeholders.</p>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
</div>
<!--Main layout-->
<main class="mt-5">
  <div class="container">
    <!--Section: Content-->
    <section>
      <div class="row">
        <div class="col-md-6 gx-5 mb-4">
          <div class="bg-image hover-overlay ripple shadow-2-strong rounded-5" data-mdb-ripple-color="light">
            <img src="./public/img/office5.webp" class="img-fluid" />
            <a href="#!">
              <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
            </a>
          </div>
        </div>

        <div class="col-md-6 gx-5 mb-4">
          <h4><strong>Mission Statement</strong></h4>
          <p class="text-muted">
            Our employee portal is dedicated to creating an engaging and inclusive workplace culture where employees
            feel valued and have access to the resources they need to achieve their personal and professional goals. We
            strive to foster a sense of community and collaboration, empowering our employees to grow and succeed as
            individuals and as a team
          </p>
        </div>
      </div>
    </section>
    <!--Section: Content-->

    <hr class="my-5" />

    <!--Section: Content-->
    <section class="text-center">
      <h4 class="mb-5"><strong>Facilis consequatur eligendi</strong></h4>

      <div class="row">
        <div class="col-lg-4 col-md-12 mb-4">
          <div class="card">
            <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
              <img src="https://mdbootstrap.com/img/new/standard/nature/184.jpg" class="img-fluid" />
              <a href="#!">
                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
              </a>
            </div>
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">
                Some quick example text to build on the card title and make up the bulk of the
                card's content.
              </p>
              <a href="#!" class="btn btn-primary">Button</a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 mb-4">
          <div class="card">
            <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
              <img src="https://mdbootstrap.com/img/new/standard/nature/023.jpg" class="img-fluid" />
              <a href="#!">
                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
              </a>
            </div>
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">
                Some quick example text to build on the card title and make up the bulk of the
                card's content.
              </p>
              <a href="#!" class="btn btn-primary">Button</a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 mb-4">
          <div class="card">
            <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
              <img src="https://mdbootstrap.com/img/new/standard/nature/111.jpg" class="img-fluid" />
              <a href="#!">
                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
              </a>
            </div>
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">
                Some quick example text to build on the card title and make up the bulk of the
                card's content.
              </p>
              <a href="#!" class="btn btn-primary">Button</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <?php require APPROOT . '/views/inc/footer.php'; ?>