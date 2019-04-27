@extends('layouts.app')

@section('content')



<div class="container">
  <div class="row">
    <div class="col-sm-12 column title ">
      <form class="form" action="index.html" method="post">
        Please fill out ALL informaiton below
      </form>
    </div>
  </div>
  <br>




  <div class="row">
    <div class="col-sm-12 column title">

      <form class="form" action="/user/{{$id}}" method="POST" accept-charset="UTF-8">

        <input type="hidden" name="_method" value="PUT">
        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">

        <label class="label">First Name</label>
        <input class="profile_input" type="text" name="first_name" value="{{ Auth::user()->first_name}}">

        <label class="label">Last Name</label>
        <input class="profile_input" type="text" name="last_name" value=" {{Auth::user()->last_name}}">

        <label class="label">Email</label>
        <input class="profile_input" type="text" name="email" value=" {{Auth::user()->email}}">

        <label class="label">Phone</label>
        <input class="profile_input" type="text" name="phone" value=" {{Auth::user()->phone}}">
        <br> <br>
        <input class="btn-primary btn" name="submit" type="submit" value="Submit">
      </form>
    </div>
  </div>


<br>
<br>
<br>
<br>

<br>
<br>
<br>
<br>



</div>





@endsection
