<?php require "header.php";
require "hash.php";  ?>
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header">&emsp;Edit info</h3>
          </div>
        </div>
        <?php
                            $field = $_GET['id'];
                                $query = 'SELECT '.$field.' FROM infos LIMIT 1';
                                $exist = $database->prepare($query);
                                $exist->execute();
                                $donnees=$exist->fetch(PDO::FETCH_ASSOC);
                            ?>
        <section class="panel">
              <header class="panel-heading">
               Edit info
              </header>
              <div class="panel-body">
                <form class="form-horizontal" method="POST" id="service_form"  enctype="multipart/form-data" action="modify_info.php">
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Information :</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="field" value="<?php echo $field ?>" required="">
                    </div>
                  </div>
                  <input type="hidden" name="old" value="<?php echo $field ?>">
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Value :</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="value" value="<?php echo decrypt($donnees[$field]) ?>" required="">
                    </div>
                  </div>
                  <div class="form-group">
                      <div align="center">
                        <input class="btn btn-primary" type="submit" value="Save">
                        <button class="btn btn-danger" type="button" onclick="window.location.href ='infos.php'">Cancel</button>
                      </div>
                  </div>
                  
                </form>
              </div>
            </section>

      </section>
    </section>
    <!--main content end-->

  </section>
  <!-- container section end -->
  <!-- javascripts -->
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <!-- nice scroll -->
  <script src="js/jquery.scrollTo.min.js"></script>
  <script src="js/jquery.nicescroll.js" type="text/javascript"></script>

  <!-- jquery ui -->
  <script src="js/jquery-ui-1.9.2.custom.min.js"></script>

  <!--custom checkbox & radio-->
  <script type="text/javascript" src="js/ga.js"></script>
  <!--custom switch-->
  <script src="js/bootstrap-switch.js"></script>
  <!--custom tagsinput-->
  <script src="js/jquery.tagsinput.js"></script>

  <!-- colorpicker -->

  <!-- bootstrap-wysiwyg -->
  <script src="js/jquery.hotkeys.js"></script>
  <script src="js/bootstrap-wysiwyg.js"></script>
  <script src="js/bootstrap-wysiwyg-custom.js"></script>
  <script src="js/moment.js"></script>
  <script src="js/bootstrap-colorpicker.js"></script>
  <script src="js/daterangepicker.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <!-- ck editor -->
  <script type="text/javascript" src="assets/ckeditor/ckeditor.js"></script>
  <!-- custom form component script for this page-->
  <script src="js/form-component.js"></script>
  <!-- custome script for all page -->
  <script src="js/scripts.js"></script>

</body>

</html>
