@extends('layouts.app')

@section('content')
  <div class="grey_background">
  <div  class="container faq-questions rounded box-shadow bg-white">
    <div class="page-header ">
      <h3>Frequently Asked Questions</h3>
    </div>
    <div class="row">
      <div class="left">
        <ul>
          <li><a href="#faq-0">What is Laravel Lightening?</a></li>
          <li><a href="#faq-1">Can anyone use Laravel Lightening?</a></li>
          <li><a href="#faq-2"> Why was this app created?  </a></li>

        </ul>
      </div>
      <div class="right">
        <div class="faq-content">
          <div id="faq-0" class="title">What is Laravel Lightening?</div>
          <div class="content">
            Laravel Lightning is a project for creating small websites - fast. Its the laravel framework which comes with a number of extra features: prebuilt pages, code examples, set-up scripts etc..
          </div>
            <div id="faq-1" class="title">Can anyone use Laravel Lightening?</div>
            <div class="content">
              Yes its free to use!

                      </div>

            <div id="faq-2" class="title">Why was this app created?  </div>
            <div class="content">
                While developing applications I noticed that it would often be faster to modify a project I had already created then to start new.
                Most of my apps had very similar functionality such as login/registration. I built this app to be a flexible template for future projects

              </div>








                </div>
              </div>
            </div>
          </div>
          <br>
          <br>
          <br>
      </div>
          <style>
          .faq-questions{
            /* font-family: "Helvetica Neue", Helvetica, Arial, sans-serif; */
            line-height: 1.4;
            color: #5a5a5a;
            padding-left: 30px;
            padding-right: 30px;
            padding-top: 10px;
            padding-bottom: 10px;

          }
          .faq-questions .page-header{
            margin: 7px 0;
            padding-bottom: 15px;
            border-bottom: 1px solid #e5e5e5;
          }
          .faq-questions .left{
            width: 33.333333333%;
            float: left;
            min-height: 1px;
            padding: 0 10px;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
          }
          .faq-questions .right{
            width: 66.666666667%;
            float: left;
            min-height: 1px;
            padding: 0 10px;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
          }
          .faq-questions ul{
            padding: 0;
            list-style: none;
            border-radius: 5px;
            box-shadow: 0 1px 2px rgba(0,0,0,0.05);
          }
          .faq-questions ul li a{
            display: block;
            margin-bottom: -1px;
            padding: 8px 29px 8px 14px;
            border: 1px solid #ddd;
            color: #4281ca;
            text-decoration: none;
          }
          .faq-questions ul li:first-child a{
            border-radius: 5px 5px 0 0;
          }
          .faq-questions ul li:last-child a{
            border-radius: 0 0 5px 5px;
          }
          .faq-questions .faq-content{
            margin-left: 20px;
          }
          .faq-questions .faq-content .title{
            margin-bottom: 5px;
            font-size: 18px;
            font-weight: bold;
          }
          .faq-questions .faq-content .content{
            margin-bottom: 20px;
          }


          #faq_link{
            color: #66b6ff;
          }

          @media screen and (max-width: 700px){

            .left{width:100%!important;}
          }

          .content{
            text-align: left;
          }


          </style>


<style media="screen">
  .panel-title{
    font-size: 20px;
  }

  .grey_background{
    padding-top: 5%;
  }

  #faq_link{
    color:white;
  }
</style>

@endsection
