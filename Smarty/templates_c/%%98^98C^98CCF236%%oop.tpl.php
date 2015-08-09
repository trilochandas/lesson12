<?php /* Smarty version 2.6.28, created on 2015-08-09 12:03:01
         compiled from oop.tpl */ ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>OOP</title>

    <!-- Bootstrap -->
   <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
  </head>
  <body style="padding: 3em;">    
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'table.tpl.html', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>   
    <h2>Add advert</h2>
    <form style="width: 45%" class="form-horizontal" method="POST" role="form">
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Title</label>
    <div class="col-sm-10">
      <input type="text" name="title" class="form-control" id="inputEmail3" placeholder="Title">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Description</label>
    <div class="col-sm-10">
     <textarea name="description" class="form-control" rows="3"></textarea>
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Name</label>
    <div class="col-sm-10">
     <input type="text" name="name" class="form-control" placeholder="Name">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Email</label>
    <div class="col-sm-10">
     <input type="email" name="email" class="form-control" placeholder="Email">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Phone</label>
    <div class="col-sm-10">
     <input type="phone" name="phone" class="form-control" placeholder="0001234567">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Price</label>
    <div class="col-sm-10">
     <input type="text" name="price" class="form-control" placeholder="0">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <label>
        <input value="1" name="allow_mails" type="checkbox"> Mail me!
      </label>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <div class="radio">
        <label>  <input type="radio" name="type" id="optionsRadios1" value="private" checked> Private advert </label>
      </div>
      <div class="radio">
        <label>  <input type="radio" name="type" id="optionsRadios2" value="company">Company advert  </label>
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Send</button>
    </div>
  </div>
</form>

 
   
  </body>
</html>