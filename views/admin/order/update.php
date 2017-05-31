<?php  
  include('../../../models/m_orders.php');
  $id = $_GET['id'];
  $orders_cursor = new M_orders;
  $orders =  $orders_cursor->read_id_orders($id);
?>

<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>4 or more character</h3>
      </div>

      <div class="title_right">
        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Search for...">
            <span class="input-group-btn">
              <button class="btn btn-default" type="button">Go!</button>
            </span>
          </div>
        </div>
      </div>
    </div>
    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Menu - Top <small>Create new a menu</small></h2>
            <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="#">Settings 1</a>
                  </li>
                  <li><a href="#">Settings 2</a>
                  </li>
                </ul>
              </li>
              <li><a class="close-link"><i class="fa fa-close"></i></a>
              </li>
            </ul>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <br />

            <!-- form action -->
            <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data" method="post" action="http://localhost:8888/NguyenDaiNgoc_inter2w/controllers/order/update_admin.php">
            <?php  
              foreach ($orders as $order) {
                
            ?>
              <!-- name -->
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Name<span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="first-name" name="name" required="required" class="form-control col-md-7 col-xs-12" pattern=".{3,50}" value="<?php echo $order->name; ?>" >
                </div>
              </div>
              <!--/name -->

              <!-- id -->
              <div class="form-group" style="display: none">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Id<span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="first-name" name="id" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $order->id; ?>" >
                </div>
              </div>
              <!--/id -->
				
			        <!--email -->
              	<div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" name="id_parent" >Email<span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="email"  pattern=".{3,}" id="first-name" name="email" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $order->email; ?>">
                </div>
              	</div>
              <!--/email -->
				
              <!--date -->
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" name="name" >Date
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="datetime-local" id="first-name" name="date" class="form-control col-md-7 col-xs-12" value="<?php echo trim($order->date); ?>">
                </div>
              </div>
              <!--/date -->

              <!--party_number -->
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" name="name" >Party_number<span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <select name="party_number" id="" class="form-control col-md-7 col-xs-12">
                    <?php  
                      echo "<option value='$order->party_number' selected >$order->party_number</option>";
                    ?>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                  </select>
                </div>
              </div>
              <!--/party_number -->
              <?php  
                }
              ?>

              <div class="ln_solid"></div>
              <div class="form-group">
                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                  <button class="btn btn-primary" type="button">Cancel</button>
		              <button class="btn btn-primary" type="reset">Reset</button>
                  <button type="submit" name="create" class="btn btn-success">Submit</button>
                </div>
              </div>
            </form>
            <!-- /form action -->
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
  