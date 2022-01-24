<?php require "header.php";
require "hash.php"; ?>
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header">&emsp;Services</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-th-list"></i>Services Table</li>
            </ol>
          </div>
        </div>
        <?php $services = $database->query("SELECT * FROM services"); ?>
        <div class="row">
          <div class="col-sm-6">
            <section class="panel">
              <header class="panel-heading">
                Services table
              </header>
              <table class="table">
                <thead>
                  <tr>
                    <th>Service</th>
                    <th>Front Image</th>
                    <th>Edit</th>
                    <th>Delete</th>
                    
                  </tr>
                </thead>
                <tbody>
                <?php while ($service = $services->fetch()) {  ?>
                  <tr>
                    <td><?php echo decrypt($service['title']) ?></td>
                    <td><a href="../img/slider/flexslider/<?php echo decrypt($service['front_img']) ?>"><img src="../img/slider/flexslider/<?php echo decrypt($service['front_img']) ?>" style="max-height: 30px; width: auto;"></a></td>
                    <td><a style = "color : blue;" href ="serviceFix.php?id=<?php echo $service['id'] ?>" > Edit </a></td>
                    <td><a style = "color : red;" href ="deleteService.php?id=<?php echo $service['id'] ?>" onclick="return confirm('Are you sure you want to delete this service ?');" > Delete</a></td>
                  </tr>
                <?php } ?>
                </tbody>
              </table>
              
            </section>
            <br>
            <div align="center">
              <a href="add_service.php" class="btn btn-primary"> Add new service</a>
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
