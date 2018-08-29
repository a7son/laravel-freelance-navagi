@extends('layouts.master') @section('title') Welcome! @endsection @section('content')
<div class="row">
    <div class="col-md-6">
        <h3>Sign Up</h3>
        <form action="#" method="POST">          
            <div class="form-group">
                
                <label for="email">Your email</label>
                <input class="form-control" type="text" name="email" id="email">
            </div>
            <div class="form-group">
                <label for="first_name">Your First Name</label>
                <input class="form-control" type="text" name="first_name" id="first_name">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input class="form-control" type="password" name="password" id="password">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>    
    <div class="col-md-6">
      <h3>Sign In</h3>
        <form action="#" method="POST">
            <div class="form-group">
                <label for="email">Your email</label>
                <input class="form-control" type="text" name="email" id="email">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input class="form-control" type="password" name="password" id="password">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>

<!-- Bootstrap core JavaScript -->
<script src="http://localhost:8050/laravel/public/jquery/jquery.min.js"></script>
<script src="http://localhost:8050/laravel/public/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Plugin JavaScript -->
<script src="http://localhost:8050/laravel/public/jquery-easing/jquery.easing.min.js"></script>
<script src="http://localhost:8050/laravel/public/magnific-popup/jquery.magnific-popup.min.js"></script>

<!-- Contact Form JavaScript -->
<script src="http://localhost:8050/laravel/public/js/jqBootstrapValidation.js"></script>
<script src="http://localhost:8050/laravel/public/js/contact_me.js"></script>

<!-- Custom scripts for this template -->
<script src="http://localhost:8050/laravel/public/js/freelancer.min.js"></script>

@endsection
