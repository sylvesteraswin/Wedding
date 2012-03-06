/* Author: 

*/
var fbConSize = 0, wiConSize = 0;
$(window).load(function (){
	$('#loader').fadeOut('fast');
	$('#fb').show();
	loadCirclBg();
	loadFB;
	mCustomScrollbars();
	ClickEvents();
});

function loadCirclBg(){
	var img = $('<img />').attr('src','img/cBg.png')
												.load(function(){
													if (!this.complete || typeof this.naturalWidth == "undefined" || this.naturalWidth == 0){
													
													}else{
														$('#fHid').append(img);
														var iM = $('#fHid img').attr('src');
														//alert(iM);
														$('#circles').css(
															'background-image', 'url(' + iM + ')'
														);
														$('#circles').fadeIn('fast');
														$('#circles').removeClass('hidden');
													}
												});
}

var loadFB = (function(d, s, id) {
		  var js, fjs = d.getElementsByTagName(s)[0];
		  if (d.getElementById(id)) return;
		  js = d.createElement(s); js.id = id;
		  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=149012881864051";
		  fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));
		
//var loadGA = 

/*
function LoadJs(){
	var body   = document.body || document.getElementsByTagName('body')[0],
			je = document.createElement('script'),
			mw = document.createElement('script');
	
	/*
je.type = 'text/javascript';
	je.src = 'js/mylibs/jquery.easing.1.3.js';
	body.appendChild(je);
	
	mw.type = 'text/javascript';
	mw.src = 'js/mylibs/jquery.mousewheel.min.js';
	body.appendChild(mw);

	
	mCustomScrollbars();
}
*/

function ClickEvents(){
	$('ul.tabs li.greyGra').live('click', function(event){
		$this = $(this);
		if ($this.text() == 'AN'){
			getWish();
			fbDivSize();
		}
		event.preventDefault();
		//alert($this.attr('data-href'));
		$this.parent().find('.orangeGra').removeClass('orangeGra').addClass('greyGra');
		$this.removeClass('greyGra').addClass('orangeGra');
		$('#wish > div').fadeOut('fast');
		$('#' + $this.attr('data-href')).fadeIn('fast');
		/*
$('#' + $this.attr('data-href')).fadeIn('fast', function(){
			$('ul.tabs li').removeClass('orangeGra').addClass('greyGra');
			$this.removeClass('greyGra').addClass('orangeGra');
		});
		
*/
	});
	
	$('header span.contact').bind('mouseover mouseout', function(){
		$(this).children('img').toggleClass('swing');
	}).bind('click', function(){
		$('#contact').center().fadeIn('fast');
		$('#loader').fadeIn('slow');
	});
	
	$('#contact img[alt="Close"]').bind('click', function(){
		$('#loader').fadeOut('fast');
		$('#contact').center().fadeOut('slow');
	});

	$('ul.menu li:not(.current)').live('click', function(event){
		$this = $(this);
		event.preventDefault();
		//alert($this.attr('id'));
		$('#wrapper > div').each(function(){
			$(this).fadeOut(100, function(){
				$(this).css('visibility','hidden');
				$(this).removeClass('fadeInDown');
			});
		});
		$('#wrapper #' + $this.attr('id')).addClass('fadeInDown');
		$('#wrapper #' + $this.attr('id')).fadeIn(100, function(){
			$(this).css('visibility','visible');
		});
		$this.parent().find('li').removeClass('current').removeClass('fadeInLeft');
		$this.addClass('current').addClass('fadeInLeft');
	}).live('mouseover', function(){
		$(this).addClass('flash');
	}).live('mouseout', function(){
		$(this).removeClass('flash');
	});
	
	$('#wrapper > div').not('#photos').css('visibility','hidden');
	//$('#wrapper #photos').fadeIn('fast');
}

function mCustomScrollbars(){
	//alert('a');
	$("#sylPro_container").mCustomScrollbar("vertical",400,"easeOutCirc",1.05,"auto","yes","no",0);
	$("#monPro_container").mCustomScrollbar("vertical",400,"easeOutCirc",1.05,"auto","yes","no",0);
	$("#engGa_container").mCustomScrollbar("vertical",400,"easeOutCirc",1.05,"auto","yes","no",0);
	$("#wedIng_container").mCustomScrollbar("vertical",400,"easeOutCirc",1.05,"auto","yes","no",0);
	fbDivSize();
	setInterval('fbDivSize()', 2000);
}

function fbDivSize(){
	//alert('a');
	if ($('#fbWisCon_container .container').height() > fbConSize){
		fbConSize = $('#fbWisCon_container .container').height();
		//alert(fbConSize);
		$("#fbWisCon_container").mCustomScrollbar("vertical",400,"easeOutCirc",1.05,"auto","yes","no",0);
	}
	
	if ($('#wisCon_container .container').height() > wiConSize){
		fbConSize = $('#wisCon_container .container').height();
		//alert(fbConSize);
		$("#wisCon_container").mCustomScrollbar("vertical",400,"easeOutCirc",1.05,"auto","yes","no",0);
	}
}

function CircleCenter(){
	var a = $(window).width() - 1100;
	var theCenter = a/2
	$('#circles').css({
		'left' : a/2
	});
}

$(window).bind('resize',function(){
	//alert('a');
	CircleCenter();
})

$(document).ready(function(){
	CircleCenter();
	
	$('li.tIns:odd').addClass('odd');
	
	$("#wishform").validate({
		rules : {
			email : {
								required : true,
								email : true
							}
		},
		messages : {
			name : "Enter your name",
			email : {
				required : "Enter an email address"
			},
			msg : "Enter your message"
		},
		submitHandler : function() {sendWish();}
	});
	
});

function getWish(){
	$('#listDivLoad').show();
	var content = '';
	var randomnumber=Math.floor(Math.random()*10000000)
	$.getJSON('grab.php?timeid=' + randomnumber, function(data){
		$.each(data.posts, function(i, posts){
			content += '<div class="list"><div class="message">';
			content += '<div class="uiSelector hidden"><a href="#" data-i="'+ posts.post.i +'" title="remove" class="arrUp"></a></div>';
			content += '<span class="name">' + posts.post.name + '</span>';
			content += posts.post.msg;
			content += '<span class="date">'+ posts.post.time +'</span>'
			content += '</div></div>';
			$('#listDiv').empty();
			$(content).appendTo('#listDiv');
			$('#listDivLoad').fadeOut('fast');
		});
	});
	
	setTimeout('closeAppend()', 1000);
}

function closeAppend(){
	$('.list').each(function(){
		var $this = $(this);
		$this.bind('mouseover', function(){
			$this.find('div.uiSelector').removeClass('hidden');
		}).bind('mouseout', function(){
			$this.find('div.uiSelector').addClass('hidden');
		});
	});
	
	$('div.uiSelector').each(function(){
		var $this = $(this);
		$this.bind('click', function(event){
			var html = '';
			event.preventDefault();
			html += '<img alt="Close" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA8AAAAPCAYAAAA71pVKAAAAuElEQVQoU6WT4QqEIBCE9/2fzSISwUCiJxDrt7DdJ3hUh/cjF2Lb2ZlZNRP9xLquOo6jxhj1X9CHB58QXuZ51mEYNITQNACnDw8+OsEJwBhTHuec7vuuOeciIlODVw58dILjsizfBqD3Xo/jKGIyNXjlwEcnEFJKPwSWyETy0xh+2XNradM0qbW25NaW5HooOG7bdhNUI/A6scZNTODMxKuYGvwZ/ZO79vz6tLu+c9cN67rbNN7+VSfFsDnZ37n8hgAAAABJRU5ErkJggg==" />';
			html += '<h1>Remove Post</h1>';
			html += '<p>Please enter the e-mail address you entered to create this post.</p>';
			html += '<div class="right">';
			html += '<p class="rError"></p>'
			html += '<input type="text" tabindex="0" name="ver_email" id="ver_email" />';
			html += '<input type="hidden" name="ver_i" id="ver_i" value="'+ $this.find('a').attr('data-i') +'" />';
			html += '<input class="remove orangeGra" type="submit" value="Remove Post" name="ver_submit"/><span class="rloaderVer hidden">Checking Email..</span>';
			html += '</div>';
			$('#remove').empty();
			$(html).appendTo('#remove');
			$('#remove').center().fadeIn('fast');
			$('#load').hide();
			$('#loader').fadeIn('slow');
		});
	});
	
	$('#remove img[alt="Close"]').live('click', function(){
		$('#loader').fadeOut('fast');
		$('#remove').fadeOut('slow');
		$('#remove').empty();
	});
	
	$('#remove input[type="submit"]').live('click', function(){
		var s = "e=" + $('#ver_email').val() + '&i=' + $('#ver_i').attr('value');
		//alert(s);
		$.ajax({
			type : "GET",
			url : "eCheck.php",
			data: s,
			dataType:  'json',
			beforeSubmit: function(){
				$('span.rloaderVer').removeClass('hidden');
			},
			success: function(msg){
				if (msg.status == '1'){
					$('p.rError').html('Great!! Your post will be removed in 1 second.').addClass('rSuccess').fadeIn('slow');
					if(msg['delete'] == 'Done'){
						setTimeout(function(){
							$('#loader').fadeOut('fast');
							$('#remove').fadeOut('slow');
							$('#remove').empty();
							getWish();
						}, 1000);
					}
				}else{
					$('p.rError').html('Damn!!! Looks like the e-mail address you entered did not match.').fadeIn('slow');
				}
			}
			
		});
	});
}

function sendWish(){
	$('span.rloader').toggleClass('hidden');
	$.ajax({
		type : 'POST',
		url : 'insert.php',
		data : $('#wishform').serialize(),
		dataType : 'json',
		success : function(msg){
								if (msg.status == 'error'){
									alert(msg.message);
								}else{
									$('span.rloader').toggleClass('hidden');
									alert(msg.message);
									getWish();
									
								}
							}
	});
}

(function($){
	$(function(){
		$('div.balloon-left').balloons();
		$('div.balloon-right').balloons({side:'right'});
	})
})(jQuery);

(function($){
	$.fn.extend({
		center : function(){
			return this.each(function(){
				var top = ($(window).height() - $(this).outerHeight())/2;
				var left = ($(window).width() - $(this).outerWidth())/2;
				$(this).css({position : 'absolute', margin: 0, top: (top > 0 ? top : 0)+'px', left : (left > 0?left:0) + 'px'});
			});
		}
	});

	$.fn.balloons = function(options){
	 var balloons = this,
	 		 cssAnim = Modernizr && Modernizr.cssanimations,
	 		 opts = $.extend({}, $.fn.balloons.defaults, options),
	 		 getRand = function(min, max){
	 		 	return Math.floor(Math.random() * (min-max+1)) + max;
	 		 },
	 		 moveBalloons = function(){
	 		 	var ele = arguments[0] ? arguments[0] : $(this),
		 		 		$w = $(window),
		 		 		winh = '300',
		 		 		winw = '200';
		 		 		ele = ele instanceof jQuery ? ele : $(ele);
		 		 		ele.each(function(i,el){
		 		 			var balloon = $(el),
		 		 					bwidth = balloon.width(),
		 		 					bheight = balloon.height(),
		 		 					lpos = parseInt(balloon.css(opts.side)),
		 		 					tpos = parseInt(balloon.css('top')),
		 		 					ldis = getRand(-opts.speed,opts.speed),
		 		 					tdis = getRand(-opts.speed,opts.speed),
		 		 					lnew = lpos + ldis,
		 		 					tnew = tpos + tdis,
		 		 					pos = {},
		 		 					rmost = opts.side == 'left' ? lnew +bwidth : lnew,
		 		 					duration = getRand(opts.min, opts.max);
		 		 			pos[opts.side] = (lnew > 0 && rmost < winw) ? lnew : lpos;
		 		 			pos.top = (tnew > 0 && (tnew + bheight) < winh) ? tnew : tpos;
		 		 			if (cssAnim){
		 		 				pos['-webkit-transition-duration'] = pos['-moz-transition-duration'] = pos['transition-duration'] = duration + 'ms';
		 		 				balloon.css(pos);
		 		 				setTimeout(moveBalloons, duration, [balloon]);
		 		 			}else{
		 		 				balloon.animate(pos, duration, 'linear', moveBalloons);
		 		 			}
		 		 		});
	 		 };
	 if (cssAnim){
	 	this.css({
	 		'-webkit-transition-property': 'top, ' + opts.side,
      '-moz-transition-property': 'top, ' + opts.side,
      'transition-property': 'top, ' + opts.side,
      '-webkit-transition-timing-function': opts.easing,
      '-moz-transition-timing-function': opts.easing,
      'transition-timing-function': opts.easing
	 	});
	 }
	 
	 moveBalloons(this);
	 return this;
	 
	};
	
	$.fn.balloons.defaults = {
		speed : 20,
		min : 2000,
		max:3000,
		side:'left',
		easing:'linear'
	}
})(jQuery);






















