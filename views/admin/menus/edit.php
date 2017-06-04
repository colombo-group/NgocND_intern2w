<?php  
 require_once('app/lib/change_name.php');
 require_once('models/m_menus.php');
 $id = $_GET["id"];
 $menu_cursor = new M_menus;
 $menus =  $menu_cursor->read_id_menus($id);
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
            <?php  
              if (isset($_COOKIE['same']))
              {
              ?>
                <div class="alert alert-danger"><?php echo $_COOKIE['same']; ?></div>
              <?php  
              }
            ?>
          <div class="x_content">
            <br />

            <!-- form action -->
            <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data" method="post" action="admin.html?page=update_menus">
              <?php 
                foreach ($menus as $menu) {
              ?>
              <!-- name local -->
              <div class="form-group" style="display: none;">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Name<span class="required"  >*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="first-name" name="namelocal" required="required" class="form-control col-md-7 col-xs-12"  pattern=".{4,50}" value="<?php echo $menu->name; ?>" >
                </div>
              </div>
              <!--/name local -->
              <!-- name -->
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Name<span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="first-name" name="name" required="required" class="form-control col-md-7 col-xs-12" pattern=".{3,50}" value="<?php echo $menu->name; ?>">
                </div>
              </div>
              <!--/name -->
				
			         <!--id_parent -->
              	<div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Id_parent<span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="number" id="first-name" name="id_parent" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $menu->id_parent; ?>">
                </div>
              	</div>
              <!--/id_parent -->
				      
              <!--id -->
                <div class="form-group" style="display: none;">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Id<span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="number" id="first-name" name="id" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $id; ?>">
                </div>
                </div>
              <!--/id -->

              <!--sort_oder -->
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" >Sort_oder<span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="number" id="first-name" name="sort_oder" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $menu->sort_oder; ?>">
                </div>
              </div>
              <!--/sort_oder -->
              <?php  
                 }
              ?>
              <div class="ln_solid"></div>
              <div class="form-group">
                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                  <button class="btn btn-primary" type="button">Cancel</button>
		              <button class="btn btn-primary" type="reset">Reset</button>
                  <button type="submit" name="update" class="btn btn-success">Submit</button>
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
