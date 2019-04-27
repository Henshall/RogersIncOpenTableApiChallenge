
# Technical Questions:

###1) How long did you spend on the coding test? What would you add to your solution if you had more time? If you didn't spend much time on the coding test then use this as an opportunity to explain what you would add.

I spent around 5 hours on the test to create 6 webpages: /about, /demo, /contact, /faq, /login, /register

If I had more time I would add a few more features such as:
* Additional styling to displayed resturants of the API
* Additional styling of all other pages to match open table theme
* Clean up application by removing unnecessary files (ex. such as paymentController)
* Remove login/registration
* modify links on /demo page to point internally.
Etc.


###2) What was the most useful feature that was added to the latest version of your chosen language? Please include a snippet of code that shows how you've used it.

I mostly work with php, so with the recent release of php 7, I would have to say that the improvement in speed are the most useful "feature" :) However php 7 also adds support for return type declarations.

Ex.
function sum($a, $b): float {
    return $a + $b;
}

This ensures the return value will be a float.



###3) How would you track down a performance issue in production? Have you ever had to do this?
A performance issue would be caused by some type of bottle-neck in the application. It could be for numberous reasons: poorly written code, lack of load balancing, traffic spikes, poorly run db queries etc.
While I was working at sunquest I had to track down an issue with page loading times and discovered that we were requesting to much extra data from an API resulting in longer wait times for the data.


###4) How would you improve the API that you just used?

The APi at http://opentable.herokuapp.com/api/restaurants?city=toronto
is very simple. I would improve it by making it exactly like the Open Tables api :)



###5)Please describe yourself using JSON.
 
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
