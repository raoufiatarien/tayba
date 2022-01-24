<?php require "header.php";
require "hash.php"; ?>

    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header">&emsp;Edit product</h3>
             <ol class="breadcrumb">
              <li><i class="fa fa-th-list"></i>Edit product </li>
            </ol>
          </div>
        </div>
        <?php
            $id = $_GET['id'];
            $query = 'SELECT * FROM products WHERE id ='.$id;
            $exist = $database->prepare($query);
            $exist->execute();
            $donnees=$exist->fetch(PDO::FETCH_ASSOC);
            $cats = $database->query('SELECT * FROM categories ORDER BY id'); 
            $q = 'SELECT * FROM sub_category WHERE category LIKE "%'.$donnees["category"].'%" ORDER BY id';
            $subcats = $database->query($q);
            $substate = "none";
            $supersubstate = "none"; 
            if (!is_null($donnees['sub_sub_category'])){
              if($donnees['sub_sub_category'] !== "-----"){
                $subsubs = $database->query('SELECT * FROM sub_sub_category WHERE category = "'.$donnees['sub_category'].'" ORDER BY id ');
                $substate ="block"; 
              }
            }
            if (!is_null($donnees['sub_sub_sub_category'])) {
              if($donnees['sub_sub_sub_category'] !== "-----"){
                $supersubs = $database->query('SELECT * FROM sub_sub_sub_category ORDER BY id');
                $supersubstate = "block"; 
              }
            }
            ?>
        <section class="panel">
              <header class="panel-heading">
               Edit product infos
              </header>
              <div class="panel-body">
                <form class="form-horizontal" method="POST" id="product_form"  enctype="multipart/form-data" action="modify_product.php">
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Product name :</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" placeholder="name" name="title" required="" value="<?php echo decrypt($donnees['name']) ?>">
                    </div>
                  </div>
                  <input type="hidden" name="id" value="<?php echo $id ?>">
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Image : </label>
                    <div class="col-sm-10">
                      <label for="front_image"><img src="../img/portfolio/<?php echo decrypt($donnees['pic']) ?>" style="max-height:100px; width:  auto;" id="uploadPreview"></label>
                      <input accept="image/*" type="file" name="pic" class="form-control" id="front_image" style="display: none;" onchange="PreviewImage()" >
                      <span class="help-block">Click on the image to change it</span>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Category :</label>
                    <div class="col-sm-3">
                      <select class="form-control" name ="category" id="category" onchange="getsubcats(this.options[this.selectedIndex].text)" required>
                            <?php if ($donnees['category'] === "C3LfaivSCCEds54zEHP0iA== & nbgTkAEMCjeHcdQqHgPnFA=="){ ?>
                              <option> <?php echo "Bio dates & Conventional" ?> </option>
                            <?php }else { ?>
                              <option ><?php echo decrypt($donnees['category']); ?></option>
                            <?php } ?>
                            
                             <?php while ($data = $cats->fetch()) { 
                              if ($data['name'] != $donnees['category']) { if ( $data['name'] === "C3LfaivSCCEds54zEHP0iA== & nbgTkAEMCjeHcdQqHgPnFA=="){?>
                              <option> <?php echo "Bio dates & Conventional" ?> </option>
                              <?php }else {?> 
                                <option> <?php echo decrypt($data['name']) ?> </option>
                            <?php } } }?>

                            </select>
                    </div>
                  </div>
                  <div class="form-group" id="subs">
                    <label class="col-sm-2 control-label">Sub Category :</label>
                    <div class="col-sm-3">
                      <select class="form-control" name ="subcategory" id="subcategory" onchange="getsubsubs(this.options[this.selectedIndex].text)" required="">
                            <option ><?php echo decrypt($donnees['sub_category']); ?></option>
                             <?php while ($data = $subcats->fetch()) { 
                              if ($data['name'] != $donnees['sub_category']) {?> 
                                <option> <?php echo decrypt($data['name']) ?> </option>
                            <?php } }?>
                            </select>
                    </div>
                  </div>
                
                  <div class="form-group" style="display: <?php echo decrypt($substate) ?>;" id="subsubs">
                    <label class="col-sm-2 control-label">Date type :</label>
                    <div class="col-sm-3">
                      <select class="form-control" name ="subsub" id="subsub" onchange="getsupersubs(this.options[this.selectedIndex].text)">
                          <?php if ($substate === "block"){ ?>
                            <option ><?php echo decrypt($donnees['sub_sub_category']); ?></option>
                             <?php while ($data = $subsubs->fetch()) { 
                              if ($data['name'] != $donnees['sub_sub_category']) {?> 
                                <option> <?php echo decrypt($data['name']) ?> </option>
                            <?php } }?>
                          <?php } ?>
                            </select>
                    </div>
                  </div>
                
                
                   <div class="form-group" style="display: <?php echo $supersubstate ?>;" id="supersubs">
                    <label class="col-sm-2 control-label">Packaging :</label>
                    <div class="col-sm-3">
                      <select class="form-control" name ="supersub" id="supersub" onchange="superchange()">
                          <?php if ($supersubstate === "block"){ ?>
                            <option ><?php echo decrypt($donnees['sub_sub_sub_category']); ?></option>
                             <?php while ($data = $supersubs->fetch()) { 
                              if ($data['name'] != $donnees['sub_sub_sub_category']) {?> 
                                <option> <?php echo decrypt($data['name']) ?> </option>
                            <?php } }?>
                          <?php } ?>
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
