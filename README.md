# Joomla mobile first template in HTML5, SASS + Compass
The template automatically unsets the core Joomla libraries (caption.js, core.js, mootools-core.js, mootools-more.js). Twitter bootstrap is also not included, so you really start with a blank template. There is a config.rb file included, if you are using sass and compass. Template was tested in Joomla 3.0.3.

# How to use it
If you need a detailed explanation you can [read my blog post about the template](http://jure-stern.si/blog/mobile-first-joomla-template-in-html5-sass-compass/).

- Download the template and install it with the Extension Manager,
- Go to the template settings, under the Options tab and choose what you need,
- The template contains a logic for the sidebars on the left or right, you can change their width inside the _variables.scss file,
- edit the partials in sass/includes folder, those are the default styles for mobile view, they get compiled into screen.css file,
- enhanced.scss gets fired when the screen width is more then 40.5em, you can change the value in template/include/unseting.php
- If you need to add custom files to the <head>, edit the unseting.php file accordingly.

# Included libraries
You can activate the following:
* Choose a logo image or write a site title instead,
* Zepto.js (http://zeptojs.com/)
* jQuery.js (http://jquery.com/) Google hosted with a fallback on the server
* Sizzle.js (http://sizzlejs.com/)
* selectivizr.js (http://selectivizr.com/)
* modernizr.js (http://modernizr.com/)
* html5shiv.js (https://github.com/aFarkas/html5shiv)
* html5shiv-printshiv.js (https://github.com/aFarkas/html5shiv)
* warning.js (https://github.com/jbueza/IE6-Warning-with-Localizations) - IE6 warning message

For version numbers check the humans.txt file in the template root.

# Author
Jure Stern - [Follow me on Twitter](https://twitter.com/JureStern) or [read my blog](http://jure-stern.si/blog.html)