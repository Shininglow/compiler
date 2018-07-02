; ( function ($) {
	'use strict';

	var needOpenSubMenu = $( 'a[href$="' + location.hash + '"]' ).closest( '.rd-mobilemenu_submenu' );
	needOpenSubMenu.toggleClass( 'open-menu' ).slideToggle( 300 );

	$( 'body' ).on( 'click', '.primery-item > .section_link', openSubMenu );

	function openSubMenu( event ) {
		var target = $( event.target ),
			subMenu = target.siblings( '.rd-mobilemenu_submenu' );

		if ( ! subMenu.hasClass( 'open-menu' ) ) {
			$( '.open-menu' ).removeClass( 'open-menu' ).slideUp( 300 );
		}

		if ( subMenu[0] ) {
			subMenu.toggleClass( 'open-menu' ).slideToggle( 300 );
			return false;
		}
	}

	$().UItoTop( {
		easingType: 'easeOutQuart',
		containerClass: 'toTop fa fa-angle-up'
	} );

	$( 'pre > code' ).each( function( i, block ) {
		hljs.highlightBlock( block );
	} );


	var ua = navigator.userAgent.toLocaleLowerCase(),
		regV = /ipod|ipad|iphone/gi,
		result = ua.match(regV),
		userScale = "";

	if (!result) {
		userScale = ",user-scalable=0"
	}
	document.write('<meta name="viewport" content="width=device-width,initial-scale=1.0' + userScale + '">');

	var $toggle = $( '.rd-mobilepanel_toggle' ),
		$pageContent = $( '.page-content' ),
		$mobileMenu = $( '.rd-mobilemenu' );

	$toggle.on( 'click', function( $event ) {
		$event.preventDefault();
		$toggle.toggleClass( 'active' );
		$pageContent.toggleClass( 'active' );
		$mobileMenu.toggleClass( 'active' );
	} );

	var languageSelector = $( '#language-selector' ),
		currentComponent = languageSelector.data( 'current-component' ),
		defaultLanguage = languageSelector.data( 'default-language' );

	$( 'body' ).on( 'change', languageSelector, changeLanguage );

	function changeLanguage( event ){
		var target = $( event.target ),
			value = target.val(),
			href = location.href,
			newHref = location.href.replace( currentComponent , value ),
			replace;

		if ( ! currentComponent ) {
			replace = ( -1 === location.href.indexOf( 'index.html' ) ) ? /\/$|$/ : '/index.html' ;
			newHref = location.href.replace( replace, value + '/index.html' );
		}

		location.href = newHref;
	}

	var $mobilePanel = $( '.rd-mobilepanel' ),
		mobilePanelHeight = 56,
		outerHeight = 0,
		oldOuterHeight = 0,
		scrollTop = 0;

	$( window ).on( 'load resize scroll', function() {
		 scrollTop = $( document ).scrollTop();

		outerHeight = $mobilePanel.outerHeight( true );

		if ( outerHeight !== mobilePanelHeight ) {
			oldOuterHeight = outerHeight;
		}

		if ( oldOuterHeight - mobilePanelHeight > scrollTop ) {
			$mobilePanel.removeClass( 'fixed' );
		} else {
			$mobilePanel.addClass( 'fixed' );
		}
	} );

	function formatState (state) {
		if ( undefined === state.id ) {
			return state.text;
		}

		var flag = $( state.element ).data('flag').toLowerCase(),
			$state = $( '<span class="language-option"><img class="language-flag" src="' + flag + '" alt="' + state.text + '">' + state.text + '</span>' );

		return $state;
	};

	$( '#language-selector' ).select2( {
		templateResult: formatState,
		templateSelection: formatState
	} );

	$( document ).on( 'scroll.anchor', anchorHandler );

	function anchorHandler(){
		var sections = $( '.toc-id' ),
			scrollTop = $( document ).scrollTop(),
			windowtHeight =  $( window ).height(),
			documentHeight = $( document ).height();

		sections.each( function( indx, element ){
			var element = $( element ),
				headerTopPosition = $( element ).position().top,
				hrefID = null;

			if ( ( scrollTop -10 ) < headerTopPosition && ( scrollTop + ( windowtHeight / 3 ) > headerTopPosition || ( scrollTop + windowtHeight ) === documentHeight ) ) {
				hrefID = $( element[0] ).attr('id');
			}

			if ( hrefID ) {
				addActiveClass( hrefID, '.article_link' );
				return false;
			}
		} );
	}

	$( 'body' ).on( 'click', '.rd-mobilemenu_ul .article_link', menuArticleHandler );
	function menuArticleHandler( event ) {
		var $target = $( event.target ),
			href = $target.attr( 'href' ),
			hash = href.substring( href.lastIndexOf( '#' ), href.length );

		addActiveClass( hash, '.article_link' );
	}

	$( 'body' ).on( 'click', '.rd-mobilemenu_ul .section_link', menuSectionHandler );
	function menuSectionHandler( event ) {
		var $target = $( event.target ),
			href = ( $( this ).hasClass( 'active' ) ) ? null: $target.attr( 'href' ).match( /(\w|-)*\/index\.html/g );

		if( null === href ){
			$( this ).removeClass( 'active' );
		} else {
			addActiveClass( href[0],'.section_link' );
		}
	}

	( function(){
		var href = window.location.href,
			mainButtonHref = href.match( /(\w|-)*\/index\.html/g );

		addActiveClass( window.location.hash, '.article_link' );
		addActiveClass( mainButtonHref[0], '.section_link' );
	}() );


	function addActiveClass ( url, buttonClass ) {
		var menuClass = '.rd-mobilemenu_ul',
			activeClass = 'active',
			activeButton = $( 'a[href$="' + url + '"]' + buttonClass );

		if( ! activeButton[0] && '.section_link' === buttonClass ){
			activeButton = $( '.section_link' ).eq(0);
		}

		$( menuClass + ' .' + activeClass + buttonClass ).removeClass( activeClass );
		activeButton.addClass( activeClass );
	}

} )( jQuery );

/* Orientation tablet fix
 ========================================================*/
$(function () {
	// IPad/IPhone
	var viewportmeta = document.querySelector && document.querySelector('meta[name="viewport"]'),
		ua = navigator.userAgent,

	gestureStart = function () {
		viewportmeta.content = "width=device-width, minimum-scale=0.25, maximum-scale=1.6, initial-scale=1.0";
	},

	scaleFix = function () {
		if (viewportmeta && /iPhone|iPad/.test(ua) && !/Opera Mini/.test(ua)) {
			viewportmeta.content = "width=device-width, minimum-scale=1.0, maximum-scale=1.0";
			document.addEventListener("gesturestart", gestureStart, false);
		}
	};

	scaleFix();
	// Menu Android
	if (window.orientation != undefined) {
		var regM = /ipod|ipad|iphone/gi,
			result = ua.match(regM);
		if (!result) {
			$('.sf-menus li').each(function () {
				if ($(">ul", this)[0]) {
					$(">a", this).toggle(
						function () {
							return false;
						},
						function () {
							window.location.href = $(this).attr("href");
						}
					);
				}
			})
		}
	}
});
