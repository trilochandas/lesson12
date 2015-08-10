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
    <form style="width: 45%; float: left; margin-right: 1em;" class="form-horizontal" method="POST" role="form">
    <h2>Add advert</h2>
  <div class="form-group">
    <label for="inputTitle" class="col-sm-2 control-label">Title</label>
    <div class="col-sm-10">
      <input type="text" name="title" value="{$title}" class="form-control" id="inputTitle" placeholder="Title">
    </div>
  </div>
  <div class="form-group">
    <label for="inputDescription" class="col-sm-2 control-label">Description</label>
    <div class="col-sm-10">
     <textarea name="description" class="form-control" id="inputDescription" rows="3">{$description}</textarea>
    </div>
  </div>
  <div class="form-group">
    <label for="inputName" class="col-sm-2 control-label">Name</label>
    <div class="col-sm-10">
     <input type="text" name="name" value="{$name}" class="form-control" id="inputName" placeholder="Name">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail" class="col-sm-2 control-label">Email</label>
    <div class="col-sm-10">
     <input type="email" name="email" value="{$email}" class="form-control" id="inputEmail" placeholder="Email">
    </div>
  </div>
  <div class="form-group">
    <label for="inputCity" class="col-sm-2 control-label">City</label>
    <div class="col-sm-10">
     {html_options class="form-control" name=city options=$citys selected=$city }
    </div>
  </div>
  <div class="form-group">
    <label for="inputCity" class="col-sm-2 control-label">Metro</label>
    <div class="col-sm-10">
     {html_options class="form-control" name=metro options=$metro1 selected=$metro }
    </div>
  </div>
  <div class="form-group">
    <label for="inputCity" class="col-sm-2 control-label">Category</label>
    <div class="col-sm-10">
     {html_options class="form-control" name=category_id options=$categorys selected=$category_id }
    </div>
  </div>
  <div class="form-group">
    <label for="inputPhone" class="col-sm-2 control-label">Phone</label>
    <div class="col-sm-10">
     <input type="phone" name="phone" value="{$phone}" class="form-control" id="inputPhone" placeholder="0001234567">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPrice" class="col-sm-2 control-label">Price</label>
    <div class="col-sm-10">
     <input type="text" name="price" value="{$price}" class="form-control" id="inputPrice" placeholder="0">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <label>
        <input value="1" name="allow_mails" {$allow_mails} type="checkbox"> Mail me!
      </label>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <div class="radio">
        <label>  <input type="radio" {if $type == 'private'} {'checked'} {/if} name="type" id="optionsRadios1" value="private" checked> Private advert </label>
      </div>
      <div class="radio">
        <label>  <input type="radio" {if $type == 'company'} {'checked'} {/if} name="type" id="optionsRadios2" value="company">Company advert  </label>
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <input type="submit" value="Send" name="formSubmit" class="btn btn-default">
    </div>
  </div>
</form>
{include file='table.tpl.html'}

 
   
  </body>
</html>