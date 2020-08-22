# Insight - wordpress
[PHP, JavaScript, HTML5, CSS3, SASS] Custom marketing agency website built on Wordpress CMS

## To develop this website on your local machine:

## Download theme code
![download_github](https://user-images.githubusercontent.com/37672494/90953514-fade7680-e463-11ea-8581-e7a255b7c3e6.png)


## Requirements:
* XAMPP https://www.apachefriends.org/index.html
* WordPress install from https://wordpress.org/download/
* NodeJS for downloading npm packages https://nodejs.org/en/
* WordPress https://wordpress.org/download/
* Gulp-cli https://gulpjs.com/docs/en/getting-started/quick-start

## How to use:

* Download & place wordpress folder to (*Wherever you installed XAMPP*)\xampp\htdocs
![place wordpress folder](https://user-images.githubusercontent.com/37672494/90953527-1ba6cc00-e464-11ea-9b95-4b2382ab759d.png)
* Move the downloaded insight-wordpress theme to (*Wherever you installed XAMPP*)\xampp\htdocs\wordpress\wp-content\themes
![save theme](https://user-images.githubusercontent.com/37672494/90953536-28c3bb00-e464-11ea-87eb-6efb5c4d93d5.jpg)
* Run XAMPP as administrator(windows). Start Apache and MySQL
* Click on MySQL Admin and create database and a user with admin rights
* In your browser go to localhost/wordpress and install wordpress with your previously set credentials
* Once installed change active theme to insight
* Open the insight theme directory (for example C:\xampp\htdocs\wordpress\wp-content\themes\insight) with code editor
* Run ```npm install``` in terminal (You need to have node installed on ypur machine for this)
![npm_install](https://user-images.githubusercontent.com/37672494/90953560-32e5b980-e464-11ea-86d6-53448a5bd5b8.jpg)
* Run ```gulp``` in terminal
* Create following pages in WordPress admin panel: about, news, projects, services, contact choosing the corresponding templates from the menu (you may want to have classic editor plugin installed)
![img1](https://user-images.githubusercontent.com/37672494/90953566-44c75c80-e464-11ea-8948-f456ba1cad63.jpg)

* Install contact-form-7 plugin
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
Edit form id in the contact page short code
and create another form for signing up:
```
[text* first-name placeholder "First name" ]
[text* last-name placeholder "Last name" ]
[email* email-address placeholder "Email address*" ]

Insight needs the contact information you provide to us to contact you about our products and services. You may unsubscribe from these communications at anytime. For information on how to unsubscribe, as well as our privacy practices and commitment to protecting your privacy, check out our Privacy Policy.
In order to provide you the content requested, we need to store and process your personal data. If you consent to us storing your personal data for this purpose, please tick the checkbox below.

[checkbox* checkbox-613 "I agree to receive other communications from Insight"]

<div class="button__div">[submit "Subscribe"]</div>
```
Be sure to change the corresponding short code in email-popup.php file

* Add projects and posts to have them appear on success stories & news pages.
* Gulp will auto convert *.scss files to *.css, watch for changes in your code and auto reload the browser window
* Enjoy the development!
