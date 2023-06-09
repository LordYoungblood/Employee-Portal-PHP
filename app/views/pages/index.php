<?php require APPROOT . '/views/inc/header.php'; ?>
<div class="jumbotron jumbotron-fluid text-center">
  <div class="container">

    <img src="./public/img/logoBlack.svg" alt="Logo" style="margin-bottom: 50px" width="300" height="100">
    <!-- <h1 class="display-3"><?php echo $data['title']; ?></h1> -->
    <!-- <p class="lead"><?php echo $data['description']; ?></p> -->
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="./public/img/office1.jpg" class="d-block w-100" alt="Slide 1">
        </div>
        <div class="carousel-item">
          <img src="./public/img/office2.jpg" class="d-block w-100" alt="Slide 2">
        </div>
        <div class="carousel-item">
          <img src="./public/img/office3.jpg" class="d-block w-100" alt="Slide 3">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>

</div>
<!--Main layout-->
<main class="my-5">
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
      <h4 class="mb-5"><strong>Values</strong></h4>

      <div class="row">
        <div class="col-lg-4 col-md-12 mb-4">
          <div class="card">
            <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
              <img src="./public/img/card1.jpg" class="img-fluid" />
              <a href="#!">
                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
              </a>
            </div>
            <div class="card-body">
              <h5 class="card-title">Innovation</h5>
              <p class="card-text">
                Embracing new ideas and technology to develop better products and services that meet the changing needs
                of customers.
              </p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 mb-4">
          <div class="card">
            <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
              <img src="./public/img/card2.jpg" class="img-fluid" />
              <a href="#!">
                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
              </a>
            </div>
            <div class="card-body">
              <h5 class="card-title">Diversity and Inclusion</h5>
              <p class="card-text">
                </h5>
              <p>Creating a welcoming, supportive, and respectful workplace culture that values and celebrates the
                differences in people and ensures equal opportunities for all.
              </p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 mb-4">
          <div class="card">
            <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
              <img src="./public/img/card4.jpg" class="img-fluid" />
              <a href="#!">
                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
              </a>
            </div>
            <div class="card-body">
              <h5 class="card-title">Integrity</h5>
              <p class="card-text">
                </h5>
              <p>Operating with transparency, fairness, and accountability, and upholding the highest standards of
                ethical
                behavior to build and maintain trust with customers, employees, and stakeholders.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <?php require APPROOT . '/views/inc/footer.php'; ?>