<?php
error_reporting(E_ERROR | E_PARSE);
require_once('header.php');
include_once("../backend/db.php");

$word = $_POST['word'];
$records = mysqli_query($con,"select * from books where name like '%$word%' or category like '%$word%'");

?>

<style>
  .fixed-top{
    background-color: #37517e!important;
  }
  .portfolio{
    margin-top: 5%;
  }
</style>
<!-- ======= Portfolio Section ======= -->
<section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Search Books Results</h2>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
		<?php
			while($data = mysqli_fetch_array($records))
			{
		?>
          <div class="col-lg-4 col-md-6 portfolio-item">
            <div class="portfolio-img" style="height:500px;"><img src="../books_cover/<?= $data['id'] ?>/<?= $data['image'] ?>" class="img-fluid" alt="" style="height:100%;"></div>
            <div class="portfolio-info">
              <h4><?= $data['name'] ?></h4>
              <p><?= $data['category'] ?></p>
              <a href="../books_cover/<?= $data['id'] ?>/<?= $data['image'] ?>" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="<?= $data['name'] ?>"><i class="bx bx-plus"></i></a>
              <br>
              <form action="../backend/book_book.php" method="post">
                  <input type="hidden" name="id" value="<?= $data['id'] ?>">
                  <button class="btn btn-primary btn-sm" type="submit" name="book_book" <?php if($data['status']==1){ ?> disabled <?php } ?> ><i class="bx bx-book"></i> Book Resource</button>
              </form>
            </div>
            
          </div>
		<?php } ?>
        </div>

      </div>
    </section><!-- End Portfolio Section -->

<?php
require_once('footer.php');
?>
