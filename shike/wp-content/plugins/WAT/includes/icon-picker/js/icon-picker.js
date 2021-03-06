/* Icon Picker */

(function($) {

	$.fn.iconPicker = function( options ) {
		var options = ['dashicons','dashicons']; // default font set
		var icons;
		$list = $('');
		function font_set() {
			if (options[0] == 'dashicons') {
				icons = [
					"blank",	// there is no "blank" but we need the option
					"menu",
					"admin-site",
					"dashboard",
					"admin-media",
					"admin-page",
					"admin-comments",
					"admin-appearance",
					"admin-plugins",
					"admin-users",
					"admin-tools",
					"admin-settings",
					"admin-network",
					"admin-generic",
					"admin-home",
					"admin-collapse",
					"admin-links",
					"format-links",
					"admin-post",
					"format-standard",
					"format-image",
					"format-gallery",
					"format-audio",
					"format-video",
					"format-chat",
					"format-status",
					"format-aside",
					"format-quote",
					"welcome-write-blog",
					"welcome-edit-page",
					"welcome-add-page",
					"welcome-view-site",
					"welcome-widgets-menus",
					"welcome-comments",
					"welcome-learn-more",
					"image-crop",
					"image-rotate-left",
					"image-rotate-right",
					"image-flip-vertical",
					"image-flip-horizontal",
					"undo",
					"redo",
					"editor-bold",
					"editor-italic",
					"editor-ul",
					"editor-ol",
					"editor-quote",
					"editor-alignleft",
					"editor-aligncenter",
					"editor-alignright",
					"editor-insertmore",
					"editor-spellcheck",
					"editor-distractionfree",
					"editor-kitchensink",
					"editor-underline",
					"editor-justify",
					"editor-textcolor",
					"editor-paste-word",
					"editor-paste-text",
					"editor-removeformatting",
					"editor-video",
					"editor-customchar",
					"editor-outdent",
					"editor-indent",
					"editor-help",
					"editor-strikethrough",
					"editor-unlink",
					"editor-rtl",
					"align-left",
					"align-right",
					"align-center",
					"align-none",
					"lock",
					"calendar",
					"visibility",
					"post-status",
					"post-trash",
					"edit",
					"trash",
					"arrow-up",
					"arrow-down",
					"arrow-left",
					"arrow-right",
					"arrow-up-alt",
					"arrow-down-alt",
					"arrow-left-alt",
					"arrow-right-alt",
					"arrow-up-alt2",
					"arrow-down-alt2",
					"arrow-left-alt2",
					"arrow-right-alt2",
					"leftright",
					"sort",
					"list-view",
					"exerpt-view",
					"share",
					"share1",
					"share-alt",
					"share-alt2",
					"twitter",
					"rss",
					"facebook",
					"facebook-alt",
					"networking",
					"googleplus",
					"hammer",
					"art",
					"migrate",
					"performance",
					"wordpress",
					"wordpress-alt",
					"pressthis",
					"update",
					"screenoptions",
					"info",
					"cart",
					"feedback",
					"cloud",
					"translation",
					"tag",
					"category",
					"yes",
					"no",
					"no-alt",
					"plus",
					"minus",
					"dismiss",
					"marker",
					"star-filled",
					"star-half",
					"star-empty",
					"flag",
					"location",
					"location-alt",
					"camera",
					"images-alt",
					"images-alt2",
					"video-alt",
					"video-alt2",
					"video-alt3",
					"vault",
					"shield",
					"shield-alt",
					"search",
					"slides",
					"analytics",
					"chart-pie",
					"chart-bar",
					"chart-line",
					"chart-area",
					"groups",
					"businessman",
					"id",
					"id-alt",
					"products",
					"awards",
					"forms",
					"portfolio",
					"book",
					"book-alt",
					"download",
					"upload",
					"backup",
					"lightbulb",
					"smiley"
				]; 
				options[1] = 'dashicons';
			} else if (options[0] == 'fa') {
			icons = [
				"blank",
				"glass",
"music",
"search",
"envelope-o",
"heart",
"star",
"star-o",
"user",
"film",
"th-large",
"th",
"th-list",
"check",
"remove",
"search-plus",
"search-minus",
"power-off",
"signal",
"gear",
"trash-o",
"home",
"file-o",
"clock-o",
"road",
"download",
"arrow-circle-o-down",
"arrow-circle-o-up",
"inbox",
"play-circle-o",
"rotate-right",
"repeat",
"refresh",
"list-alt",
"lock",
"flag",
"headphones",
"volume-off",
"volume-down",
"volume-up",
"qrcode",
"barcode",
"tag",
"tags",
"book",
"bookmark",
"print",
"camera",
"font",
"bold",
"italic",
"text-height",
"text-width",
"align-left",
"align-center",
"align-right",
"align-justify",
"list",
"dedent",
"outdent",
"indent",
"video-camera",
"photo",
"image",
"picture-o",
"pencil",
"map-marker",
"adjust",
"tint",
"edit",
"pencil-square-o",
"share-square-o",
"check-square-o",
"arrows",
"step-backward",
"fast-backward",
"backward",
"play",
"pause",
"stop",
"forward",
"fast-forward",
"step-forward",
"eject",
"chevron-left",
"chevron-right",
"plus-circle",
"minus-circle",
"times-circle",
"check-circle",
"question-circle",
"info-circle",
"crosshairs",
"times-circle-o",
"check-circle-o",
"ban",
"arrow-left",
"arrow-right",
"arrow-up",
"arrow-down",
"mail-forward",
"share",
"expand",
"compress",
"plus",
"minus",
"asterisk",
"exclamation-circle",
"gift",
"leaf",
"fire",
"eye",
"eye-slash",
"warning",
"exclamation-triangle",
"plane",
"calendar",
"random",
"comment",
"magnet",
"chevron-up",
"chevron-down",
"retweet",
"shopping-cart",
"folder",
"folder-open",
"arrows-v",
"arrows-h",
"bar-chart-o",
"twitter-square",
"facebook-square",
"camera-retro",
"key",
"gears",
"cogs",
"comments",
"thumbs-o-up",
"thumbs-o-down",
"star-half",
"heart-o",
"sign-out",
"linkedin-square",
"thumb-tack",
"external-link",
"sign-in",
"trophy",
"github-square",
"upload",
"lemon-o",
"phone",
"square-o",
"bookmark-o",
"phone-square",
"twitter",
"facebook-f",  
"facebook",
"github",
"unlock",
"credit-card",
"feed" ,
"rss",
"hdd-o",
"bullhorn",
"bell",
"certificate",
"hand-o-right",
"hand-o-left",
"hand-o-up",
"hand-o-down",
"arrow-circle-left",
"arrow-circle-right",
"arrow-circle-up",
"arrow-circle-down",
"globe",
"wrench",
"tasks",
"filter",
"briefcase",
"arrows-alt",
"group",
"users",
"chain",
"link",
"cloud",
"flask",
"cut",
"scissors",
"copy",
"files-o",
"paperclip",
"save",
"floppy-o",
"square",
"bars",
"list-ul",
"list-ol",
"strikethrough",
"underline",
"table",
"magic",
"truck",
"pinterest",
"pinterest-square",
"google-plus-square",
"google-plus",
"money",
"caret-down",
"caret-up",
"caret-left",
"caret-right",
"columns",
"unsorted",
"sort",
"sort-desc",
"sort-asc",
"envelope",
"linkedin",
"undo",
"legal",
"gavel",
"dashboard",
"comment-o",
"comments-o",
"flash",
"sitemap",
"umbrella",
"paste",
"clipboard",
"lightbulb-o",
"exchange",
"cloud-download",
"cloud-upload",
"user-md",
"stethoscope",
"suitcase",
"bell-o",
"coffee",
"cutlery",
"file-text-o",
"building-o",
"hospital-o",
"ambulance",
"medkit",
"fighter-jet",
"beer",
"h-square",
"tachometer",
"plus-square",
"bolt",
"angle-double-left",
"angle-double-right",
"angle-double-up",
"angle-double-down",
"angle-left",
"angle-right",
"angle-up",
"angle-down",
"desktop",
"laptop",
"tablet",
"mobile",
"circle-o",
"quote-left",
"quote-right",
"spinner",
"circle",
"mail-reply",
"reply",
"github-alt",
"folder-o",
"folder-open-o",
"smile-o",
"meh-o",
"gamepad",
"keyboard-o",
"flag-o",
"flag-checkered",
"terminal",
"code",
"reply-all",
"star-half-empty",
"location-arrow",
"crop",
"code-fork",
"unlink",
"question",
"info",
"exclamation",
"superscript",
"subscript",
"eraser",
"puzzle-piece",
"microphone",
"microphone-slash",
"shield",
"calendar-o",
"fire-extinguisher",
"rocket",
"maxcdn",
"chevron-circle-left",
"chevron-circle-right",
"chevron-circle-up",
"chevron-circle-down",
"html5",
"css3",
"anchor",
"unlock-alt",
"bullseye",
"ellipsis-h",
"ellipsis-v",
"rss-square",
"play-circle",
"ticket",
"minus-square",
"minus-square-o",
"level-up",
"level-down",
"check-square",
"pencil-square",
"external-link-square",
"share-square",
"compass",
"toggle-down",
"caret-square-o-down",
"toggle-up",
"toggle-right",
"rupee",
"euro",
"gbp",
"dollar",
"inr",
"yen",
"jpy",
"ruble",
"won",
"bitcoin",
"usd",
"file",
"file-text",
"sort-alpha-asc",
"sort-alpha-desc",
"sort-amount-asc",
"sort-amount-desc",
"sort-numeric-asc",
"sort-numeric-desc",
"thumbs-up",
"thumbs-down",
"youtube-square",
"youtube",
"xing",
"xing-square",
"youtube-play",
"dropbox",
"stack-overflow",
"instagram",
"flickr",
"adn",
"bitbucket",
"bitbucket-square",
"tumblr",
"tumblr-square",
"long-arrow-down",
"long-arrow-up",
"long-arrow-left",
"long-arrow-right",
"apple",
"windows",
"android",
"linux",
"dribbble",
"skype",
"foursquare",
"trello",
"female",
"male",
"gittip",
"gratipay",
"sun-o",
"moon-o",
"archive",
"bug",
"vk",
"weibo",
"renren",
"pagelines",
"stack-exchange",
"arrow-circle-o-right",
"arrow-circle-o-left",
"toggle-left",
"caret-square-o-left",
"dot-circle-o",
"wheelchair",
"vimeo-square",
"turkish-lira",
"try",
"plus-square-o",
"space-shuttle",
"slack",
"envelope-square",
"wordpress",
"openid",
"institution",
"bank",
"university",
"graduation-cap",
"yahoo",
"google",
"reddit",
"reddit-square",
"stumbleupon-circle",
"stumbleupon",
"delicious",
"digg",
"pied-piper",
"pied-piper-alt",
"drupal",
"joomla",
"language",
"fax",
"building",
"child",
"paw",
"spoon",
"cube",
"cubes",
"behance",
"behance-square",
"steam",
"steam-square",
"recycle",
"automobile",
"taxi",
"tree",
"spotify",
"deviantart",
"soundcloud",
"database",
"file-pdf-o",
"file-word-o",
"file-excel-o",
"file-powerpoint-o",
"file-photo-o",
"file-image-o",
"file-zip-o",
"file-archive-o",
"file-sound-o",
"file-audio-o",
"file-movie-o",
"file-video-o",
"file-code-o",
"vine",
"codepen",
"jsfiddle",
"cab",
"car",
"life-buoy", 
"life-saver",
"life-ring",
"circle-o-notch",
"rebel",
"empire",
"support",
"git-square",
"git",
"yc-square",
"tencent-weibo",
"qq",
"wechat",
"paper-plane",
"paper-plane-o",
"history",
"circle-thin",
"header",
"paragraph",
"sliders",
"share-alt",
"share-alt-square",
"bomb",
"soccer-ball-o",
"tty",
"binoculars",
"plug",
"slideshare" ,
"twitch",
"yelp",
"newspaper-o",
"wifi" ,
"calculator",
"paypal" ,
"google-wallet",
"cc-visa",
"cc-mastercard",
"cc-discover",
"cc-amex",
"cc-paypal",
"cc-stripe",
"bell-slash",
"bell-slash-o",
"trash",
"copyright",
"at" ,
"eyedropper",
"paint-brush",
"birthday-cake",
"area-chart",
"pie-chart",
"line-chart",
"lastfm",
"lastfm-square",
"toggle-off",
"toggle-on",
"bicycle",
"bus",
"ioxhost",
"angellist",
"cc",
"shekel",
"sheqel",
"ils",
"meanpath",
"buysellads",
"connectdevelop" ,
"dashcube",
"forumbee",
"leanpub",
"sellsy",
"shirtsinbulk",
"simplybuilt",
"skyatlas",
"cart-plus",
"cart-arrow-down",
"diamond",
"ship",
"user-secret",
"motorcycle",
"street-view",
"heartbeat",
"venus",
"mars",
"mercury",
"intersex",
"transgender-alt",
"venus-double" ,
"mars-double",
"venus-mars",
"mars-stroke",
"mars-stroke-v",
"mars-stroke-h",
"neuter",
"genderless" ,
"facebook-official",
"pinterest-p",
"whatsapp",
"server",
"user-plus",
"user-times",
"hotel",
"bed",
"viacoin",
"train",
"subway" ,
"medium",
"yc",
"y-combinator",
"optin-monster",
"opencart",
"expeditedssl",
"battery-full",
"battery-three-quarters",
"battery-half",
"battery-quarter",
"battery-empty",
"mouse-pointer",
"i-cursor",
"object-group",
"object-ungroup",
"sticky-note",
"sticky-note-o",
"cc-jcb",
"cc-diners-club",
"clone",
"balance-scale",
"hourglass-o",
"hourglass-1",
"hourglass-2" ,
"hourglass-3",
"hourglass" ,
"hand-grab-o",
"hand-stop-o",
"hand-scissors-o" ,
"hand-lizard-o",
"hand-spock-o",
"hand-pointer-o",
"hand-peace-o",
"trademark",
"registered",
"creative-commons",
"gg",
"gg-circle",
"tripadvisor",
"odnoklassniki",
"odnoklassniki-square",
"get-pocket",
"wikipedia-w",
"safari" ,
"chrome" ,
"firefox" ,
"opera",
"internet-explorer",
"tv",
"television",
"contao",
"500px",
"amazon",
"calendar-plus-o",
"calendar-minus-o",
"calendar-times-o",
"calendar-check-o",
"industry",
"map-pin",
"map-signs",
"map-o",
"map",
"commenting",
"commenting-o",
"houzz",
"vimeo",
"black-tie",
"fonticons"
			];
			options[1] = "fa";
		} else {
			icons = [
				"blank",
				"standard",
				"aside",
				"image",
				"gallery",
				"video",
				"status",
				"quote",
				"link",
				"chat",
				"audio",

				/* Social icons */
				"github",
				"dribbble",
				"twitter",
				"facebook",
				"facebook-alt",
				"wordpress",
				"googleplus",
				"linkedin",
				"linkedin-alt",
				"pinterest",
				"pinterest-alt",
				"flickr",
				"vimeo",
				"youtube",
				"tumblr",
				"instagram",
				"codepen",
				"polldaddy",
				"googleplus-alt",
				"path",
				"skype",
				"digg",
				"reddit",
				"stumbleupon",
				"pocket",

				/* Meta icons */
				"comment",
				"category",
				"tag",
				"time",
				"user",
				"day",
				"week",
				"month",
				"pinned",

				/* Other icons */
				"search",
				"unzoom",
				"zoom",
				"show",
				"hide",
				"close",
				"close-alt",
				"trash",
				"star",
				"home",
				"mail",
				"edit",
				"reply",
				"feed",
				"warning",
				"share",
				"attachment",
				"location",
				"checkmark",
				"menu",
				"refresh",
				"minimize",
				"maximize",
				"404",
				"spam",
				"summary",
				"cloud",
				"key",
				"dot",
				"next",
				"previous",
				"expand",
				"collapse",
				"dropdown",
				"dropdown-left",
				"top",
				"draggable",
				"phone",
				"send-to-phone",
				"plugin",
				"cloud-download",
				"cloud-upload",
				"external",
				"document",
				"book",
				"cog",
				"unapprove",
				"cart",
				"pause",
				"stop",
				"skip-back",
				"skip-ahead",
				"play",
				"tablet",
				"send-to-tablet",
				"info",
				"notice",
				"help",
				"fastforward",
				"rewind",
				"portfolio",
				"heart",
				"code",
				"subscribe",
				"unsubscribe",
				"subscribed",
				"reply-alt",
				"reply-single",
				"flag",
				"print",
				"lock",
				"bold",
				"italic",
				"picture",

				/* Generic shapes */
				"uparrow",
				"rightarrow",
				"downarrow",
				"leftarrow"
			];
			options[1] = 'genericon';
		};
	};
	font_set();

	function build_list($popup,$button,clear) {
	  $list = $popup.find('.icon-picker-list');
	  if (clear==1) { $list.empty(); // clear list //
	  }
	  for (var i in icons) {
		  $list.append('<li data-icon="'+icons[i]+'"><a href="#" title="'+icons[i]+'"><span class="'+options[0]+' '+options[1]+'-'+icons[i]+'"></span></a></li>');
	  };
				$('a', $list).click(function(e) {
					e.preventDefault();
					var title = $(this).attr("title");
					$target.val(options[0]+"|"+options[1]+"-"+title);
					$button.removeClass().addClass("icon-picker "+options[0]+" "+options[1]+"-"+title);
					removePopup();
				});
	};
	
			function removePopup(){
				$(".icon-picker-container").remove();
			}
	

			$button = $('.icon-picker');
			$button.each( function() {
				$(this).on('click.iconPicker', function() {
					createPopup($(this));
				});
			});


			function createPopup($button) {
				$target = $($button.data('target'));
				$popup = $('<div class="icon-picker-container"> \
						<div class="icon-picker-control" /> \
						<ul class="icon-picker-list" /> \
					</div>')
					.css({
						'top': $button.offset().top,
						'left': $button.offset().left
					});
				build_list($popup,$button,0);
				var $control = $popup.find('.icon-picker-control');
				$control.html('<p>Select Font: <select><option value="dashicons">Dashicons</option><option value="fa">Font Awesome</option></select></p>'+
				'<a data-direction="back" href="#"><span class="dashicons dashicons-arrow-left-alt2"></span></a> '+
				'<input type="text" class="" placeholder="Search" />'+
				'<a data-direction="forward" href="#"><span class="dashicons dashicons-arrow-right-alt2"></span></a>'+
				'');

				$('select', $control).on('change', function(e) {
					e.preventDefault();
					if (this.value != options[0]) {
						options[0] = this.value;
						font_set();
						build_list($popup,$button,1);
					};
				});

				$('a', $control).click(function(e) {
					e.preventDefault();
					if ($(this).data('direction') === 'back') {
						//move last 25 elements to front
						$('li:gt(' + (icons.length - 26) + ')', $list).each(function() {
							$(this).prependTo($list);
						});
					} else {
						//move first 25 elements to the end
						$('li:lt(25)', $list).each(function() {
							$(this).appendTo($list);
						});
					}
				});

				$popup.appendTo('body').show();

				$('input', $control).on('keyup', function(e) {
					var search = $(this).val();
					if (search === '') {
						//show all again
						$('li:lt(25)', $list).show();
					} else {
						$('li', $list).each(function() {
							if ($(this).data('icon').toString().toLowerCase().indexOf(search.toLowerCase()) !== -1) {
								$(this).show();
							} else {
								$(this).hide();
							}
						});
					}
				});



				$(document).mouseup(function (e){
					if (!$popup.is(e.target) && $popup.has(e.target).length === 0) {
						removePopup();
					}
				});
			}
	}


	$(function() {
		$('.icon-picker').iconPicker();
	});

}(jQuery));
