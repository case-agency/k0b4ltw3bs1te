function resizeBlocks() {
	/* 
	$('.featured-block.artist').each(function() {
		var blockHeight = $(this).css('width');
		blockHeight = parseInt(blockHeight, 10);
		$(this).css('height', blockHeight*.6355);
	});
	$('.featured-block.one-column').each(function() {
		var blockHeight = $(this).css('width');
		blockHeight = parseInt(blockHeight, 10);
		$(this).css('height', blockHeight*.9539);
	});
	$('.featured-block.two-column').each(function() {
		var blockHeight = $(this).css('width');
		blockHeight = parseInt(blockHeight, 10);
		$(this).css('height', blockHeight*.9548);
	});
*/
	$('.featured-block.triangle').each(function() {
		var blockWidth = $(this).width();
		var blockHeight = $(this).height();
		var strokeColor = $(this).attr('data-block-color');
		var rightStroke = "solid " + strokeColor + " " + blockWidth + "px";
		var topStroke = "solid transparent " + blockHeight + "px";
		$(this).children('div').css("border-top", topStroke);
		$(this).children('div').css("border-right", rightStroke);	
	});
}

function updateRosterDisplay(roster, jsonData, page, callback){
  $.get('ajax/roster-featured-content.php', {
    val: jsonData,
    page: page,
    roster: roster
  }, function(data){
    $('#roster-featured-wrapper').html(data);
  });
}

$(document).ready(function() {

	updateRosterDisplay(
        getPrettyFragment('roster', 'featured'),
        getPrettyFragment('artist_letter', 'all'),
        getPrettyFragment('page', '1')
    );

});

$(window).resize(function() {
	resizeBlocks();
});