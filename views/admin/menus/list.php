<?php 
  include('models/m_menus.php');
  $menus_cursor =  new M_menus();
  $menus=$menus_cursor->read_menus();
 
?>

<div class="right_col" role="main">
  <div class="">
      <div class="page-title">
        <div class="title_left">
          <h3>Cates <small>List</small></h3>
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
                  if (isset($_COOKIE['created'])) {
                  ?>
                  <div class="alert alert-success"><?php echo $_COOKIE['created']; ?></div>
                  <?php  
                    }
                    else if (isset($_COOKIE['deleted'])) {
                  ?>
                  <div class="alert alert-danger"><?php echo $_COOKIE['deleted']; ?></div>
                  <?php  
                    }
                    else if (isset($_COOKIE['updated'])) {
                  ?>
                  <div class="alert alert-success"><?php echo $_COOKIE['updated']; ?></div>
                  <?php  
                    }
                   ?>
            <div class="x_content">
              <table id="datatable" class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th>Name</th>
                    <th>Alias</th>
                    <th>Id_parent</th>
                    <th>Sort_oder</th>
                    <th>Created_at</th>
                    <th>Update_at</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>

                <?php  
                  foreach ($menus as $menu) 
                  {
                ?>
                  <td><?php echo $menu->name; ?></td>
                  <td><?php echo $menu->alias; ?></td>
                   <td><?php echo $menu->id_parent; ?></td>
                  <td><?php echo $menu->sort_oder; ?></td>
                  <td><?php echo $menu->created_at ?></td>
                  <td><?php echo $menu->update_at; ?></td>
                  <td>
                    <a href="admin.html?page=edit_menus&id=<?php echo $menu->id ?>" class="btn btn-sm btn-default">
                      <span class="glyphicon glyphicon-edit" role="button" ></span>
                    </a>
                    <a href="admin.html?page=delete_menus&id=<?php echo $menu->id ?>" class="btn btn-sm btn-default">
                      <span class="glyphicon glyphicon-trash" role="button" ></span>
                    </a>                    
                  </td>
                  
                </tr>
              <?php 
                }
              ?>
              </tbody>
              
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
