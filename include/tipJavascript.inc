		<script type="text/javascript">
			// Initialization, you can leave this here or move this somewhere else
			$(function(){
				$('ul.jd_menu').jdMenu({	onShow: loadMenu
											//onHideCheck: onHideCheckMenu,
											//onHide: onHideMenu, 
											//onClick: onClickMenu, 
											//onAnimate: onAnimate
											});
				$('ul.jd_menu_vertical').jdMenu({onShow: loadMenu, onHide: unloadMenu, offset: 1, onAnimate: onAnimate});
			});

			function onAnimate(show) {
				//$(this).fadeIn('slow').show();
				if (show) {
					$(this)
						.css('visibility', 'hidden').show()
							.css('width', $(this).innerWidth())
						.hide().css('visibility', 'visible')
					.fadeIn('normal');
				} else {
					$(this).fadeOut('fast');
				}
			}

			var MENU_COUNTER = 1;
			function loadMenu() {
				if (this.id == 'dynamicMenu') {
					$('&gt; ul &gt; li', this).remove();
			
					var ul = $('&lt;ul&gt;&lt;/ul&gt;');
					var t = MENU_COUNTER + 10;
					for (; MENU_COUNTER < t; MENU_COUNTER++) {
						$('&gt; ul', this).append('&lt;li&gt;Item ' + MENU_COUNTER + '&lt;/li&gt;');
					}
				}
			}

			function unloadMenu() {
				if (MENU_COUNTER >= 30) {
					MENU_COUNTER = 1;
				}
			}

			// We're passed a UL
			function onHideCheckMenu() {
				return !$(this).parent().is('.LOCKED');
			}

			// We're passed a LI
			function onClickMenu() {
				$(this).toggleClass('LOCKED');
				return true;
			}
		</script>

		<script type="text/javascript">

		$( document ).ready( function () {
<!--
			$( 'a.tipSource' ).hover ( function () {
		
				var tipId = $(this ).attr ( 'href' );
				var tip = $( tipId );
				var tipSourceOffset = {};
				$( this ).offset ({ margin: true, padding: true,
									border: true, scroll: false }, tipSourceOffset);
				var scroll = {
					left: $( window ).scrollLeft(),
					top: $( window ).scrollTop()
				};
				var viewportWidth = $( window ).width();
				var viewportHeight = $( window ).height();
				var top, left;
		
				if ( (tipSourceOffset.left - scroll.left) < (viewportWidth / 2) ) {
					left = tipSourceOffset.left;
				} else {
					left = tipSourceOffset.left + $( this ).width() - tip.width();
				}
				top = tipSourceOffset.top + $( this ).height() + 5;
				tip.css ({
					top: top + 'px',
					left: left - 5 + 'px'
				}).show( 'fast' );
		
			}, function () {
				var tipId = $(this ).attr ( 'href' );
				$( tipId ).hide( 'fast' );
			}).click ( function () {
				// Disable the link
				return ( false );});
			$( 'div.tipContent' )
				.css({ position: 'absolute' })
				.removeClass( 'tipContent' )
				.addClass ( 'jq-tipContent' )
				.hide();
		});
-->
	</script>
