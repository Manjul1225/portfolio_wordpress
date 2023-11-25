<?php 
/**
 * Contents array with demo-data for 
 * Portfolio Plugin by Bestwebsoft
 */

if ( ! function_exists( 'bws_demo_data_array' ) ) {
	function bws_demo_data_array() {
		$posts = array(
			/* Page Template Portfolio */
			array( 
				'comment_status' => 'closed',
				'ping_status'    => 'closed',
				'post_status'    => 'publish',
				'post_type'      => 'page',
				'post_title'     => 'DEMO Portfolios',
				'post_content'   => '',
				'save_to_options' => 'page_id_portfolio_template'
			),
			/* Portfolio */
			array( 
				'post_status'    	=> 'publish',
				'post_type'      	=> 'bws-portfolio',
				'post_title'     	=> 'DEMO Infographic Elements Template - Vector Pack',
				'post_content'		=> 'Infographic Elements Template is a vector pack which contains various types of elements such as graphs, icons, diagrams, etc. Buy it to create your own infographics, presentations, reports or advertisement.',
				'post_meta'      	=> array(
					'prtfl_information' => array(
						'_prtfl_short_descr' 	=> 'Create amazing infographics & presentations!',
						'_prtfl_date_compl' 	=> '06.11.2015',
						'_prtfl_link'			=> 'http://graphicriver.net/item/infographic-elements-template-vector-pack/11735971?ref=bestwebsoft',
						'_prtfl_svn'			=> ''
					)
				),
				/*	'attachments_folder' => '', */
				'distant_attachments' => array(
					'01-banner.jpg',
					'02-infographics-pack-colorscheme.jpg',
					'03-infographics-pack-colorscheme-2.jpg',
					'04-infographics-pack-colorscheme-3.jpg',
					'05-infographics-pack-main.jpg'
				)
			),			
			array( 
				'comment_status' 	=> 'closed',
				'ping_status'   	=> 'closed',
				'post_status'    	=> 'publish',
				'post_type'      	=> 'bws-portfolio',
				'post_title'     	=> 'DEMO Medical Care - Responsive Medical HTML5 Template',
				'post_content'		=> 'Medical Care is a responsive Bootstrap-based HTML5 template. It is built with business and personal users in mind. We packed this template with common reusable widgets and elements.
										Health is a key factor of normal life of any person. We cannot perform wholesome physical and mental activity without good health. Each separate medical institution is a treatment oasis of many diseases. Our team decided to create a modern clinic UI, where people could easily find the right specialist to get an online consultation or to make an appointment using website built-in tools.
										Simplicity of the interface is a key to a comfortable end-user interaction with your system. We tried to implement the main controls of any website in terms of medical subjects and basic needs of patients.
										File structure is fully organized to make the editing process more easy for end-users. Template is designed based on 960 grid system. It is also ready for retina screens.',
				'post_meta'      	=> array(
					'prtfl_information' => array(
						'_prtfl_short_descr' 	=> 'Responsive Bootstrap-based HTML5 template.',
						'_prtfl_date_compl' 	=> '02.05.2015',
						'_prtfl_link'			=> 'http://themeforest.net/item/medical-care-responsive-medical-html5-template/10042392?ref=bestwebsoft',
						'_prtfl_svn'			=> ''
					)
				),
				'distant_attachments' => array(
					'00-banner-html.jpg',
					'01-home-book.jpg',
					'02-home-search-specialist.jpg',
					'03-home-ask-a-question.jpg',
					'04-about.jpg',
					'05-our-staff-v1.jpg',
					'07-doctor-profile-reviews.jpg',
					'16-services.jpg',
					'17-blog-v1.jpg',
					'19-blog-sidebar-v1.jpg'
				)
			),
			array( 
				'comment_status' 	=> 'closed',
				'ping_status'   	=> 'closed',
				'post_status'    	=> 'publish',
				'post_type'      	=> 'bws-portfolio',
				'post_title'     	=> 'DEMO Book Your Tour - Excursion Community PSD Template', 
				'post_content'		=> 'Book Your Tour is a premium PSD template designed for commercial purposes. 
										Build a stunning excursion booking online website using the pre-build layout and elements. Customize existing graphic to create your own unique interface.', 
				'post_meta'      	=> array(
					'prtfl_information' => array(
						'_prtfl_short_descr' 	=> '#1 Excursion Community PSD Website Template', 
						'_prtfl_date_compl' 	=> '03.11.2015', 
						'_prtfl_link'			=> 'http://themeforest.net/item/book-your-tour-excursion-community-psd-template/12956478?ref=bestwebsoft', 
						'_prtfl_svn'			=> ''
					)
				),
				'distant_attachments' => array( 
					'00-book-banner.jpg',
					'01-book-home-1200.jpg',
					'02-all-tours-and-excursions-line-view-1200.jpg',
					'04-single-tour-page-1200-v1.jpg',
					'07-single-tour-page-map-view-1200.jpg',
					'08-single-excursion-page-1200.jpg',
					'10-all-guides-line-view-1200.jpg',
					'16-book-blog-index-1200.jpg',
					'20-gallery-1200.jpg',
					'23-about-us-1200.jpg'
				)
			),			
			array( 
				'comment_status' 	=> 'closed',
				'ping_status'   	=> 'closed',
				'post_status'    	=> 'publish',
				'post_type'      	=> 'bws-portfolio',
				'post_title'     	=> 'DEMO Coursea - Online Tutorials & Courses Template', 
				'post_content'		=> 'Coursea is an online tutorials & courses PSD template designed for commercial purposes. 
										Create an amazing learning website using the pre-build layout and elements. Customize existing graphics to create your own unique interface.', 
				'post_meta'      	=> array(
					'prtfl_information' => array(
						'_prtfl_short_descr' 	=> '#1 Online Tutorials & Courses PSD Template', 
						'_prtfl_date_compl' 	=> '15.07.2015', 
						'_prtfl_link'			=> 'http://themeforest.net/item/coursea-online-tutorials-courses-template/11867087?ref=bestwebsoft', 
						'_prtfl_svn'			=> ''
					)
				),
				'distant_attachments' => array( 
					'00-courses-banner.jpg',
					'01-home-1200-v1.jpg',
					'05-all-courses-1200-v1.jpg',
					'06-all-courses-1200-v2.jpg',
					'08-search-results-line-view-1200.jpg',
					'10-all-tutorial-1200-v2.jpg',
					'11-tutorial-page-1200.jpg',
					'18-blog-index-1200.jpg',
					'19-blog-single-1200.jpg',
					'20-pricing-1200.jpg'
				)
			),			
			array( 
				'comment_status' 	=> 'closed',
				'ping_status'   	=> 'closed',
				'post_status'    	=> 'publish',
				'post_type'      	=> 'bws-portfolio',
				'post_title'     	=> 'DEMO Concerto - Music Events & Tickets', 
				'post_content'		=> 'Concerto is a premium PSD template designed for commercial purposes. 
										Create an amazing tickets booking website for various concerts, events and artists using the pre-build layout and elements. Customize the existing graphics to create your own unique interface.', 
				'post_meta'      	=> array(
					'prtfl_information' => array(
						'_prtfl_short_descr' 	=> 'Music Events & Online Tickets Search Website Template', 
						'_prtfl_date_compl' 	=> '26.06.2015', 
						'_prtfl_link'			=> 'https://creativemarket.com/bestwebsoft/305092-Concerto-Music-Events-Tickets?u=bestwebsoft', 
						'_prtfl_svn'			=> ''
					)
				),
				'distant_attachments' => array( 
					'00-concerto-banner.jpg',
					'01-concerto-home-1200.jpg',
					'06-event-information-1200.jpg',
					'07-results-1200.jpg',
					'08-select-ticket-1200.jpg',
					'09-payment-1200.jpg',
					'12-blog-index-1200.jpg',
					'14-blog-single-1200.jpg',
					'15-about-1200.jpg',
					'16-gallery-1200.jpg'
				)
			),
			array( 
				'comment_status' 	=> 'closed',
				'ping_status'   	=> 'closed',
				'post_status'    	=> 'publish',
				'post_type'      	=> 'bws-portfolio',
				'post_title'     	=> 'DEMO Love Ceremony - Wedding PSD Template', 
				'post_content'		=> 'Love Ceremony is an elegant PSD template designed to share wedding details with your guests. 
										Create personal website for any kind of wedding activities. Make it simple for guests to RSVP and to find the perfect gift on your registry.', 
				'post_meta'      	=> array(
					'prtfl_information' => array(
						'_prtfl_short_descr' 	=> 'Create Your Wedding Website!', 
						'_prtfl_date_compl' 	=> '12.08.2015', 
						'_prtfl_link'			=> 'http://themeforest.net/item/love-ceremony-wedding-psd-template/12013355?ref=bestwebsoft', 
						'_prtfl_svn'			=> ''
					)
				),
				'distant_attachments' => array( 
					'00-ceremony-banner.jpg',
					'01-ceremony-home-1200.jpg',
					'02-our-story-1200.jpg',
					'03-guestbook-1200.jpg',
					'04-guestbook-v2-1200.jpg',
					'05-rsvp-page-1200.jpg',
					'06-events-page-1200.jpg',
					'07-blog-index-1200.jpg',
					'09-gallery-1200.jpg',
					'10-gallery-v2-1200.jpg'
				)
			),
			array( 
				'comment_status' 	=> 'closed',
				'ping_status'   	=> 'closed',
				'post_status'    	=> 'publish',
				'post_type'      	=> 'bws-portfolio',
				'post_title'     	=> 'DEMO Style of Food - Restaurant & Cafe PSD Template', 
				'post_content'		=> 'Style of Food is an online restaurant & cafe PSD template designed for commercial purposes. 
										Create an amazing website using the pre-build layout and elements. Customize existing graphics to create your own unique interface.', 
				'post_meta'      	=> array(
					'prtfl_information' => array(
						'_prtfl_short_descr' 	=> '#1 Restaurant & Cafe PSD Template', 
						'_prtfl_date_compl' 	=> '10.09.2015', 
						'_prtfl_link'			=> 'http://themeforest.net/item/style-of-food-restaurant-cafe-psd-template/12272944?ref=bestwebsoft', 
						'_prtfl_svn'			=> ''
					)
				),
				'distant_attachments' => array( 
					'00-food-banner.jpg',
					'01-food-home-1200.jpg',
					'03-menu-1200.jpg',
					'04-reservation-1200.jpg',
					'06-about-us-1200.jpg',
					'08-our-chefs-1200.jpg',
					'09-events-1200.jpg',
					'12-product-description-1200.jpg',
					'17-blog-index-1200.jpg',
					'19-gallery-1200.jpg'
				)
			),
			array( 
				'comment_status' 	=> 'closed',
				'ping_status'   	=> 'closed',
				'post_status'    	=> 'publish',
				'post_type'      	=> 'bws-portfolio',
				'post_title'     	=> 'DEMO Order a Taxi - Website Design UI', 
				'post_content'		=> 'Order Taxi is a premium PSD template designed for commercial purposes. 
										Build a stunning taxi booking online website using the pre-build layout and elements. Customize existing graphic to create your own unique interface.', 
				'post_meta'      	=> array(
					'prtfl_information' => array(
						'_prtfl_short_descr' 	=> 'Build Your Online Taxi Business Website', 
						'_prtfl_date_compl' 	=> '10.12.2015', 
						'_prtfl_link'			=> 'https://creativemarket.com/bestwebsoft/467422-Order-a-Taxi-Website-Design-UI?u=bestwebsoft', 
						'_prtfl_svn'			=> ''
					)
				),
				'distant_attachments' => array( 
					'00-taxi-banner.jpg',
					'01-taxi-home-1200.jpg',
					'02-booking-1200.jpg',
					'05-booking-details-1200.jpg',
					'07-about-us-1200.jpg',
					'08-services-1200.jpg',
					'09-our-vehicle-1200.jpg',
					'11-our-drivers-1200.jpg',
					'13-our-gallery-1200.jpg',
					'15-blog-index-1200.jpg'
				)
			),
			array( 
				'comment_status' 	=> 'closed',
				'ping_status'   	=> 'closed',
				'post_status'    	=> 'publish',
				'post_type'      	=> 'bws-portfolio',
				'post_title'     	=> 'DEMO Hotel Finder - Online Booking PSD Template', 
				'post_content'		=> 'Hotel Finder is a premium PSD template designed for commercial purposes. 
										Create an amazing hotel booking website using the pre-build layout and elements. Customize the existing graphics to create your own unique interface.', 
				'post_meta'      	=> array(
					'prtfl_information' => array(
						'_prtfl_short_descr' 	=> '#1 Hotel Booking Template', 
						'_prtfl_date_compl' 	=> '08.05.2015', 
						'_prtfl_link'			=> 'http://themeforest.net/item/hotel-finder-online-booking-psd-template/11374923?ref=bestwebsoft', 
						'_prtfl_svn'			=> ''
					)
				),
				'distant_attachments' => array( 
					'00-hotel-banner.jpg',
					'01-hotel-home-1200.jpg',
					'02-search-result-1200-grid-view-v1.jpg',
					'06-hotel-page-1200-gallery-and-description-view-v1.jpg',
					'07-hotel-page-1200-map-and-availability-view-v1.jpg',
					'12-room-page-1200.jpg',
					'13-search-rooms-1200.jpg',
					'14-payment-1200.jpg',
					'16-blog-index-1200.jpg',
					'28-about-us-1200.jpg'
				)
			),
			array( 
				'comment_status' 	=> 'closed',
				'ping_status'   	=> 'closed',
				'post_status'    	=> 'publish',
				'post_type'      	=> 'bws-portfolio',
				'post_title'     	=> 'DEMO Rent a Bike - Rental & Booking PSD Template', 
				'post_content'		=> 'Rent a Bike is an online directory & booking PSD template designed for commercial purposes. 
										Create an amazing bicycle store or a brand website using the pre-build layout and elements. Customize the existing graphics to create your own unique interface.', 
				'post_meta'      	=> array(
					'prtfl_information' => array(
						'_prtfl_short_descr' 	=> 'Bike Directory & Booking PSD Template', 
						'_prtfl_date_compl' 	=> '20.10.2015', 
						'_prtfl_link'			=> 'http://themeforest.net/item/rent-a-bike-rental-booking-psd-template/12911269?ref=bestwebsoft', 
						'_prtfl_svn'			=> ''
					)
				),
				'distant_attachments' => array( 
					'00-bike-banner.jpg',
					'01-bike-home-v1-1200.jpg',
					'05-activity-select-1200.jpg',
					'10-bike-extras-1200.jpg',
					'13-tour-select-1200.jpg',
					'17-cart-1200.jpg',
					'20-about-us-1200.jpg',
					'26-gallery-3-col-1200.jpg',
					'40-header-menu-called-1200.jpg',
					'48-header-cart-called-1200.jpg'
				)
			),
			/* Post with Portfolio shortcodes */
			array( 
				'comment_status' => 'closed',
				'ping_status'    => 'closed',
				'post_status'	 => 'publish',
				'post_type'      => 'post',
				'post_title'     => 'Portfolio DEMO',
				'post_content'   => '<p>This is a demonstration of a Portfolio plugin for Wordpress websites.</p><h2>Create excellent portfolios in the easiest way!</h2><p>This plugin helps you to display your works in an elegant style. It also allows you to add images and all the necessary information such as description, URL, date of completion, etc. Another great thing - you can use it without any programming knowledge.</p><h2>Get premium features</h2><p>Go Pro and use extra features: Categories, Sorting, Lightbox helper (Button or Thumbnail), Slider with featured portfolios, Single portfolio pagination, Network settings, and many more! <a href="https://bestwebsoft.com/products/wordpress/plugins/portfolio/" target="_blank">Learn More</a></p><h2><span id="result_box" class="short_text" lang="en"><span class="hps">Help &amp; Support</span></span></h2><p>If you have any questions, our friendly Support Team is happy to help. <a href="https://support.bestwebsoft.com/" target="_blank">Visit our Help Center</a></a><h2>Shortcodes</h2><p>Use <code><strong>&#91;latest_portfolio_items count=*]</strong></code> ( where * is a number of portfolio to display ) shortcode for displaying the Latest Portfolio Items.</p> <div>{template_page} | <a href="https://drive.google.com/drive/u/0/folders/0B5l8lO-CaKt9LUtoRXh6X3czUDQ" target="_blank">Instructions</a> | <a href="https://bestwebsoft.com/products/wordpress/plugins/portfolio/" target="_blank">Buy Now</a></div>',
			)
		);

		$terms = array(
			'portfolio_technologies' => array(
				'adobe-photoshop' 	=> 'Adobe Photoshop',
				'adobe-illustrator' => 'Adobe Illustrator'
			),
			'portfolio_executor_profile' => array(
				'bestwebsoft' 	=> 'BestWebSoft'
			)
		);
		/* info */
		$distant_attachments_metadata = array(
			'01-banner.jpg' => array(
				'mime_type' 	=> 'image/jpg',
				'title'     	=> '01-banner.jpg',
				'url'     		=> 'https://drive.google.com/uc?id=0B5l8lO-CaKt9d0lMYkp0MGNCV1k',
				'sizes' => array(
					/* 150*150 */
					'thumbnail'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9Qk5nV0l1T1lROHc',
						'width' => 150, 
						'height' => 150,
						'mime-type' => 'image/jpg',
					),
					/* 300*300 */
					'medium'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9NTVlNndYWjRZSG8',
						'width' => 300, 
						'height' => 300,
						'mime-type' => 'image/jpg',
					),
					/* 768*0 */
					'medium_large'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9TVVueVpiTXEyUTg',
						'width' => 590, 
						'height' => 510,
						'mime-type' => 'image/jpg',
					),
					/* 280*300 */
					'portfolio-thumb'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9Q3FMbG9rVkdtVE0',
						'width' => 280, 
						'height' => 300,
						'mime-type' => 'image/jpg',
					),
					/* 240*260 */
					'portfolio-photo-thumb'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9Vl9RM0hDbDBHbE0',
						'width' => 240, 
						'height' => 260,
						'mime-type' => 'image/jpg',
					)
				)
			),
			'02-infographics-pack-colorscheme.jpg' => array(
				'mime_type' 		=> 'image/jpg', 
				'title'     		=> '02-infographics-pack-colorscheme.jpg',
				'url'     			=> 'https://drive.google.com/uc?id=0B5l8lO-CaKt9NFVQaEl4TUV0YWc',
				'sizes' => array(
					/* 150*150 */
					'thumbnail'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9b0ZySVRVekhMcUU',
						'width' => 150, 
						'height' => 150,
						'mime-type' => 'image/jpg',
					),
					/* 300*300 */
					'medium'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9QXpCWFAySFpJR2M',
						'width' => 13, 
						'height' => 300,
						'mime-type' => 'image/jpg',
					),
					/* 768*0 */
					'medium_large'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9QVNwSTRHQ0s1V28',
						'width' => 591, 
						'height' => 510,
						'mime-type' => 'image/jpg',
					),
					/* 1024*1024 */
					'large'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9NnRrTzdEcGRSVDQ',
						'width' => 45, 
						'height' => 1024,
						'mime-type' => 'image/jpg',
					),
					/* 280*300 */
					'portfolio-thumb'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9VHRpdXlva0JiSE0',
						'width' => 280, 
						'height' => 300,
						'mime-type' => 'image/jpg',
					),
					/* 240*260 */
					'portfolio-photo-thumb'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9ZmNpazMxRWYzTm8',
						'width' => 240, 
						'height' => 260,
						'mime-type' => 'image/jpg',
					)
				)
			),
			'03-infographics-pack-colorscheme-2.jpg' => array(
				'mime_type' 		=> 'image/jpg', 
				'title'     		=> '03-infographics-pack-colorscheme-2.jpg',
				'url'     			=> 'https://drive.google.com/uc?id=0B5l8lO-CaKt9TEdERU1iSG1ERVU',
				'sizes' => array(
					/* 150*150 */
					'thumbnail'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9NS1TT1JnVS1pV2c',
						'width' => 150, 
						'height' => 150,
						'mime-type' => 'image/jpg',
					),
					/* 300*300 */
					'medium'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9MFVicHZNQmd1Xzg',
						'width' => 13, 
						'height' => 300,
						'mime-type' => 'image/jpg',
					),
					/* 768*0 */
					'medium_large'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9bS10aUhlYXdRa0E',
						'width' => 591, 
						'height' => 510,
						'mime-type' => 'image/jpg',
					),
					/* 1024*1024 */
					'large'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9bTBDb2xUb1BZOGs',
						'width' => 45, 
						'height' => 1024,
						'mime-type' => 'image/jpg',
					),
					/* 280*300 */
					'portfolio-thumb'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9cTBNbFBIeW5LV2c',
						'width' => 280, 
						'height' => 300,
						'mime-type' => 'image/jpg',
					),
					/* 240*260 */
					'portfolio-photo-thumb'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9UHA2c3BBRG5kY3M',
						'width' => 240, 
						'height' => 260,
						'mime-type' => 'image/jpg',
					)
				)
			),
			'04-infographics-pack-colorscheme-3.jpg' => array(
				'mime_type' 		=> 'image/jpg', 
				'title'     		=> '04-infographics-pack-colorscheme-3.jpg',
				'url'     			=> 'https://drive.google.com/uc?id=0B5l8lO-CaKt9b1JiVnhkbF9lQW8',
				'sizes' => array(
					/* 150*150 */
					'thumbnail'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9WW1ROGdNVlRGcFk',
						'width' => 150, 
						'height' => 150,
						'mime-type' => 'image/jpg',
					),
					/* 300*300 */
					'medium'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9X0lnTkl6RnZlWEk',
						'width' => 13, 
						'height' => 300,
						'mime-type' => 'image/jpg',
					),
					/* 768*0 */
					'medium_large'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9a3A3a2VRQ0hJR1k',
						'width' => 591, 
						'height' => 510,
						'mime-type' => 'image/jpg',
					),
					/* 1024*1024 */
					'large'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9QS1OX196RG45Rzg',
						'width' => 45, 
						'height' => 1024,
						'mime-type' => 'image/jpg',
					),
					/* 280*300 */
					'portfolio-thumb'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9RlJ4RjRkTUNmaVk',
						'width' => 280, 
						'height' => 300,
						'mime-type' => 'image/jpg',
					),
					/* 240*260 */
					'portfolio-photo-thumb'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9OF9IRWxaZmVEV00',
						'width' => 240, 
						'height' => 260,
						'mime-type' => 'image/jpg',
					)
				)
			),
			'05-infographics-pack-main.jpg' => array(
				'mime_type' 		=> 'image/jpg', 
				'title'     		=> '05-infographics-pack-main.jpg',
				'url'     			=> 'https://drive.google.com/uc?id=0B5l8lO-CaKt9dmpRWm0zTVFzLTA',
				'sizes' => array(
					/* 150*150 */
					'thumbnail'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9N054U3NCeWJFVk0',
						'width' => 150, 
						'height' => 150,
						'mime-type' => 'image/jpg',
					),
					/* 300*300 */
					'medium'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9LUZIai1xYXF5amc',
						'width' => 11, 
						'height' => 300,
						'mime-type' => 'image/jpg',
					),
					/* 768*0 */
					'medium_large'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9eUZFdWJfUE1Tams',
						'width' => 591, 
						'height' => 510,
						'mime-type' => 'image/jpg',
					),
					/* 1024*1024 */
					'large'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9WjBTZEhqd0o0VGM',
						'width' => 37, 
						'height' => 1024,
						'mime-type' => 'image/jpg',
					),
					/* 280*300 */
					'portfolio-thumb'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9RWZIX2xBZHZ0TTQ',
						'width' => 280, 
						'height' => 300,
						'mime-type' => 'image/jpg',
					),
					/* 240*260 */
					'portfolio-photo-thumb'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9R09abVR4S0Vlckk',
						'width' => 240, 
						'height' => 260,
						'mime-type' => 'image/jpg',
					)
				)
			),
				/*  med care */
			'00-banner-html.jpg' => array(
				'mime_type' 		=> 'image/jpg', 
				'title'     		=> '00-banner-html.jpg',
				'url'     			=> 'https://drive.google.com/uc?id=0B5l8lO-CaKt9R0ZpbW1Hbk5qVjQ',
				'sizes' => array(
					/* 150*150 */
					'thumbnail'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9c1phTU0tXzUxaEU',
						'width' => 150, 
						'height' => 150,
						'mime-type' => 'image/jpg',
					),
					/* 300*300 */
					'medium'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9bFFuTE1yZTUxMjg',
						'width' => 300, 
						'height' => 153,
						'mime-type' => 'image/jpg',
					),
					
					/* 280*300 */
					'portfolio-thumb'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9VDM3LVZYRjlMX0E',
						'width' => 280, 
						'height' => 300,
						'mime-type' => 'image/jpg',
					),
					/* 240*260 */
					'portfolio-photo-thumb'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9ajNGSDRsUU1veTA',
						'width' => 240, 
						'height' => 260,
						'mime-type' => 'image/jpg',
					)
				)
			),
			'01-home-book.jpg' => array(
				'mime_type' 		=> 'image/jpg', 
				'title'     		=> '01-home-book.jpg',
				'url'     			=> 'https://drive.google.com/uc?id=0B5l8lO-CaKt9VWEzTExLNXlfS2s',
				'sizes' => array(
					/* 150*150 */
					'thumbnail'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9NjJQT21wbEFiVGc',
						'width' => 150, 
						'height' => 150,
						'mime-type' => 'image/jpg',
					),
					/* 300*300 */
					'medium'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9bldLZUZKT2pXUTg',
						'width' => 151, 
						'height' => 300,
						'mime-type' => 'image/jpg',
					),
					/* 768*0 */
					'medium_large'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9OTRodjNrVDlBczQ',
						'width' => 825, 
						'height' => 510,
						'mime-type' => 'image/jpg',
					),
					/* 1024*1024 */
					'large'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9RmZIWUp4OHlJMjg',
						'width' => 515, 
						'height' => 1024,
						'mime-type' => 'image/jpg',
					),
					/* 280*300 */
					'portfolio-thumb'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9TFpMaTd5cGE1QzA',
						'width' => 280, 
						'height' => 300,
						'mime-type' => 'image/jpg',
					),
					/* 240*260 */
					'portfolio-photo-thumb'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9eVY3cUUwbmNmRXc',
						'width' => 240, 
						'height' => 260,
						'mime-type' => 'image/jpg',
					)
				)
			),
			'02-home-search-specialist.jpg' => array(
				'mime_type' 		=> 'image/jpg', 
				'title'     		=> '02-home-search-specialist.jpg',
				'url'     			=> 'https://drive.google.com/uc?id=0B5l8lO-CaKt9NTdmSjZ2NldZc00',
				'sizes' => array(
					/* 150*150 */
					'thumbnail'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9M1VQaWdfRU4zTjA',
						'width' => 150, 
						'height' => 150,
						'mime-type' => 'image/jpg',
					),
					/* 300*300 */
					'medium'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9cVgyRWRHOUlQUzg',
						'width' => 112, 
						'height' => 300,
						'mime-type' => 'image/jpg',
					),
					/* 768*0 */
					'medium_large'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9b0ZFcUtjaXhuZ0k',
						'width' => 825, 
						'height' => 510,
						'mime-type' => 'image/jpg',
					),
					/* 1024*1024 */
					'large'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9QjVVd1FjVUpwb0E',
						'width' => 381, 
						'height' => 1024,
						'mime-type' => 'image/jpg',
					),
					/* 280*300 */
					'portfolio-thumb'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9cjF5ZlB1cmpjeGs',
						'width' => 280, 
						'height' => 300,
						'mime-type' => 'image/jpg',
					),
					/* 240*260 */
					'portfolio-photo-thumb'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9aF9xbVFzVEd1UFE',
						'width' => 240, 
						'height' => 260,
						'mime-type' => 'image/jpg',
					)
				)
			),
			'03-home-ask-a-question.jpg' => array(
				'mime_type' 		=> 'image/jpg', 
				'title'     		=> '03-home-ask-a-question.jpg',
				'url'     			=> 'https://drive.google.com/uc?id=0B5l8lO-CaKt9NFNzRGJyTmVVMXM',
				'sizes' => array(
					/* 150*150 */
					'thumbnail'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9U0I4T1VhMVVONWM',
						'width' => 150, 
						'height' => 150,
						'mime-type' => 'image/jpg',
					),
					/* 300*300 */
					'medium'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9LWtNZk1zaFJ3LXM',
						'width' => 112, 
						'height' => 300,
						'mime-type' => 'image/jpg',
					),
					/* 768*0 */
					'medium_large'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9TzBRTHlvU1NpWmc',
						'width' => 825, 
						'height' => 510,
						'mime-type' => 'image/jpg',
					),
					/* 1024*1024 */
					'large'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9cnU1Tjd4eXhvNzA',
						'width' => 383, 
						'height' => 1024,
						'mime-type' => 'image/jpg',
					),
					/* 280*300 */
					'portfolio-thumb'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9dzRoZHBrRjVRUUE',
						'width' => 280, 
						'height' => 300,
						'mime-type' => 'image/jpg',
					),
					/* 240*260 */
					'portfolio-photo-thumb'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9a3AxUUhzSXdya2s',
						'width' => 240, 
						'height' => 260,
						'mime-type' => 'image/jpg',
					)
				)
			),
			'04-about.jpg' => array(
				'mime_type' 		=> 'image/jpg', 
				'title'     		=> '04-about.jpg',
				'url'     			=> 'https://drive.google.com/uc?id=0B5l8lO-CaKt9WHpFb2owaU9uZk0',
				'sizes' => array(
					/* 150*150 */
					'thumbnail'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9UTdVejhOOFZnMlE',
						'width' => 150, 
						'height' => 150,
						'mime-type' => 'image/jpg',
					),
					/* 300*300 */
					'medium'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9Vlp1dDV6UW4tWk0',
						'width' => 210, 
						'height' => 300,
						'mime-type' => 'image/jpg',
					),
					/* 768*0 */
					'medium_large'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9Zl93QVNwUHFJaTA',
						'width' => 825, 
						'height' => 510,
						'mime-type' => 'image/jpg',
					),
					/* 1024*1024 */
					'large'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9STJQTnJET1dJeE0',
						'width' => 716, 
						'height' => 1024,
						'mime-type' => 'image/jpg',
					),
					/* 280*300 */
					'portfolio-thumb'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9NDhJOVBGUTVhX00',
						'width' => 280, 
						'height' => 300,
						'mime-type' => 'image/jpg',
					),
					/* 240*260 */
					'portfolio-photo-thumb'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9UmZoeUNhUm1CNUE',
						'width' => 240, 
						'height' => 260,
						'mime-type' => 'image/jpg',
					)
				)
			),
			'05-our-staff-v1.jpg' => array(
				'mime_type' 		=> 'image/jpg', 
				'title'     		=> '05-our-staff-v1.jpg',
				'url'     			=> 'https://drive.google.com/uc?id=0B5l8lO-CaKt9U3hOQTZIOW9fSW8',
				'sizes' => array(
					/* 150*150 */
					'thumbnail'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9bHNOaEhUWVpXUXc',
						'width' => 150, 
						'height' => 150,
						'mime-type' => 'image/jpg',
					),
					/* 300*300 */
					'medium'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9SUJrYmo0cmdlcEE',
						'width' => 194, 
						'height' => 300,
						'mime-type' => 'image/jpg',
					),
					/* 768*0 */
					'medium_large'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9X0NBb2RIWmhvTk0',
						'width' => 825, 
						'height' => 510,
						'mime-type' => 'image/jpg',
					),
					/* 1024*1024 */
					'large'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9MGVTVjlONThwY1k',
						'width' => 661, 
						'height' => 1024,
						'mime-type' => 'image/jpg',
					),
					/* 280*300 */
					'portfolio-thumb'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9c2dEb2pXVjI2T0U',
						'width' => 280, 
						'height' => 300,
						'mime-type' => 'image/jpg',
					),
					/* 240*260 */
					'portfolio-photo-thumb'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9YnJLeWdWWV9LSUU',
						'width' => 240, 
						'height' => 260,
						'mime-type' => 'image/jpg',
					)
				)
			),
			'07-doctor-profile-reviews.jpg' => array(
				'mime_type' 		=> 'image/jpg', 
				'title'     		=> '07-doctor-profile-reviews.jpg',
				'url'     			=> 'https://drive.google.com/uc?id=0B5l8lO-CaKt9cGY1SDJXVzYzVk0',
				'sizes' => array(
					/* 150*150 */
					'thumbnail'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9TmczMy1PNDZhdGM',
						'width' => 150, 
						'height' => 150,
						'mime-type' => 'image/jpg',
					),
					/* 300*300 */
					'medium'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9a0lzTzhweWw2aDA',
						'width' => 208, 
						'height' => 300,
						'mime-type' => 'image/jpg',
					),
					/* 768*0 */
					'medium_large'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9TXA4MHM0WW9ZZGM',
						'width' => 825, 
						'height' => 510,
						'mime-type' => 'image/jpg',
					),
					/* 1024*1024 */
					'large'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9b1BiZm9vZ0VwOTA',
						'width' => 710, 
						'height' => 1024,
						'mime-type' => 'image/jpg',
					),
					/* 280*300 */
					'portfolio-thumb'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9Ukx5X1oxaTlCVUk',
						'width' => 280, 
						'height' => 300,
						'mime-type' => 'image/jpg',
					),
					/* 240*260 */
					'portfolio-photo-thumb'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9eEtSY3RXbG0tcHM',
						'width' => 240, 
						'height' => 260,
						'mime-type' => 'image/jpg',
					)
				)
			),
			'16-services.jpg' => array(
				'mime_type' 		=> 'image/jpg', 
				'title'     		=> '16-services.jpg',
				'url'     			=> 'https://drive.google.com/uc?id=0B5l8lO-CaKt9REV2N19fT0VXcHc',
				'sizes' => array(
					/* 150*150 */
					'thumbnail'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9RC1zWUwwLTBNSXc',
						'width' => 150, 
						'height' => 150,
						'mime-type' => 'image/jpg',
					),
					/* 300*300 */
					'medium'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9RmhObXAwTkctNjg',
						'width' => 228, 
						'height' => 300,
						'mime-type' => 'image/jpg',
					),
					/* 768*0 */
					'medium_large'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9Uk9JYXdkbmEzc3c',
						'width' => 825, 
						'height' => 510,
						'mime-type' => 'image/jpg',
					),
					/* 1024*1024 */
					'large'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9NzhkZjhEdUZGS2M',
						'width' => 778, 
						'height' => 1024,
						'mime-type' => 'image/jpg',
					),
					/* 280*300 */
					'portfolio-thumb'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9RUliOFBNWXl3ZEU',
						'width' => 280, 
						'height' => 300,
						'mime-type' => 'image/jpg',
					),
					/* 240*260 */
					'portfolio-photo-thumb'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9SGprQVk1a2lpeUU',
						'width' => 240, 
						'height' => 260,
						'mime-type' => 'image/jpg',
					)
				)
			),
			'17-blog-v1.jpg' => array(
				'mime_type' 		=> 'image/jpg', 
				'title'     		=> '17-blog-v1.jpg',
				'url'     			=> 'https://drive.google.com/uc?id=0B5l8lO-CaKt9MktvbTI0UHhaTWs',
				'sizes' => array(
					/* 150*150 */
					'thumbnail'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9enhvVS1kMExHQkk',
						'width' => 150, 
						'height' => 150,
						'mime-type' => 'image/jpg',
					),
					/* 300*300 */
					'medium'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9YlAzV2psSVU1bzg',
						'width' => 201, 
						'height' => 300,
						'mime-type' => 'image/jpg',
					),
					/* 768*0 */
					'medium_large'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9Q1lnZHJ6YVBub0k',
						'width' => 825, 
						'height' => 510,
						'mime-type' => 'image/jpg',
					),
					/* 1024*1024 */
					'large'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9aWl1MEJzNHZ2WUU',
						'width' => 685, 
						'height' => 1024,
						'mime-type' => 'image/jpg',
					),
					/* 280*300 */
					'portfolio-thumb'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9SFJBbTJqMUh4RDQ',
						'width' => 280, 
						'height' => 300,
						'mime-type' => 'image/jpg',
					),
					/* 240*260 */
					'portfolio-photo-thumb'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9RllMbDc3Q2R0RTA',
						'width' => 240, 
						'height' => 260,
						'mime-type' => 'image/jpg',
					)
				)
			),
			'19-blog-sidebar-v1.jpg' => array(
				'mime_type' 		=> 'image/jpg', 
				'title'     		=> '19-blog-sidebar-v1.jpg',
				'url'     			=> 'https://drive.google.com/uc?id=0B5l8lO-CaKt9N3VhMFJUREJia2c',
				'sizes' => array(
					/* 150*150 */
					'thumbnail'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9RElDdUVFOHFvYTA',
						'width' => 150, 
						'height' => 150,
						'mime-type' => 'image/jpg',
					),
					/* 300*300 */
					'medium'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9MWg0cEU0RVlETGc',
						'width' => 201, 
						'height' => 300,
						'mime-type' => 'image/jpg',
					),
					/* 768*0 */
					'medium_large'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9NXRDTl9ad2tBTzg',
						'width' => 825, 
						'height' => 510,
						'mime-type' => 'image/jpg',
					),
					/* 1024*1024 */
					'large'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9RkVaZEVETnpsV0U',
						'width' => 685, 
						'height' => 1024,
						'mime-type' => 'image/jpg',
					),
					/* 280*300 */
					'portfolio-thumb'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9VUR6WThSTWtGc28',
						'width' => 280, 
						'height' => 300,
						'mime-type' => 'image/jpg',
					),
					/* 240*260 */
					'portfolio-photo-thumb'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9RV9GMWd2cWNfVHc',
						'width' => 240, 
						'height' => 260,
						'mime-type' => 'image/jpg',
					)
				)
			),
			/* book your tour */
			'00-book-banner.jpg' => array(
				'mime_type' 	=> 'image/jpg',
				'title'     	=> '00-book-banner.jpg',
				'url'     		=> 'https://drive.google.com/uc?id=0B5l8lO-CaKt9bDVPc0ZicURyaW8',
				'sizes' => array(
					/* 150*150 */
					'thumbnail'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9LUVJRlp4NU9OTVk',
						'width' => 150, 
						'height' => 150,
						'mime-type' => 'image/jpg',
					),
					/* 300*300 */
					'medium'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9MHdWWU9SQVd3OFU',
						'width' => 300, 
						'height' => 153,
						'mime-type' => 'image/jpg',
					),
					/* 280*300 */
					'portfolio-thumb'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9dF9Zbms2Z1RCaGc',
						'width' => 280, 
						'height' => 300,
						'mime-type' => 'image/jpg',
					),
					/* 240*260 */
					'portfolio-photo-thumb'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9OUVGSjdrM0NjUlE',
						'width' => 240, 
						'height' => 260,
						'mime-type' => 'image/jpg',
					)
				)
			),
			'01-book-home-1200.jpg' => array(
				'mime_type' 	=> 'image/jpg',
				'title'     	=> '01-book-home-1200.jpg',
				'url'     		=> 'https://drive.google.com/uc?id=0B5l8lO-CaKt9SW40QUkwUHgxdXM',
				'sizes' => array(
					/* 150*150 */
					'thumbnail'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9RDV2alhfc0w0STg',
						'width' => 150, 
						'height' => 150,
						'mime-type' => 'image/jpg',
					),
					/* 300*300 */
					'medium'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9MjlBR2M0QjF0MTg',
						'width' => 53, 
						'height' => 300,
						'mime-type' => 'image/jpg',
					),
					/* 768*0 */
					'medium_large'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9U0pqeFJnU3ZRMjg',
						'width' => 825, 
						'height' => 510,
						'mime-type' => 'image/jpg',
					),
					/* 1024*1024 */
					'large'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9ODB2QVAtSHlPM0k',
						'width' => 183, 
						'height' => 1024,
						'mime-type' => 'image/jpg',
					),
					/* 280*300 */
					'portfolio-thumb'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9eVF2NktuVFhpeG8',
						'width' => 280, 
						'height' => 300,
						'mime-type' => 'image/jpg',
					),
					/* 240*260 */
					'portfolio-photo-thumb'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9QWozWFllODM1Z1k',
						'width' => 240, 
						'height' => 260,
						'mime-type' => 'image/jpg',
					)
				)
			),
			'02-all-tours-and-excursions-line-view-1200.jpg' => array(
				'mime_type' 	=> 'image/jpg',
				'title'     	=> '02-all-tours-and-excursions-line-view-1200.jpg',
				'url'     		=> 'https://drive.google.com/uc?id=0B5l8lO-CaKt9aFhScFNkSGlsZFU',
				'sizes' => array(
					/* 150*150 */
					'thumbnail'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9VVM2Yk03ckVFVW8',
						'width' => 150, 
						'height' => 150,
						'mime-type' => 'image/jpg',
					),
					/* 300*300 */
					'medium'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9N0R0SzQyNlJzZWc',
						'width' => 121, 
						'height' => 300,
						'mime-type' => 'image/jpg',
					),
					/* 768*0 */
					'medium_large'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9ZExLSHlCejFjOW8',
						'width' => 825, 
						'height' => 510,
						'mime-type' => 'image/jpg',
					),
					/* 1024*1024 */
					'large'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9R3F3QW9FTFR1OGc',
						'width' => 414, 
						'height' => 1024,
						'mime-type' => 'image/jpg',
					),
					/* 280*300 */
					'portfolio-thumb'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9WGpuRXRuSkctQTA',
						'width' => 280, 
						'height' => 300,
						'mime-type' => 'image/jpg',
					),
					/* 240*260 */
					'portfolio-photo-thumb'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9ZFlaSVFHdm5EWTg',
						'width' => 240, 
						'height' => 260,
						'mime-type' => 'image/jpg',
					)
				)
			),
			'04-single-tour-page-1200-v1.jpg' => array(
				'mime_type' 	=> 'image/jpg',
				'title'     	=> '04-single-tour-page-1200-v1.jpg',
				'url'     		=> 'https://drive.google.com/uc?id=0B5l8lO-CaKt9VDVNUURpeENjTm8',
				'sizes' => array(
					/* 150*150 */
					'thumbnail'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9ZXhjTE8tWkgybWs',
						'width' => 150, 
						'height' => 150,
						'mime-type' => 'image/jpg',
					),
					/* 300*300 */
					'medium'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9NllfaHpzZWFoRlk',
						'width' => 120, 
						'height' => 300,
						'mime-type' => 'image/jpg',
					),
					/* 768*0 */
					'medium_large'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9bWtzZnlidHpYNjQ',
						'width' => 825, 
						'height' => 510,
						'mime-type' => 'image/jpg',
					),
					/* 1024*1024 */
					'large'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9QlE3VmpMRVFobU0',
						'width' => 410, 
						'height' => 1024,
						'mime-type' => 'image/jpg',
					),
					/* 280*300 */
					'portfolio-thumb'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9WGlUYmtOTXVqalE',
						'width' => 280, 
						'height' => 300,
						'mime-type' => 'image/jpg',
					),
					/* 240*260 */
					'portfolio-photo-thumb'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9MEw2U2M2cFVHS1k',
						'width' => 240, 
						'height' => 260,
						'mime-type' => 'image/jpg',
					)
				)
			),
			'07-single-tour-page-map-view-1200.jpg' => array(
				'mime_type' 	=> 'image/jpg',
				'title'     	=> '07-single-tour-page-map-view-1200.jpg',
				'url'     		=> 'https://drive.google.com/uc?id=0B5l8lO-CaKt9aVJqdXJEanRMYUU',
				'sizes' => array(
					/* 150*150 */
					'thumbnail'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9eFJ1Y3JKTFphQmc',
						'width' => 150, 
						'height' => 150,
						'mime-type' => 'image/jpg',
					),
					/* 300*300 */
					'medium'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9Ni0ydFY0QzVSaXc',
						'width' => 120, 
						'height' => 300,
						'mime-type' => 'image/jpg',
					),
					/* 768*0 */
					'medium_large'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9ZVo5bWUzLUw4UGs',
						'width' => 825, 
						'height' => 510,
						'mime-type' => 'image/jpg',
					),
					/* 1024*1024 */
					'large'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9TktWN3VubU1Jb00',
						'width' => 410, 
						'height' => 1024,
						'mime-type' => 'image/jpg',
					),
					/* 280*300 */
					'portfolio-thumb'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9QnJYLThZazVKb1k',
						'width' => 280, 
						'height' => 300,
						'mime-type' => 'image/jpg',
					),
					/* 240*260 */
					'portfolio-photo-thumb'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9bDJYSkdKQnRoSm8',
						'width' => 240, 
						'height' => 260,
						'mime-type' => 'image/jpg',
					)
				)
			),
			'08-single-excursion-page-1200.jpg' => array(
				'mime_type' 	=> 'image/jpg',
				'title'     	=> '08-single-excursion-page-1200.jpg',
				'url'     		=> 'https://drive.google.com/uc?id=0B5l8lO-CaKt9UEpKMk9oOUlqWTQ',
				'sizes' => array(
					/* 150*150 */
					'thumbnail'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9elQwY2FEbWtzRDA',
						'width' => 150, 
						'height' => 150,
						'mime-type' => 'image/jpg',
					),
					/* 300*300 */
					'medium'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9TklWMmhscm9SVlk',
						'width' => 130, 
						'height' => 300,
						'mime-type' => 'image/jpg',
					),
					/* 768*0 */
					'medium_large'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9aWM4TE1hdklXeDQ',
						'width' => 825, 
						'height' => 510,
						'mime-type' => 'image/jpg',
					),
					/* 1024*1024 */
					'large'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9dlBmV2M1dU04eE0',
						'width' => 443, 
						'height' => 1024,
						'mime-type' => 'image/jpg',
					),
					/* 280*300 */
					'portfolio-thumb'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9QUxaOEU0X3g4c0E',
						'width' => 280, 
						'height' => 300,
						'mime-type' => 'image/jpg',
					),
					/* 240*260 */
					'portfolio-photo-thumb'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9Zm5ZNjk3bDZxRTA',
						'width' => 240, 
						'height' => 260,
						'mime-type' => 'image/jpg',
					)
				)
			),
			'10-all-guides-line-view-1200.jpg' => array(
				'mime_type' 	=> 'image/jpg',
				'title'     	=> '10-all-guides-line-view-1200.jpg',
				'url'     		=> 'https://drive.google.com/uc?id=0B5l8lO-CaKt9dUdoNUtFRDBVVVE',
				'sizes' => array(
					/* 150*150 */
					'thumbnail'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9dDBUQVhWYjZxc1E',
						'width' => 150, 
						'height' => 150,
						'mime-type' => 'image/jpg',
					),
					/* 300*300 */
					'medium'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9QWtRZzg0MFMyV3M',
						'width' => 112, 
						'height' => 300,
						'mime-type' => 'image/jpg',
					),
					/* 768*0 */
					'medium_large'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9YmxnM1VOMUhtbHc',
						'width' => 825, 
						'height' => 510,
						'mime-type' => 'image/jpg',
					),
					/* 1024*1024 */
					'large'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9Yjk2MDFWcHNGbHM',
						'width' => 381, 
						'height' => 1024,
						'mime-type' => 'image/jpg',
					),
					/* 280*300 */
					'portfolio-thumb'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9bFNoYkh1NzJVQ1E',
						'width' => 280, 
						'height' => 300,
						'mime-type' => 'image/jpg',
					),
					/* 240*260 */
					'portfolio-photo-thumb'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9SzNCTi05bWV3eTg',
						'width' => 240, 
						'height' => 260,
						'mime-type' => 'image/jpg',
					)
				)
			),
			'16-book-blog-index-1200.jpg' => array(
				'mime_type' 	=> 'image/jpg',
				'title'     	=> '16-book-blog-index-1200.jpg',
				'url'     		=> 'https://drive.google.com/uc?id=0B5l8lO-CaKt9RjktMENGR2ZpRnc',
				'sizes' => array(
					/* 150*150 */
					'thumbnail'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9UTRvUkhld1ZGMnc',
						'width' => 150, 
						'height' => 150,
						'mime-type' => 'image/jpg',
					),
					/* 300*300 */
					'medium'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9R0J2eHFkY01vT1E',
						'width' => 142, 
						'height' => 300,
						'mime-type' => 'image/jpg',
					),
					/* 768*0 */
					'medium_large'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9MU9OSDBXekNGcG8',
						'width' => 825, 
						'height' => 510,
						'mime-type' => 'image/jpg',
					),
					/* 1024*1024 */
					'large'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9cVY0aXlqRHZKck0',
						'width' => 485, 
						'height' => 1024,
						'mime-type' => 'image/jpg',
					),
					/* 280*300 */
					'portfolio-thumb'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9ZkZWMzJ1X2thVDg',
						'width' => 280, 
						'height' => 300,
						'mime-type' => 'image/jpg',
					),
					/* 240*260 */
					'portfolio-photo-thumb'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9UWVzakExSGl1bGc',
						'width' => 240, 
						'height' => 260,
						'mime-type' => 'image/jpg',
					)
				)
			),
			'20-gallery-1200.jpg' => array(
				'mime_type' 	=> 'image/jpg',
				'title'     	=> '20-gallery-1200.jpg',
				'url'     		=> 'https://drive.google.com/uc?id=0B5l8lO-CaKt9MFhhNllFLW1xVFE',
				'sizes' => array(
					/* 150*150 */
					'thumbnail'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9VGtCNTdRZG5IVjQ',
						'width' => 150, 
						'height' => 150,
						'mime-type' => 'image/jpg',
					),
					/* 300*300 */
					'medium'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9d2Vld2pwdFQ5eEU',
						'width' => 207, 
						'height' => 300,
						'mime-type' => 'image/jpg',
					),
					/* 768*0 */
					'medium_large'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9dHA0WVA5dXFlcVE',
						'width' => 825, 
						'height' => 510,
						'mime-type' => 'image/jpg',
					),
					/* 1024*1024 */
					'large'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9dWw3OWNMWDFPU00',
						'width' => 706, 
						'height' => 1024,
						'mime-type' => 'image/jpg',
					),
					/* 280*300 */
					'portfolio-thumb'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9bXc4amhhZTg0alU',
						'width' => 280, 
						'height' => 300,
						'mime-type' => 'image/jpg',
					),
					/* 240*260 */
					'portfolio-photo-thumb'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9QldXRzB6MkVoUWc',
						'width' => 240, 
						'height' => 260,
						'mime-type' => 'image/jpg',
					)
				)
			),
			'23-about-us-1200.jpg' => array(
				'mime_type' 	=> 'image/jpg',
				'title'     	=> '23-about-us-1200.jpg',
				'url'     		=> 'https://drive.google.com/uc?id=0B5l8lO-CaKt9T0Z0OUE3MlgtSzA',
				'sizes' => array(
					/* 150*150 */
					'thumbnail'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9YnFPSEgwUk9PRWc',
						'width' => 150, 
						'height' => 150,
						'mime-type' => 'image/jpg',
					),
					/* 300*300 */
					'medium'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9X3p0dEVuZ0VHVTg',
						'width' => 87, 
						'height' => 300,
						'mime-type' => 'image/jpg',
					),
					/* 768*0 */
					'medium_large'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9X05UaHRpTnNVbVU',
						'width' => 825, 
						'height' => 510,
						'mime-type' => 'image/jpg',
					),
					/* 1024*1024 */
					'large'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9Q3RzNFFSUE90U1E',
						'width' => 299, 
						'height' => 1024,
						'mime-type' => 'image/jpg',
					),
					/* 280*300 */
					'portfolio-thumb'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9dG9nY2phLVU5VDg',
						'width' => 280, 
						'height' => 300,
						'mime-type' => 'image/jpg',
					),
					/* 240*260 */
					'portfolio-photo-thumb'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9TWxCSGlraHJHczg',
						'width' => 240, 
						'height' => 260,
						'mime-type' => 'image/jpg',
					)
				)
			),
				/* coursea */
			'00-courses-banner.jpg' => array(
				'mime_type' 	=> 'image/jpg',
				'title'     	=> '00-courses-banner.jpg',
				'url'     		=> 'https://drive.google.com/uc?id=0B5l8lO-CaKt9NEo2VXMwTkFsdUU',
				'sizes' => array(
					/* 150*150 */
					'thumbnail'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9UDVLeXFvU3Baczg',
						'width' => 150, 
						'height' => 150,
						'mime-type' => 'image/jpg',
					),
					/* 300*300 */
					'medium'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9OWd4eDZ3UmdtN0k',
						'width' => 300, 
						'height' => 153,
						'mime-type' => 'image/jpg',
					),
					/* 280*300 */
					'portfolio-thumb'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9cExCVlhTUGRMaDg',
						'width' => 280, 
						'height' => 300,
						'mime-type' => 'image/jpg',
					),
					/* 240*260 */
					'portfolio-photo-thumb'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9THNhazZOQmtITG8',
						'width' => 240, 
						'height' => 260,
						'mime-type' => 'image/jpg',
					)
				)
			),
			'01-home-1200-v1.jpg' => array(
				'mime_type' 	=> 'image/jpg',
				'title'     	=> '01-home-1200-v1.jpg',
				'url'     		=> 'https://drive.google.com/uc?id=0B5l8lO-CaKt9RDZsYV9Fck5hV28',
				'sizes' => array(
					/* 150*150 */
					'thumbnail'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9bDdnSjl4ZUg3anc',
						'width' => 150, 
						'height' => 150,
						'mime-type' => 'image/jpg',
					),
					/* 300*300 */
					'medium'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9SVcyZWVDeVJVdEk',
						'width' => 78, 
						'height' => 300,
						'mime-type' => 'image/jpg',
					),
					/* 768*0 */
					'medium_large'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9c2x6QWpZSzJEenc',
						'width' => 825, 
						'height' => 510,
						'mime-type' => 'image/jpg',
					),
					/* 1024*1024 */
					'large'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9MmZad3hYVkJMbFU',
						'width' => 268, 
						'height' => 1024,
						'mime-type' => 'image/jpg',
					),
					/* 280*300 */
					'portfolio-thumb'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9SHlRcXRwbHdCOVk',
						'width' => 280, 
						'height' => 300,
						'mime-type' => 'image/jpg',
					),
					/* 240*260 */
					'portfolio-photo-thumb'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9MkdBa2d5ODFET1U',
						'width' => 240, 
						'height' => 260,
						'mime-type' => 'image/jpg',
					)
				)
			),
			'05-all-courses-1200-v1.jpg' => array(
				'mime_type' 	=> 'image/jpg',
				'title'     	=> '05-all-courses-1200-v1.jpg',
				'url'     		=> 'https://drive.google.com/uc?id=0B5l8lO-CaKt9aWVMWVU3ZE9ReTQ',
				'sizes' => array(
					/* 150*150 */
					'thumbnail'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9cnBlVGVuWWtCam8',
						'width' => 150, 
						'height' => 150,
						'mime-type' => 'image/jpg',
					),
					/* 300*300 */
					'medium'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9WDBoS0pzbkp0czA',
						'width' => 142, 
						'height' => 300,
						'mime-type' => 'image/jpg',
					),
					/* 768*0 */
					'medium_large'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9aURrZ1NxdGpFNlk',
						'width' => 825, 
						'height' => 510,
						'mime-type' => 'image/jpg',
					),
					/* 1024*1024 */
					'large'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9Y25BQTI4dlNyRVk',
						'width' => 483, 
						'height' => 1024,
						'mime-type' => 'image/jpg',
					),
					/* 280*300 */
					'portfolio-thumb'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9U0pRZzlsa0VQelU',
						'width' => 280, 
						'height' => 300,
						'mime-type' => 'image/jpg',
					),
					/* 240*260 */
					'portfolio-photo-thumb'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9eXY5OVNVV29adms',
						'width' => 240, 
						'height' => 260,
						'mime-type' => 'image/jpg',
					)
				)
			),
			'06-all-courses-1200-v2.jpg' => array(
				'mime_type' 	=> 'image/jpg',
				'title'     	=> '06-all-courses-1200-v2.jpg',
				'url'     		=> 'https://drive.google.com/uc?id=0B5l8lO-CaKt9NW1TckpYWXU0ZWM',
				'sizes' => array(
					/* 150*150 */
					'thumbnail'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9YWRFSEVSQ3EzMTg',
						'width' => 150, 
						'height' => 150,
						'mime-type' => 'image/jpg',
					),
					/* 300*300 */
					'medium'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9b1l3ZXRld1FMam8',
						'width' => 163, 
						'height' => 300,
						'mime-type' => 'image/jpg',
					),
					/* 768*0 */
					'medium_large'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9d01Wb0Z1NGhqMzQ',
						'width' => 825, 
						'height' => 510,
						'mime-type' => 'image/jpg',
					),
					/* 1024*1024 */
					'large'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9X2dLb2J3dDFSN3M',
						'width' => 555, 
						'height' => 1024,
						'mime-type' => 'image/jpg',
					),
					/* 280*300 */
					'portfolio-thumb'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9SFVtclJUM2JGTUU',
						'width' => 280, 
						'height' => 300,
						'mime-type' => 'image/jpg',
					),
					/* 240*260 */
					'portfolio-photo-thumb'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9ckIzYlFhdzdGZG8',
						'width' => 240, 
						'height' => 260,
						'mime-type' => 'image/jpg',
					)
				)
			),
			'08-search-results-line-view-1200.jpg' => array(
				'mime_type' 	=> 'image/jpg',
				'title'     	=> '08-search-results-line-view-1200.jpg',
				'url'     		=> 'https://drive.google.com/uc?id=0B5l8lO-CaKt9cHprM1RiYWoyV0U',
				'sizes' => array(
					/* 150*150 */
					'thumbnail'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9Z3BnUmhBWUhMSzA',
						'width' => 150, 
						'height' => 150,
						'mime-type' => 'image/jpg',
					),
					/* 300*300 */
					'medium'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9TW1NOGdjRmdQVGs',
						'width' => 190, 
						'height' => 300,
						'mime-type' => 'image/jpg',
					),
					/* 768*0 */
					'medium_large'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9YlpfZTRqWmhEUGM',
						'width' => 825, 
						'height' => 510,
						'mime-type' => 'image/jpg',
					),
					/* 1024*1024 */
					'large'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9UlMtaWZGQjNCVEE',
						'width' => 647, 
						'height' => 1024,
						'mime-type' => 'image/jpg',
					),
					/* 280*300 */
					'portfolio-thumb'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9R0xLZHhUWVhWZmM',
						'width' => 280, 
						'height' => 300,
						'mime-type' => 'image/jpg',
					),
					/* 240*260 */
					'portfolio-photo-thumb'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9ekRFVUd6X041NWs',
						'width' => 240, 
						'height' => 260,
						'mime-type' => 'image/jpg',
					)
				)
			),
			'10-all-tutorial-1200-v2.jpg' => array(
				'mime_type' 	=> 'image/jpg',
				'title'     	=> '10-all-tutorial-1200-v2.jpg',
				'url'     		=> 'https://drive.google.com/uc?id=0B5l8lO-CaKt9a0VBdTg5TWZtOE0',
				'sizes' => array(
					/* 150*150 */
					'thumbnail'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9RFFRR2g3UG5ubzA',
						'width' => 150, 
						'height' => 150,
						'mime-type' => 'image/jpg',
					),
					/* 300*300 */
					'medium'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9MHJ0a3AzWWw2U3c',
						'width' => 162, 
						'height' => 300,
						'mime-type' => 'image/jpg',
					),
					/* 768*0 */
					'medium_large'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9cHhlTzVlN1NYZzQ',
						'width' => 825, 
						'height' => 510,
						'mime-type' => 'image/jpg',
					),
					/* 1024*1024 */
					'large'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9RTBYN1N1U0pKa2c',
						'width' => 554, 
						'height' => 1024,
						'mime-type' => 'image/jpg',
					),
					/* 280*300 */
					'portfolio-thumb'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9TTVCVmFMUkplZVU',
						'width' => 280, 
						'height' => 300,
						'mime-type' => 'image/jpg',
					),
					/* 240*260 */
					'portfolio-photo-thumb'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9dXBlalRwSXpKZlk',
						'width' => 240, 
						'height' => 260,
						'mime-type' => 'image/jpg',
					)
				)
			),
			'11-tutorial-page-1200.jpg' => array(
				'mime_type' 	=> 'image/jpg',
				'title'     	=> '11-tutorial-page-1200.jpg',
				'url'     		=> 'https://drive.google.com/uc?id=0B5l8lO-CaKt9RUFCRVhudGJob2M',
				'sizes' => array(
					/* 150*150 */
					'thumbnail'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9Q2tLRmFkLUZPdWs',
						'width' => 150, 
						'height' => 150,
						'mime-type' => 'image/jpg',
					),
					/* 300*300 */
					'medium'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9UTlpazl5QW9RWGs',
						'width' => 73, 
						'height' => 300,
						'mime-type' => 'image/jpg',
					),
					/* 768*0 */
					'medium_large'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9Uk9LajZnYUZ2eFU',
						'width' => 825, 
						'height' => 510,
						'mime-type' => 'image/jpg',
					),
					/* 1024*1024 */
					'large'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9dVYtdzRjUFZxNEU',
						'width' => 248, 
						'height' => 1024,
						'mime-type' => 'image/jpg',
					),
					/* 280*300 */
					'portfolio-thumb'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9R185VFY0dHhmUms',
						'width' => 280, 
						'height' => 300,
						'mime-type' => 'image/jpg',
					),
					/* 240*260 */
					'portfolio-photo-thumb'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9WktRYnE2dll0NkU',
						'width' => 240, 
						'height' => 260,
						'mime-type' => 'image/jpg',
					)
				)
			),
			'18-blog-index-1200.jpg' => array(
				'mime_type' 	=> 'image/jpg',
				'title'     	=> '18-blog-index-1200.jpg',
				'url'     		=> 'https://drive.google.com/uc?id=0B5l8lO-CaKt9aFFsbW1GM0hucVE',
				'sizes' => array(
					/* 150*150 */
					'thumbnail'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9YVdGQkFWM0FCZEE',
						'width' => 150, 
						'height' => 150,
						'mime-type' => 'image/jpg',
					),
					/* 300*300 */
					'medium'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9djBhN3N1Z29zSTQ',
						'width' => 134, 
						'height' => 300,
						'mime-type' => 'image/jpg',
					),
					/* 768*0 */
					'medium_large'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9aU05UENBZkkwazQ',
						'width' => 825, 
						'height' => 510,
						'mime-type' => 'image/jpg',
					),
					/* 1024*1024 */
					'large'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9UkRXWkllbWxNSzQ',
						'width' => 456, 
						'height' => 1024,
						'mime-type' => 'image/jpg',
					),
					/* 280*300 */
					'portfolio-thumb'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9aGNDWnVYNDVxRHc',
						'width' => 280, 
						'height' => 300,
						'mime-type' => 'image/jpg',
					),
					/* 240*260 */
					'portfolio-photo-thumb'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9aDNHVHlRLW45MEU',
						'width' => 240, 
						'height' => 260,
						'mime-type' => 'image/jpg',
					)
				)
			),
			'19-blog-single-1200.jpg' => array(
				'mime_type' 	=> 'image/jpg',
				'title'     	=> '19-blog-single-1200.jpg',
				'url'     		=> 'https://drive.google.com/uc?id=0B5l8lO-CaKt9bXNKTDRXUk1tZTg',
				'sizes' => array(
					/* 150*150 */
					'thumbnail'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9Z0Z6OEpfdGRVZGc',
						'width' => 150, 
						'height' => 150,
						'mime-type' => 'image/jpg',
					),
					/* 300*300 */
					'medium'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9a05iZXR0Z1pyeTA',
						'width' => 98, 
						'height' => 300,
						'mime-type' => 'image/jpg',
					),
					/* 768*0 */
					'medium_large'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9U1ZOeGh1Y1VtNTQ',
						'width' => 825, 
						'height' => 510,
						'mime-type' => 'image/jpg',
					),
					/* 1024*1024 */
					'large'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9dk1Yc0ppbkU4VEk',
						'width' => 335, 
						'height' => 1024,
						'mime-type' => 'image/jpg',
					),
					/* 280*300 */
					'portfolio-thumb'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9dkZHS3RSR3VITGs',
						'width' => 280, 
						'height' => 300,
						'mime-type' => 'image/jpg',
					),
					/* 240*260 */
					'portfolio-photo-thumb'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9Y2drdm5vSFJsNVE',
						'width' => 240, 
						'height' => 260,
						'mime-type' => 'image/jpg',
					)
				)
			),
			'20-pricing-1200.jpg' => array(
				'mime_type' 	=> 'image/jpg',
				'title'     	=> '20-pricing-1200.jpg',
				'url'     		=> 'https://drive.google.com/uc?id=0B5l8lO-CaKt9NkVuak1KTDhTazg',
				'sizes' => array(
					/* 150*150 */
					'thumbnail'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9VlZ4cUdCRGtHSTA',
						'width' => 150, 
						'height' => 150,
						'mime-type' => 'image/jpg',
					),
					/* 300*300 */
					'medium'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9SDh4M01ETklXVmc',
						'width' => 122, 
						'height' => 300,
						'mime-type' => 'image/jpg',
					),
					/* 768*0 */
					'medium_large'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9X3lXVV9nM09mZEk',
						'width' => 825, 
						'height' => 510,
						'mime-type' => 'image/jpg',
					),
					/* 1024*1024 */
					'large'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9YUVKdnZHSFJZWFk',
						'width' => 418, 
						'height' => 1024,
						'mime-type' => 'image/jpg',
					),
					/* 280*300 */
					'portfolio-thumb'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9QXhnTUp2OHlIV00',
						'width' => 280, 
						'height' => 300,
						'mime-type' => 'image/jpg',
					),
					/* 240*260 */
					'portfolio-photo-thumb'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9dGRhbUF0b0F5SEk',
						'width' => 240, 
						'height' => 260,
						'mime-type' => 'image/jpg',
					)
				)
			),
			/* concerto */
			'00-concerto-banner.jpg' => array(
				'mime_type' 	=> 'image/jpg',
				'title'     	=> '00-concerto-banner.jpg',
				'url'     		=> 'https://drive.google.com/uc?id=0B5l8lO-CaKt9ejhIbEt6aWlKUU0',
				'sizes' => array(
					/* 150*150 */
					'thumbnail'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9U19GWC1xdkJ0clE',
						'width' => 150, 
						'height' => 150,
						'mime-type' => 'image/jpg',
					),
					/* 300*300 */
					'medium'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9UlpjZVJmdDZrc2s',
						'width' => 300, 
						'height' => 153,
						'mime-type' => 'image/jpg',
					),
					/* 280*300 */
					'portfolio-thumb'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9UGJJVm02WFd3ODQ',
						'width' => 280, 
						'height' => 300,
						'mime-type' => 'image/jpg',
					),
					/* 240*260 */
					'portfolio-photo-thumb'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9NHdmdDdRdk5zV00',
						'width' => 240, 
						'height' => 260,
						'mime-type' => 'image/jpg',
					)
				)
			),
			'01-concerto-home-1200.jpg' => array(
				'mime_type' 	=> 'image/jpg',
				'title'     	=> '01-concerto-home-1200.jpg',
				'url'     		=> 'https://drive.google.com/uc?id=0B5l8lO-CaKt9LWxsTW9udXJyLWc',
				'sizes' => array(
					/* 150*150 */
					'thumbnail'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9MWNQdDFqT1luMEE',
						'width' => 150, 
						'height' => 150,
						'mime-type' => 'image/jpg',
					),
					/* 300*300 */
					'medium'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9ZnBmWHVoS1VWc1k',
						'width' => 181, 
						'height' => 300,
						'mime-type' => 'image/jpg',
					),
					/* 768*0 */
					'medium_large'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9eHd2MW1MN1EzVFE',
						'width' => 825, 
						'height' => 510,
						'mime-type' => 'image/jpg',
					),
					/* 1024*1024 */
					'large'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9bllpQ1hfelN5NWs',
						'width' => 619, 
						'height' => 1024,
						'mime-type' => 'image/jpg',
					),
					/* 280*300 */
					'portfolio-thumb'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9MWFSVThKdjR0aG8',
						'width' => 280, 
						'height' => 300,
						'mime-type' => 'image/jpg',
					),
					/* 240*260 */
					'portfolio-photo-thumb'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9UzJLcGYwMzBCcnc',
						'width' => 240, 
						'height' => 260,
						'mime-type' => 'image/jpg',
					)
				)
			),
			'06-event-information-1200.jpg' => array(
				'mime_type' 	=> 'image/jpg',
				'title'     	=> '06-event-information-1200.jpg',
				'url'     		=> 'https://drive.google.com/uc?id=0B5l8lO-CaKt9cXpuRnJWMXRlWm8',
				'sizes' => array(
					/* 150*150 */
					'thumbnail'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9NVNsOXhVdGIyRWc',
						'width' => 150, 
						'height' => 150,
						'mime-type' => 'image/jpg',
					),
					/* 300*300 */
					'medium'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9b1N4ZmJoRWtDVmM',
						'width' => 92, 
						'height' => 300,
						'mime-type' => 'image/jpg',
					),
					/* 768*0 */
					'medium_large'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9QmN1dm1RaFR3Tm8',
						'width' => 825, 
						'height' => 510,
						'mime-type' => 'image/jpg',
					),
					/* 1024*1024 */
					'large'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9U053LUtTVVVIS1E',
						'width' => 312, 
						'height' => 1024,
						'mime-type' => 'image/jpg',
					),
					/* 280*300 */
					'portfolio-thumb'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9QndRamh3dmNlazg',
						'width' => 280, 
						'height' => 300,
						'mime-type' => 'image/jpg',
					),
					/* 240*260 */
					'portfolio-photo-thumb'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9MDFXc25oR0p3UjA',
						'width' => 240, 
						'height' => 260,
						'mime-type' => 'image/jpg',
					)
				)
			),
			'07-results-1200.jpg' => array(
				'mime_type' 	=> 'image/jpg',
				'title'     	=> '07-results-1200.jpg',
				'url'     		=> 'https://drive.google.com/uc?id=0B5l8lO-CaKt9THJSZzVQSThaazg',
				'sizes' => array(
					/* 150*150 */
					'thumbnail'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9Z25KaHlTUXJ0eFE',
						'width' => 150, 
						'height' => 150,
						'mime-type' => 'image/jpg',
					),
					/* 300*300 */
					'medium'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9VG5abjZNcEgycE0',
						'width' => 217, 
						'height' => 300,
						'mime-type' => 'image/jpg',
					),
					/* 768*0 */
					'medium_large'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9Y2tiVkJjODVnWlE',
						'width' => 825, 
						'height' => 510,
						'mime-type' => 'image/jpg',
					),
					/* 1024*1024 */
					'large'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9NllGUTYtQ1lwaTQ',
						'width' => 740, 
						'height' => 1024,
						'mime-type' => 'image/jpg',
					),
					/* 280*300 */
					'portfolio-thumb'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9VnhQTmZ5UVVJNEk',
						'width' => 280, 
						'height' => 300,
						'mime-type' => 'image/jpg',
					),
					/* 240*260 */
					'portfolio-photo-thumb'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9MkJkMTBjVnVlWHc',
						'width' => 240, 
						'height' => 260,
						'mime-type' => 'image/jpg',
					)
				)
			),
			'08-select-ticket-1200.jpg' => array(
				'mime_type' 	=> 'image/jpg',
				'title'     	=> '08-select-ticket-1200.jpg',
				'url'     		=> 'https://drive.google.com/uc?id=0B5l8lO-CaKt9WnhuUnBmRVRyT3M',
				'sizes' => array(
					/* 150*150 */
					'thumbnail'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9T0ZwYmY5UkJmVE0',
						'width' => 150, 
						'height' => 150,
						'mime-type' => 'image/jpg',
					),
					/* 300*300 */
					'medium'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9VWVORk9rZEtQbzA',
						'width' => 257, 
						'height' => 300,
						'mime-type' => 'image/jpg',
					),
					/* 768*0 */
					'medium_large'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9RTZCdEZRU0RvNFU',
						'width' => 825, 
						'height' => 510,
						'mime-type' => 'image/jpg',
					),
					/* 1024*1024 */
					'large'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9S0w5X1VLblMzeFk',
						'width' => 876, 
						'height' => 1024,
						'mime-type' => 'image/jpg',
					),
					/* 280*300 */
					'portfolio-thumb'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9S1NLYlloZHRzUVk',
						'width' => 280, 
						'height' => 300,
						'mime-type' => 'image/jpg',
					),
					/* 240*260 */
					'portfolio-photo-thumb'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9QjhIM1hsWlg3aTg',
						'width' => 240, 
						'height' => 260,
						'mime-type' => 'image/jpg',
					)
				)
			),
			'09-payment-1200.jpg' => array(
				'mime_type' 	=> 'image/jpg',
				'title'     	=> '09-payment-1200.jpg',
				'url'     		=> 'https://drive.google.com/uc?id=0B5l8lO-CaKt9Z2VpSGpXS1RkWFU',
				'sizes' => array(
					/* 150*150 */
					'thumbnail'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9bGxtb08weDNWdGc',
						'width' => 150, 
						'height' => 150,
						'mime-type' => 'image/jpg',
					),
					/* 300*300 */
					'medium'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9Y2VKNFp6SU40bm8',
						'width' => 184, 
						'height' => 300,
						'mime-type' => 'image/jpg',
					),
					/* 768*0 */
					'medium_large'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9M3lHYWVtV2NoNkk',
						'width' => 825, 
						'height' => 510,
						'mime-type' => 'image/jpg',
					),
					/* 1024*1024 */
					'large'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9Tmk4cnM3bkFCVFk',
						'width' => 624, 
						'height' => 1024,
						'mime-type' => 'image/jpg',
					),
					/* 280*300 */
					'portfolio-thumb'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9Uzc1MF9zdkZ0Z28',
						'width' => 280, 
						'height' => 300,
						'mime-type' => 'image/jpg',
					),
					/* 240*260 */
					'portfolio-photo-thumb'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9VVpneE92cUNVOU0',
						'width' => 240, 
						'height' => 260,
						'mime-type' => 'image/jpg',
					)
				)
			),
			'12-blog-index-1200.jpg' => array(
				'mime_type' 	=> 'image/jpg',
				'title'     	=> '12-blog-index-1200.jpg',
				'url'     		=> 'https://drive.google.com/uc?id=0B5l8lO-CaKt9YzFCOFVYZVBReTA',
				'sizes' => array(
					/* 150*150 */
					'thumbnail'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9MDR3VUU3ZmtpUWM',
						'width' => 150, 
						'height' => 150,
						'mime-type' => 'image/jpg',
					),
					/* 300*300 */
					'medium'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9VURJc21vdFF1eGM',
						'width' => 86, 
						'height' => 300,
						'mime-type' => 'image/jpg',
					),
					/* 768*0 */
					'medium_large'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9OWVWakF4X2dQYk0',
						'width' => 825, 
						'height' => 510,
						'mime-type' => 'image/jpg',
					),
					/* 1024*1024 */
					'large'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9elotcHROMkZjRGs',
						'width' => 293, 
						'height' => 1024,
						'mime-type' => 'image/jpg',
					),
					/* 280*300 */
					'portfolio-thumb'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9b2lLTlpadWNkLTQ',
						'width' => 280, 
						'height' => 300,
						'mime-type' => 'image/jpg',
					),
					/* 240*260 */
					'portfolio-photo-thumb'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9NVpTRVhZRE9MRWc',
						'width' => 240, 
						'height' => 260,
						'mime-type' => 'image/jpg',
					)
				)
			),
			'14-blog-single-1200.jpg' => array(
				'mime_type' 	=> 'image/jpg',
				'title'     	=> '14-blog-single-1200.jpg',
				'url'     		=> 'https://drive.google.com/uc?id=0B5l8lO-CaKt9RURwSWk2NlZZY3c',
				'sizes' => array(
					/* 150*150 */
					'thumbnail'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9VjBBaUJYQWZlYlk',
						'width' => 150, 
						'height' => 150,
						'mime-type' => 'image/jpg',
					),
					/* 300*300 */
					'medium'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9VXQxV1V3eGpocWM',
						'width' => 118, 
						'height' => 300,
						'mime-type' => 'image/jpg',
					),
					/* 768*0 */
					'medium_large'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9YTA2YzNWSW52ZW8',
						'width' => 825, 
						'height' => 510,
						'mime-type' => 'image/jpg',
					),
					/* 1024*1024 */
					'large'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9eTVfbWx2T2hEN3c',
						'width' => 402, 
						'height' => 1024,
						'mime-type' => 'image/jpg',
					),
					/* 280*300 */
					'portfolio-thumb'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9d21XUFJ2SE5RRDg',
						'width' => 280, 
						'height' => 300,
						'mime-type' => 'image/jpg',
					),
					/* 240*260 */
					'portfolio-photo-thumb'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9TkozZ3pucncyOHc',
						'width' => 240, 
						'height' => 260,
						'mime-type' => 'image/jpg',
					)
				)
			),
			'15-about-1200.jpg' => array(
				'mime_type' 	=> 'image/jpg',
				'title'     	=> '15-about-1200.jpg',
				'url'     		=> 'https://drive.google.com/uc?id=0B5l8lO-CaKt9S1hRZTd3UjhMWXc',
				'sizes' => array(
					/* 150*150 */
					'thumbnail'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9OWJuT3IzXzFzVkE',
						'width' => 150, 
						'height' => 150,
						'mime-type' => 'image/jpg',
					),
					/* 300*300 */
					'medium'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9STFnM2JTT1V6NzQ',
						'width' => 156, 
						'height' => 300,
						'mime-type' => 'image/jpg',
					),
					/* 768*0 */
					'medium_large'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9RlVWUUtwQktjMDA',
						'width' => 825, 
						'height' => 510,
						'mime-type' => 'image/jpg',
					),
					/* 1024*1024 */
					'large'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9ajJPVEpOcGFJcFk',
						'width' => 531, 
						'height' => 1024,
						'mime-type' => 'image/jpg',
					),
					/* 280*300 */
					'portfolio-thumb'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9SzZ2cUpPVGRXemM',
						'width' => 280, 
						'height' => 300,
						'mime-type' => 'image/jpg',
					),
					/* 240*260 */
					'portfolio-photo-thumb'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9V0hFaXdJZ2tlRlU',
						'width' => 240, 
						'height' => 260,
						'mime-type' => 'image/jpg',
					)
				)
			),
			'16-gallery-1200.jpg' => array(
				'mime_type' 	=> 'image/jpg',
				'title'     	=> '16-gallery-1200.jpg',
				'url'     		=> 'https://drive.google.com/uc?id=0B5l8lO-CaKt9dkVtYkxVN1J4eFE',
				'sizes' => array(
					/* 150*150 */
					'thumbnail'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9M1pyVFN4MDBlVms',
						'width' => 150, 
						'height' => 150,
						'mime-type' => 'image/jpg',
					),
					/* 300*300 */
					'medium'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9TkVkNlpaOHNObFU',
						'width' => 204, 
						'height' => 300,
						'mime-type' => 'image/jpg',
					),
					/* 768*0 */
					'medium_large'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9QXVYR2FVOUVmbjQ',
						'width' => 825, 
						'height' => 510,
						'mime-type' => 'image/jpg',
					),
					/* 1024*1024 */
					'large'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9WlZIaHpoaGlGLUE',
						'width' => 697, 
						'height' => 1024,
						'mime-type' => 'image/jpg',
					),
					/* 280*300 */
					'portfolio-thumb'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9ZVF4RXl0dEZZZXc',
						'width' => 280, 
						'height' => 300,
						'mime-type' => 'image/jpg',
					),
					/* 240*260 */
					'portfolio-photo-thumb'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9ZmZ4VHpJblVadWc',
						'width' => 240, 
						'height' => 260,
						'mime-type' => 'image/jpg',
					)
				)
			),
			/* love */
			'00-ceremony-banner.jpg' => array(
				'mime_type' 	=> 'image/jpg',
				'title'     	=> '00-ceremony-banner.jpg',
				'url'     		=> 'https://drive.google.com/uc?id=0B5l8lO-CaKt9elNTamYwSmdza2M',
				'sizes' => array(
					/* 150*150 */
					'thumbnail'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9dHFVdF8tVUl1VWM',
						'width' => 150, 
						'height' => 150,
						'mime-type' => 'image/jpg',
					),
					/* 300*300 */
					'medium'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9MWhoM3VMelhVLTg',
						'width' => 300, 
						'height' => 153,
						'mime-type' => 'image/jpg',
					),
					/* 280*300 */
					'portfolio-thumb'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9NkNFQW4ycG4weEU',
						'width' => 280, 
						'height' => 300,
						'mime-type' => 'image/jpg',
					),
					/* 240*260 */
					'portfolio-photo-thumb'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9Y0ZwRzRFaVl4Ujg',
						'width' => 240, 
						'height' => 260,
						'mime-type' => 'image/jpg',
					)
				)
			),
			'01-ceremony-home-1200.jpg' => array(
				'mime_type' 	=> 'image/jpg',
				'title'     	=> '01-ceremony-home-1200.jpg',
				'url'     		=> 'https://drive.google.com/uc?id=0B5l8lO-CaKt9SDY5MnE2VVNJR0U',
				'sizes' => array(
					/* 150*150 */
					'thumbnail'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9ellFei1FZmFPd1E',
						'width' => 150, 
						'height' => 150,
						'mime-type' => 'image/jpg',
					),
					/* 300*300 */
					'medium'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9Sy1EWnlGT2Zxd0k',
						'width' => 36, 
						'height' => 300,
						'mime-type' => 'image/jpg',
					),
					/* 768*0 */
					'medium_large'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9ZHNjRUNJT3JUNFk',
						'width' => 825, 
						'height' => 510,
						'mime-type' => 'image/jpg',
					),
					/* 1024*1024 */
					'large'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9OHJhYUNuMmtsZHM',
						'width' => 121, 
						'height' => 1024,
						'mime-type' => 'image/jpg',
					),
					/* 280*300 */
					'portfolio-thumb'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9WDZsZ3AxZGRoakE',
						'width' => 280, 
						'height' => 300,
						'mime-type' => 'image/jpg',
					),
					/* 240*260 */
					'portfolio-photo-thumb'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9bE1EU2xIcGtIZEU',
						'width' => 240, 
						'height' => 260,
						'mime-type' => 'image/jpg',
					)
				)
			),
			'02-our-story-1200.jpg' => array(
				'mime_type' 	=> 'image/jpg',
				'title'     	=> '02-our-story-1200.jpg',
				'url'     		=> 'https://drive.google.com/uc?id=0B5l8lO-CaKt9WHhWNzlmVXlieHc',
				'sizes' => array(
					/* 150*150 */
					'thumbnail'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9Vm1ubHdORHN6V2c',
						'width' => 150, 
						'height' => 150,
						'mime-type' => 'image/jpg',
					),
					/* 300*300 */
					'medium'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9aU50TFg4dTdpSGM',
						'width' => 170, 
						'height' => 300,
						'mime-type' => 'image/jpg',
					),
					/* 768*0 */
					'medium_large'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9M3duWGs1cks4Z1U',
						'width' => 825, 
						'height' => 510,
						'mime-type' => 'image/jpg',
					),
					/* 1024*1024 */
					'large'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9Q0JWUHRFWDNFME0',
						'width' => 581, 
						'height' => 1024,
						'mime-type' => 'image/jpg',
					),
					/* 280*300 */
					'portfolio-thumb'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9SUw5SEhYX3hXSjQ',
						'width' => 280, 
						'height' => 300,
						'mime-type' => 'image/jpg',
					),
					/* 240*260 */
					'portfolio-photo-thumb'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9SktrZjMweUJkZHc',
						'width' => 240, 
						'height' => 260,
						'mime-type' => 'image/jpg',
					)
				)
			),
			'03-guestbook-1200.jpg' => array(
				'mime_type' 	=> 'image/jpg',
				'title'     	=> '03-guestbook-1200.jpg',
				'url'     		=> 'https://drive.google.com/uc?id=0B5l8lO-CaKt9bzUzNktjNDAyVTA',
				'sizes' => array(
					/* 150*150 */
					'thumbnail'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9TmhVekpqalliaUU',
						'width' => 150, 
						'height' => 150,
						'mime-type' => 'image/jpg',
					),
					/* 300*300 */
					'medium'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9R2JQd1ZPU3BmcU0',
						'width' => 164, 
						'height' => 300,
						'mime-type' => 'image/jpg',
					),
					/* 768*0 */
					'medium_large'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9WklMSXozd202Z3c',
						'width' => 825, 
						'height' => 510,
						'mime-type' => 'image/jpg',
					),
					/* 1024*1024 */
					'large'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9ZlVreWdSVG9IUjQ',
						'width' => 561, 
						'height' => 1024,
						'mime-type' => 'image/jpg',
					),
					/* 280*300 */
					'portfolio-thumb'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9N1NLV0JZTDRGUHM',
						'width' => 280, 
						'height' => 300,
						'mime-type' => 'image/jpg',
					),
					/* 240*260 */
					'portfolio-photo-thumb'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9dklzOUk0Ulp2cVU',
						'width' => 240, 
						'height' => 260,
						'mime-type' => 'image/jpg',
					)
				)
			),
			'04-guestbook-v2-1200.jpg' => array(
				'mime_type' 	=> 'image/jpg',
				'title'     	=> '04-guestbook-v2-1200.jpg',
				'url'     		=> 'https://drive.google.com/uc?id=0B5l8lO-CaKt9OEdvd1JQSWxiczg',
				'sizes' => array(
					/* 150*150 */
					'thumbnail'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9Vkdsd1M2RFdJZnM',
						'width' => 150, 
						'height' => 150,
						'mime-type' => 'image/jpg',
					),
					/* 300*300 */
					'medium'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9bzVfb3plTXEwQ3c',
						'width' => 146, 
						'height' => 300,
						'mime-type' => 'image/jpg',
					),
					/* 768*0 */
					'medium_large'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9N0FwdHd5dHZ3U1U',
						'width' => 825, 
						'height' => 510,
						'mime-type' => 'image/jpg',
					),
					/* 1024*1024 */
					'large'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9Y1hOMjlCVHF0b2c',
						'width' => 500, 
						'height' => 1024,
						'mime-type' => 'image/jpg',
					),
					/* 280*300 */
					'portfolio-thumb'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9U3gyM2ZjXzhtNXc',
						'width' => 280, 
						'height' => 300,
						'mime-type' => 'image/jpg',
					),
					/* 240*260 */
					'portfolio-photo-thumb'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9YmstX1NMenhQYnc',
						'width' => 240, 
						'height' => 260,
						'mime-type' => 'image/jpg',
					)
				)
			),
			'05-rsvp-page-1200.jpg' => array(
				'mime_type' 	=> 'image/jpg',
				'title'     	=> '05-rsvp-page-1200.jpg',
				'url'     		=> 'https://drive.google.com/uc?id=0B5l8lO-CaKt9b2pTV3JiVk1pMUk',
				'sizes' => array(
					/* 150*150 */
					'thumbnail'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9RlJYZ0ViS3JQbFk',
						'width' => 150, 
						'height' => 150,
						'mime-type' => 'image/jpg',
					),
					/* 300*300 */
					'medium'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9UjNpQ1lTVllVcmM',
						'width' => 195, 
						'height' => 300,
						'mime-type' => 'image/jpg',
					),
					/* 768*0 */
					'medium_large'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9azVlM29Xb2ZVQ0E',
						'width' => 825, 
						'height' => 510,
						'mime-type' => 'image/jpg',
					),
					/* 1024*1024 */
					'large'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9LW9SbzdOSnJtV2c',
						'width' => 666, 
						'height' => 1024,
						'mime-type' => 'image/jpg',
					),
					/* 280*300 */
					'portfolio-thumb'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9Y01fVTl3Uks4SkE',
						'width' => 280, 
						'height' => 300,
						'mime-type' => 'image/jpg',
					),
					/* 240*260 */
					'portfolio-photo-thumb'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9V2d2bzlDdjNnWk0',
						'width' => 240, 
						'height' => 260,
						'mime-type' => 'image/jpg',
					)
				)
			),
			'06-events-page-1200.jpg' => array(
				'mime_type' 	=> 'image/jpg',
				'title'     	=> '06-events-page-1200.jpg',
				'url'     		=> 'https://drive.google.com/uc?id=0B5l8lO-CaKt9ZUxZbTVRSnB6QlE',
				'sizes' => array(
					/* 150*150 */
					'thumbnail'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9d2VKYnVXcE9CWFU',
						'width' => 150, 
						'height' => 150,
						'mime-type' => 'image/jpg',
					),
					/* 300*300 */
					'medium'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9YzJaY1VkT0ltbmc',
						'width' => 139, 
						'height' => 300,
						'mime-type' => 'image/jpg',
					),
					/* 768*0 */
					'medium_large'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9VmpuRnRRNmdHdGs',
						'width' => 825, 
						'height' => 510,
						'mime-type' => 'image/jpg',
					),
					/* 1024*1024 */
					'large'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9VWJJWDlxYmVEWE0',
						'width' => 474, 
						'height' => 1024,
						'mime-type' => 'image/jpg',
					),
					/* 280*300 */
					'portfolio-thumb'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9RS1FZ3BwM2NIeWs',
						'width' => 280, 
						'height' => 300,
						'mime-type' => 'image/jpg',
					),
					/* 240*260 */
					'portfolio-photo-thumb'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9bDhDdHBMbzZsYnc',
						'width' => 240, 
						'height' => 260,
						'mime-type' => 'image/jpg',
					)
				)
			),
			'07-blog-index-1200.jpg' => array(
				'mime_type' 	=> 'image/jpg',
				'title'     	=> '07-blog-index-1200.jpg',
				'url'     		=> 'https://drive.google.com/uc?id=0B5l8lO-CaKt9bHNGaEtUcTZVLWc',
				'sizes' => array(
					/* 150*150 */
					'thumbnail'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9UFdJOGF4VThybFk',
						'width' => 150, 
						'height' => 150,
						'mime-type' => 'image/jpg',
					),
					/* 300*300 */
					'medium'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9ZEl2NDA1d0l2WlU',
						'width' => 166, 
						'height' => 300,
						'mime-type' => 'image/jpg',
					),
					/* 768*0 */
					'medium_large'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9cGROWnlXdUxqaVE',
						'width' => 825, 
						'height' => 510,
						'mime-type' => 'image/jpg',
					),
					/* 1024*1024 */
					'large'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9U0JpU081QmtUSm8',
						'width' => 565, 
						'height' => 1024,
						'mime-type' => 'image/jpg',
					),
					/* 280*300 */
					'portfolio-thumb'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9ZUd2S3pCR25lVEE',
						'width' => 280, 
						'height' => 300,
						'mime-type' => 'image/jpg',
					),
					/* 240*260 */
					'portfolio-photo-thumb'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9MmU5dVVlQm5hRjQ',
						'width' => 240, 
						'height' => 260,
						'mime-type' => 'image/jpg',
					)
				)
			),
			'09-gallery-1200.jpg' => array(
				'mime_type' 	=> 'image/jpg',
				'title'     	=> '09-gallery-1200.jpg',
				'url'     		=> 'https://drive.google.com/uc?id=0B5l8lO-CaKt9NjM4dlJEZTBtR0U',
				'sizes' => array(
					/* 150*150 */
					'thumbnail'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9MTFyYmNNc3gwWU0',
						'width' => 150, 
						'height' => 150,
						'mime-type' => 'image/jpg',
					),
					/* 300*300 */
					'medium'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9bnMzMUFUSUVlWEU',
						'width' => 180, 
						'height' => 300,
						'mime-type' => 'image/jpg',
					),
					/* 768*0 */
					'medium_large'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9M0FzWDh1NHkzNWM',
						'width' => 825, 
						'height' => 510,
						'mime-type' => 'image/jpg',
					),
					/* 1024*1024 */
					'large'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9V0xPX3JYRDIweVU',
						'width' => 614, 
						'height' => 1024,
						'mime-type' => 'image/jpg',
					),
					/* 280*300 */
					'portfolio-thumb'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9ZWhtNGQ3dmJmX00',
						'width' => 280, 
						'height' => 300,
						'mime-type' => 'image/jpg',
					),
					/* 240*260 */
					'portfolio-photo-thumb'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9bzRvQ1k2aUJ0MGs',
						'width' => 240, 
						'height' => 260,
						'mime-type' => 'image/jpg',
					)
				)
			),
			'10-gallery-v2-1200.jpg' => array(
				'mime_type' 	=> 'image/jpg',
				'title'     	=> '10-gallery-v2-1200.jpg',
				'url'     		=> 'https://drive.google.com/uc?id=0B5l8lO-CaKt9dWZXSzhaZkE4bms',
				'sizes' => array(
					/* 150*150 */
					'thumbnail'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9aGRnNW93SlUtaE0',
						'width' => 150, 
						'height' => 150,
						'mime-type' => 'image/jpg',
					),
					/* 300*300 */
					'medium'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9SnU4TURiYWlLckk',
						'width' => 180, 
						'height' => 300,
						'mime-type' => 'image/jpg',
					),
					/* 768*0 */
					'medium_large'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9YW8xUk5sdEJGZnc',
						'width' => 825, 
						'height' => 510,
						'mime-type' => 'image/jpg',
					),
					/* 1024*1024 */
					'large'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9eE1FeGRod1pheUE',
						'width' => 614, 
						'height' => 1024,
						'mime-type' => 'image/jpg',
					),
					/* 280*300 */
					'portfolio-thumb'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9eUpiSU9qRlN5bmM',
						'width' => 280, 
						'height' => 300,
						'mime-type' => 'image/jpg',
					),
					/* 240*260 */
					'portfolio-photo-thumb'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9MmRZUE96WFpoZHc',
						'width' => 240, 
						'height' => 260,
						'mime-type' => 'image/jpg',
					)
				)
			),
			/* food */
			'00-food-banner.jpg' => array(
				'mime_type' 	=> 'image/jpg',
				'title'     	=> '00-food-banner.jpg',
				'url'     		=> 'https://drive.google.com/uc?id=0B5l8lO-CaKt9VUJiY04xWC1HeXc',
				'sizes' => array(
					/* 150*150 */
					'thumbnail'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9TWJrUFFTOWdNWjg',
						'width' => 150, 
						'height' => 150,
						'mime-type' => 'image/jpg',
					),
					/* 300*300 */
					'medium'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9eW8xTWlmd2RfZ2M',
						'width' => 300, 
						'height' => 153,
						'mime-type' => 'image/jpg',
					),
					/* 280*300 */
					'portfolio-thumb'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9NVQ0OHZXY09Kd28',
						'width' => 280, 
						'height' => 300,
						'mime-type' => 'image/jpg',
					),
					/* 240*260 */
					'portfolio-photo-thumb'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9VmJtT3pmS296alk',
						'width' => 240, 
						'height' => 260,
						'mime-type' => 'image/jpg',
					)
				)
			),
			'01-food-home-1200.jpg' => array(
				'mime_type' 	=> 'image/jpg',
				'title'     	=> '01-food-home-1200.jpg',
				'url'     		=> 'https://drive.google.com/uc?id=0B5l8lO-CaKt9d3FBZlF6ME0zd1U',
				'sizes' => array(
					/* 150*150 */
					'thumbnail'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9MDhSelFjd0FmSVU',
						'width' => 150, 
						'height' => 150,
						'mime-type' => 'image/jpg',
					),
					/* 300*300 */
					'medium'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9ZzZMRU1FeVNhLU0',
						'width' => 77, 
						'height' => 300,
						'mime-type' => 'image/jpg',
					),
					/* 768*0 */
					'medium_large'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9RU5aUlNLbE9sTmc',
						'width' => 825, 
						'height' => 510,
						'mime-type' => 'image/jpg',
					),
					/* 1024*1024 */
					'large'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9bDRoa2o3OEJrMW8',
						'width' => 263, 
						'height' => 1024,
						'mime-type' => 'image/jpg',
					),
					/* 280*300 */
					'portfolio-thumb'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9QlpHdzZxTHJHSmc',
						'width' => 280, 
						'height' => 300,
						'mime-type' => 'image/jpg',
					),
					/* 240*260 */
					'portfolio-photo-thumb'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9dHlxOXMzWWFUOFk',
						'width' => 240, 
						'height' => 260,
						'mime-type' => 'image/jpg',
					)
				)
			),
			'03-menu-1200.jpg' => array(
				'mime_type' 	=> 'image/jpg',
				'title'     	=> '03-menu-1200.jpg',
				'url'     		=> 'https://drive.google.com/uc?id=0B5l8lO-CaKt9a0N4dmo4OFBEN2s',
				'sizes' => array(
					/* 150*150 */
					'thumbnail'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9YVZDU2pOaEhrcmc',
						'width' => 150, 
						'height' => 150,
						'mime-type' => 'image/jpg',
					),
					/* 300*300 */
					'medium'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9R3Q3X0gtQjY4QnM',
						'width' => 121, 
						'height' => 300,
						'mime-type' => 'image/jpg',
					),
					/* 768*0 */
					'medium_large'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9THNJS0ZoNXpwOTQ',
						'width' => 825, 
						'height' => 510,
						'mime-type' => 'image/jpg',
					),
					/* 1024*1024 */
					'large'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9LVVCSVFLU2VSQ0E',
						'width' => 412, 
						'height' => 1024,
						'mime-type' => 'image/jpg',
					),
					/* 280*300 */
					'portfolio-thumb'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9ZTdqZWlyaWVkODA',
						'width' => 280, 
						'height' => 300,
						'mime-type' => 'image/jpg',
					),
					/* 240*260 */
					'portfolio-photo-thumb'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9WThHeFZSZ0xnbkk',
						'width' => 240, 
						'height' => 260,
						'mime-type' => 'image/jpg',
					)
				)
			),
			'04-reservation-1200.jpg' => array(
				'mime_type' 	=> 'image/jpg',
				'title'     	=> '04-reservation-1200.jpg',
				'url'     		=> 'https://drive.google.com/uc?id=0B5l8lO-CaKt9aUlRVWhqc2IwcWs',
				'sizes' => array(
					/* 150*150 */
					'thumbnail'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9NXJfRFB5Ymp5aTA',
						'width' => 150, 
						'height' => 150,
						'mime-type' => 'image/jpg',
					),
					/* 300*300 */
					'medium'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9VjA0aTJ6WVMwNlE',
						'width' => 244, 
						'height' => 300,
						'mime-type' => 'image/jpg',
					),
					/* 768*0 */
					'medium_large'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9WTdyTy16dVZ1RFk',
						'width' => 825, 
						'height' => 510,
						'mime-type' => 'image/jpg',
					),
					/* 1024*1024 */
					'large'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9ZFM1enFDbGw3Y28',
						'width' => 832, 
						'height' => 1024,
						'mime-type' => 'image/jpg',
					),
					/* 280*300 */
					'portfolio-thumb'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9Z1BIVUdWaFd5Rjg',
						'width' => 280, 
						'height' => 300,
						'mime-type' => 'image/jpg',
					),
					/* 240*260 */
					'portfolio-photo-thumb'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9MHV0d2NfZ3A4MHM',
						'width' => 240, 
						'height' => 260,
						'mime-type' => 'image/jpg',
					)
				)
			),
			'06-about-us-1200.jpg' => array(
				'mime_type' 	=> 'image/jpg',
				'title'     	=> '06-about-us-1200.jpg',
				'url'     		=> 'https://drive.google.com/uc?id=0B5l8lO-CaKt9cGRPcXQ3ZjE0alE',
				'sizes' => array(
					/* 150*150 */
					'thumbnail'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9TTJ5QnNMZ1NuZXc',
						'width' => 150, 
						'height' => 150,
						'mime-type' => 'image/jpg',
					),
					/* 300*300 */
					'medium'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9ZER5UWhZNjRVU0U',
						'width' => 83, 
						'height' => 300,
						'mime-type' => 'image/jpg',
					),
					/* 768*0 */
					'medium_large'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9SzZ1dWVuM3FDM2c',
						'width' => 825, 
						'height' => 510,
						'mime-type' => 'image/jpg',
					),
					/* 1024*1024 */
					'large'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9SThEaXlYODdNMms',
						'width' => 285, 
						'height' => 1024,
						'mime-type' => 'image/jpg',
					),
					/* 280*300 */
					'portfolio-thumb'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9REJHOUFKUTZ4SWs',
						'width' => 280, 
						'height' => 300,
						'mime-type' => 'image/jpg',
					),
					/* 240*260 */
					'portfolio-photo-thumb'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9NW95SHd2VVlUVHM',
						'width' => 240, 
						'height' => 260,
						'mime-type' => 'image/jpg',
					)
				)
			),
			'08-our-chefs-1200.jpg' => array(
				'mime_type' 	=> 'image/jpg',
				'title'     	=> '08-our-chefs-1200.jpg',
				'url'     		=> 'https://drive.google.com/uc?id=0B5l8lO-CaKt9N1FJRDFuc00ycTg',
				'sizes' => array(
					/* 150*150 */
					'thumbnail'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9WkRyendGcTVUWDQ',
						'width' => 150, 
						'height' => 150,
						'mime-type' => 'image/jpg',
					),
					/* 300*300 */
					'medium'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9YWluS01jalRtOHc',
						'width' => 140, 
						'height' => 300,
						'mime-type' => 'image/jpg',
					),
					/* 768*0 */
					'medium_large'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9QmVuemFndEtlWUk',
						'width' => 825, 
						'height' => 510,
						'mime-type' => 'image/jpg',
					),
					/* 1024*1024 */
					'large'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9NVlsSFpnWnBNYkU',
						'width' => 476, 
						'height' => 1024,
						'mime-type' => 'image/jpg',
					),
					/* 280*300 */
					'portfolio-thumb'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9Vk5RcVgyUjRQdUE',
						'width' => 280, 
						'height' => 300,
						'mime-type' => 'image/jpg',
					),
					/* 240*260 */
					'portfolio-photo-thumb'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9WmNhVklxVVNwZGM',
						'width' => 240, 
						'height' => 260,
						'mime-type' => 'image/jpg',
					)
				)
			),
			'09-events-1200.jpg' => array(
				'mime_type' 	=> 'image/jpg',
				'title'     	=> '09-events-1200.jpg',
				'url'     		=> 'https://drive.google.com/uc?id=0B5l8lO-CaKt9TE9lQTFJX1dtMGM',
				'sizes' => array(
					/* 150*150 */
					'thumbnail'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9aDMtTVpBRExNNVE',
						'width' => 150, 
						'height' => 150,
						'mime-type' => 'image/jpg',
					),
					/* 300*300 */
					'medium'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9M2hWRm0wX3pJeUU',
						'width' => 180, 
						'height' => 300,
						'mime-type' => 'image/jpg',
					),
					/* 768*0 */
					'medium_large'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9em9KcFFoZDJBSDQ',
						'width' => 825, 
						'height' => 510,
						'mime-type' => 'image/jpg',
					),
					/* 1024*1024 */
					'large'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9NVZvdjRHTVFKUm8',
						'width' => 615, 
						'height' => 1024,
						'mime-type' => 'image/jpg',
					),
					/* 280*300 */
					'portfolio-thumb'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9S21YYTY0SU41NTA',
						'width' => 280, 
						'height' => 300,
						'mime-type' => 'image/jpg',
					),
					/* 240*260 */
					'portfolio-photo-thumb'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9OGZiUHcxM3pScTQ',
						'width' => 240, 
						'height' => 260,
						'mime-type' => 'image/jpg',
					)
				)
			),
			'12-product-description-1200.jpg' => array(
				'mime_type' 	=> 'image/jpg',
				'title'     	=> '12-product-description-1200.jpg',
				'url'     		=> 'https://drive.google.com/uc?id=0B5l8lO-CaKt9eXZrT2cwUktrVFk',
				'sizes' => array(
					/* 150*150 */
					'thumbnail'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9elc2ampYODgxOFU',
						'width' => 150, 
						'height' => 150,
						'mime-type' => 'image/jpg',
					),
					/* 300*300 */
					'medium'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9ODhhdU5DT3ZnSzQ',
						'width' => 172, 
						'height' => 300,
						'mime-type' => 'image/jpg',
					),
					/* 768*0 */
					'medium_large'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9aE10MzBTUUZ1ZXM',
						'width' => 825, 
						'height' => 510,
						'mime-type' => 'image/jpg',
					),
					/* 1024*1024 */
					'large'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9TExwczI1eDdxZG8',
						'width' => 587, 
						'height' => 1024,
						'mime-type' => 'image/jpg',
					),
					/* 280*300 */
					'portfolio-thumb'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9ek83d0NEUTVnbFE',
						'width' => 280, 
						'height' => 300,
						'mime-type' => 'image/jpg',
					),
					/* 240*260 */
					'portfolio-photo-thumb'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9NE9hR2JKNWhVc1E',
						'width' => 240, 
						'height' => 260,
						'mime-type' => 'image/jpg',
					)
				)
			),
			'17-blog-index-1200.jpg' => array(
				'mime_type' 	=> 'image/jpg',
				'title'     	=> '17-blog-index-1200.jpg',
				'url'     		=> 'https://drive.google.com/uc?id=0B5l8lO-CaKt9WDlDVG1xY25CTmc',
				'sizes' => array(
					/* 150*150 */
					'thumbnail'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9YVJ4dFFtTE1lREE',
						'width' => 150, 
						'height' => 150,
						'mime-type' => 'image/jpg',
					),
					/* 300*300 */
					'medium'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9RTZrd3RKLXJubG8',
						'width' => 151, 
						'height' => 300,
						'mime-type' => 'image/jpg',
					),
					/* 768*0 */
					'medium_large'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9OFg2RWZOSnlBdk0',
						'width' => 825, 
						'height' => 510,
						'mime-type' => 'image/jpg',
					),
					/* 1024*1024 */
					'large'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9bVhVT2dZVUtyNVU',
						'width' => 517, 
						'height' => 1024,
						'mime-type' => 'image/jpg',
					),
					/* 280*300 */
					'portfolio-thumb'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9d2pYdDExWnExV1E',
						'width' => 280, 
						'height' => 300,
						'mime-type' => 'image/jpg',
					),
					/* 240*260 */
					'portfolio-photo-thumb'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9SHM4bTd5MTJaWTQ',
						'width' => 240, 
						'height' => 260,
						'mime-type' => 'image/jpg',
					)
				)
			),
			'19-gallery-1200.jpg' => array(
				'mime_type' 	=> 'image/jpg',
				'title'     	=> '19-gallery-1200.jpg',
				'url'     		=> 'https://drive.google.com/uc?id=0B5l8lO-CaKt9QkJTVzdvU1BrUFk',
				'sizes' => array(
					/* 150*150 */
					'thumbnail'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9NFNWdzJzc1JmdVk',
						'width' => 150, 
						'height' => 150,
						'mime-type' => 'image/jpg',
					),
					/* 300*300 */
					'medium'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9TzB4UmlzMGhhek0',
						'width' => 190, 
						'height' => 300,
						'mime-type' => 'image/jpg',
					),
					/* 768*0 */
					'medium_large'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9VTNCdjRiMEpnZDQ',
						'width' => 825, 
						'height' => 510,
						'mime-type' => 'image/jpg',
					),
					/* 1024*1024 */
					'large'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9NkZxVFhtUzY2VFU',
						'width' => 648, 
						'height' => 1024,
						'mime-type' => 'image/jpg',
					),
					/* 280*300 */
					'portfolio-thumb'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9OE42clAzWE84OU0',
						'width' => 280, 
						'height' => 300,
						'mime-type' => 'image/jpg',
					),
					/* 240*260 */
					'portfolio-photo-thumb'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9dWd0bWRSci0ya1U',
						'width' => 240, 
						'height' => 260,
						'mime-type' => 'image/jpg',
					)
				)
			),
			/* taxi */
			'00-taxi-banner.jpg' => array(
				'mime_type' 	=> 'image/jpg',
				'title'     	=> '00-taxi-banner.jpg',
				'url'     		=> 'https://drive.google.com/uc?id=0B5l8lO-CaKt9dWNfMHppM2dHTWM',
				'sizes' => array(
					/* 150*150 */
					'thumbnail'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9dkszejQ5WjNVMWc',
						'width' => 150, 
						'height' => 150,
						'mime-type' => 'image/jpg',
					),
					/* 300*300 */
					'medium'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9eXd1UV94T1MxVW8',
						'width' => 300, 
						'height' => 153,
						'mime-type' => 'image/jpg',
					),
					/* 280*300 */
					'portfolio-thumb'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9OS0telFkWmlSSlk',
						'width' => 280, 
						'height' => 300,
						'mime-type' => 'image/jpg',
					),
					/* 240*260 */
					'portfolio-photo-thumb'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9X1E3UmtGbVR2YWs',
						'width' => 240, 
						'height' => 260,
						'mime-type' => 'image/jpg',
					)
				)
			),
			'01-taxi-home-1200.jpg' => array(
				'mime_type' 	=> 'image/jpg',
				'title'     	=> '01-taxi-home-1200.jpg',
				'url'     		=> 'https://drive.google.com/uc?id=0B5l8lO-CaKt9Rnc1NDBxRy1aYXc',
				'sizes' => array(
					/* 150*150 */
					'thumbnail'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9X1R3SnFZYWxjV1k',
						'width' => 150, 
						'height' => 150,
						'mime-type' => 'image/jpg',
					),
					/* 300*300 */
					'medium'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9OXBLNENyMmkwOW8',
						'width' => 92, 
						'height' => 300,
						'mime-type' => 'image/jpg',
					),
					/* 768*0 */
					'medium_large'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9VTM3RHBXemZfUUU',
						'width' => 825, 
						'height' => 510,
						'mime-type' => 'image/jpg',
					),
					/* 1024*1024 */
					'large'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9Y21DSkNESHdKUVE',
						'width' => 313, 
						'height' => 1024,
						'mime-type' => 'image/jpg',
					),
					/* 280*300 */
					'portfolio-thumb'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9Z3V4QTU0LXlKZ2s',
						'width' => 280, 
						'height' => 300,
						'mime-type' => 'image/jpg',
					),
					/* 240*260 */
					'portfolio-photo-thumb'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9SWdXR0FJVGpwaGM',
						'width' => 240, 
						'height' => 260,
						'mime-type' => 'image/jpg',
					)
				)
			),
			'02-booking-1200.jpg' => array(
				'mime_type' 	=> 'image/jpg',
				'title'     	=> '02-booking-1200.jpg',
				'url'     		=> 'https://drive.google.com/uc?id=0B5l8lO-CaKt9NVlKVVZ6S3l0cUE',
				'sizes' => array(
					/* 150*150 */
					'thumbnail'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9R05uelRxd3BzUUk',
						'width' => 150, 
						'height' => 150,
						'mime-type' => 'image/jpg',
					),
					/* 300*300 */
					'medium'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9amZYYXl1Q0lUTGM',
						'width' => 300, 
						'height' => 142,
						'mime-type' => 'image/jpg',
					),
					/* 768*0 */
					'medium_large'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9UlJndm54NzBIXzQ',
						'width' => 825, 
						'height' => 510,
						'mime-type' => 'image/jpg',
					),
					/* 1024*1024 */
					'large'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9MUVBWkV1ZlM3Wm8',
						'width' => 1024, 
						'height' => 485,
						'mime-type' => 'image/jpg',
					),
					/* 280*300 */
					'portfolio-thumb'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9b0k2OE85R2lnZEE',
						'width' => 280, 
						'height' => 300,
						'mime-type' => 'image/jpg',
					),
					/* 240*260 */
					'portfolio-photo-thumb'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9QVh2VWZXMUFJTlk',
						'width' => 240, 
						'height' => 260,
						'mime-type' => 'image/jpg',
					)
				)
			),
			'05-booking-details-1200.jpg' => array(
				'mime_type' 	=> 'image/jpg',
				'title'     	=> '05-booking-details-1200.jpg',
				'url'     		=> 'https://drive.google.com/uc?id=0B5l8lO-CaKt9MkJXRnIxZnFNYzA',
				'sizes' => array(
					/* 150*150 */
					'thumbnail'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9TExvVU84clJIUVk',
						'width' => 150, 
						'height' => 150,
						'mime-type' => 'image/jpg',
					),
					/* 300*300 */
					'medium'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9UmpZcTE2eDFmMFE',
						'width' => 300, 
						'height' => 142,
						'mime-type' => 'image/jpg',
					),
					/* 768*0 */
					'medium_large'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9bkZFT1QzVW5lMms',
						'width' => 825, 
						'height' => 510,
						'mime-type' => 'image/jpg',
					),
					/* 1024*1024 */
					'large'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9T1pLaEp4T25yY1U',
						'width' => 1024, 
						'height' => 485,
						'mime-type' => 'image/jpg',
					),
					/* 280*300 */
					'portfolio-thumb'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9NW1hSHZBMTk3MlU',
						'width' => 280, 
						'height' => 300,
						'mime-type' => 'image/jpg',
					),
					/* 240*260 */
					'portfolio-photo-thumb'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9VUE4T2VEWmRaQ0E',
						'width' => 240, 
						'height' => 260,
						'mime-type' => 'image/jpg',
					)
				)
			),
			'07-about-us-1200.jpg' => array(
				'mime_type' 	=> 'image/jpg',
				'title'     	=> '07-about-us-1200.jpg',
				'url'     		=> 'https://drive.google.com/uc?id=0B5l8lO-CaKt9NUhmdy14QWZmdEk',
				'sizes' => array(
					/* 150*150 */
					'thumbnail'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9dG1KYVMzY1JmaDg',
						'width' => 150, 
						'height' => 150,
						'mime-type' => 'image/jpg',
					),
					/* 300*300 */
					'medium'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9ODd2cEJBQ1NEcWs',
						'width' => 93, 
						'height' => 300,
						'mime-type' => 'image/jpg',
					),
					/* 768*0 */
					'medium_large'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9NFJ6RGJVZWxrTm8',
						'width' => 825, 
						'height' => 510,
						'mime-type' => 'image/jpg',
					),
					/* 1024*1024 */
					'large'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9aDhLbENkbmhQaVE',
						'width' => 317, 
						'height' => 1024,
						'mime-type' => 'image/jpg',
					),
					/* 280*300 */
					'portfolio-thumb'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9OVZXeVBmMVMtQXM',
						'width' => 280, 
						'height' => 300,
						'mime-type' => 'image/jpg',
					),
					/* 240*260 */
					'portfolio-photo-thumb'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9Uk9jNmZZUE96Y1E',
						'width' => 240, 
						'height' => 260,
						'mime-type' => 'image/jpg',
					)
				)
			),
			'08-services-1200.jpg' => array(
				'mime_type' 	=> 'image/jpg',
				'title'     	=> '08-services-1200.jpg',
				'url'     		=> 'https://drive.google.com/uc?id=0B5l8lO-CaKt9T0dwZnEwZXBRa2M',
				'sizes' => array(
					/* 150*150 */
					'thumbnail'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9b2poTHRlZ0NIeFU',
						'width' => 150, 
						'height' => 150,
						'mime-type' => 'image/jpg',
					),
					/* 300*300 */
					'medium'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9S2hLYVBPVGhaa00',
						'width' => 99, 
						'height' => 300,
						'mime-type' => 'image/jpg',
					),
					/* 768*0 */
					'medium_large'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9VWtnbHhZTzZjWUE',
						'width' => 825, 
						'height' => 510,
						'mime-type' => 'image/jpg',
					),
					/* 1024*1024 */
					'large'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9eGZrOWpKQTNOMk0',
						'width' => 336, 
						'height' => 1024,
						'mime-type' => 'image/jpg',
					),
					/* 280*300 */
					'portfolio-thumb'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9TFE3QlBxQXkwN1E',
						'width' => 280, 
						'height' => 300,
						'mime-type' => 'image/jpg',
					),
					/* 240*260 */
					'portfolio-photo-thumb'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9dDUyYlJoVlNRbHc',
						'width' => 240, 
						'height' => 260,
						'mime-type' => 'image/jpg',
					)
				)
			),
			'09-our-vehicle-1200.jpg' => array(
				'mime_type' 	=> 'image/jpg',
				'title'     	=> '09-our-vehicle-1200.jpg',
				'url'     		=> 'https://drive.google.com/uc?id=0B5l8lO-CaKt9RzZzdkc0TkZndTg',
				'sizes' => array(
					/* 150*150 */
					'thumbnail'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9OXBRRlVvM2h5UUU',
						'width' => 150, 
						'height' => 150,
						'mime-type' => 'image/jpg',
					),
					/* 300*300 */
					'medium'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9OHk0QkNDMHZGTXc',
						'width' => 146, 
						'height' => 300,
						'mime-type' => 'image/jpg',
					),
					/* 768*0 */
					'medium_large'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9bndRYjBRbGhOT3c',
						'width' => 825, 
						'height' => 510,
						'mime-type' => 'image/jpg',
					),
					/* 1024*1024 */
					'large'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9d1JPTFdiNmZqTUE',
						'width' => 500, 
						'height' => 1024,
						'mime-type' => 'image/jpg',
					),
					/* 280*300 */
					'portfolio-thumb'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9aGZ1d0RqTkIxTmc',
						'width' => 280, 
						'height' => 300,
						'mime-type' => 'image/jpg',
					),
					/* 240*260 */
					'portfolio-photo-thumb'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9V2pOV2U1MGM4UTg',
						'width' => 240, 
						'height' => 260,
						'mime-type' => 'image/jpg',
					)
				)
			),
			'11-our-drivers-1200.jpg' => array(
				'mime_type' 	=> 'image/jpg',
				'title'     	=> '11-our-drivers-1200.jpg',
				'url'     		=> 'https://drive.google.com/uc?id=0B5l8lO-CaKt9eU16SllrRGVLX2c',
				'sizes' => array(
					/* 150*150 */
					'thumbnail'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9NGZ1X1I1blViNDQ',
						'width' => 150, 
						'height' => 150,
						'mime-type' => 'image/jpg',
					),
					/* 300*300 */
					'medium'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9bjNpSC1oSG16MlU',
						'width' => 226, 
						'height' => 300,
						'mime-type' => 'image/jpg',
					),
					/* 768*0 */
					'medium_large'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9VFBFVi1CM2RFS0E',
						'width' => 825, 
						'height' => 510,
						'mime-type' => 'image/jpg',
					),
					/* 1024*1024 */
					'large'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9ME1CTVp1cDN3YUU',
						'width' => 773, 
						'height' => 1024,
						'mime-type' => 'image/jpg',
					),
					/* 280*300 */
					'portfolio-thumb'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9M3Zsc3ZsbXN5NHM',
						'width' => 280, 
						'height' => 300,
						'mime-type' => 'image/jpg',
					),
					/* 240*260 */
					'portfolio-photo-thumb'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9c2N6OG9ic0I2VW8',
						'width' => 240, 
						'height' => 260,
						'mime-type' => 'image/jpg',
					)
				)
			),
			'13-our-gallery-1200.jpg' => array(
				'mime_type' 	=> 'image/jpg',
				'title'     	=> '13-our-gallery-1200.jpg',
				'url'     		=> 'https://drive.google.com/uc?id=0B5l8lO-CaKt9YVZpYUpHbndpQWs',
				'sizes' => array(
					/* 150*150 */
					'thumbnail'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9MnFuQWR2NnB2UVk',
						'width' => 150, 
						'height' => 150,
						'mime-type' => 'image/jpg',
					),
					/* 300*300 */
					'medium'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9QlVqajJyVTV6Sms',
						'width' => 220, 
						'height' => 300,
						'mime-type' => 'image/jpg',
					),
					/* 768*0 */
					'medium_large'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9dkt2cUcyb0FudVU',
						'width' => 825, 
						'height' => 510,
						'mime-type' => 'image/jpg',
					),
					/* 1024*1024 */
					'large'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9bS1hdGREQTFweWM',
						'width' => 751, 
						'height' => 1024,
						'mime-type' => 'image/jpg',
					),
					/* 280*300 */
					'portfolio-thumb'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9RXh5YkRvNXFvSms',
						'width' => 280, 
						'height' => 300,
						'mime-type' => 'image/jpg',
					),
					/* 240*260 */
					'portfolio-photo-thumb'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9NkVDRFh1aTQwV2M',
						'width' => 240, 
						'height' => 260,
						'mime-type' => 'image/jpg',
					)
				)
			),
			'15-blog-index-1200.jpg' => array(
				'mime_type' 	=> 'image/jpg',
				'title'     	=> '15-blog-index-1200.jpg',
				'url'     		=> 'https://drive.google.com/uc?id=0B5l8lO-CaKt9d19fU3NxUWpjRnc',
				'sizes' => array(
					/* 150*150 */
					'thumbnail'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9Vlp1THRzWkxneXc',
						'width' => 150, 
						'height' => 150,
						'mime-type' => 'image/jpg',
					),
					/* 300*300 */
					'medium'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9NURDTmFqZUMxcU0',
						'width' => 150, 
						'height' => 300,
						'mime-type' => 'image/jpg',
					),
					/* 768*0 */
					'medium_large'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9Zk5Oa09meXpOVms',
						'width' => 825, 
						'height' => 510,
						'mime-type' => 'image/jpg',
					),
					/* 1024*1024 */
					'large'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9MVIxejZfWk5jSjQ',
						'width' => 512, 
						'height' => 1024,
						'mime-type' => 'image/jpg',
					),
					/* 280*300 */
					'portfolio-thumb'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9Z25tNEZkRXExYzA',
						'width' => 280, 
						'height' => 300,
						'mime-type' => 'image/jpg',
					),
					/* 240*260 */
					'portfolio-photo-thumb'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9T3FUR1FMY21qYU0',
						'width' => 240, 
						'height' => 260,
						'mime-type' => 'image/jpg',
					)
				)
			),
			/* hotel */
			'00-hotel-banner.jpg' => array(
				'mime_type' 	=> 'image/jpg',
				'title'     	=> '00-hotel-banner.jpg',
				'url'     		=> 'https://drive.google.com/uc?id=0B5l8lO-CaKt9Ti12cFlORUxoOGs',
				'sizes' => array(
					/* 150*150 */
					'thumbnail'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9NFZyeGdEUkJCQ1E',
						'width' => 150, 
						'height' => 150,
						'mime-type' => 'image/jpg',
					),
					/* 300*300 */
					'medium'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9ajJtcElWNGZ2Z2M',
						'width' => 300, 
						'height' => 153,
						'mime-type' => 'image/jpg',
					),
					/* 280*300 */
					'portfolio-thumb'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9MnpnZXV2cjk0Z28',
						'width' => 280, 
						'height' => 300,
						'mime-type' => 'image/jpg',
					),
					/* 240*260 */
					'portfolio-photo-thumb'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9OTVvRW9NU1lBa1E',
						'width' => 240, 
						'height' => 260,
						'mime-type' => 'image/jpg',
					)
				)
			),
			'01-hotel-home-1200.jpg' => array(
				'mime_type' 	=> 'image/jpg',
				'title'     	=> '01-hotel-home-1200.jpg',
				'url'     		=> 'https://drive.google.com/uc?id=0B5l8lO-CaKt9eW5GZUZwTFNOdlk',
				'sizes' => array(
					/* 150*150 */
					'thumbnail'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9SU1xdkU2RGFtM0E',
						'width' => 150, 
						'height' => 150,
						'mime-type' => 'image/jpg',
					),
					/* 300*300 */
					'medium'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9U0xJanJoV2hReXc',
						'width' => 123, 
						'height' => 300,
						'mime-type' => 'image/jpg',
					),
					/* 768*0 */
					'medium_large'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9MS1FQ0tBeVB5SlE',
						'width' => 825, 
						'height' => 510,
						'mime-type' => 'image/jpg',
					),
					/* 1024*1024 */
					'large'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9YjRYa3I4WHQ3SEU',
						'width' => 421, 
						'height' => 1024,
						'mime-type' => 'image/jpg',
					),
					/* 280*300 */
					'portfolio-thumb'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9b2RNVnRfWklGLWM',
						'width' => 280, 
						'height' => 300,
						'mime-type' => 'image/jpg',
					),
					/* 240*260 */
					'portfolio-photo-thumb'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9SXhjSlFlSFdZNDA',
						'width' => 240, 
						'height' => 260,
						'mime-type' => 'image/jpg',
					)
				)
			),
			'02-search-result-1200-grid-view-v1.jpg' => array(
				'mime_type' 	=> 'image/jpg',
				'title'     	=> '02-search-result-1200-grid-view-v1.jpg',
				'url'     		=> 'https://drive.google.com/uc?id=0B5l8lO-CaKt9dXlrNW5zT0hWMzg',
				'sizes' => array(
					/* 150*150 */
					'thumbnail'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9WEM3Qk5yMFVjRTQ',
						'width' => 150, 
						'height' => 150,
						'mime-type' => 'image/jpg',
					),
					/* 300*300 */
					'medium'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9ZjNjVlA0MVFvU0U',
						'width' => 224, 
						'height' => 300,
						'mime-type' => 'image/jpg',
					),
					/* 768*0 */
					'medium_large'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9ZUdsdkxVNzdvREU',
						'width' => 825, 
						'height' => 510,
						'mime-type' => 'image/jpg',
					),
					/* 1024*1024 */
					'large'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9MHpmM3pjWjRpc3M',
						'width' => 766, 
						'height' => 1024,
						'mime-type' => 'image/jpg',
					),
					/* 280*300 */
					'portfolio-thumb'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9R3NlUVdVNnpDWlU',
						'width' => 280, 
						'height' => 300,
						'mime-type' => 'image/jpg',
					),
					/* 240*260 */
					'portfolio-photo-thumb'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9bjJwWDhsbGVXQ2s',
						'width' => 240, 
						'height' => 260,
						'mime-type' => 'image/jpg',
					)
				)
			),
			'06-hotel-page-1200-gallery-and-description-view-v1.jpg' => array(
				'mime_type' 	=> 'image/jpg',
				'title'     	=> '06-hotel-page-1200-gallery-and-description-view-v1.jpg',
				'url'     		=> 'https://drive.google.com/uc?id=0B5l8lO-CaKt9TkFKZHdWUnhVajg',
				'sizes' => array(
					/* 150*150 */
					'thumbnail'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9SElDa3l6TWVkYms',
						'width' => 150, 
						'height' => 150,
						'mime-type' => 'image/jpg',
					),
					/* 300*300 */
					'medium'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9NTdaLVBBMlB3T0k',
						'width' => 246, 
						'height' => 300,
						'mime-type' => 'image/jpg',
					),
					/* 768*0 */
					'medium_large'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9RzVrYmcyR0hMdjQ',
						'width' => 825, 
						'height' => 510,
						'mime-type' => 'image/jpg',
					),
					/* 1024*1024 */
					'large'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9Ym4xRHVBaUlOY1k',
						'width' => 840, 
						'height' => 1024,
						'mime-type' => 'image/jpg',
					),
					/* 280*300 */
					'portfolio-thumb'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9dlV4VU9OT0MxcTQ',
						'width' => 280, 
						'height' => 300,
						'mime-type' => 'image/jpg',
					),
					/* 240*260 */
					'portfolio-photo-thumb'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9U1ZFT0o3UDRlV2M',
						'width' => 240, 
						'height' => 260,
						'mime-type' => 'image/jpg',
					)
				)
			),
			'07-hotel-page-1200-map-and-availability-view-v1.jpg' => array(
				'mime_type' 	=> 'image/jpg',
				'title'     	=> '07-hotel-page-1200-map-and-availability-view-v1.jpg',
				'url'     		=> 'https://drive.google.com/uc?id=0B5l8lO-CaKt9VGx2RHBsMlRRb1k',
				'sizes' => array(
					/* 150*150 */
					'thumbnail'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9T1Z2ajFnY19Ycnc',
						'width' => 150, 
						'height' => 150,
						'mime-type' => 'image/jpg',
					),
					/* 300*300 */
					'medium'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9OVFXWXdnS3JJb2M',
						'width' => 246, 
						'height' => 300,
						'mime-type' => 'image/jpg',
					),
					/* 768*0 */
					'medium_large'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9ZGswTTRXcmF6R00',
						'width' => 825, 
						'height' => 510,
						'mime-type' => 'image/jpg',
					),
					/* 1024*1024 */
					'large'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9YWpTcVlaSUNGLTg',
						'width' => 840, 
						'height' => 1024,
						'mime-type' => 'image/jpg',
					),
					/* 280*300 */
					'portfolio-thumb'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9ZWlLRldGZEZNWjA',
						'width' => 280, 
						'height' => 300,
						'mime-type' => 'image/jpg',
					),
					/* 240*260 */
					'portfolio-photo-thumb'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9V3VLUjNmaHJWUG8',
						'width' => 240, 
						'height' => 260,
						'mime-type' => 'image/jpg',
					)
				)
			),
			'12-room-page-1200.jpg' => array(
				'mime_type' 	=> 'image/jpg',
				'title'     	=> '12-room-page-1200.jpg',
				'url'     		=> 'https://drive.google.com/uc?id=0B5l8lO-CaKt9bFpGcWNqLVVvcXM',
				'sizes' => array(
					/* 150*150 */
					'thumbnail'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9Ti04RmJzWjZlRlE',
						'width' => 150, 
						'height' => 150,
						'mime-type' => 'image/jpg',
					),
					/* 300*300 */
					'medium'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9ZGpQbjdCY0lhb2M',
						'width' => 246, 
						'height' => 300,
						'mime-type' => 'image/jpg',
					),
					/* 768*0 */
					'medium_large'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9UzEyZC1ZNnRnQTQ',
						'width' => 825, 
						'height' => 510,
						'mime-type' => 'image/jpg',
					),
					/* 1024*1024 */
					'large'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9Y25GVnEwMDE5aUk',
						'width' => 840, 
						'height' => 1024,
						'mime-type' => 'image/jpg',
					),
					/* 280*300 */
					'portfolio-thumb'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9UElmSkpxY2doWjA',
						'width' => 280, 
						'height' => 300,
						'mime-type' => 'image/jpg',
					),
					/* 240*260 */
					'portfolio-photo-thumb'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9dndQc0hoZE5BOFk',
						'width' => 240, 
						'height' => 260,
						'mime-type' => 'image/jpg',
					)
				)
			),
			'13-search-rooms-1200.jpg' => array(
				'mime_type' 	=> 'image/jpg',
				'title'     	=> '13-search-rooms-1200.jpg',
				'url'     		=> 'https://drive.google.com/uc?id=0B5l8lO-CaKt9bWlJOVlkeXVqczg',
				'sizes' => array(
					/* 150*150 */
					'thumbnail'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9WTdCa2dzTWdEZHc',
						'width' => 150, 
						'height' => 150,
						'mime-type' => 'image/jpg',
					),
					/* 300*300 */
					'medium'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9eWZVei16UzBTNkE',
						'width' => 243, 
						'height' => 300,
						'mime-type' => 'image/jpg',
					),
					/* 768*0 */
					'medium_large'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9eG96NDY0RENLc1U',
						'width' => 825, 
						'height' => 510,
						'mime-type' => 'image/jpg',
					),
					/* 1024*1024 */
					'large'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9ZFZyM1NmeUtYRVE',
						'width' => 829, 
						'height' => 1024,
						'mime-type' => 'image/jpg',
					),
					/* 280*300 */
					'portfolio-thumb'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9UjRKcTRlNzVjbVE',
						'width' => 280, 
						'height' => 300,
						'mime-type' => 'image/jpg',
					),
					/* 240*260 */
					'portfolio-photo-thumb'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9NE1oYXVyUnczQ28',
						'width' => 240, 
						'height' => 260,
						'mime-type' => 'image/jpg',
					)
				)
			),
			'14-payment-1200.jpg' => array(
				'mime_type' 	=> 'image/jpg',
				'title'     	=> '14-payment-1200.jpg',
				'url'     		=> 'https://drive.google.com/uc?id=0B5l8lO-CaKt9bjBIdTJQV1pXdEk',
				'sizes' => array(
					/* 150*150 */
					'thumbnail'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9bGRNRVFoT0g4NVU',
						'width' => 150, 
						'height' => 150,
						'mime-type' => 'image/jpg',
					),
					/* 300*300 */
					'medium'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9UW0xV002dzFfSGM',
						'width' => 127, 
						'height' => 300,
						'mime-type' => 'image/jpg',
					),
					/* 768*0 */
					'medium_large'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9TkJMdGdPTS1oZkE',
						'width' => 825, 
						'height' => 510,
						'mime-type' => 'image/jpg',
					),
					/* 1024*1024 */
					'large'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9bkhRSUJaeUY1bkU',
						'width' => 434, 
						'height' => 1024,
						'mime-type' => 'image/jpg',
					),
					/* 280*300 */
					'portfolio-thumb'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9NTZ6RVZkU0NtQk0',
						'width' => 280, 
						'height' => 300,
						'mime-type' => 'image/jpg',
					),
					/* 240*260 */
					'portfolio-photo-thumb'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9RTZxcWRzcGJ0MXM',
						'width' => 240, 
						'height' => 260,
						'mime-type' => 'image/jpg',
					)
				)
			),
			'16-blog-index-1200.jpg' => array(
				'mime_type' 	=> 'image/jpg',
				'title'     	=> '16-blog-index-1200.jpg',
				'url'     		=> 'https://drive.google.com/uc?id=0B5l8lO-CaKt9YVlldzdEZE01eUE',
				'sizes' => array(
					/* 150*150 */
					'thumbnail'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9cjRKQUdNdzBNYTg',
						'width' => 150, 
						'height' => 150,
						'mime-type' => 'image/jpg',
					),
					/* 300*300 */
					'medium'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9aDVva1AtcThLWkU',
						'width' => 96, 
						'height' => 300,
						'mime-type' => 'image/jpg',
					),
					/* 768*0 */
					'medium_large'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9SGh5NExELVJxdWc',
						'width' => 825, 
						'height' => 510,
						'mime-type' => 'image/jpg',
					),
					/* 1024*1024 */
					'large'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9bzdTRkhLSUtuSms',
						'width' => 329, 
						'height' => 1024,
						'mime-type' => 'image/jpg',
					),
					/* 280*300 */
					'portfolio-thumb'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9emZkRGhMUzZOeHM',
						'width' => 280, 
						'height' => 300,
						'mime-type' => 'image/jpg',
					),
					/* 240*260 */
					'portfolio-photo-thumb'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9eFVXaTB0MHNaTW8',
						'width' => 240, 
						'height' => 260,
						'mime-type' => 'image/jpg',
					)
				)
			),
			'28-about-us-1200.jpg' => array(
				'mime_type' 	=> 'image/jpg',
				'title'     	=> '28-about-us-1200.jpg',
				'url'     		=> 'https://drive.google.com/uc?id=0B5l8lO-CaKt9Y2dMODNfaFBSMjg',
				'sizes' => array(
					/* 150*150 */
					'thumbnail'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9SENkd0tKMDg1T0U',
						'width' => 150, 
						'height' => 150,
						'mime-type' => 'image/jpg',
					),
					/* 300*300 */
					'medium'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9QTJjQzFGODNmNG8',
						'width' => 187, 
						'height' => 300,
						'mime-type' => 'image/jpg',
					),
					/* 768*0 */
					'medium_large'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9WWlZTXNiaXpVZ1E',
						'width' => 825, 
						'height' => 510,
						'mime-type' => 'image/jpg',
					),
					/* 1024*1024 */
					'large'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9aGNESTRRQ3FkQ00',
						'width' => 637, 
						'height' => 1024,
						'mime-type' => 'image/jpg',
					),
					/* 240*260 */
					'portfolio-photo-thumb'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9ZnFMR19vUHVXUE0',
						'width' => 240, 
						'height' => 260,
						'mime-type' => 'image/jpg',
					)
				)
			),
			/* bike */
			'00-bike-banner.jpg' => array(
				'mime_type' 	=> 'image/jpg',
				'title'     	=> '00-bike-banner.jpg',
				'url'     		=> 'https://drive.google.com/uc?id=0B5l8lO-CaKt9MUU5REc0Y3FSVVE',
				'sizes' => array(
					/* 150*150 */
					'thumbnail'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9WmZoS2hCWjVfa0E',
						'width' => 150, 
						'height' => 150,
						'mime-type' => 'image/jpg',
					),
					/* 300*300 */
					'medium'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9bkRLS0xjMnd2YXM',
						'width' => 300, 
						'height' => 153,
						'mime-type' => 'image/jpg',
					),
					/* 280*300 */
					'portfolio-thumb'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9RHhjbkxSZElZeTA',
						'width' => 280, 
						'height' => 300,
						'mime-type' => 'image/jpg',
					),
					/* 240*260 */
					'portfolio-photo-thumb'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9czBBOF9WX3B2Skk',
						'width' => 240, 
						'height' => 260,
						'mime-type' => 'image/jpg',
					)
				)
			),
			'01-bike-home-v1-1200.jpg' => array(
				'mime_type' 	=> 'image/jpg',
				'title'     	=> '01-bike-home-v1-1200.jpg',
				'url'     		=> 'https://drive.google.com/uc?id=0B5l8lO-CaKt9TEE3NlBrWnBzREE',
				'sizes' => array(
					/* 150*150 */
					'thumbnail'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9MFpQY0ttazlQM1k',
						'width' => 150, 
						'height' => 150,
						'mime-type' => 'image/jpg',
					),
					/* 300*300 */
					'medium'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9aTFXeFEzWDFjeTA',
						'width' => 63, 
						'height' => 300,
						'mime-type' => 'image/jpg',
					),
					/* 768*0 */
					'medium_large'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9OWQ0T1M4QUJ0WXc',
						'width' => 825, 
						'height' => 510,
						'mime-type' => 'image/jpg',
					),
					/* 1024*1024 */
					'large'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9TU9oN0htdEhrSTg',
						'width' => 215, 
						'height' => 1024,
						'mime-type' => 'image/jpg',
					),
					/* 280*300 */
					'portfolio-thumb'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9bEJpSHl0a1dFcEE',
						'width' => 280, 
						'height' => 300,
						'mime-type' => 'image/jpg',
					),
					/* 240*260 */
					'portfolio-photo-thumb'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9ZWtTY1c1Ulk0bkE',
						'width' => 240, 
						'height' => 260,
						'mime-type' => 'image/jpg',
					)
				)
			),
			'05-activity-select-1200.jpg' => array(
				'mime_type' 	=> 'image/jpg',
				'title'     	=> '05-activity-select-1200.jpg',
				'url'     		=> 'https://drive.google.com/uc?id=0B5l8lO-CaKt9emJjN05fR1g4X00',
				'sizes' => array(
					/* 150*150 */
					'thumbnail'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9a25WSHdoSzJJYkk',
						'width' => 150, 
						'height' => 150,
						'mime-type' => 'image/jpg',
					),
					/* 300*300 */
					'medium'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9bHg3NnhKd0MwMk0',
						'width' => 300, 
						'height' => 167,
						'mime-type' => 'image/jpg',
					),
					/* 768*0 */
					'medium_large'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9SzlSa2d6VzRfbUE',
						'width' => 825, 
						'height' => 510,
						'mime-type' => 'image/jpg',
					),
					/* 1024*1024 */
					'large'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9ZmU0ZXdZNW94VlU',
						'width' => 1024, 
						'height' => 569,
						'mime-type' => 'image/jpg',
					),
					/* 280*300 */
					'portfolio-thumb'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9VzdnaG9BUDJheEU',
						'width' => 280, 
						'height' => 300,
						'mime-type' => 'image/jpg',
					),
					/* 240*260 */
					'portfolio-photo-thumb'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9NnROb0R3UXo5VFU',
						'width' => 240, 
						'height' => 260,
						'mime-type' => 'image/jpg',
					)
				)
			),
			'10-bike-extras-1200.jpg' => array(
				'mime_type' 	=> 'image/jpg',
				'title'     	=> '10-bike-extras-1200.jpg',
				'url'     		=> 'https://drive.google.com/uc?id=0B5l8lO-CaKt9cXUta184SnlNaFk',
				'sizes' => array(
					/* 150*150 */
					'thumbnail'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9SUJERE9xdWI2VDg',
						'width' => 150, 
						'height' => 150,
						'mime-type' => 'image/jpg',
					),
					/* 300*300 */
					'medium'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9Zm9KdFlkcEZOWFU',
						'width' => 300, 
						'height' => 198,
						'mime-type' => 'image/jpg',
					),
					/* 768*0 */
					'medium_large'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9WjJjdHZ4QzBhNnM',
						'width' => 825, 
						'height' => 510,
						'mime-type' => 'image/jpg',
					),
					/* 1024*1024 */
					'large'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9alpVYkFRWXIzc0E',
						'width' => 1024, 
						'height' => 676,
						'mime-type' => 'image/jpg',
					),
					/* 280*300 */
					'portfolio-thumb'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9Ymx4WXpOaXRpd28',
						'width' => 280, 
						'height' => 300,
						'mime-type' => 'image/jpg',
					),
					/* 240*260 */
					'portfolio-photo-thumb'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9YnRBVURjdU1BU28',
						'width' => 240, 
						'height' => 260,
						'mime-type' => 'image/jpg',
					)
				)
			),
			'13-tour-select-1200.jpg' => array(
				'mime_type' 	=> 'image/jpg',
				'title'     	=> '13-tour-select-1200.jpg',
				'url'     		=> 'https://drive.google.com/uc?id=0B5l8lO-CaKt9WDRIQXc2cDB0SlE',
				'sizes' => array(
					/* 150*150 */
					'thumbnail'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9ME1Lay1CVVk0dHc',
						'width' => 150, 
						'height' => 150,
						'mime-type' => 'image/jpg',
					),
					/* 300*300 */
					'medium'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9UVRDYUVBNEx5NWs',
						'width' => 300, 
						'height' => 167,
						'mime-type' => 'image/jpg',
					),
					/* 768*0 */
					'medium_large'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9alZybFhMQWotTUk',
						'width' => 825, 
						'height' => 510,
						'mime-type' => 'image/jpg',
					),
					/* 1024*1024 */
					'large'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9cXlmTUF4Mk0xc0U',
						'width' => 1024, 
						'height' => 569,
						'mime-type' => 'image/jpg',
					),
					/* 280*300 */
					'portfolio-thumb'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9THltRm9TV0JHM00',
						'width' => 280, 
						'height' => 300,
						'mime-type' => 'image/jpg',
					),
					/* 240*260 */
					'portfolio-photo-thumb'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9djNfQlZBSTJ2SzQ',
						'width' => 240, 
						'height' => 260,
						'mime-type' => 'image/jpg',
					)
				)
			),
			'17-cart-1200.jpg' => array(
				'mime_type' 	=> 'image/jpg',
				'title'     	=> '17-cart-1200.jpg',
				'url'     		=> 'https://drive.google.com/uc?id=0B5l8lO-CaKt9eWgxZGFrRXRnZFk',
				'sizes' => array(
					/* 150*150 */
					'thumbnail'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9TUllSlJzMWNNU0U',
						'width' => 150, 
						'height' => 150,
						'mime-type' => 'image/jpg',
					),
					/* 300*300 */
					'medium'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9eWFYTzJGS1pGSnc',
						'width' => 97, 
						'height' => 300,
						'mime-type' => 'image/jpg',
					),
					/* 768*0 */
					'medium_large'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9RTlxUVlYVC1QRHM',
						'width' => 825, 
						'height' => 510,
						'mime-type' => 'image/jpg',
					),
					/* 1024*1024 */
					'large'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9SnJtdXNSakxUNkk',
						'width' => 331, 
						'height' => 1024,
						'mime-type' => 'image/jpg',
					),
					/* 280*300 */
					'portfolio-thumb'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9bDVIQ2tYRlN1ZFk',
						'width' => 280, 
						'height' => 300,
						'mime-type' => 'image/jpg',
					),
					/* 240*260 */
					'portfolio-photo-thumb'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9enRvMVBCQlI0UWM',
						'width' => 240, 
						'height' => 260,
						'mime-type' => 'image/jpg',
					)
				)
			),
			'20-about-us-1200.jpg' => array(
				'mime_type' 	=> 'image/jpg',
				'title'     	=> '20-about-us-1200.jpg',
				'url'     		=> 'https://drive.google.com/uc?id=0B5l8lO-CaKt9ckFHS1c1SUo3c2M',
				'sizes' => array(
					/* 150*150 */
					'thumbnail'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9eDlQVXNSUWZCNVE',
						'width' => 150, 
						'height' => 150,
						'mime-type' => 'image/jpg',
					),
					/* 300*300 */
					'medium'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9R0xvNlU2d25hSzA',
						'width' => 77, 
						'height' => 300,
						'mime-type' => 'image/jpg',
					),
					/* 768*0 */
					'medium_large'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9T1lOVEhEdGhZWVE',
						'width' => 825, 
						'height' => 510,
						'mime-type' => 'image/jpg',
					),
					/* 1024*1024 */
					'large'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9cXhZYU1vMUZYa2M',
						'width' => 263, 
						'height' => 1024,
						'mime-type' => 'image/jpg',
					),
					/* 280*300 */
					'portfolio-thumb'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9TWg3ejNTaUVWRE0',
						'width' => 280, 
						'height' => 300,
						'mime-type' => 'image/jpg',
					),
					/* 240*260 */
					'portfolio-photo-thumb'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9RUotdWljVUZKSVU',
						'width' => 240, 
						'height' => 260,
						'mime-type' => 'image/jpg',
					)
				)
			),
			'26-gallery-3-col-1200.jpg' => array(
				'mime_type' 	=> 'image/jpg',
				'title'     	=> '26-gallery-3-col-1200.jpg',
				'url'     		=> 'https://drive.google.com/uc?id=0B5l8lO-CaKt9VHo0Q1JKTlFkUW8',
				'sizes' => array(
					/* 150*150 */
					'thumbnail'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9QURmSnpxbXM3WHc',
						'width' => 150, 
						'height' => 150,
						'mime-type' => 'image/jpg',
					),
					/* 300*300 */
					'medium'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9TnBDRjNpekZxd2s',
						'width' => 300, 
						'height' => 176,
						'mime-type' => 'image/jpg',
					),
					/* 768*0 */
					'medium_large'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9bmJmTHVIYnNyQ1E',
						'width' => 825, 
						'height' => 510,
						'mime-type' => 'image/jpg',
					),
					/* 1024*1024 */
					'large'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9MlZIMF9UcnhPbFk',
						'width' => 1024, 
						'height' => 600,
						'mime-type' => 'image/jpg',
					),
					/* 280*300 */
					'portfolio-thumb'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9VE9UbmRqM056YnM',
						'width' => 280, 
						'height' => 300,
						'mime-type' => 'image/jpg',
					),
					/* 240*260 */
					'portfolio-photo-thumb'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9Umo2b1pUTThwcFk',
						'width' => 240, 
						'height' => 260,
						'mime-type' => 'image/jpg',
					)
				)
			),
			'40-header-menu-called-1200.jpg' => array(
				'mime_type' 	=> 'image/jpg',
				'title'     	=> '40-header-menu-called-1200.jpg',
				'url'     		=> 'https://drive.google.com/uc?id=0B5l8lO-CaKt9bzJwX3dOT05vT2c',
				'sizes' => array(
					/* 150*150 */
					'thumbnail'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9LW1vTWxwRGpIUU0',
						'width' => 150, 
						'height' => 150,
						'mime-type' => 'image/jpg',
					),
					/* 300*300 */
					'medium'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9M0x6NFNNaWhUWWM',
						'width' => 300, 
						'height' => 167,
						'mime-type' => 'image/jpg',
					),
					/* 768*0 */
					'medium_large'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9RXB5WlJ0MVlqS00',
						'width' => 825, 
						'height' => 510,
						'mime-type' => 'image/jpg',
					),
					/* 1024*1024 */
					'large'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9WjN0eng1UEVVd3c',
						'width' => 1024, 
						'height' => 569,
						'mime-type' => 'image/jpg',
					),
					/* 280*300 */
					'portfolio-thumb'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9ZnNIREhlbldyZTQ',
						'width' => 280, 
						'height' => 300,
						'mime-type' => 'image/jpg',
					),
					/* 240*260 */
					'portfolio-photo-thumb'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9UWNIM0t6M2lUNnM',
						'width' => 240, 
						'height' => 260,
						'mime-type' => 'image/jpg',
					)
				)
			),
			'48-header-cart-called-1200.jpg' => array(
				'mime_type' 	=> 'image/jpg',
				'title'     	=> '48-header-cart-called-1200.jpg',
				'url'     		=> 'https://drive.google.com/uc?id=0B5l8lO-CaKt9YTFMa1FtZGRhYnc',
				'sizes' => array(
					/* 150*150 */
					'thumbnail'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9TWdjUzZwV3JIaGs',
						'width' => 150, 
						'height' => 150,
						'mime-type' => 'image/jpg',
					),
					/* 300*300 */
					'medium'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9WVNtRF9tOGs0TDA',
						'width' => 300, 
						'height' => 167,
						'mime-type' => 'image/jpg',
					),
					/* 768*0 */
					'medium_large'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9aWxtZDNXSEFLY0U',
						'width' => 825, 
						'height' => 510,
						'mime-type' => 'image/jpg',
					),
					/* 1024*1024 */
					'large'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9bml4UmdrOTVfalk',
						'width' => 1024, 
						'height' => 569,
						'mime-type' => 'image/jpg',
					),
					/* 280*300 */
					'portfolio-thumb'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9d09GWnczUjNmZE0',
						'width' => 280, 
						'height' => 300,
						'mime-type' => 'image/jpg',
					),
					/* 240*260 */
					'portfolio-photo-thumb'  => array(
						'file' => 'uc?id=0B5l8lO-CaKt9WjNmak5tUjROc2M',
						'width' => 240, 
						'height' => 260,
						'mime-type' => 'image/jpg',
					)
				)
			)
		);

		return array( 
			'posts'							=> $posts, 
			'terms'  						=> $terms,
			'distant_attachments_metadata'	=> $distant_attachments_metadata
		);
	}
}