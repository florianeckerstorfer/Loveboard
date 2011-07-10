/* Author: Florian Eckerstorfer

*/

function createLove(action, page)
{
	$.post('ajax.php', { 'action': action, 'page': page, 'user_agent': navigator.userAgent },
		function(data) {
			log(data);
		}
	);
}

// Subscribe to Facebook Like/Unlike events
FB.Event.subscribe('edge.create', function(response) {
	createLove('like', response);
	log('liked');
	log(response);
});
FB.Event.subscribe('edge.remove', function(response) {
	createLove('unlike', response);
	log('unlicked');
	log(response);
});

// Callback for +1 button
function createPlusOne(response) {
	createLove(response.state == 'on' ? '+1' : '-1', response.href);
}


// Enable pusher logging - don't include this in production
// Pusher.log = function(message) {
//   if (window.console && window.console.log) window.console.log(message);
// };

// Flash fallback logging - don't include this in production
// WEB_SOCKET_DEBUG = true;

var pusher = new Pusher('0dcbb48772f95ddd1551');
var channel = pusher.subscribe('love');
channel.bind('create', function(data) {
	var row = $('<li />').addClass('row').hide()
			.html('<ul class="clearfix"><li class="id">' + data.id + '</li>'
					+ '<li class="action"><strong>' + data.action + '</strong> ' + data.page + '<br>'
					+ '<span class="user-agent">' + data.user_agent + '</span></li>'
					+ '<li class="created">' + data.created_at + '</li></ul>');
	$('#loves .header').after(row);
	row.addClass('new-row').slideDown(500, function() {
		setTimeout(function() {
			row.removeClass('new-row', 500);
		}, 1500);
	});
  // log(data);
});



















