@extends('layouts.app')

@section('content')

<div class="container">

  <div class="row">
    <div class="col-sm-12 column title">
    Enter your team name and API key.
    </div>
  </div>
  <br>

  <div class="row">
    <div class="col-md-12  center">
      <span class="header">Step 1: Enter your team name</span><br>
      Any name will do - this is for your own reference.
  </div>
  </div>
    <br>

    <div class="row">
    <div class="col-sm-12 center">
      <span class="header">Step 2: Sign into slack</span><br>
      <a href="https://slack.com/signin">CLICK HERE</a> to sign into slack. Enter your teams 'slack url' and password to sign in.

    </div>
    </div>
    <br>

    <div class="row">
    <div class="col-sm-12 center">
      <span class="header">Step 3: Get your API Key</span><br>
      <a href="https://api.slack.com/custom-integrations/legacy-tokens">CLICK HERE</a> to generate the slack legacy token for your team. This is your API key, and should be a random string of letters and numbers. Copy this key and type it into the box below.

      If your having problems, google "how to generate slack API key" to see online tutorials
    </div>
    <br>
    </div>
    <br>
    <br>



  <div class="row">
    <div class="col-sm-10 center">

      <form class="" action="/team" method="post">
        <input type="hidden" name="_token" value="<?php echo csrf_token() ?>">
        <input type="hidden" name="active" value="true">

        <table class=" table">

          <tr>
            <td>Team Name</td>
            <td><input style="width:100%" type="text" name="team_name" value=""></td>
          </tr>

          <tr>
            <td>Api Key</td>
            <td><input style="width:100%" type="text" name="api_key" value=" "></td>
          </tr>

          <tr>
            <td><button type="submit" name="button">Submit</button></td>

          </tr>
        </table>
      </form>




      <br>
      <br>
      <br>
      <br>



    </div>

  </div>

</div>





@endsection
