<?php require "header.php";
require "hash.php";  ?>
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header">&emsp;Edit about</h3>
          </div>
        </div>
        <?php

                                $query = 'SELECT * FROM about WHERE id = 2';
                                $exist = $database->prepare($query);
                                $exist->execute();
                                $donnees= $exist->fetch(PDO::FETCH_ASSOC);
                                $text = decrypt($donnees['text']);
                            ?>
        <section class="panel">
              <header class="panel-heading">
               Edit about
              </header>
              <div class="panel-body">
                <form class="form-horizontal" method="POST" id="service_form"  enctype="multipart/form-data" action="modify_about.php">
                  <div class="form-group">
                    <div class="col-sm-12">
                      <textarea class="form-control" name="value" required="" rows="20"><?php echo $text ?></textarea>
                    </div>
                  </div>
                  <div class="form-group">
                      <div align="center">
                        <input class="btn btn-primary" type="submit" value="Save">
                        <button class="btn btn-danger" type="button" onclick="window.location.href ='index.php'">Cancel</button>
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
