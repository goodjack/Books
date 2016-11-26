@extends('layouts.layout')

@section('title', '新增書籍')

@section('content')
    <div class="jumbotron jumbotron-fluid m-b-0" style="background-image: url('https://static.pexels.com/photos/48126/books-education-school-literature-48126-large.jpeg'); background-size: cover; padding: 8em;">
        <div class="container">
            <h1 class="display-2">新增書籍</h1>
            <br>
            <form>
                <div class="form-group row">
                  <label for="name" class="col-xs-2 col-form-label col-form-label-lg">書名</label>
                  <div class="col-xs-5">
                    <input class="form-control form-control-lg" type="text" id="name">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="author" class="col-xs-2 col-form-label  col-form-label-lg">作者</label>
                  <div class="col-xs-5">
                    <input class="form-control form-control-lg" type="text" id="author">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="publisher" class="col-xs-2 col-form-label  col-form-label-lg">出版社</label>
                  <div class="col-xs-5">
                    <input class="form-control form-control-lg" type="text" id="publisher">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="date" class="col-xs-2 col-form-label  col-form-label-lg">出版日期</label>
                  <div class="col-xs-5">
                    <input class="form-control form-control-lg" type="date" id="date">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="isbn10" class="col-xs-2 col-form-label  col-form-label-lg">ISBN-10</label>
                  <div class="col-xs-5">
                    <input class="form-control form-control-lg" type="text" id="isbn10">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="isbn13" class="col-xs-2 col-form-label  col-form-label-lg">ISBN-13</label>
                  <div class="col-xs-5">
                    <input class="form-control form-control-lg" type="text" id="isbn13">
                  </div>
                </div>
                <br>
                <button type="submit" class="btn btn-outline-primary btn-lg">送出</button>
            </form>
        </div>
    </div>
@stop