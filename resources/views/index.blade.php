@extends('layouts.layout')

@section('title', '首頁')

@section('content')
	<div class="jumbotron jumbotron-fluid m-b-0" style="background-image: url('https://static.pexels.com/photos/48126/books-education-school-literature-48126-large.jpeg'); background-size: cover; padding: 8em;">
		<div class="container">
			<h1 class="display-2">看書，從這裡開始</h1>
	  	    <div class="input-group ">
	      		<input type="text" class="form-control" aria-label="Text input with dropdown button">
	      		<div class="input-group-btn">
			        <button type="button" class="btn btn-lg btn-secondary">
			        	<i class="material-icons">search</i>
		        	</button>
		        </div>
	    	</div>
		</div>
	</div>
	<div class="jumbotron jumbotron-fluid m-b-0" style="color:white; background-color: #0277BD;">
		<div class="container">
			<h1>今日選句</h1>
			<p>
				<blockquote class="blockquote">
					<p class="m-b-0">
						一個人至少擁有一個夢想，有一個理由去堅強。<br>心若沒有棲息的地方，到哪裡都是在流浪。
					</p>
					<footer class="blockquote-footer" style="color:rgba(255,255,255,.26);">
						三毛
					</footer>
				</blockquote>
			</p>
		</div>
	</div>


	<div class="jumbotron jumbotron-fluid" style="color:white; background-color: #77aa43;">
		<div class="container">
			<div class="row">
			    <div class="col-lg-12">
				    <div class="card card-block">
				  	    <div class="input-group ">
			    			<button type="button" class="btn btn-lg btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			   		        篩選工具
			        		</button>
			        		<div class="dropdown-menu">
				          		<a class="dropdown-item" href="#">Action</a>
				        	</div>

				      		<input type="text" class="form-control" aria-label="Text input with dropdown button">
				      		<div class="input-group-btn">
						        <button type="button" class="btn btn-lg btn-secondary">
						        	<i class="material-icons">search</i>
					        	</button>
						        <button type="button" class="btn btn-lg btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						        	<span class="sr-only">Toggle Dropdown</span>
						        </button>
						        <div class="dropdown-menu dropdown-menu-right">
						          <a class="dropdown-item" href="#">Action</a>
						          <a class="dropdown-item" href="#">Another action</a>
						          <a class="dropdown-item" href="#">Something else here</a>
						          <div role="separator" class="dropdown-divider"></div>
						          <a class="dropdown-item" href="#">Separated link</a>
						        </div>
					        </div>
				    	</div>
				  	</div>
				</div>
			</div>
		</div>
	</div>
@stop