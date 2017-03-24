<?php
/* ------------------------------------------------------------------------- *
 *  Icons API
 *	____________
 *
 *	We created a little function in case FontAwesome gets updated.
 *	Updates are made via Framework Update.
/* ------------------------------------------------------------------------- */



/*  Echo or return an icon.
/*	You only need the icon's name witout "fa-" prefix.
/*	Example ac_icon( "play" );
/*	Set the second parameter to false to return the icon.
/*	Example ac_icon( "play", false );
/* ------------------------------------------------------------------------- */
function ac_icon( $icon = '', $output = true ) {
	if($icon != '') {
		if( $output ) { 
			echo '<i class="fa fa-' . esc_attr( $icon ) . '"></i> ';
		} else {
			return '<i class="fa fa-' . esc_attr( $icon ) . '"></i> ';
		}
	}
	return;
}



/*  In case we're working with loops
/* ------------------------------------ */
function ac_icon_output( $icon = '' ) {
	global $post, $ac_icons;
	$icon_info = get_post_meta( $post->ID, $icon, true );
	if($icon_info != '') { 
		echo '<i class="fa fa-' . esc_attr( $icon_info ) .'"></i> ';
	}
	return;
}



//  -- List of icons
$ac_icons = array(array('name' => '500px', 'value' => 'fa-500px'), array('name' => 'Adjust', 'value' => 'fa-adjust'), array('name' => 'Adn', 'value' => 'fa-adn'), array('name' => 'Align Center', 'value' => 'fa-align-center'), array('name' => 'Align Justify', 'value' => 'fa-align-justify'), array('name' => 'Align Left', 'value' => 'fa-align-left'), array('name' => 'Align Right', 'value' => 'fa-align-right'), array('name' => 'Amazon', 'value' => 'fa-amazon'), array('name' => 'Ambulance', 'value' => 'fa-ambulance'), array('name' => 'Anchor', 'value' => 'fa-anchor'), array('name' => 'Android', 'value' => 'fa-android'), array('name' => 'Angellist', 'value' => 'fa-angellist'), array('name' => 'Angle Double Down', 'value' => 'fa-angle-double-down'), array('name' => 'Angle Double Left', 'value' => 'fa-angle-double-left'), array('name' => 'Angle Double Right', 'value' => 'fa-angle-double-right'), array('name' => 'Angle Double Up', 'value' => 'fa-angle-double-up'), array('name' => 'Angle Down', 'value' => 'fa-angle-down'), array('name' => 'Angle Left', 'value' => 'fa-angle-left'), array('name' => 'Angle Right', 'value' => 'fa-angle-right'), array('name' => 'Angle Up', 'value' => 'fa-angle-up'), array('name' => 'Apple', 'value' => 'fa-apple'), array('name' => 'Archive', 'value' => 'fa-archive'), array('name' => 'Area Chart', 'value' => 'fa-area-chart'), array('name' => 'Arrow Circle Down', 'value' => 'fa-arrow-circle-down'), array('name' => 'Arrow Circle Left', 'value' => 'fa-arrow-circle-left'), array('name' => 'Arrow Circle O Down', 'value' => 'fa-arrow-circle-o-down'), array('name' => 'Arrow Circle O Left', 'value' => 'fa-arrow-circle-o-left'), array('name' => 'Arrow Circle O Right', 'value' => 'fa-arrow-circle-o-right'), array('name' => 'Arrow Circle O Up', 'value' => 'fa-arrow-circle-o-up'), array('name' => 'Arrow Circle Right', 'value' => 'fa-arrow-circle-right'), array('name' => 'Arrow Circle Up', 'value' => 'fa-arrow-circle-up'), array('name' => 'Arrow Down', 'value' => 'fa-arrow-down'), array('name' => 'Arrow Left', 'value' => 'fa-arrow-left'), array('name' => 'Arrow Right', 'value' => 'fa-arrow-right'), array('name' => 'Arrow Up', 'value' => 'fa-arrow-up'), array('name' => 'Arrows', 'value' => 'fa-arrows'), array('name' => 'Arrows Alt', 'value' => 'fa-arrows-alt'), array('name' => 'Arrows H', 'value' => 'fa-arrows-h'), array('name' => 'Arrows V', 'value' => 'fa-arrows-v'), array('name' => 'Asterisk', 'value' => 'fa-asterisk'), array('name' => 'At', 'value' => 'fa-at'), array('name' => 'Automobile', 'value' => 'fa-automobile'), array('name' => 'Backward', 'value' => 'fa-backward'), array('name' => 'Balance Scale', 'value' => 'fa-balance-scale'), array('name' => 'Ban', 'value' => 'fa-ban'), array('name' => 'Bank', 'value' => 'fa-bank'), array('name' => 'Bar Chart', 'value' => 'fa-bar-chart'), array('name' => 'Bar Chart O', 'value' => 'fa-bar-chart-o'), array('name' => 'Barcode', 'value' => 'fa-barcode'), array('name' => 'Bars', 'value' => 'fa-bars'), array('name' => 'Battery 0', 'value' => 'fa-battery-0'), array('name' => 'Battery 1', 'value' => 'fa-battery-1'), array('name' => 'Battery 2', 'value' => 'fa-battery-2'), array('name' => 'Battery 3', 'value' => 'fa-battery-3'), array('name' => 'Battery 4', 'value' => 'fa-battery-4'), array('name' => 'Battery Empty', 'value' => 'fa-battery-empty'), array('name' => 'Battery Full', 'value' => 'fa-battery-full'), array('name' => 'Battery Half', 'value' => 'fa-battery-half'), array('name' => 'Battery Quarter', 'value' => 'fa-battery-quarter'), array('name' => 'Battery Three Quarters', 'value' => 'fa-battery-three-quarters'), array('name' => 'Bed', 'value' => 'fa-bed'), array('name' => 'Beer', 'value' => 'fa-beer'), array('name' => 'Behance', 'value' => 'fa-behance'), array('name' => 'Behance Square', 'value' => 'fa-behance-square'), array('name' => 'Bell', 'value' => 'fa-bell'), array('name' => 'Bell O', 'value' => 'fa-bell-o'), array('name' => 'Bell Slash', 'value' => 'fa-bell-slash'), array('name' => 'Bell Slash O', 'value' => 'fa-bell-slash-o'), array('name' => 'Bicycle', 'value' => 'fa-bicycle'), array('name' => 'Binoculars', 'value' => 'fa-binoculars'), array('name' => 'Birthday Cake', 'value' => 'fa-birthday-cake'), array('name' => 'Bitbucket', 'value' => 'fa-bitbucket'), array('name' => 'Bitbucket Square', 'value' => 'fa-bitbucket-square'), array('name' => 'Bitcoin', 'value' => 'fa-bitcoin'), array('name' => 'Black Tie', 'value' => 'fa-black-tie'), array('name' => 'Bold', 'value' => 'fa-bold'), array('name' => 'Bolt', 'value' => 'fa-bolt'), array('name' => 'Bomb', 'value' => 'fa-bomb'), array('name' => 'Book', 'value' => 'fa-book'), array('name' => 'Bookmark', 'value' => 'fa-bookmark'), array('name' => 'Bookmark O', 'value' => 'fa-bookmark-o'), array('name' => 'Briefcase', 'value' => 'fa-briefcase'), array('name' => 'Btc', 'value' => 'fa-btc'), array('name' => 'Bug', 'value' => 'fa-bug'), array('name' => 'Building', 'value' => 'fa-building'), array('name' => 'Building O', 'value' => 'fa-building-o'), array('name' => 'Bullhorn', 'value' => 'fa-bullhorn'), array('name' => 'Bullseye', 'value' => 'fa-bullseye'), array('name' => 'Bus', 'value' => 'fa-bus'), array('name' => 'Buysellads', 'value' => 'fa-buysellads'), array('name' => 'Cab', 'value' => 'fa-cab'), array('name' => 'Calculator', 'value' => 'fa-calculator'), array('name' => 'Calendar', 'value' => 'fa-calendar'), array('name' => 'Calendar Check O', 'value' => 'fa-calendar-check-o'), array('name' => 'Calendar Minus O', 'value' => 'fa-calendar-minus-o'), array('name' => 'Calendar O', 'value' => 'fa-calendar-o'), array('name' => 'Calendar Plus O', 'value' => 'fa-calendar-plus-o'), array('name' => 'Calendar Times O', 'value' => 'fa-calendar-times-o'), array('name' => 'Camera', 'value' => 'fa-camera'), array('name' => 'Camera Retro', 'value' => 'fa-camera-retro'), array('name' => 'Car', 'value' => 'fa-car'), array('name' => 'Caret Down', 'value' => 'fa-caret-down'), array('name' => 'Caret Left', 'value' => 'fa-caret-left'), array('name' => 'Caret Right', 'value' => 'fa-caret-right'), array('name' => 'Caret Square O Down', 'value' => 'fa-caret-square-o-down'), array('name' => 'Caret Square O Left', 'value' => 'fa-caret-square-o-left'), array('name' => 'Caret Square O Right', 'value' => 'fa-caret-square-o-right'), array('name' => 'Caret Square O Up', 'value' => 'fa-caret-square-o-up'), array('name' => 'Caret Up', 'value' => 'fa-caret-up'), array('name' => 'Cart Arrow Down', 'value' => 'fa-cart-arrow-down'), array('name' => 'Cart Plus', 'value' => 'fa-cart-plus'), array('name' => 'Cc', 'value' => 'fa-cc'), array('name' => 'Cc Amex', 'value' => 'fa-cc-amex'), array('name' => 'Cc Diners Club', 'value' => 'fa-cc-diners-club'), array('name' => 'Cc Discover', 'value' => 'fa-cc-discover'), array('name' => 'Cc Jcb', 'value' => 'fa-cc-jcb'), array('name' => 'Cc Mastercard', 'value' => 'fa-cc-mastercard'), array('name' => 'Cc Paypal', 'value' => 'fa-cc-paypal'), array('name' => 'Cc Stripe', 'value' => 'fa-cc-stripe'), array('name' => 'Cc Visa', 'value' => 'fa-cc-visa'), array('name' => 'Certificate', 'value' => 'fa-certificate'), array('name' => 'Chain', 'value' => 'fa-chain'), array('name' => 'Chain Broken', 'value' => 'fa-chain-broken'), array('name' => 'Check', 'value' => 'fa-check'), array('name' => 'Check Circle', 'value' => 'fa-check-circle'), array('name' => 'Check Circle O', 'value' => 'fa-check-circle-o'), array('name' => 'Check Square', 'value' => 'fa-check-square'), array('name' => 'Check Square O', 'value' => 'fa-check-square-o'), array('name' => 'Chevron Circle Down', 'value' => 'fa-chevron-circle-down'), array('name' => 'Chevron Circle Left', 'value' => 'fa-chevron-circle-left'), array('name' => 'Chevron Circle Right', 'value' => 'fa-chevron-circle-right'), array('name' => 'Chevron Circle Up', 'value' => 'fa-chevron-circle-up'), array('name' => 'Chevron Down', 'value' => 'fa-chevron-down'), array('name' => 'Chevron Left', 'value' => 'fa-chevron-left'), array('name' => 'Chevron Right', 'value' => 'fa-chevron-right'), array('name' => 'Chevron Up', 'value' => 'fa-chevron-up'), array('name' => 'Child', 'value' => 'fa-child'), array('name' => 'Chrome', 'value' => 'fa-chrome'), array('name' => 'Circle', 'value' => 'fa-circle'), array('name' => 'Circle O', 'value' => 'fa-circle-o'), array('name' => 'Circle O Notch', 'value' => 'fa-circle-o-notch'), array('name' => 'Circle Thin', 'value' => 'fa-circle-thin'), array('name' => 'Clipboard', 'value' => 'fa-clipboard'), array('name' => 'Clock O', 'value' => 'fa-clock-o'), array('name' => 'Clone', 'value' => 'fa-clone'), array('name' => 'Close', 'value' => 'fa-close'), array('name' => 'Cloud', 'value' => 'fa-cloud'), array('name' => 'Cloud Download', 'value' => 'fa-cloud-download'), array('name' => 'Cloud Upload', 'value' => 'fa-cloud-upload'), array('name' => 'Cny', 'value' => 'fa-cny'), array('name' => 'Code', 'value' => 'fa-code'), array('name' => 'Code Fork', 'value' => 'fa-code-fork'), array('name' => 'Codepen', 'value' => 'fa-codepen'), array('name' => 'Coffee', 'value' => 'fa-coffee'), array('name' => 'Cog', 'value' => 'fa-cog'), array('name' => 'Cogs', 'value' => 'fa-cogs'), array('name' => 'Columns', 'value' => 'fa-columns'), array('name' => 'Comment', 'value' => 'fa-comment'), array('name' => 'Comment O', 'value' => 'fa-comment-o'), array('name' => 'Commenting', 'value' => 'fa-commenting'), array('name' => 'Commenting O', 'value' => 'fa-commenting-o'), array('name' => 'Comments', 'value' => 'fa-comments'), array('name' => 'Comments O', 'value' => 'fa-comments-o'), array('name' => 'Compass', 'value' => 'fa-compass'), array('name' => 'Compress', 'value' => 'fa-compress'), array('name' => 'Connectdevelop', 'value' => 'fa-connectdevelop'), array('name' => 'Contao', 'value' => 'fa-contao'), array('name' => 'Copy', 'value' => 'fa-copy'), array('name' => 'Copyright', 'value' => 'fa-copyright'), array('name' => 'Creative Commons', 'value' => 'fa-creative-commons'), array('name' => 'Credit Card', 'value' => 'fa-credit-card'), array('name' => 'Crop', 'value' => 'fa-crop'), array('name' => 'Crosshairs', 'value' => 'fa-crosshairs'), array('name' => 'Css3', 'value' => 'fa-css3'), array('name' => 'Cube', 'value' => 'fa-cube'), array('name' => 'Cubes', 'value' => 'fa-cubes'), array('name' => 'Cut', 'value' => 'fa-cut'), array('name' => 'Cutlery', 'value' => 'fa-cutlery'), array('name' => 'Dashboard', 'value' => 'fa-dashboard'), array('name' => 'Dashcube', 'value' => 'fa-dashcube'), array('name' => 'Database', 'value' => 'fa-database'), array('name' => 'Dedent', 'value' => 'fa-dedent'), array('name' => 'Delicious', 'value' => 'fa-delicious'), array('name' => 'Desktop', 'value' => 'fa-desktop'), array('name' => 'Deviantart', 'value' => 'fa-deviantart'), array('name' => 'Diamond', 'value' => 'fa-diamond'), array('name' => 'Digg', 'value' => 'fa-digg'), array('name' => 'Dollar', 'value' => 'fa-dollar'), array('name' => 'Dot Circle O', 'value' => 'fa-dot-circle-o'), array('name' => 'Download', 'value' => 'fa-download'), array('name' => 'Dribbble', 'value' => 'fa-dribbble'), array('name' => 'Dropbox', 'value' => 'fa-dropbox'), array('name' => 'Drupal', 'value' => 'fa-drupal'), array('name' => 'Edit', 'value' => 'fa-edit'), array('name' => 'Eject', 'value' => 'fa-eject'), array('name' => 'Ellipsis H', 'value' => 'fa-ellipsis-h'), array('name' => 'Ellipsis V', 'value' => 'fa-ellipsis-v'), array('name' => 'Empire', 'value' => 'fa-empire'), array('name' => 'Envelope', 'value' => 'fa-envelope'), array('name' => 'Envelope O', 'value' => 'fa-envelope-o'), array('name' => 'Envelope Square', 'value' => 'fa-envelope-square'), array('name' => 'Eraser', 'value' => 'fa-eraser'), array('name' => 'Eur', 'value' => 'fa-eur'), array('name' => 'Euro', 'value' => 'fa-euro'), array('name' => 'Exchange', 'value' => 'fa-exchange'), array('name' => 'Exclamation', 'value' => 'fa-exclamation'), array('name' => 'Exclamation Circle', 'value' => 'fa-exclamation-circle'), array('name' => 'Exclamation Triangle', 'value' => 'fa-exclamation-triangle'), array('name' => 'Expand', 'value' => 'fa-expand'), array('name' => 'Expeditedssl', 'value' => 'fa-expeditedssl'), array('name' => 'External Link', 'value' => 'fa-external-link'), array('name' => 'External Link Square', 'value' => 'fa-external-link-square'), array('name' => 'Eye', 'value' => 'fa-eye'), array('name' => 'Eye Slash', 'value' => 'fa-eye-slash'), array('name' => 'Eyedropper', 'value' => 'fa-eyedropper'), array('name' => 'Facebook', 'value' => 'fa-facebook'), array('name' => 'Facebook F', 'value' => 'fa-facebook-f'), array('name' => 'Facebook Official', 'value' => 'fa-facebook-official'), array('name' => 'Facebook Square', 'value' => 'fa-facebook-square'), array('name' => 'Fast Backward', 'value' => 'fa-fast-backward'), array('name' => 'Fast Forward', 'value' => 'fa-fast-forward'), array('name' => 'Fax', 'value' => 'fa-fax'), array('name' => 'Feed', 'value' => 'fa-feed'), array('name' => 'Female', 'value' => 'fa-female'), array('name' => 'Fighter Jet', 'value' => 'fa-fighter-jet'), array('name' => 'File', 'value' => 'fa-file'), array('name' => 'File Archive O', 'value' => 'fa-file-archive-o'), array('name' => 'File Audio O', 'value' => 'fa-file-audio-o'), array('name' => 'File Code O', 'value' => 'fa-file-code-o'), array('name' => 'File Excel O', 'value' => 'fa-file-excel-o'), array('name' => 'File Image O', 'value' => 'fa-file-image-o'), array('name' => 'File Movie O', 'value' => 'fa-file-movie-o'), array('name' => 'File O', 'value' => 'fa-file-o'), array('name' => 'File Pdf O', 'value' => 'fa-file-pdf-o'), array('name' => 'File Photo O', 'value' => 'fa-file-photo-o'), array('name' => 'File Picture O', 'value' => 'fa-file-picture-o'), array('name' => 'File Powerpoint O', 'value' => 'fa-file-powerpoint-o'), array('name' => 'File Sound O', 'value' => 'fa-file-sound-o'), array('name' => 'File Text', 'value' => 'fa-file-text'), array('name' => 'File Text O', 'value' => 'fa-file-text-o'), array('name' => 'File Video O', 'value' => 'fa-file-video-o'), array('name' => 'File Word O', 'value' => 'fa-file-word-o'), array('name' => 'File Zip O', 'value' => 'fa-file-zip-o'), array('name' => 'Files O', 'value' => 'fa-files-o'), array('name' => 'Film', 'value' => 'fa-film'), array('name' => 'Filter', 'value' => 'fa-filter'), array('name' => 'Fire', 'value' => 'fa-fire'), array('name' => 'Fire Extinguisher', 'value' => 'fa-fire-extinguisher'), array('name' => 'Firefox', 'value' => 'fa-firefox'), array('name' => 'Flag', 'value' => 'fa-flag'), array('name' => 'Flag Checkered', 'value' => 'fa-flag-checkered'), array('name' => 'Flag O', 'value' => 'fa-flag-o'), array('name' => 'Flash', 'value' => 'fa-flash'), array('name' => 'Flask', 'value' => 'fa-flask'), array('name' => 'Flickr', 'value' => 'fa-flickr'), array('name' => 'Floppy O', 'value' => 'fa-floppy-o'), array('name' => 'Folder', 'value' => 'fa-folder'), array('name' => 'Folder O', 'value' => 'fa-folder-o'), array('name' => 'Folder Open', 'value' => 'fa-folder-open'), array('name' => 'Folder Open O', 'value' => 'fa-folder-open-o'), array('name' => 'Font', 'value' => 'fa-font'), array('name' => 'Fonticons', 'value' => 'fa-fonticons'), array('name' => 'Forumbee', 'value' => 'fa-forumbee'), array('name' => 'Forward', 'value' => 'fa-forward'), array('name' => 'Foursquare', 'value' => 'fa-foursquare'), array('name' => 'Frown O', 'value' => 'fa-frown-o'), array('name' => 'Futbol O', 'value' => 'fa-futbol-o'), array('name' => 'Gamepad', 'value' => 'fa-gamepad'), array('name' => 'Gavel', 'value' => 'fa-gavel'), array('name' => 'Gbp', 'value' => 'fa-gbp'), array('name' => 'Ge', 'value' => 'fa-ge'), array('name' => 'Gear', 'value' => 'fa-gear'), array('name' => 'Gears', 'value' => 'fa-gears'), array('name' => 'Genderless', 'value' => 'fa-genderless'), array('name' => 'Get Pocket', 'value' => 'fa-get-pocket'), array('name' => 'Gg', 'value' => 'fa-gg'), array('name' => 'Gg Circle', 'value' => 'fa-gg-circle'), array('name' => 'Gift', 'value' => 'fa-gift'), array('name' => 'Git', 'value' => 'fa-git'), array('name' => 'Git Square', 'value' => 'fa-git-square'), array('name' => 'Github', 'value' => 'fa-github'), array('name' => 'Github Alt', 'value' => 'fa-github-alt'), array('name' => 'Github Square', 'value' => 'fa-github-square'), array('name' => 'Gittip', 'value' => 'fa-gittip'), array('name' => 'Glass', 'value' => 'fa-glass'), array('name' => 'Globe', 'value' => 'fa-globe'), array('name' => 'Google', 'value' => 'fa-google'), array('name' => 'Google Plus', 'value' => 'fa-google-plus'), array('name' => 'Google Plus Square', 'value' => 'fa-google-plus-square'), array('name' => 'Google Wallet', 'value' => 'fa-google-wallet'), array('name' => 'Graduation Cap', 'value' => 'fa-graduation-cap'), array('name' => 'Gratipay', 'value' => 'fa-gratipay'), array('name' => 'Group', 'value' => 'fa-group'), array('name' => 'H Square', 'value' => 'fa-h-square'), array('name' => 'Hacker News', 'value' => 'fa-hacker-news'), array('name' => 'Hand Grab O', 'value' => 'fa-hand-grab-o'), array('name' => 'Hand Lizard O', 'value' => 'fa-hand-lizard-o'), array('name' => 'Hand O Down', 'value' => 'fa-hand-o-down'), array('name' => 'Hand O Left', 'value' => 'fa-hand-o-left'), array('name' => 'Hand O Right', 'value' => 'fa-hand-o-right'), array('name' => 'Hand O Up', 'value' => 'fa-hand-o-up'), array('name' => 'Hand Paper O', 'value' => 'fa-hand-paper-o'), array('name' => 'Hand Peace O', 'value' => 'fa-hand-peace-o'), array('name' => 'Hand Pointer O', 'value' => 'fa-hand-pointer-o'), array('name' => 'Hand Rock O', 'value' => 'fa-hand-rock-o'), array('name' => 'Hand Scissors O', 'value' => 'fa-hand-scissors-o'), array('name' => 'Hand Spock O', 'value' => 'fa-hand-spock-o'), array('name' => 'Hand Stop O', 'value' => 'fa-hand-stop-o'), array('name' => 'Hdd O', 'value' => 'fa-hdd-o'), array('name' => 'Header', 'value' => 'fa-header'), array('name' => 'Headphones', 'value' => 'fa-headphones'), array('name' => 'Heart', 'value' => 'fa-heart'), array('name' => 'Heart O', 'value' => 'fa-heart-o'), array('name' => 'Heartbeat', 'value' => 'fa-heartbeat'), array('name' => 'History', 'value' => 'fa-history'), array('name' => 'Home', 'value' => 'fa-home'), array('name' => 'Hospital O', 'value' => 'fa-hospital-o'), array('name' => 'Hotel', 'value' => 'fa-hotel'), array('name' => 'Hourglass', 'value' => 'fa-hourglass'), array('name' => 'Hourglass 1', 'value' => 'fa-hourglass-1'), array('name' => 'Hourglass 2', 'value' => 'fa-hourglass-2'), array('name' => 'Hourglass 3', 'value' => 'fa-hourglass-3'), array('name' => 'Hourglass End', 'value' => 'fa-hourglass-end'), array('name' => 'Hourglass Half', 'value' => 'fa-hourglass-half'), array('name' => 'Hourglass O', 'value' => 'fa-hourglass-o'), array('name' => 'Hourglass Start', 'value' => 'fa-hourglass-start'), array('name' => 'Houzz', 'value' => 'fa-houzz'), array('name' => 'Html5', 'value' => 'fa-html5'), array('name' => 'I Cursor', 'value' => 'fa-i-cursor'), array('name' => 'Ils', 'value' => 'fa-ils'), array('name' => 'Image', 'value' => 'fa-image'), array('name' => 'Inbox', 'value' => 'fa-inbox'), array('name' => 'Indent', 'value' => 'fa-indent'), array('name' => 'Industry', 'value' => 'fa-industry'), array('name' => 'Info', 'value' => 'fa-info'), array('name' => 'Info Circle', 'value' => 'fa-info-circle'), array('name' => 'Inr', 'value' => 'fa-inr'), array('name' => 'Instagram', 'value' => 'fa-instagram'), array('name' => 'Institution', 'value' => 'fa-institution'), array('name' => 'Internet Explorer', 'value' => 'fa-internet-explorer'), array('name' => 'Intersex', 'value' => 'fa-intersex'), array('name' => 'Ioxhost', 'value' => 'fa-ioxhost'), array('name' => 'Italic', 'value' => 'fa-italic'), array('name' => 'Joomla', 'value' => 'fa-joomla'), array('name' => 'Jpy', 'value' => 'fa-jpy'), array('name' => 'Jsfiddle', 'value' => 'fa-jsfiddle'), array('name' => 'Key', 'value' => 'fa-key'), array('name' => 'Keyboard O', 'value' => 'fa-keyboard-o'), array('name' => 'Krw', 'value' => 'fa-krw'), array('name' => 'Language', 'value' => 'fa-language'), array('name' => 'Laptop', 'value' => 'fa-laptop'), array('name' => 'Lastfm', 'value' => 'fa-lastfm'), array('name' => 'Lastfm Square', 'value' => 'fa-lastfm-square'), array('name' => 'Leaf', 'value' => 'fa-leaf'), array('name' => 'Leanpub', 'value' => 'fa-leanpub'), array('name' => 'Legal', 'value' => 'fa-legal'), array('name' => 'Lemon O', 'value' => 'fa-lemon-o'), array('name' => 'Level Down', 'value' => 'fa-level-down'), array('name' => 'Level Up', 'value' => 'fa-level-up'), array('name' => 'Life Bouy', 'value' => 'fa-life-bouy'), array('name' => 'Life Buoy', 'value' => 'fa-life-buoy'), array('name' => 'Life Ring', 'value' => 'fa-life-ring'), array('name' => 'Life Saver', 'value' => 'fa-life-saver'), array('name' => 'Lightbulb O', 'value' => 'fa-lightbulb-o'), array('name' => 'Line Chart', 'value' => 'fa-line-chart'), array('name' => 'Link', 'value' => 'fa-link'), array('name' => 'Linkedin', 'value' => 'fa-linkedin'), array('name' => 'Linkedin Square', 'value' => 'fa-linkedin-square'), array('name' => 'Linux', 'value' => 'fa-linux'), array('name' => 'List', 'value' => 'fa-list'), array('name' => 'List Alt', 'value' => 'fa-list-alt'), array('name' => 'List Ol', 'value' => 'fa-list-ol'), array('name' => 'List Ul', 'value' => 'fa-list-ul'), array('name' => 'Location Arrow', 'value' => 'fa-location-arrow'), array('name' => 'Lock', 'value' => 'fa-lock'), array('name' => 'Long Arrow Down', 'value' => 'fa-long-arrow-down'), array('name' => 'Long Arrow Left', 'value' => 'fa-long-arrow-left'), array('name' => 'Long Arrow Right', 'value' => 'fa-long-arrow-right'), array('name' => 'Long Arrow Up', 'value' => 'fa-long-arrow-up'), array('name' => 'Magic', 'value' => 'fa-magic'), array('name' => 'Magnet', 'value' => 'fa-magnet'), array('name' => 'Mail Forward', 'value' => 'fa-mail-forward'), array('name' => 'Mail Reply', 'value' => 'fa-mail-reply'), array('name' => 'Mail Reply All', 'value' => 'fa-mail-reply-all'), array('name' => 'Male', 'value' => 'fa-male'), array('name' => 'Map', 'value' => 'fa-map'), array('name' => 'Map Marker', 'value' => 'fa-map-marker'), array('name' => 'Map O', 'value' => 'fa-map-o'), array('name' => 'Map Pin', 'value' => 'fa-map-pin'), array('name' => 'Map Signs', 'value' => 'fa-map-signs'), array('name' => 'Mars', 'value' => 'fa-mars'), array('name' => 'Mars Double', 'value' => 'fa-mars-double'), array('name' => 'Mars Stroke', 'value' => 'fa-mars-stroke'), array('name' => 'Mars Stroke H', 'value' => 'fa-mars-stroke-h'), array('name' => 'Mars Stroke V', 'value' => 'fa-mars-stroke-v'), array('name' => 'Maxcdn', 'value' => 'fa-maxcdn'), array('name' => 'Meanpath', 'value' => 'fa-meanpath'), array('name' => 'Medium', 'value' => 'fa-medium'), array('name' => 'Medkit', 'value' => 'fa-medkit'), array('name' => 'Meh O', 'value' => 'fa-meh-o'), array('name' => 'Mercury', 'value' => 'fa-mercury'), array('name' => 'Microphone', 'value' => 'fa-microphone'), array('name' => 'Microphone Slash', 'value' => 'fa-microphone-slash'), array('name' => 'Minus', 'value' => 'fa-minus'), array('name' => 'Minus Circle', 'value' => 'fa-minus-circle'), array('name' => 'Minus Square', 'value' => 'fa-minus-square'), array('name' => 'Minus Square O', 'value' => 'fa-minus-square-o'), array('name' => 'Mobile', 'value' => 'fa-mobile'), array('name' => 'Mobile Phone', 'value' => 'fa-mobile-phone'), array('name' => 'Money', 'value' => 'fa-money'), array('name' => 'Moon O', 'value' => 'fa-moon-o'), array('name' => 'Mortar Board', 'value' => 'fa-mortar-board'), array('name' => 'Motorcycle', 'value' => 'fa-motorcycle'), array('name' => 'Mouse Pointer', 'value' => 'fa-mouse-pointer'), array('name' => 'Music', 'value' => 'fa-music'), array('name' => 'Navicon', 'value' => 'fa-navicon'), array('name' => 'Neuter', 'value' => 'fa-neuter'), array('name' => 'Newspaper O', 'value' => 'fa-newspaper-o'), array('name' => 'Object Group', 'value' => 'fa-object-group'), array('name' => 'Object Ungroup', 'value' => 'fa-object-ungroup'), array('name' => 'Odnoklassniki', 'value' => 'fa-odnoklassniki'), array('name' => 'Odnoklassniki Square', 'value' => 'fa-odnoklassniki-square'), array('name' => 'Opencart', 'value' => 'fa-opencart'), array('name' => 'Openid', 'value' => 'fa-openid'), array('name' => 'Opera', 'value' => 'fa-opera'), array('name' => 'Optin Monster', 'value' => 'fa-optin-monster'), array('name' => 'Outdent', 'value' => 'fa-outdent'), array('name' => 'Pagelines', 'value' => 'fa-pagelines'), array('name' => 'Paint Brush', 'value' => 'fa-paint-brush'), array('name' => 'Paper Plane', 'value' => 'fa-paper-plane'), array('name' => 'Paper Plane O', 'value' => 'fa-paper-plane-o'), array('name' => 'Paperclip', 'value' => 'fa-paperclip'), array('name' => 'Paragraph', 'value' => 'fa-paragraph'), array('name' => 'Paste', 'value' => 'fa-paste'), array('name' => 'Pause', 'value' => 'fa-pause'), array('name' => 'Paw', 'value' => 'fa-paw'), array('name' => 'Paypal', 'value' => 'fa-paypal'), array('name' => 'Pencil', 'value' => 'fa-pencil'), array('name' => 'Pencil Square', 'value' => 'fa-pencil-square'), array('name' => 'Pencil Square O', 'value' => 'fa-pencil-square-o'), array('name' => 'Phone', 'value' => 'fa-phone'), array('name' => 'Phone Square', 'value' => 'fa-phone-square'), array('name' => 'Photo', 'value' => 'fa-photo'), array('name' => 'Picture O', 'value' => 'fa-picture-o'), array('name' => 'Pie Chart', 'value' => 'fa-pie-chart'), array('name' => 'Pied Piper', 'value' => 'fa-pied-piper'), array('name' => 'Pied Piper Alt', 'value' => 'fa-pied-piper-alt'), array('name' => 'Pinterest', 'value' => 'fa-pinterest'), array('name' => 'Pinterest P', 'value' => 'fa-pinterest-p'), array('name' => 'Pinterest Square', 'value' => 'fa-pinterest-square'), array('name' => 'Plane', 'value' => 'fa-plane'), array('name' => 'Play', 'value' => 'fa-play'), array('name' => 'Play Circle', 'value' => 'fa-play-circle'), array('name' => 'Play Circle O', 'value' => 'fa-play-circle-o'), array('name' => 'Plug', 'value' => 'fa-plug'), array('name' => 'Plus', 'value' => 'fa-plus'), array('name' => 'Plus Circle', 'value' => 'fa-plus-circle'), array('name' => 'Plus Square', 'value' => 'fa-plus-square'), array('name' => 'Plus Square O', 'value' => 'fa-plus-square-o'), array('name' => 'Power Off', 'value' => 'fa-power-off'), array('name' => 'Print', 'value' => 'fa-print'), array('name' => 'Puzzle Piece', 'value' => 'fa-puzzle-piece'), array('name' => 'Qq', 'value' => 'fa-qq'), array('name' => 'Qrcode', 'value' => 'fa-qrcode'), array('name' => 'Question', 'value' => 'fa-question'), array('name' => 'Question Circle', 'value' => 'fa-question-circle'), array('name' => 'Quote Left', 'value' => 'fa-quote-left'), array('name' => 'Quote Right', 'value' => 'fa-quote-right'), array('name' => 'Ra', 'value' => 'fa-ra'), array('name' => 'Random', 'value' => 'fa-random'), array('name' => 'Rebel', 'value' => 'fa-rebel'), array('name' => 'Recycle', 'value' => 'fa-recycle'), array('name' => 'Reddit', 'value' => 'fa-reddit'), array('name' => 'Reddit Square', 'value' => 'fa-reddit-square'), array('name' => 'Refresh', 'value' => 'fa-refresh'), array('name' => 'Registered', 'value' => 'fa-registered'), array('name' => 'Remove', 'value' => 'fa-remove'), array('name' => 'Renren', 'value' => 'fa-renren'), array('name' => 'Reorder', 'value' => 'fa-reorder'), array('name' => 'Repeat', 'value' => 'fa-repeat'), array('name' => 'Reply', 'value' => 'fa-reply'), array('name' => 'Reply All', 'value' => 'fa-reply-all'), array('name' => 'Retweet', 'value' => 'fa-retweet'), array('name' => 'Rmb', 'value' => 'fa-rmb'), array('name' => 'Road', 'value' => 'fa-road'), array('name' => 'Rocket', 'value' => 'fa-rocket'), array('name' => 'Rotate Left', 'value' => 'fa-rotate-left'), array('name' => 'Rotate Right', 'value' => 'fa-rotate-right'), array('name' => 'Rouble', 'value' => 'fa-rouble'), array('name' => 'Rss', 'value' => 'fa-rss'), array('name' => 'Rss Square', 'value' => 'fa-rss-square'), array('name' => 'Rub', 'value' => 'fa-rub'), array('name' => 'Ruble', 'value' => 'fa-ruble'), array('name' => 'Rupee', 'value' => 'fa-rupee'), array('name' => 'Safari', 'value' => 'fa-safari'), array('name' => 'Save', 'value' => 'fa-save'), array('name' => 'Scissors', 'value' => 'fa-scissors'), array('name' => 'Search', 'value' => 'fa-search'), array('name' => 'Search Minus', 'value' => 'fa-search-minus'), array('name' => 'Search Plus', 'value' => 'fa-search-plus'), array('name' => 'Sellsy', 'value' => 'fa-sellsy'), array('name' => 'Send', 'value' => 'fa-send'), array('name' => 'Send O', 'value' => 'fa-send-o'), array('name' => 'Server', 'value' => 'fa-server'), array('name' => 'Share', 'value' => 'fa-share'), array('name' => 'Share Alt', 'value' => 'fa-share-alt'), array('name' => 'Share Alt Square', 'value' => 'fa-share-alt-square'), array('name' => 'Share Square', 'value' => 'fa-share-square'), array('name' => 'Share Square O', 'value' => 'fa-share-square-o'), array('name' => 'Shekel', 'value' => 'fa-shekel'), array('name' => 'Sheqel', 'value' => 'fa-sheqel'), array('name' => 'Shield', 'value' => 'fa-shield'), array('name' => 'Ship', 'value' => 'fa-ship'), array('name' => 'Shirtsinbulk', 'value' => 'fa-shirtsinbulk'), array('name' => 'Shopping Cart', 'value' => 'fa-shopping-cart'), array('name' => 'Sign In', 'value' => 'fa-sign-in'), array('name' => 'Sign Out', 'value' => 'fa-sign-out'), array('name' => 'Signal', 'value' => 'fa-signal'), array('name' => 'Simplybuilt', 'value' => 'fa-simplybuilt'), array('name' => 'Sitemap', 'value' => 'fa-sitemap'), array('name' => 'Skyatlas', 'value' => 'fa-skyatlas'), array('name' => 'Skype', 'value' => 'fa-skype'), array('name' => 'Slack', 'value' => 'fa-slack'), array('name' => 'Sliders', 'value' => 'fa-sliders'), array('name' => 'Slideshare', 'value' => 'fa-slideshare'), array('name' => 'Smile O', 'value' => 'fa-smile-o'), array('name' => 'Soccer Ball O', 'value' => 'fa-soccer-ball-o'), array('name' => 'Sort', 'value' => 'fa-sort'), array('name' => 'Sort Alpha Asc', 'value' => 'fa-sort-alpha-asc'), array('name' => 'Sort Alpha Desc', 'value' => 'fa-sort-alpha-desc'), array('name' => 'Sort Amount Asc', 'value' => 'fa-sort-amount-asc'), array('name' => 'Sort Amount Desc', 'value' => 'fa-sort-amount-desc'), array('name' => 'Sort Asc', 'value' => 'fa-sort-asc'), array('name' => 'Sort Desc', 'value' => 'fa-sort-desc'), array('name' => 'Sort Down', 'value' => 'fa-sort-down'), array('name' => 'Sort Numeric Asc', 'value' => 'fa-sort-numeric-asc'), array('name' => 'Sort Numeric Desc', 'value' => 'fa-sort-numeric-desc'), array('name' => 'Sort Up', 'value' => 'fa-sort-up'), array('name' => 'Soundcloud', 'value' => 'fa-soundcloud'), array('name' => 'Space Shuttle', 'value' => 'fa-space-shuttle'), array('name' => 'Spinner', 'value' => 'fa-spinner'), array('name' => 'Spoon', 'value' => 'fa-spoon'), array('name' => 'Spotify', 'value' => 'fa-spotify'), array('name' => 'Square', 'value' => 'fa-square'), array('name' => 'Square O', 'value' => 'fa-square-o'), array('name' => 'Stack Exchange', 'value' => 'fa-stack-exchange'), array('name' => 'Stack Overflow', 'value' => 'fa-stack-overflow'), array('name' => 'Star', 'value' => 'fa-star'), array('name' => 'Star Half', 'value' => 'fa-star-half'), array('name' => 'Star Half Empty', 'value' => 'fa-star-half-empty'), array('name' => 'Star Half Full', 'value' => 'fa-star-half-full'), array('name' => 'Star Half O', 'value' => 'fa-star-half-o'), array('name' => 'Star O', 'value' => 'fa-star-o'), array('name' => 'Steam', 'value' => 'fa-steam'), array('name' => 'Steam Square', 'value' => 'fa-steam-square'), array('name' => 'Step Backward', 'value' => 'fa-step-backward'), array('name' => 'Step Forward', 'value' => 'fa-step-forward'), array('name' => 'Stethoscope', 'value' => 'fa-stethoscope'), array('name' => 'Sticky Note', 'value' => 'fa-sticky-note'), array('name' => 'Sticky Note O', 'value' => 'fa-sticky-note-o'), array('name' => 'Stop', 'value' => 'fa-stop'), array('name' => 'Street View', 'value' => 'fa-street-view'), array('name' => 'Strikethrough', 'value' => 'fa-strikethrough'), array('name' => 'Stumbleupon', 'value' => 'fa-stumbleupon'), array('name' => 'Stumbleupon Circle', 'value' => 'fa-stumbleupon-circle'), array('name' => 'Subscript', 'value' => 'fa-subscript'), array('name' => 'Subway', 'value' => 'fa-subway'), array('name' => 'Suitcase', 'value' => 'fa-suitcase'), array('name' => 'Sun O', 'value' => 'fa-sun-o'), array('name' => 'Superscript', 'value' => 'fa-superscript'), array('name' => 'Support', 'value' => 'fa-support'), array('name' => 'Table', 'value' => 'fa-table'), array('name' => 'Tablet', 'value' => 'fa-tablet'), array('name' => 'Tachometer', 'value' => 'fa-tachometer'), array('name' => 'Tag', 'value' => 'fa-tag'), array('name' => 'Tags', 'value' => 'fa-tags'), array('name' => 'Tasks', 'value' => 'fa-tasks'), array('name' => 'Taxi', 'value' => 'fa-taxi'), array('name' => 'Television', 'value' => 'fa-television'), array('name' => 'Tencent Weibo', 'value' => 'fa-tencent-weibo'), array('name' => 'Terminal', 'value' => 'fa-terminal'), array('name' => 'Text Height', 'value' => 'fa-text-height'), array('name' => 'Text Width', 'value' => 'fa-text-width'), array('name' => 'Th', 'value' => 'fa-th'), array('name' => 'Th Large', 'value' => 'fa-th-large'), array('name' => 'Th List', 'value' => 'fa-th-list'), array('name' => 'Thumb Tack', 'value' => 'fa-thumb-tack'), array('name' => 'Thumbs Down', 'value' => 'fa-thumbs-down'), array('name' => 'Thumbs O Down', 'value' => 'fa-thumbs-o-down'), array('name' => 'Thumbs O Up', 'value' => 'fa-thumbs-o-up'), array('name' => 'Thumbs Up', 'value' => 'fa-thumbs-up'), array('name' => 'Ticket', 'value' => 'fa-ticket'), array('name' => 'Times', 'value' => 'fa-times'), array('name' => 'Times Circle', 'value' => 'fa-times-circle'), array('name' => 'Times Circle O', 'value' => 'fa-times-circle-o'), array('name' => 'Tint', 'value' => 'fa-tint'), array('name' => 'Toggle Down', 'value' => 'fa-toggle-down'), array('name' => 'Toggle Left', 'value' => 'fa-toggle-left'), array('name' => 'Toggle Off', 'value' => 'fa-toggle-off'), array('name' => 'Toggle On', 'value' => 'fa-toggle-on'), array('name' => 'Toggle Right', 'value' => 'fa-toggle-right'), array('name' => 'Toggle Up', 'value' => 'fa-toggle-up'), array('name' => 'Trademark', 'value' => 'fa-trademark'), array('name' => 'Train', 'value' => 'fa-train'), array('name' => 'Transgender', 'value' => 'fa-transgender'), array('name' => 'Transgender Alt', 'value' => 'fa-transgender-alt'), array('name' => 'Trash', 'value' => 'fa-trash'), array('name' => 'Trash O', 'value' => 'fa-trash-o'), array('name' => 'Tree', 'value' => 'fa-tree'), array('name' => 'Trello', 'value' => 'fa-trello'), array('name' => 'Tripadvisor', 'value' => 'fa-tripadvisor'), array('name' => 'Trophy', 'value' => 'fa-trophy'), array('name' => 'Truck', 'value' => 'fa-truck'), array('name' => 'Try', 'value' => 'fa-try'), array('name' => 'Tty', 'value' => 'fa-tty'), array('name' => 'Tumblr', 'value' => 'fa-tumblr'), array('name' => 'Tumblr Square', 'value' => 'fa-tumblr-square'), array('name' => 'Turkish Lira', 'value' => 'fa-turkish-lira'), array('name' => 'Tv', 'value' => 'fa-tv'), array('name' => 'Twitch', 'value' => 'fa-twitch'), array('name' => 'Twitter', 'value' => 'fa-twitter'), array('name' => 'Twitter Square', 'value' => 'fa-twitter-square'), array('name' => 'Umbrella', 'value' => 'fa-umbrella'), array('name' => 'Underline', 'value' => 'fa-underline'), array('name' => 'Undo', 'value' => 'fa-undo'), array('name' => 'University', 'value' => 'fa-university'), array('name' => 'Unlink', 'value' => 'fa-unlink'), array('name' => 'Unlock', 'value' => 'fa-unlock'), array('name' => 'Unlock Alt', 'value' => 'fa-unlock-alt'), array('name' => 'Unsorted', 'value' => 'fa-unsorted'), array('name' => 'Upload', 'value' => 'fa-upload'), array('name' => 'Usd', 'value' => 'fa-usd'), array('name' => 'User', 'value' => 'fa-user'), array('name' => 'User Md', 'value' => 'fa-user-md'), array('name' => 'User Plus', 'value' => 'fa-user-plus'), array('name' => 'User Secret', 'value' => 'fa-user-secret'), array('name' => 'User Times', 'value' => 'fa-user-times'), array('name' => 'Users', 'value' => 'fa-users'), array('name' => 'Venus', 'value' => 'fa-venus'), array('name' => 'Venus Double', 'value' => 'fa-venus-double'), array('name' => 'Venus Mars', 'value' => 'fa-venus-mars'), array('name' => 'Viacoin', 'value' => 'fa-viacoin'), array('name' => 'Video Camera', 'value' => 'fa-video-camera'), array('name' => 'Vimeo', 'value' => 'fa-vimeo'), array('name' => 'Vimeo Square', 'value' => 'fa-vimeo-square'), array('name' => 'Vine', 'value' => 'fa-vine'), array('name' => 'Vk', 'value' => 'fa-vk'), array('name' => 'Volume Down', 'value' => 'fa-volume-down'), array('name' => 'Volume Off', 'value' => 'fa-volume-off'), array('name' => 'Volume Up', 'value' => 'fa-volume-up'), array('name' => 'Warning', 'value' => 'fa-warning'), array('name' => 'Wechat', 'value' => 'fa-wechat'), array('name' => 'Weibo', 'value' => 'fa-weibo'), array('name' => 'Weixin', 'value' => 'fa-weixin'), array('name' => 'Whatsapp', 'value' => 'fa-whatsapp'), array('name' => 'Wheelchair', 'value' => 'fa-wheelchair'), array('name' => 'Wifi', 'value' => 'fa-wifi'), array('name' => 'Wikipedia W', 'value' => 'fa-wikipedia-w'), array('name' => 'Windows', 'value' => 'fa-windows'), array('name' => 'Won', 'value' => 'fa-won'), array('name' => 'Wordpress', 'value' => 'fa-wordpress'), array('name' => 'Wrench', 'value' => 'fa-wrench'), array('name' => 'Xing', 'value' => 'fa-xing'), array('name' => 'Xing Square', 'value' => 'fa-xing-square'), array('name' => 'Y Combinator', 'value' => 'fa-y-combinator'), array('name' => 'Y Combinator Square', 'value' => 'fa-y-combinator-square'), array('name' => 'Yahoo', 'value' => 'fa-yahoo'), array('name' => 'Yc', 'value' => 'fa-yc'), array('name' => 'Yc Square', 'value' => 'fa-yc-square'), array('name' => 'Yelp', 'value' => 'fa-yelp'), array('name' => 'Yen', 'value' => 'fa-yen'), array('name' => 'Youtube', 'value' => 'fa-youtube'), array('name' => 'Youtube Play', 'value' => 'fa-youtube-play'), array('name' => 'Youtube Square', 'value' => 'fa-youtube-square'), );

global $ac_icons;
?>