<?php 
  include('../../../models/m_orders.php');
  $orders_cursor = new M_orders;
  $orders=$orders_cursor->read_orders();
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
            <div class="x_content">
              <table id="datatable" class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Date</th>
                    <th>Party Number</th>
                    <th>Created At</th>
                    <th>Update At</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <?php  
                  foreach ($orders as $order) 
                  {
                ?>
                <tbody>
                  <td><?php echo $order->name; ?></td>
                  <td><?php echo $order->email; ?></td>
                   <td><?php echo $order->date; ?></td>
                  <td><?php echo $order->party_number; ?></td>
                  <td><?php echo $order->created_at ?></td>
                  <td><?php echo $order->update_at; ?></td>
                  <td>
                    <a href="index.php?page=edit_orders&id=<?php echo $order->id ?>" class="btn btn-sm btn-default">
                      <span class="glyphicon glyphicon-edit" role="button" ></span>
                    </a>
                    <a href="index.php?page=delete_orders&id=<?php echo $order->id ?>" class="btn btn-sm btn-default">
                      <span class="glyphicon glyphicon-trash" role="button" ></span>
                    </a>                    
                  </td>
                  
                </tr>
              </tbody>
              <?php 
                }
              ?>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
