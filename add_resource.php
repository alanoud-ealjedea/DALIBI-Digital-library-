<?php
require_once('header.php');
?>
<style>
  .fixed-top{
    background-color: #37517e!important;
  }
  .contact{
    margin-top: 5%;
  }
</style>
<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Add Physical Resources</h2>
        </div>

        <div class="row">

          <div class="col-lg-12 mt-5 mt-lg-0 d-flex align-items-stretch">
            <form action="../backend/add_resource.php" method="post" enctype="multipart/form-data" role="form" class="php-email-form">
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="name">Resource Name</label>
                  <input type="text" name="name" class="form-control" id="name" required>
                </div>
                <div class="form-group col-md-6">
                  <label for="name">Resource Image</label>
                  <input type="file" class="form-control" name="cover" id="name" required>
                </div>
              </div>
              <div class="form-group">
                <label for="name">Resource Description</label>
                <input type="text" class="form-control" name="description" id="subject" required>
              </div>

              <div class="text-center"><button type="submit" name="add_resource">Add Resource</button></div>
            </form>
          </div>

        </div>

      </div>
</section>
<!-- End Contact Section -->

<?php
require_once('footer.php');
?>