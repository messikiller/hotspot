$(document).ready(function(){
	var settings = {
		'viewportWidth' : '100%',
		'viewportHeight' : '100%',
		'fitToViewportShortSide' : true,
		'contentSizeOver100' : false,
		'startScale' : .5,
		'startX' : 1860,
		'startY' : 2830,
		'animTime' : 500,
		'draggInertia' : 10,
		'imgDir' : 'Public/hubbleImgSrc/',
		'mainImgWidth' : 5000,
		'mainImgHeight' : 5000,
		'intNavEnable' : true,
		'intNavPos' : 'B',
		'intNavAutoHide' : false,
		'intNavMoveDownBtt' : false,
		'intNavMoveUpBtt' : false,
		'intNavMoveRightBtt' : false,
		'intNavMoveLeftBtt' : false,
		'intNavZoomBtt' : true,
		'intNavUnzoomBtt' : true,
		'intNavFitToViewportBtt' : true,
		'intNavFullSizeBtt' : true,
		'mapEnable' : true,
		'mapPos' : 'BL',
		'popupShowAction' : 'click',
		'testMode' : false
	};

	$('#myDiv').lhpGigaImgViewer(settings, 'MyHotspots');

	$("#myDiv").resizable({
		resize: function(event, ui) {
			$('#resizeIco').hide();
			$(this).lhpGigaImgViewer('adaptsToContainer');
		}
	});
});
