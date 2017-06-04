f<?php  
 require_once('app/lib/change_name.php');
 require_once('models/m_cates.php');
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
            <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data" method="post" action="admin.html?page=store_cates">
              <!-- name -->
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Name<span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input pattern=".{4,50}" type="text" id="first-name" name="name" required="required" class="form-control col-md-7 col-xs-12">
                </div>
              </div>
              <!--/name -->
              
              <!--sort_oder -->
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" name="name" >Sort_oder<span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="number" id="first-name" name="sort_oder" required="required" class="form-control col-md-7 col-xs-12">
                </div>
              </div>
              <!--/sort_oder -->
              <!-- link -->
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Link <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" pattern=".{1,250}" id="last-name" name="link" required="required" class="form-control col-md-7 col-xs-12">
                </div>
              </div>
              <!--/link -->
              
              <!-- type-->
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Type</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <div id="gender" class="btn-group" data-toggle="buttons">
                    <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                      <input type="radio" name="type" value="1"> &nbsp; Parent &nbsp;
                    </label>
                    <label class="btn btn-primary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                      <input type="radio" name="type" value="0"> Children
                    </label>
                  </div>
                </div>
              </div>
              <!--/type-->

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
