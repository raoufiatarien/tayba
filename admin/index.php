<?php require "header.php"; 
require "hash.php";
$query1 ="SELECT COUNT(*) FROM slides";
$exist = $database->prepare($query1);
$exist->execute();
$slides = $exist->fetchColumn();
$query2 ="SELECT COUNT(*) FROM services";
$exist = $database->prepare($query2);
$exist->execute();
$services = $exist->fetchColumn();
$query3 ="SELECT COUNT(*) FROM products";
$exist = $database->prepare($query3);
$exist->execute();
$products = $exist->fetchColumn();  ?>
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <!--overview start-->
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-laptop"></i> Dashboard</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
              <li><i class="fa fa-laptop"></i>Dashboard</li>
            </ol>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12" style="left : 2%;">
            <div class="info-box blue-bg">
              <i class="fa fa-gift"></i>
              <div class="count"><?php echo $products ?></div>
              <div class="title">Products</div>
            </div>
            <!--/.info-box-->
          </div>
          <!--/.col-->

          <div class="col-md-offset-1 col-lg-offset-1 col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="info-box brown-bg">
              <i class="fa fa-picture-o"></i>
              <div class="count"><?php echo $slides ?></div>
              <div class="title">Slides</div>
            </div>
            <!--/.info-box-->
          </div>
          <!--/.col-->

          <div class="col-md-offset-1 col-lg-offset-1 col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="info-box dark-bg">
              <i class="fa fa-briefcase"></i>
              <div class="count"><?php echo $services ?></div>
              <div class="title">Services</div>
            </div>
            <!--/.info-box-->
          </div>
          <!--/.col-->

        </div>
        <!--/.row-->
        <?php $q = $database->prepare("DESCRIBE infos");
              $q->execute();
              $infos = $q->fetchAll(PDO::FETCH_COLUMN);
              $query = 'SELECT * FROM infos LIMIT 1';
              $exist = $database->prepare($query);
              $exist->execute();
              $donnees=$exist->fetch(PDO::FETCH_ASSOC); 
        ?>
        <br><br>
        <div class="row" align="center">
          <div class="col-md-offset-2 col-md-8">
            <section class="panel">
              <header class="panel-heading">
                Company infos
              </header>
              <table class="table">
                <thead>
                  <tr>
                    <th>info</th>
                    <th>Value</th>
                    
                  </tr>
                </thead>
                <tbody>
                <?php foreach($infos as $info) {  ?>
                  <tr>
                    <td><?php echo $info ?></td>
                    <td><?php echo decrypt($donnees[$info]) ?></td>
                  </tr>
                  
                <?php } ?>
                </tbody>
              </table>
              
            </section>
          </div>
      </div>
      </section>
    </section>
    <!--main content end-->
  </section>
  <!-- container section start -->
  <?php if (isset($_GET['msg'])){ ?>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
                        <script type="text/javascript">
                          var v = <?php echo "'".$_GET['msg']."'"; ?>;
                          swal("", v, "success");
                        </script>
  <?php } ?>
  <!-- javascripts -->
  <script src="js/jquery.js"></script>
  <script src="js/jquery-ui-1.10.4.min.js"></script>
  <script src="js/jquery-1.8.3.min.js"></script>
  <script type="text/javascript" src="js/jquery-ui-1.9.2.custom.min.js"></script>
  <!-- bootstrap -->
  <script src="js/bootstrap.min.js"></script>
  <!-- nice scroll -->
  <script src="js/jquery.scrollTo.min.js"></script>
  <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
  <!-- charts scripts -->
  <script src="assets/jquery-knob/js/jquery.knob.js"></script>
  <script src="js/jquery.sparkline.js" type="text/javascript"></script>
  <script src="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
  <script src="js/owl.carousel.js"></script>
  <!-- jQuery full calendar -->
  <<script src="js/fullcalendar.min.js"></script>
    <!-- Full Google Calendar - Calendar -->
    <script src="assets/fullcalendar/fullcalendar/fullcalendar.js"></script>
    <!--script for this page only-->
    <script src="js/calendar-custom.js"></script>
    <script src="js/jquery.rateit.min.js"></script>
    <!-- custom select -->
    <script src="js/jquery.customSelect.min.js"></script>
    <script src="assets/chart-master/Chart.js"></script>

    <!--custome script for all page-->
    <script src="js/scripts.js"></script>
    <!-- custom script for this page-->
    <script src="js/sparkline-chart.js"></script>
    <script src="js/easy-pie-chart.js"></script>
    <script src="js/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="js/jquery-jvectormap-world-mill-en.js"></script>
    <script src="js/xcharts.min.js"></script>
    <script src="js/jquery.autosize.min.js"></script>
    <script src="js/jquery.placeholder.min.js"></script>
    <script src="js/gdp-data.js"></script>
    <script src="js/morris.min.js"></script>
    <script src="js/sparklines.js"></script>
    <script src="js/charts.js"></script>
    <script src="js/jquery.slimscroll.min.js"></script>
    <script>
      //knob
      $(function() {
        $(".knob").knob({
          'draw': function() {
            $(this.i).val(this.cv + '%')
          }
        })
      });

      //carousel
      $(document).ready(function() {
        $("#owl-slider").owlCarousel({
          navigation: true,
          slideSpeed: 300,
          paginationSpeed: 400,
          singleItem: true

        });
      });

      //custom select box

      $(function() {
        $('select.styled').customSelect();
      });

      /* ---------- Map ---------- */
      $(function() {
        $('#map').vectorMap({
          map: 'world_mill_en',
          series: {
            regions: [{
              values: gdpData,
              scale: ['#000', '#000'],
              normalizeFunction: 'polynomial'
            }]
          },
          backgroundColor: '#eef3f7',
          onLabelShow: function(e, el, code) {
            el.html(el.html() + ' (GDP - ' + gdpData[code] + ')');
          }
        });
      });
    </script>

</body>

</html>
