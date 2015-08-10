<?php /* Smarty version 2.6.28, created on 2015-08-10 16:29:42
         compiled from table.tpl.html */ ?>
          <div class="table-responsive">
            <h2 class="sub-header">All adverts</h2>
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>#id</th>
                  <th>Title</th>
                  <th>Description</th>
                  <th>Price($)</th>
                  <th>Name</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                 <?php echo $this->_tpl_vars['ads_rows']; ?>

              
              </tbody>
            </table>
          </div>