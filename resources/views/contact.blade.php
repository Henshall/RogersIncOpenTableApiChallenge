@extends('layouts.app')
@push('styles')
  <!-- TODO Why the bootstarp style is not applying here? -->
  <style type="text/css">
  .nav li {
    padding-left: 10px !important;
  }
  </style>

@endpush

@section('content')

  <div class="grey_background">
    <br>
    <br>
    <div class="container rounded box-shadow bg-white">
      <div class="row">

        <div class="col-md-8 offset-md-2 personal-info">
        <br>
        <br>
            <section>
              <div class="tab1">
                <div class="tab-pane fade active show" id="tab1default">
                  <form class="form-horizontal" role="form" method="POST" action="/pages/send_message" onsubmit="return verify_password()"  >
                  {{csrf_field()}}
                  <h3>Contact</h3>





                  <div class="form-group">
                    <label class="control-label">Name:</label>
                    <input name="name" class="form-control" type="text"
                    value="">
                  </div>


                  <div class="form-group">
                    <label class="control-label">Email:</label>

                      <div class="form-inline">
                        <input name="email"  class="form-control col-md-12" type="text" value="" >
                      </div>

                  </div>


                  <div class="form-group">
                    <label class="control-label">Subject:</label>

                      <div class="form-inline">
                        <input name="subject"  class="form-control col-md-12" type="text" value="" >
                      </div>

                  </div>


                  <textarea rows="8" name="comment" id="form_comments" placeholder="Please send us a message." required="required" class="form-control input-block js-comment-field js-quick-submit"></textarea>

                  <br>




                    <div class="form-group">
                      <label class="control-label"></label>
                      <input id="profile_submit" type="submit" class="btn btn-primary" value="Send Email">
                      <span></span>
                    </div>
                  </form>



                </div>
              </div>
              <div class="tab2">





            


                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>


                @push('scripts')
                  <script type="text/javascript">
                  $count = 0;
                  function addNewRow() {
                    $count ++;
                    var lastOne = document.getElementById('file-inputs');
                    lastOne.insertAdjacentHTML ('beforeEnd','<div class="row">\n' +
                    '                    <div class="col-2">\n' +
                    '                        <label for="file-1">Doc '+$count+' :</label>\n' +
                    '                    </div>\n' +
                    '                    <div class="col-3">\n' +
                    '                       <input type="text"   name="filename-'+$count+'" >\n' +
                    '                    </div>\n' +
                    '                    <div class="col-3">\n' +
                    '                        <input type="text"   name="fileid-'+$count+'" >\n' +
                    '                    </div>\n' +
                    '                    <div class="col-4">\n' +
                    '                        <input type="file"   name="file-'+$count+'">\n' +
                    '                    </div>\n' +
                    '                </div>');
                  }
                  addNewRow()
                  </script>
                @endpush
              </div>

            </section>



        </div>
      </div>

    </div>
    <hr>

  </div>

@endsection

<style media="screen">
.services_agreement{
  border-style: solid;
  border-width: 1px;
  padding: 11px;
  border-color: #ced4da;
}
#agreement_checkbox{
  /* width: 120px;
  height: 50px; */

}

#agree_text{
  position: relative;
  /* left: -100px;
  top: -17px; */

}

#background_agree{
  background-color: #e2e2e2;
  padding: 14px;
  width: 20%;
  text-align: center;
  height: 44px;
  display: inline-block;
}



.banking_data{
  background-color: #d0d0d0;
  padding: 16px;
}
}
</style>






<style media="screen">
.grey_background{
  background-color: #fafbfc
  /* background-color: red; */
}

.box-shadow {
  box-shadow: 0 0.25rem 0.75rem rgba(0, 0, 0, .20)!important;
}

.rounded {
  border-radius: 0.25rem !important;
}
</style>





















<style media="screen">
/* Component Needs */

.pc-tab > input,
.pc-tab section > div {
  display: none;
}

#tab1:checked ~ section .tab1,
#tab2:checked ~ section .tab2,
#tab3:checked ~ section .tab3 {
  display: block;
}

#tab1:checked ~ nav .tab1,
#tab2:checked ~ nav .tab2,
#tab3:checked ~ nav .tab3 {
  color: #007bff;
  /* color: white; */
  /* border-style: solid; */
  /* border-bottom: none; */
  /* background-color: #3b424a; */
  background-color: #ececec;
  border-top-right-radius: 7px;
  border-top-left-radius: 7px;
}

/* Visual Styles */

$activeColor: #ffffff;
$unactiveColor: #eeeeee;
$unactiveHoverColor: #dddddd;

@import url(https://fonts.googleapis.com/css?family=Droid+Serif:400,700);
@import url(https://fonts.googleapis.com/css?family=Raleway:100,400,700);

*, *:after, *:before {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}



h1 {
  text-align: center;
  font-weight: 100;
  font-size: 60px;
  color: #e74c3c;
}

.pc-tab {
  width: 100%;

  margin: 0 auto;
  ul {
    list-style: none;
    margin: 0;
    padding: 0;
    li {
      label {
        font-family: "Raleway";
        float: left;
        padding: 15px 25px;
        border: 1px solid #ddd;
        border-bottom: 0;
        background: $unactiveColor;
        color: #444;
        &:hover {
          background: $unactiveHoverColor;
        }
        &:active {
          background: $activeColor;
        }
      }
      &:not(:last-child) label {
        border-right-width: 0;
      }
    }
  }
  section {
    font-family: "Droid Serif";
    clear: both;
    div {
      padding: 20px;
      width: 100%;
      border: 1px solid #ddd;
      background: #fff;
      line-height: 1.5em;
      letter-spacing: 0.3px;
      color: #444;
      h2 {
        margin: 0;
        font-family: "Raleway";
        letter-spacing: 1px;
        color: #34495e;
      }
    }
  }
}

#tab1:checked ~ nav .tab1,
#tab2:checked ~ nav .tab2,
#tab3:checked ~ nav .tab3 {
  label {
    background: white;
    color: #111;
    position: relative;
    &:after {
      content: '';
      display: block;
      position: absolute;
      height: 2px;
      width: 100%;
      background: $activeColor;
      left: 0;
      bottom: -1px;
    }
  }
}

.inline_block{
  display: inline-block;
}

.navbar_spaceing{
  margin-bottom: 0px!important;
}

footer {
  margin-top: 50px;
  font-size: 14px;
  color: #CCC;
  text-align: center;
  a {
    color: #AAA;
    text-decoration: none;
  }
}

#contact_link{
  color: #66b6ff;
}

.grey_background{

    background-color: #3c4248;

}

</style>
