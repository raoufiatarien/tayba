<?php require "header.php";
require "hash.php"; ?>

    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header">&emsp;Add new product</h3>
          </div>
        </div>
        <?php $cats = $database->query('SELECT * FROM categories ORDER BY id'); ?>
        <section class="panel">
              <header class="panel-heading">
               Add new prodcut
              </header>
              <div class="panel-body">
                <form class="form-horizontal" method="POST" id="product_form"  enctype="multipart/form-data" action="Tproduct.php">
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Product name :</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" placeholder="name" name="title" required="">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Image : </label>
                    <div class="col-sm-10">
                      <label for="front_image"><img src="img/add.png" style="max-height:100px; width:  auto;" id="uploadPreview"></label>
                      <input accept="image/*" type="file" name="pic" class="form-control" id="front_image" style="display: none;" onchange="PreviewImage()" required="">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Category :</label>
                    <div class="col-sm-3">
                      <select class="form-control" name ="category" id="category" onchange="getsubcats(this.options[this.selectedIndex].text)" required>
                            <option > ----- </option>
                             <?php while ($donnees = $cats->fetch()) { if($donnees['name'] ==="C3LfaivSCCEds54zEHP0iA== & nbgTkAEMCjeHcdQqHgPnFA=="){?>
                                <option> <?php echo "Bio dates & Conventional" ?> </option>
                             <?php }else {?>

                                <option> <?php echo decrypt($donnees['name']) ?> </option>
                            <?php } }?> 
                            </select>
                    </div>
                  </div>
                  <div class="form-group" style="display: none;" id="subs">
                    <label class="col-sm-2 control-label">Sub Category :</label>
                    <div class="col-sm-3">
                      <select class="form-control" name ="subcategory" id="subcategory" onchange="getsubsubs(this.options[this.selectedIndex].text)">

                            </select>
                    </div>
                  </div>
                  <div class="form-group" style="display: none;" id="subsubs">
                    <label class="col-sm-2 control-label">Date type :</label>
                    <div class="col-sm-3">
                      <select class="form-control" name ="subsub" id="subsub" onchange="getsupersubs()">

                            </select>
                    </div>
                  </div>
                   <div class="form-group" style="display: none;" id="supersubs">
                    <label class="col-sm-2 control-label">Packaging :</label>
                    <div class="col-sm-3">
                      <select class="form-control" name ="supersub" id="supersub" onchange="superchange()">

                            </select>
                    </div>
                  </div>
                  <br>
                  <div class="form-group">
                      <div align="center">
                        <input class="btn btn-primary" type="submit" value="Save">
                        <button class="btn btn-danger" type="button" onclick="window.location.href ='products.php'">Cancel</button>
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
    function getsubcats(value){
      var x = $("#category option:first").text();
      if (x.trim() === " ----- ".trim()){
        document.getElementById('category').remove(0);
      }
      if (value.trim() === "Derived from dates"){
        document.getElementById('subsubs').style.display = "none";
        document.getElementById('subsub').innerHTML = "";
        document.getElementById('supersubs').style.display = "none";
        document.getElementById('supersub').innerHTML = "";
      }
      $.ajax({  
          type: "GET",
          url: "getsubs.php",
          data: { 
            cat : value, 
        },                            
          success: function(response){                    
              document.getElementById('subs').style.display = "block";
              document.getElementById('subcategory').innerHTML = response;

        }
      });

    };
  </script>

  <script type="text/javascript">
    function getsubsubs(value){
      var x = $("#subcategory option:first").text();
      if (x.trim() === " ----- ".trim()){
        document.getElementById('subcategory').remove(0);
      }
      if (value.trim() === "Other varieties".trim()){
        document.getElementById('supersubs').style.display = "none";
        document.getElementById('supersub').innerHTML = "";
      }
      var cat = $("#category option:selected").text();
      if (cat.trim() === "Derived from dates".trim()){
        // nothing happens
      }else {
        $.ajax({  
            type: "GET",
            url: "getsubsubs.php",
            data: { 
              sub : value, 
          },                            
            success: function(response){                    
                document.getElementById('subsubs').style.display = "block";
                document.getElementById('subsub').innerHTML = response;

          }
        }); 
      }

    };
  </script>

  <script type="text/javascript">
    function getsupersubs(){
      var x = $("#subsub option:first").text();
      if (x.trim() === " ----- ".trim()){
        document.getElementById('subsub').remove(0);
      }
      var cat = $("#subcategory option:selected").text();
      if (cat.trim() === "Other varieties".trim()){
        // nothing happens
      }else {
        $.ajax({  
              type: "GET",
              url: "getsupersubs.php",
                            
              success: function(response){                    
                  document.getElementById('supersubs').style.display = "block";
                  document.getElementById('supersub').innerHTML = response;

            }
          }); 
      }
    };
  </script>
  <script type="text/javascript">
    function superchange(){
      var x = $("#supersub option:first").text();
      if (x.trim() === " ----- ".trim()){
        document.getElementById('supersub').remove(0);
      }
    };
  </script>
  <script type="text/javascript">
    function PreviewImage(){
        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("front_image").files[0]);
        oFReader.onload = function (oFREvent) {
            document.getElementById("uploadPreview").src = oFREvent.target.result;
        };
      };
  </script>
</body>

</html>
