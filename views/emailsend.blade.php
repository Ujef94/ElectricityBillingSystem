
<!DOCTYPE html>
<html>
<head>
<title>Contact Us Form</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/
css/bootstrap.min.css" >
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" >
</script>
<style>
.div_border{
width:60%;
margin:0 auto;
border:1px solid #ccc;
}
.has-error
{
border-color:#cc0000;
background-color:#ffff99;
}
</style>
</head>
<body>
<br />
<br />
<br />
<h3 align="center">Contact Us</h3><br />
<div class="container" style="width:65%">
@if (count($errors) > 0)
<div class="alert alert-danger">
<button type="button" class="close" data-dismiss="alert">×</button>
<ul>
@foreach ($errors->all() as $error)
<li>{{ $error }}</li>
@endforeach
</ul>
</div>
@endif
@if ($message = Session::get('success'))
<div class="alert alert-success alert-block">
<button type="button" class="close" data-dismiss="alert">×</button>
<strong>{{ $message }}</strong>
</div>
@endif
</div>

<div class="container div_border">
<form method="post" action="{{url('sendemail/send')}}">
{{ csrf_field() }}
<div class="form-group">
<label>Name</label>
<input type="text" name="name" class="form-control" value="" />
</div>
<div class="form-group">
<label>Email</label>0
<input type="text" name="email" class="form-control" value="" />
</div>
<div class="form-group">
<label>Message</label>
<textarea name="message" class="form-control"></textarea>
</div>
<div class="form-group" align="center">
<input type="submit" name="send" class="btn btn-success" value="Send Message" />
</div>
</form>
</div>
</body>
</html>
