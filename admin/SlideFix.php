<?php require "header.php";
require  "hash.php"; ?>
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header">&emsp; Edit Slide</h3>
            <ol class="breadcrumb">
              <li><i class="icon_desktop"></i>Edit Slide</li>
            </ol>
          </div>
        </div>
        <!-- Form validations -->
        <div class="row">
          <div class="col-md-6">
            <section class="panel">
              <header class="panel-heading">
                Edit slide
              </header>
               <?php
                            $id = $_GET['id'];
                                $query = 'SELECT * FROM slides where id = :id';
                                $exist = $database->prepare($query);
                                $exist->execute(array(':id'=>$id));
                                $donnees=$exist->fetch(PDO::FETCH_ASSOC);
                            ?>
              <div class="panel-body">
                <div class="form">
                  <form class="form-validate form-horizontal" id="feedback_form" method="POST" action="modify_slide.php" enctype="multipart/form-data">
                    <div align="center">
                    <img src="../img/slider/parallax/<?php echo decrypt($donnees['img']) ?>" style="max-height: 200px; width : auto;" id="uploadPreview">
                    <br><br><br>
                    <label for="Image_name"> <p class="btn btn-default"> Change photo</p></label>
                   <input type='file'  accept="image/*" id="Image_name" name="Image_name"  style="position:absolute; top:-10000px;" onchange="PreviewImage()" />
                   <input type="hidden" name="id" value="<?php echo $donnees['id'] ?>">
                    </div>
                    <br><br>
                    <div class="form-group">
                      <div align="center">
                        <button class="btn btn-primary" type="submit" onclick="document.getElementById('feedback_form').submit()" >Save</button>
                        <button class="btn btn-danger" type="button" onclick="window.location.href ='slides.php'">Cancel</button>
                      </div>
                    </div>
                  </form>
                </div>

              </div>
            </section>
          </div>
        </div>

        <!-- page end-->
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
  <!-- jquery validate js -->
  <script type="text/javascript" src="js/jquery.validate.min.js"></script>

  <!-- custom form validation script for this page-->
  <script src="js/form-validation-script.js"></script>
  <!--custome script for all page-->
  <script src="js/scripts.js"></script>
  <script type="text/javascript">

    function PreviewImage(){
        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("Image_name").files[0]);
        oFReader.onload = function (oFREvent) {
            document.getElementById("uploadPreview").src = oFREvent.target.result;
        };
      };
  </script>

</body>

</html>
