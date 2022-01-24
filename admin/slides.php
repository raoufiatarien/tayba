<?php require "header.php";
require "hash.php"; ?>
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header">&emsp;Slides</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-th-list"></i>Slides Table</li>
            </ol>
          </div>
        </div>
        <?php $slides = $database->query("SELECT * FROM slides");
        $i = 0; ?>
        <div class="row">
          <div class="col-sm-6">
            <section class="panel">
              <header class="panel-heading">
                Slides table
              </header>
              <table class="table">
                <thead>
                  <tr>
                    <th>Slide</th>
                    <th>Image</th>
                    <th>Edit</th>
                    <th>Delete</th>
                    
                  </tr>
                </thead>
                <tbody>
                <?php while ($slide = $slides->fetch()) { $i++; ?>
                  <tr>
                    <td>Slide <?php echo $i; ?></td>
                    <td><a href="../img/slider/parallax/<?php echo decrypt($slide['img']) ?>"><img src="../img/slider/parallax/<?php echo decrypt($slide['img']) ?>" style="max-height: 30px; width: auto;"></a></td>
                    <td><a style = "color : blue;" href ="SlideFix.php?id=<?php echo $slide['id'] ?>" > Edit </a></td>
                    <td><a style = "color : red;" href ="deleteSlide.php?id=<?php echo $slide['id'] ?>" onclick="return confirm('Are you sure you want to delete this slide ?');" > Delete</a></td>
                  </tr>
                <?php } ?>
                </tbody>
              </table>
              
            </section>
            
            <div class="jumbotron">
                            <div style="text-align: center;">
                                <h3>Add a slide</h3>

                            </div>
                            <br>
                            <div class="card-body">
                                <div class="basic-form">
                                    
                                    <form action="add_slide.php" method="post" enctype="multipart/form-data">

                  <div class="row">
                  <div align="center" >
                  <div class="input-group input-group-rounded">
                   <label for="Image_name"><img src="img/add.png" style="max-width: 100px; height: auto;" id="uploadPreview"></label>
                   <input type='file'  accept="image/*" id="Image_name" name="Image_name"  style="position:absolute; top:-10000px;" onchange="PreviewImage()" />

                  </div>
                  </div>
                  </div>
                  

                  
                  

                                <div align="center" >
                                  <br>
                                <button id="Ajouter" type="submit" class="btn btn-default btn-outline btn-rounded m-b-10 m-l-5" style="display: none;">Save</button>
                                </div>
                                </form>
                            </div>
                        </div>
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
  <script type="text/javascript">

    function PreviewImage(){
        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("Image_name").files[0]);
        oFReader.onload = function (oFREvent) {
            document.getElementById("uploadPreview").src = oFREvent.target.result;
            document.getElementById('Ajouter').style.display = "block";
        };
      };
  </script>
</body>

</html>
