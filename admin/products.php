<?php require "header.php";
require "hash.php"; ?>

    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header">&emsp;products</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-th-list"></i>products Table</li>
            </ol>
          </div>
        </div>
        
        <div class="row">
          <div class="col-md-6 col-sm-12">
            <section class="panel">
              <header class="panel-heading">
                products table
              </header>
              <table class="table">
                <thead>
                  <tr>
                    <th>Product</th>
                    <th>Image</th>
                    <th>Category</th>
                    <th>Sub-category</th>
                    <th>Edit</th>
                    <th>Delete</th>
                  </tr>
                </thead>
                <tbody>
                <?php 
                  $ProductPerPage = 7;
                  $nbproducts = $database->query("SELECT id FROM products");
                  $totalProducts = $nbproducts->rowCount();
                  if (isset($_GET['P'])){
                    $L = intval($_GET["P"]);
                    $currentPage = $L;
                  }else {
                    $currentPage = 1;
                  }
                  $start = ($currentPage-1)*$ProductPerPage;
                  $totalPages = $totalProducts / $ProductPerPage;
                  $products = $database->query("SELECT * FROM products ORDER BY id DESC LIMIT ".$start.", ".$ProductPerPage);
                  while ($product = $products->fetch()) {  ?>
                  <tr>
                    <td><?php echo decrypt($product['name']) ?></td>
                    <td><a href="../img/portfolio/<?php echo decrypt($product['pic']) ?>"><img src="../img/portfolio/<?php echo decrypt($product['pic']) ?>" style="max-height: 30px; width: auto;"></a></td>
                    <?php if($product['category'] === "C3LfaivSCCEds54zEHP0iA== & nbgTkAEMCjeHcdQqHgPnFA=="){ ?>
                              <td><?php echo "Bio dates & Conventional" ?></td>
                    <?php }else{ ?>
                              <td><?php echo decrypt($product['category']) ?></td>
                    <?php } ?>
                    
                    <td><?php echo decrypt($product['sub_category']) ?></td>
                    <td><a style = "color : blue;" href ="productFix.php?id=<?php echo $product['id'] ?>" > Edit </a></td>
                    <td><a style = "color : red;" href ="deleteproduct.php?id=<?php echo $product['id'] ?>" onclick="return confirm('Are you sure you want to delete this product ?');" > Delete</a></td>
                  </tr>
                <?php } ?>
                </tbody>
              </table>           
            </section>
            <ul class="pagination pull-right" >
              <?php if($currentPage > 1){ ?>
                <li><a href="products.php?P=<?php echo ($currentPage-1); ?>" >Previous</a></li>
                <?php } 
                        $i =0;
                        while ($i < $totalPages){ $i++;?>
                        <?php if($i == $currentPage ) { ?>
                          <li class="active"><a href="products.php?P=<?php echo $i; ?>" ><?php echo $i; ?></a></li>
                        <?php }else { ?>
                          <li><a href="products.php?P=<?php echo $i; ?>"><?php echo $i; ?></a></li>
                        <?php } ?>
                        
                <?php } if ($i == $currentPage){ ?>
            <li class="disabled"><a href="products.php?P=<?php echo ($currentPage+1); ?>" class="not-active">Next</a></li>
                <?php }else { ?>
            <li><a href="products.php?P=<?php echo ($currentPage+1); ?>" >Next</a></li>
                <?php } ?>
            </ul>
            <br>
            <br>
            <br>
            <br>
            <div align="center">
              <a href="add_product.php" class="btn btn-primary"> Add new product</a>
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
