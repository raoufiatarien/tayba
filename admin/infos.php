<?php require "header.php";
require "hash.php"; ?>
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header">&emsp;Company infos</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-th-list"></i>Informations </li>
            </ol>
          </div>
        </div>
        <?php $q = $database->prepare("DESCRIBE infos");
              $q->execute();
              $infos = $q->fetchAll(PDO::FETCH_COLUMN);
              $query = 'SELECT * FROM infos LIMIT 1';
                                $exist = $database->prepare($query);
                                $exist->execute();
                                $donnees=$exist->fetch(PDO::FETCH_ASSOC); ?>
        <div class="row" align="center">
          <div class="col-sm-6">
            <section class="panel">
              <header class="panel-heading">
                Company infos
              </header>
              <table class="table">
                <thead>
                  <tr>
                    <th>info</th>
                    <th>Value</th>
                    <th>Edit</th>
                    
                  </tr>
                </thead>
                <tbody>
                <?php foreach($infos as $info) {  ?>
                  <tr>
                    <td><?php echo $info ?></td>
                    <td><?php echo decrypt($donnees[$info]) ?></td>
                    <td><a style = "color : blue;" href ="InfoFix.php?id=<?php echo $info ?>" > Edit </a></td>
                  </tr>
                  
                <?php } ?>
                </tbody>
              </table>
              
            </section>
            <br>
            <div align="center">
              <a href="add_info.php" class="btn btn-primary"> Add new info</a>
            </div>
          </div>
      </div>
      <br><br>
      <?php $q = $database->prepare("DESCRIBE links");
              $q->execute();
              $infos = $q->fetchAll(PDO::FETCH_COLUMN);
              $query = 'SELECT * FROM links LIMIT 1';
                                $exist = $database->prepare($query);
                                $exist->execute();
                                $donnees=$exist->fetch(PDO::FETCH_ASSOC); ?>
      <div class="row" align="center">
          <div class="col-sm-6">
            <section class="panel">
              <header class="panel-heading">
                Social media links
              </header>
              <table class="table">
                <thead>
                  <tr>
                    <th>Social media</th>
                    <th>Link</th>
                    <th>Edit</th>
                    
                  </tr>
                </thead>
                <tbody>
                <?php foreach($infos as $info) {  ?>
                  <tr>
                    <td><?php echo $info ?></td>
                    <td><?php echo decrypt($donnees[$info]) ?></td>
                    <td><a style = "color : blue;" href ="LinkFix.php?id=<?php echo $info ?>" > Edit </a></td>
                  </tr>
                  
                <?php } ?>
                </tbody>
              </table>
              
            </section>

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
