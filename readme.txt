=== Portfolio by BestWebSoft - Work and Projects Presentation Plugin for WordPress ===
Contributors: bestwebsoft
Donate link: https://bestwebsoft.com/donate/
Tags: add portfolio, portfolio plugin, add portfolio widget, portfolio, fancybox, showcase, responsive portfolio, portfolio plugin, create portfolio, portfolio categories, project portfolio, portfolio widget, add album
Requires at least: 4.5
Tested up to: 5.9
Stable tag: 2.56
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Create and add personal portfolio to your WordPress website. Manage and showcase past projects to get more clients.

== Description ==

Portfolio plugin is the best way to create and add past projects to your WordPress website.  Create, configure and manage unlimited number of portfolio projects.

Include project details, short and long description, URL, screenshots, date of completion along with each project and much more.

Showcase your recent work to get more jobs and grow your business!

[View Demo](https://bestwebsoft.com/portfolio-demo/?ref=readme)

https://www.youtube.com/watch?v=OIxDlQZcCcI

= Free Features =

* Add unlimited number of portfolio projects with the following info:
	* Title
	* Description
	* Short description
	* Images
	* Completion date
	* Executor profiles
	* Technologies
	* Project, URL
	* Source Files, URL
* Change image size for:
	* Album cover
	* Thumbnails
* Set default portfolio projects sorting order by:
	* ID
	* Title
	* Date created
	* Menu order
	* Random
	* ASC (ascending order from lowest to highest values)
	* DESC (descending order from highest to lowest values)
* Set the number of images to display per row
* Set the number of portfolio columns 
* Compatible with [Multilanguage](https://bestwebsoft.com/products/wordpress/plugins/multilanguage/?k=8e94e3b0c771409cf33cd1527ccad522)
* Install/Delete demo data
* Add labels for additional fields
* Change a slug for portfolio project
* Add portfolio projects to the search results using [Custom Search](https://bestwebsoft.com/products/wordpress/plugins/custom-search/?k=2f4d98ffee7777d767bf26c726c70f67)
* Compatible with latest WordPress version
* Incredibly simple settings for fast setup without modifying code
* Detailed step-by-step documentation and videos
* Multilingual and RTL ready

> **Pro Features**
>
> All features from Free version included plus:
>
> * Compatible with [Sender](https://bestwebsoft.com/products/wordpress/plugins/sender/?k=b147786efc846e1b8af4f4161a07bd16)
> * Create and display portfolio:
> 	* Categories
> 	* Sectors
> 	* Services
> * Add info about the client
> * Add the widget with portfolio categories
> * Sort portfolio projects by date and title
> * Change the size for slider images
> * Enable lightbox helper:
> 	* Button
> 	* Thumbnail
> * Add the slider with featured portfolios
> * Configure all subsites on the network
> * Get answer to your support question within one business day ([Support Policy](https://bestwebsoft.com/support-policy/))
>
> [Upgrade to Pro Now](https://bestwebsoft.com/products/wordpress/plugins/portfolio/?k=b97fe54507469c680b273a111ab11083)

If you have a feature suggestion or idea you'd like to see in the plugin, we'd love to hear about it! [Suggest a Feature](https://support.bestwebsoft.com/hc/en-us/requests/new)

= Documentation & Videos =

* [[Doc] User Guide](https://bestwebsoft.com/documentation/portfolio/portfolio-user-guide/)
* [[Doc] Installation](https://bestwebsoft.com/documentation/how-to-install-a-wordpress-product/how-to-install-a-wordpress-plugin/)
* [[Doc] Purchase](https://bestwebsoft.com/documentation/how-to-purchase-a-wordpress-plugin/how-to-purchase-wordpress-plugin-from-bestwebsoft/)
* [[Video] Installation Instruction](https://www.youtube.com/watch?v=6xPYIttiJ8g)


= Help & Support =

Visit our Help Center if you have any questions, our friendly Support Team is happy to help - <https://support.bestwebsoft.com/>

= Affiliate Program =

Earn 20% commission by selling the premium WordPress plugins and themes by BestWebSoft — [https://bestwebsoft.com/affiliate/](https://bestwebsoft.com/affiliate/?utm_source=plugin&utm_medium=readme&utm_campaign=affiliate_program)

= Translation =

* Czech (cs_CZ) (thanks to [PaMaDeSSoft](mailto:info@pamadessoft.cz), www.pamadessoft.cz)
* Russian (ru_RU)
* Ukrainian (uk)

Some of these translations are not complete. We are constantly adding new features which should be translated. If you would like to create your own language pack or update the existing one, you can send [the text of PO and MO files](https://codex.wordpress.org/Translating_WordPress) to [BestWebSoft](https://support.bestwebsoft.com/hc/en-us/requests/new) and we'll add it to the plugin. You can download the latest version of the program for work with PO and MO [files Poedit](https://www.poedit.net/download.php).

= Recommended Plugins =

* [Updater](https://bestwebsoft.com/products/wordpress/plugins/updater/?k=5c5c9083d339113b444b74b2cb3ecaa1) - Automatically check and update WordPress website core with all installed plugins and themes to the latest versions.
* [Multilanguage](https://bestwebsoft.com/products/wordpress/plugins/multilanguage/?k=8e94e3b0c771409cf33cd1527ccad522) - Translate WordPress website content to other languages manually. Create multilingual pages, posts, widgets, menus, etc.
Facebook Button - Add Facebook Like, Share and Profile buttons to WordPress posts, pages and widgets.
* [Custom Search](https://bestwebsoft.com/products/wordpress/plugins/custom-search/?k=2f4d98ffee7777d767bf26c726c70f67) - Add custom post types to WordPress website search results.

== Installation ==

1. Upload the folder `portfolio` to the directory `/wp-content/plugins/`
2. Activate the plugin via the 'Plugins' menu in WordPress
3. Please check if you have the template files 'portfolio.php' and 'portfolio-post.php' in your templates directory. If you can't find these files, then just copy them from the directory '/wp-content/plugins/portfolio/template/' to your templates directory.
4. Create a page and select a template in the Page Attributes block.
5. Create (if necessary) Technologies and Executor profiles.
6. Create portfolio item, add title, description, short description, and upload the images one of which should be set as featured. Publish portfolio then.

[View a PDF version of Step-by-step Instruction on Portfolio Installation](https://bestwebsoft.com/documentation/how-to-install-a-wordpress-product/how-to-install-a-wordpress-plugin/)

https://www.youtube.com/watch?v=6xPYIttiJ8g

== Frequently Asked Questions ==

= How to change or override plugin templates? =

Plugin template files can be found in the `/wp-content/plugins/portfolio/templates/` directory.
You can edit these files in an upgrade-safe way using overrides. Copy them into a directory with your theme named `/bws-templates`.

Example: To override the single portfolio template, please copy `/wp-content/plugins/portfolio/templates/portfolio-post.php` to `wp-content/themes/your-theme/bws-templates/portfolio-post.php`.

Do not edit these files in the plugin's core directly as they are overwritten during the upgrade process and any customizations will be lost.

= I'm getting the following error: Fatal error: Call to undefined function get_post_thumbnail_id() =

This error means that your theme doesn't support thumbnails, in order to add this option please find the file 'functions.php' in your theme and add the following strings to this file:
`add_action( 'after_setup_theme', 'theme_setup' );

function theme_setup() {
    add_theme_support( 'post-thumbnails' );
}`

After that your theme will support thumbnails and the error will disappear.

= I have some problems with the plugin's work. What Information should I provide to receive proper support? =

Please make sure that the problem hasn't been discussed yet on our forum (<https://support.bestwebsoft.com>). If no, please provide the following data along with your problem's description:

1. the link to the page where the problem occurs
2. the name of the plugin and its version. If you are using a pro version - your order number.
3. the version of your WordPress installation
4. copy and paste into the message your system status report. Please read more here: [Instruction on System Status](https://bestwebsoft.com/documentation/admin-panel-issues/system-status/)

== Screenshots ==

1. Portfolio frontend page (for all portfolios).
2. Portfolio single frontend page.
3. The pop-up window on Portfolio single page.
4. Portfolio Settings page.
5. Add technologies page.
6. Add executors profile page.
7. Add New Portfolio items.
8. Portfolio admin page (for all portfolios).

== Changelog ==

= V2.56 - 26.04.2022 =
* Bugfix : Deactivation Feedback fix.

= V2.55 - 23.03.2022 =
* Update : All functionality was updated for WordPress 5.9.
* Update : BWS plugins section is updated.

= V2.54 - 06.10.2021 =
* Update : All functionality was updated for WordPress 5.8.1.
* Update : BWS plugins section is updated.
* Bugfix : Small bugs has been fixed.
* PRO : Compatibility with Sender by BestWebSoft has been added.

= V2.53 - 29.09.2020 =
* Update : Added a checkbox that allows viewing Source Files for unregistered users.
* Update : BWS Panel section was updated.

= V2.52 - 13.05.2020 =
* Update : The plugin settings page was changed.
* Update : Templates are updated.
* Update : BWS menu has been updated.
* Update : All functionality was updated for WordPress 5.4.1.

= V2.51 - 07.10.2019 =
* Pro : The ability to change the size of slider images has been added.
* Bugfix : Small bugs has been fixed.

= V2.50 - 04.09.2019 =
* Update : The deactivation feedback has been changed. Misleading buttons have been removed.

= V2.49 - 16.05.2019 =
* Update : The function for returning an array of objects has been added.

= V2.48 - 04.04.2019 =
* NEW : The ability to display portfolio columns has been added.
* Update : All functionality was updated for WordPress 5.1.1

= V2.47 - 26.02.2019 =
* Bugfix : The plugin displaying has been improved.

= V2.46 - 03.09.2018 =
* Bugfix : The bug with portfolio displaying has been fixed.

= V2.45 - 24.08.2018 =
* Bugfix : The bug with demo data displaying has been fixed.

= V2.44 - 08.02.2018 =
* Update : Preview image styles have been improved.
* Bugfix : Fancybox JavaScript error has been fixed.
* Bugfix : Options removal from the database when working on a multisite network has been fixed.

= V2.43 - 17.01.2018 =
* Update : The Fancybox library has been updated up to v3.1.20.

= V2.42 - 18.08.2017 =
* Update : The plugin settings page has been updated.
* Update : Template files loading has been changed.
* Pro : Portfolio sectors is added.
* Pro : Portfolio services is added.
* Pro : Portfolio client information is added.

= V2.41 - 18.05.2017 =
* Bugfix : The functionality of adding Portfolio to the Custom Search by BestWebSoft was fixed.
* Bugfix : Feed links were corrected.

= V2.40 - 14.04.2017 =
* Bugfix : Multiple Cross-Site Scripting (XSS) vulnerability was fixed.

= V2.39 - 17.08.2016 =
* Bugfix : Adding Jquery UI style for datepicker has been updated.
* Update : Multilanguage plugin compatibility has been added.
* Update : All functionality for WordPress 4.6 was updated.

= V2.38 - 27.07.2016 =
* Update : Responsive for single portfolio has been improved.
* Bugfix : Bug with updating images has been fixed.
* Pro: Slider displaying has been changed.

= V2.37 - 08.04.2016 =
* NEW : Ability to add images from WordPress media library.
* NEW : Metabox with portfolio images has been added for portfolio editing page.
* Update : An ability to use the shortcodes has been added in the single portfolio template.
* Update : An ability to add main contant has been added in the portfolio template.

= V2.36 - 04.03.2016 =
* NEW : The ability to install demo data for plugin was added.
* NEW : The Czech language file was added.
* Bugfix : The bug with plugin menu duplicating was fixed.

= V2.35 - 16.11.2015 =
* NEW : A button for Portfolio shortcode inserting to the content was added.
* Update : Compatibility with PDF & Print by BestWebSoft was added.
* Update : All functionality for wordpress 4.3.1 was updated.

= V2.34 - 08.07.2015 =
* NEW : Ability to restore settings to defaults.
* Update : Portfolio Settings page is updated.

= V2.33 - 02.06.2015 =
* Bugfix : We fixed the bug of displaying links to executors profile page.
* Update : Portfolio template checking functionality was updated.
* Update : We updated all functionality for wordpress 4.2.2.

= V2.32 - 16.04.2015 =
* Update : Portfolio template checking functionality was updated.

= V2.31 - 12.01.2015 =
* NEW : The Serbian language file is added to the plugin.
* Update : Templates are updated.
* Update : We updated all functionality for wordpress 4.1.

= V2.30 - 07.11.2014 =
* Update : We added the necessary functionality to avoid errors that may appear if a user also has Jetpack Portfolio installed.
* Update : We added menu order attribute for portfolio.

= V2.29 - 05.09.2014 =
* ATTENTION! In the current version of Portfolio plugin we updated the Technologies widget. If it was added to the sidebar, it will disappear and you will have to add it again.
* Bugfix : We fixed the bug of displaying sidebar in Twenty Fourteen theme.
* Bugfix : We fixed the bug of adding Technologies widget.
* Update : We updated all functionality for wordpress 4.0.

= V2.28 - 07.08.2014 =
* Bugfix : Bug with localization was fixed.
* Bugfix : Security Exploit was fixed.

= V2.27 - 15.07.2014 =
* NEW : We added settings for renaming uploaded images to avoid conflict.
* Update : We added functionality to exclude unnecessary thumbnails from uploaded images in portfolio.
* Bugfix : Problem with executor profile is fixed in portfolio template.

= V2.26 - 10.06.2014 =
* Bugfix : Problem with executor profile is fixed.

= V2.25 - 20.05.2014 =
* Update : We updated all functionality for wordpress 3.9.1.

= V2.24 - 23.04.2014 =
* Update : We updated all functionality for wordpress 3.9.
* Update : Compatibility with Gallery Pro plugin.
* Update : The Ukrainian language file is updated in the plugin.
* Bugfix : Problem with paginiation of technologies is fixed.

= V2.23 - 28.03.2014 =
* Update : Portfolio Template is updated.
* Update : Screenshots are updated.
* Update : BWS plugins section is updated.
* Bugfix : Plugin optimization is done.
* Bugfix : Problem with pagination for portfolio as front page is fixed.

= V2.22 - 23.12.2013 =
* NEW : We added the ability to include Portfolio as search criterion for Custom Search on the Porfolio settings page.
* Update : BWS plugins section is updated.
* Update : We updated all functionality for wordpress 3.8.

= V2.21 - 08.11.2013 =
* NEW : We added functionality for disable rewriting templates after plugin update.
* Update : Activation of radio button or checkbox by clicking on its label.
* NEW : Add checking installed wordpress version.
* Update : We updated all functionality for wordpress 3.7.1.

= V2.20 - 14.10.2013 =
* Bugfix : Fixed style bugs.
* Bugfix : Fixed bug of updating images for portfolio.

= V2.19 - 02.10.2013 =
* Update : The Ukrainian language file is updated in the plugin.
* Update : The album cover is a link to portfolio item now.

= V2.18 - 23.09.2013 =
* NEW : The European Portuguese language file is added to the plugin.
* Update : We updated all functionality for wordpress 3.6.1.

= V2.17 - 04.09.2013 =
* Update : We updated all functionality for wordpress 3.6.
* Update : Function for displaying BWS plugins section placed in a separate file and has own language files.
* Update : The Brazilian Portuguese language file is updated in the plugin.

= V2.16 - 24.07.2013 =
* NEW : Added an ability to not display the link as a text for non-registered users.
* Bugfix : The error related to save settings if WordPress Permalinks are disabled is fixed.

= V2.15 - 18.07.2013 =
* NEW : Added an ability to view and send system information by mail.
* Update : We updated all functionality for wordpress 3.5.2.

= V2.14 - 11.06.2013 =
* NEW : Ability to change slug for portfolio item

= V2.13 - 27.05.2013 =
* Bugfix : The error related to changing the name of the field '_prtfl_descr' to the field '_prtfl_short_descr' is fixed.
* Update : BWS plugins section is updated.

= V2.12 - 12.04.2013 =
* Update : The English language file is updated in the plugin.

= V2.11 - 05.03.2013 =
* NEW : The Ukrainian language file is added to the plugin.

= V2.10 - 30.01.2013 =
* NEW: The French language file is added to the plugin.

= V2.09 - 29.01.2013 =
* NEW : Add possibility to display Latest Portfolio Items on your page or post with shortcode [latest_portfolio_items count=3].
* Update : We updated all functionality for wordpress 3.5.1.

= V2.08 - 09.10.2012 =
* NEW : The ordering of Portfolio Items was added to Settings page.

= V2.07 - 13.08.2012 =
* NEW : The German language file is added to the plugin.

= V2.06 - 24.07.2012 =
* Bugfix : Cross Site Request Forgery bug was fixed.

= V2.05 - 10.07.2012 =
* NEW : Brazilian Portuguese, Hebrew, Hindi, Italian, Persian, Spain language files are added to the plugin.
* NEW : Add possibility to change caption to additional fields.
* NEW : Add possibility to select additional fields to display them on main and single portfolio pages.
* Changed : Template to display portfolio is changed. Changes were done to both main page and single portfolio page.
* Update : We updated all functionality for wordpress 3.4.1.

= V2.04 - 13.04.2012 =
* Change: Replace prettyPhoto library to fancybox library.
* Change: Code that is used to display a lightbox for images in `portfolio.php` and `portfolio-post.php` template files is changed.

= V2.03 - 07.03.2012 =
* NEW : Shortcode for displaying of latest portfolio items is added.
* Changed : BWS plugins section.

= V2.02 - 24.02.2012 =
* NEW : Dutch language file is added to the plugin.
* New : Code for backup of portfolio template before a plugin is updated is added.
* Change : Code that is used to connect styles and scripts is added to the plugin for correct SSL verification.

= V2.01 - 31.01.2012 =
* NEW : Language files are added to the plugin.
* NEW : Settings page for Portfolio is added.
* Changed : Template to display portfolio is changed. Changes were done to both main page and single portfolio page.
* NEW : A possibility to create thumbnails multiple times for portfolio images is added.

= 1.07 =
* The bugs of description block displaying are fixed and jQuery noConflict is added to this version of the plugin.

= 1.06 =
* The bugs of featured images display and pagination are fixed in this version of the plugin.

= 1.05 =
* In this version image bug display is fixed.

= 1.04 =
* In this version image for portfolio is added to admin page.

= 1.03 =
* In this version an image uploaded by means of custom fields is substituted with Wordpress standard meta box for the media files uploading.

== Upgrade Notice ==

= V2.56 =
* Bug fixed.

= V2.55 =
* Usability improved.

= V2.54 =
* Bugs fixed.
* The compatibility with new WordPress version updated.

= V2.53 =
* Usability improved.

= V2.52 =
* Plugin optimization completed.

= V2.51 =
* Usability improved.
* Bugs fixed.

= V2.50 =
* Usability improved.

= V2.49 =
* Functionality improved.

= V2.48 =
* Usability improved.
* The compatibility with new WordPress version updated.

= V2.47 =
* Bugs fixed.

= V2.46 =
* Bugs fixed.

= V2.45 =
* Bugs fixed.

= V2.44 =
* Appearance improved.
* Bugs fixed.

= V2.43 =
* Appearance improved.

= V2.42 =
* Usability improved.

= V2.41 =
* Bugs fixed.

= V2.40 =
* Bugs fixed.

= V2.39 =
* Bugs fixed.
* The compatibility with new WordPress version updated.

= V2.38 =
Appearance improved. Bugs fixed.

= V2.37 =
Ability to add images from WordPress media library. Metabox with portfolio images has been added for portfolio editing page. An ability to use the shortcodes has been added in the single portfolio template. An ability to add main contant has been added in the portfolio template.

= V2.36 =
The ability to install demo data for plugin was added. The Czech language file was added. The bug with plugin menu duplicating was fixed.

= V2.35 =
A button for Portfolio shortcode inserting to the content was added. Compatibility with PDF & Print by BestWebSoft was added. All functionality for wordpress 4.3.1 was updated.

= V2.34 =
Ability to restore settings to defaults. Portfolio Settings page is updated.

= V2.33 =
We fixed the bug of displaying links to executors profile page. Portfolio template checking functionality was updated. We updated all functionality for wordpress 4.2.2.

= V2.32 =
Portfolio template checking functionality was updated.

= V2.31 =
The Serbian language file is added to the plugin. Templates are updated. We updated all functionality for wordpress 4.1.

= V2.30 =
We added the necessary functionality to avoid errors that may appear if a user also has Jetpack Portfolio installed. We added menu order attribute for portfolio.

= V2.29 =
ATTENTION! In the current version of Portfolio plugin we updated the Technologies widget. If it was added to the sidebar, it will disappear and you will have to add it again.
We fixed the bug of displaying sidebar in Twenty Fourteen theme. We fixed the bug of adding Technologies widget. We updated all functionality for wordpress 4.0-beta3.

= V2.28 =
Bug with localization was fixed. Security Exploit was fixed.

= V2.27 =
We added settings for renaming uploaded images to avoid conflict. We added functionality to exclude unnecessary thumbnails from uploaded images in portfolio. Problem with executor profile is fixed in portfolio template.

= V2.26 =
Problem with executor profile is fixed.

= V2.25 =
We updated all functionality for wordpress 3.9.1.

= V2.24 =
We updated all functionality for wordpress 3.9. Compatibility with Gallery Pro plugin. The Ukrainian language file is updated in the plugin. Problem with paginiation of technologies is fixed.

= V2.23 =
Portfolio Template is updated. Screenshots are updated. BWS plugins section is updated. Plugin optimization is done. Problem with pagination for portfolio as front page is fixed.

= V2.22 =
We added the ability to include Portfolio as search criterion for Custom Search on the Porfolio settings page. BWS plugins section is updated. We updated all functionality for wordpress 3.8.

= V2.21 =
We added functionality for disable rewriting templates after plugin update. Activation of radio button or checkbox by clicking on its label. Add checking installed wordpress version. We updated all functionality for wordpress 3.7.1.

= V2.20 =
Fixed style bugs. Fixed bug of updating images for portfolio.

= V2.19 =
The Ukrainian language file is updated in the plugin. The album cover is a link to portfolio item now.

= V2.18 =
The European Portuguese language file is added to the plugin. We updated all functionality for wordpress 3.6.1.

= V2.17 =
We updated all functionality for wordpress 3.6. Function for displaying BWS plugins section placed in a separate file and has own language files. The Brazilian Portuguese language file is updated in the plugin.

= V2.16 =
Added an ability to not display the link as a text for non-registered users. The error related to save settings if WordPress Permalinks are disabled is fixed.

= V2.15 =
Added an ability to view and send system information by mail. We updated all functionality for wordpress 3.5.2.

= V2.14 =
Ability to change slug for portfolio item

= V2.13 =
The error related to changing the name of the field '_prtfl_descr' to the field '_prtfl_short_descr' is fixed. BWS plugins section is updated.

= V2.12 =
The English language file is updated in the plugin.

= V2.11 =
The Ukrainian language file was added to the plugin.

= V2.10 =
French language file was added to the plugin.

= V2.09 =
Add possibility to display Latest Portfolio Items on your page or post with shortcode [latest_portfolio_items count=3]. We updated all functionality for wordpress 3.5.1.

= V2.08 =
The ordering of Portfolio Items was added to Settings page.

= V2.07 =
The German language file is added to the plugin.

= V2.06 =
Cross Site Request Forgery bug was fixed.

= V2.05 =
Brazilian Portuguese, Hebrew, Hindi, Italian, Persian, Spain language files are added to the plugin. Add possibility to change caption to additional fields. Add possibility to select additional fields to display them on main and single portfolio pages. Template to display portfolio is changed. Changes were done to both main page and single portfolio page. We updated all functionality for wordpress 3.4.1.

= V2.04 =
Replace prettyPhoto library to fancybox library. Code that is used to display a lightbox for images in `portfolio.php` and `portfolio-post.php` template files is changed.

= V2.03 =
Shortcode for displaying of the latest portfolio items is added. BWS plugins section has been changed.

= V2.02 =
Dutch language file is added to the plugin. Code to backup portfolio template before a plugin is updated is added. Code that is used to connect styles and scripts is added to the plugin for correct SSL verification.

= V2.01 =
Language files and Settings page are added to the plugin. Template for portfolio display is changed. Changes were done to both main page and single portfolio page. A possibility to create new thumbnails for portfolio images was added. Upgrade immediately.

= 1.07 =
The bug of description for the block is fixed and jQuery noConflict is added to this version of the plugin.

= 1.06 =
The bugs of featured images displaying and pagination are fixed in this version of the plugin. Upgrade immediately.

= 1.05 =
Display image bug is fixed in this version. Upgrade immediately.

= 1.03 =
Security related bug is fixed in this version. Upgrade immediately.
