# Insight - wordpress theme
[PHP, JavaScript, HTML5, CSS3, SASS] Custom marketing agency website built on Wordpress CMS

## How to use:

* Run XAMPP
* Download latest WordPress install from https://wordpress.org/download/
* Place WordPress install in the C:\xampp\htdocs
* Move the downloaded insight-wordpress theme to C:\xampp\htdocs\wordpress\wp-content\themes
* Create following pages in WordPress admin panel: about, news, projects, services, contact with corresponding templates
* Install contact-form-7 for the form in contacts page, create new form & edit form id in the contact page short code
* In code-form-7 create new form, paste following code

```
<p class="contact-form__text">Please complete the form below. Information with an asterisk* is required.</p>

<h4 class="contact-form__heading">My personal details</h4>
[text first-name placeholder "First name" ]
[text last-name placeholder "Last name" ]
[email* email-address placeholder "Email address*" ]

<hr>

<p class="contact-form__text">For an even quicker response to your need – please can you fill in the following information:</p>

<h4 class="contact-form__heading">I would like to do this</h4>
[radio radio-208 default:1 "Plot my territory and understand my audiences" "Get my next ideas" "Build strong concepts" "Do something else I’m pretty sure Catalyx can do"]


<hr>


<h4 class="contact-form__heading">Type of people I want to use</h4>
<div class="contact-form__div">
[select* menu-940 first_as_label "Age" "0 - 9" "10 - 19" "20 - 29" "30 - 39" "40 - 49" "50 - 59" "60 - 69" "70 - 79" "Over 80"][select* menu-754 first_as_label "Gender" "Male" "Female" "No preference"]
</div>



[text location placeholder "Location"]
[text demographic placeholder "Demographic"]


<hr>


<h4 class="contact-form__heading">How would you like to work with us</h4>
[radio radio-446 default:1 "This is just a one time fling" "This could be the start of something beautiful" "Let’s get to know each other first"]
<h4 class="contact-form__heading">My ballpark budget is</h4>
<div class="contact-form__div">
[select menu-137 first_as_label "Amount" "£0 - £999" "£1000 - £1999" "£2000 - £2999" "£3000 - £3999" "£4000 - £4999" "£5000 - £5999" "£6000 - £6999" "£7000 - £7999" "£8000 - £8999" "£9000 - £9999" "£10,000+"][select first_as_label menu-137 "Per month" "Per year"]
</div>

<div class="button__div">[submit "Send"]</div>
```
