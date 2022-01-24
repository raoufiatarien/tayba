<?php require "header.php" ?>
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header">&emsp;Add a certificate</h3>
          </div>
        </div>
        
        <section class="panel">
              <header class="panel-heading">
               Add a certificate
              </header>
              <div class="panel-body">
                <form class="form-horizontal" method="POST" id="certificate_form"  enctype="multipart/form-data" action="Tcertificate.php">
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Name :</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" placeholder="certificate name" name="title" required="">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Front Image :</label>
                    <div class="col-sm-10">
                      <label for="front_image"><img src="img/add.png" style="max-height:100px; width:  auto;" id="uploadPreview"></label>
                      <input accept="image/*" type="file" name="front_image" class="form-control" id="front_image" style="display: none;" onchange="PreviewImage()" required="">
                      <span class="help-block">This is the front photo of the certificate .</span>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Certificate :</label>
                    <div class="col-sm-10">
                      <label for="image1"><span class="btn btn-info" id="image100">Enter certificate Image</span></label>
                      <img src="" style="display: none; max-height:100px; width:  auto;" id="image10">
                      <input accept="image/*" type="file" id="image1" class="form-control round-input" name="image1" style="display: none;" onchange="imageC(this.id)" required="">
                    </div>
                  </div>
                  
                  <br>
                  <div class="form-group">
                      <div align="center">
                        <input class="btn btn-primary" type="submit" value="Save">
                        <button class="btn btn-danger" type="button" onclick="window.location.href ='certificates.php'">Cancel</button>
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
  <script type="text/javascript">
    function PreviewImage(){
        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("front_image").files[0]);
        oFReader.onload = function (oFREvent) {
            document.getElementById("uploadPreview").src = oFREvent.target.result;
        };
      };
      function imageC(id){
        var oFReader = new FileReader();
        var idm = id+"0";
        var idspan = idm+"0";
        oFReader.readAsDataURL(document.getElementById(id).files[0]);
        oFReader.onload = function (oFREvent) {
            document.getElementById(idm).src = oFREvent.target.result;
            document.getElementById(idm).style.display= "block";
            document.getElementById(idspan).style.display= "none";
        };
      };

  </script>

</body>

</html>
