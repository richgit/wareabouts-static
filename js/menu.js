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
