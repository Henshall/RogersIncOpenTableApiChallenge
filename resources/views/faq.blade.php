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
          <li><a href="#faq-0">How long did you spend on the coding test? What would you add to your solution if you had more time? If you didn't spend much time on the coding test then use this as an opportunity to explain what you would add.</a></li>
          <li><a href="#faq-1">Can anyone use Laravel Lightening?</a></li>
          <li><a href="#faq-2"> What was the most useful feature that was added to the latest version of your chosen language? Please include a snippet of code that shows how you've used it.  </a></li>
          <li><a href="#faq-3"> How would you improve the API that you just used? </a></li>
          <li><a href="#faq-4"> Please describe yourself using JSON. </a></li>
        </ul>
      </div>
      <div class="right">
        <div class="faq-content">
          <div id="faq-0" class="title">How long did you spend on the coding test? What would you add to your solution if you had more time? If you didn't spend much time on the coding test then use this as an opportunity to explain what you would add.</div>
          <div class="content">
            <br>
            I spent around 5 hours on the test to create 6 webpages: /about, /demo, /contact, /faq, /login, /register
            <br>
            If I had more time I would add a few more features such as:
            <ul>
              <li>* Additional styling to displayed resturants of the API</li>
              <li>* Additional styling of all other pages to match open table theme</li>
              <li>* Clean up application by removing unnecessary files (ex. such as paymentController)</li>
              <li>* Remove login/registration</li>
              <li>* modify links on /demo page to point internally.</li>
              <li>* etc</li>
            </ul>

            </div>
            <div id="faq-1" class="title">What was the most useful feature that was added to the latest version of your chosen language? Please include a snippet of code that shows how you've used it.</div>
            <div class="content">
              <br>
              I mostly work with php, so with the recent release of php 7, I would have to say that the improvement in speed are the most useful "feature" :) However php 7 also adds support for return type declarations.
              <br>
              Ex.<br>
              function sum($a, $b): float {
                  return $a + $b;
              }
              <br>
              This ensures the return value will be a float.

                      </div>

            <div id="faq-2" class="title">How would you track down a performance issue in production? Have you ever had to do this?  </div>
            <div class="content">
              <br>
              A performance issue would be caused by some type of bottle-neck in the application. It could be for numberous reasons: poorly written code, lack of load balancing, traffic spikes, poorly run db queries etc.
              While I was working at sunquest I had to track down an issue with page loading times and discovered that we were requesting to much extra data from an API resulting in longer wait times for the data.

              </div>


              <div id="faq-3" class="title">How would you improve the API that you just used </div>
              <div class="content">
                <br>
                The APi at http://opentable.herokuapp.com/api/restaurants?city=toronto
                is very simple. I would improve it by making it exactly like the Open Tables api :)

                </div>



                <div id="faq-4" class="title">Please describe yourself using JSON. </div>
                <div class="content">
                  <br>
                  <pre>

                    {
                      "Wesley Henshall": {
                        "skills": [
                          "PHP / Laravel",
                          "SQL",
                          "Python",
                          "Git",
                          "CSS/Sass",
                          "HTML",
                          "C#",
                          "JavaScript",
                          "Ruby Rails"
                        ],
                        "Apps Created": [
                          "Sunquet.ca",
                          "Authors Republic",
                          "Stellar Network Trades",
                          "Elite Duels",
                          "Tinder Auto Swiper",
                          "ETC"
                        ],
                        "Universities Attended": [
                          "University of Western Ontario",
                          "Kings College",
                          "Otto Von Guericke Universität "
                        ],
                        "Contact Info": [
                          "weshenshall@gmail.com",
                          "+1 (519) 520-3512"
                        ]
                      }
                    }
                  </pre>
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
