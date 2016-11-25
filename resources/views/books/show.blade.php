@extends('layouts.layout-materialize')

@section('title', '首頁')

@section('content')
<div class="parallax-container">
    <div class="parallax">
        <img src="https://static.pexels.com/photos/48126/books-education-school-literature-48126-large.jpeg" />
        <h2 class="header">Parallax</h2>
        <p class="grey-text">This is going to be my content over image.</p>
    </div>
</div>


<div class="row">
      <div class="col s12 m10">
        <h5>Sign Up </5>
        <div class="card-panel ">
          <h6>Sign up with your email address.</h6>
          <div class="row">
        <form class="col s12">
          <div class="row">
            <div class="input-field col s8">
              <i class="mdi-communication-email prefix"></i>
              <input id="email" type="email" class="validate">
              <label for="email">Your email</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s8">
              <i class="mdi-action-lock-outline prefix"></i>
              <input id="password" type="password" class="validate">
              <label for="password">Password</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s8">
              <i class="mdi-action-lock-outline prefix"></i>
              <input id="password" type="password" class="validate">
              <label for="password">Confirm Password</label>
            </div>
          </div>
          <div class="row">
              <div class="input-field col s12">
                <a href="index.html" class="btn waves-effect waves-light col "><h6>Create Account</h6></a>
              </div>
            </div>
        </form>
         </div>
        </div>
      </div>
    </div>
@stop

@section('script')
<script>
    $(document).ready(function(){
        $('.parallax').parallax();
    });
</script>
@stop