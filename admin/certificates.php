<?php require "header.php";
require "hash.php"; ?>
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header">&emsp;Certificates</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-th-list"></i>Certificates Table</li>
            </ol>
          </div>
        </div>
        <?php $certificates = $database->query("SELECT * FROM certificates"); ?>
        <div class="row">
          <div class="col-sm-6">
            <section class="panel">
              <header class="panel-heading">
                Certificates table
              </header>
              <table class="table">
                <thead>
                  <tr>
                    <th>Certificate</th>
                    <th>Front Image</th>
                    <th>Image</th>
                    <th>Edit</th>
                    <th>Delete</th>
                    
                  </tr>
                </thead>
                <tbody>
                <?php while ($certificate = $certificates->fetch()) {  ?>
                  <tr>
                    <td><?php echo decrypt($certificate['name']) ?></td>
                    <td><a href="../img/slider/flexslider/<?php echo decrypt($certificate['front_img']) ?>"><img src="../img/slider/flexslider/<?php echo decrypt($certificate['front_img']) ?>" style="max-height: 30px; width: auto;"></a></td>
                    <td><a href="../img/slider/flexslider/<?php echo decrypt($certificate['image']) ?>"><img src="../img/slider/flexslider/<?php echo decrypt($certificate['image']) ?>" style="max-height: 30px; width: auto;"></a></td>
                    <td><a style = "color : blue;" href ="certificateFix.php?id=<?php echo $certificate['id'] ?>" > Edit </a></td>
                    <td><a style = "color : red;" href ="deletecertificate.php?id=<?php echo $certificate['id'] ?>" onclick="return confirm('Are you sure you want to delete this certificate ?');" > Delete</a></td>
                  </tr>
                <?php } ?>
                </tbody>
              </table>
              
            </section>
            <br>
            <div align="center">
              <a href="add_certificate.php" class="btn btn-primary"> Add new certificate</a>
            </div>
          </div>

      </section>
    </section>
  </section>
  <!-- container section end -->
  <!-- javascripts -->
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <!-- nicescroll -->
  <script src="js/jquery.scrollTo.min.js"></script>
  <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
  <!--custome script for all page-->
  <script src="js/scripts.js"></script>
</body>

</html>
