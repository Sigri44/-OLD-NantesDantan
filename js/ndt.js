jQuery.noConflict();

/**
 * Infinite Scroll + Masonry + ImagesLoaded
 */
(function () {
    "use strict";
	var $container = jQuery('#grid-container');
	$container.imagesLoaded(function () {
		$container.masonry({
			itemSelector: '.grid-item',
            isAnimated: true
		});
	});

	$container.infinitescroll({
		navSelector  : ".navigation",
		nextSelector : ".navigation a",
		itemSelector : ".grid-item",
        loading: {
            finishedMsg: 'Toutes les photos ont été chargées.',
            img : '/wp-content/themes/nantesdantan/images/ajax-loader/loader-blue.gif'
        }
    },
		function (newElements) {
			var $newElems = jQuery(newElements).css({ opacity: 0 });
			$newElems.imagesLoaded(function () {
				$newElems.animate({ opacity: 1 });
				$container.masonry('appended', $newElems, true);
			});
        });
})();