$(document).ready(function() {

	$(".modal .data .check").click(function(event) {
		$(this).children('svg').fadeToggle(0);
		if ($(".modal .button").hasClass('disable')) {
			$(".modal .button").removeClass('disable');
		} else {
			$(".modal .button").addClass('disable');
		}
	});

	$(".modal.requestCall .button").click(function(event) {
		var btn = $(this);	
		if (!btn.hasClass('disable')) {
			btn.addClass('disable');
			var flag = true;
			$(".requestCall form input").each(function(index, el) {
				if ($(this).val().length == 0) {
					alert("Все поля обязательны для заполнения!");
					flag = false;
					return flag;
				}
			});
			if (flag) {
				var data = $(".requestCall form").serialize();
				$.ajax({
					url: "/feedback.php",
					type: "POST",
					data: data,
					success: function() {
						alert("В самое ближайшее время, мы с вами свяжемся!");
						$(".requestCall form input").each(function(index, el) {
							$(this).val("");
						});
						btn.removeClass('disable');
						closeModal();
					},
					error: function() {
						alert("Что-то пошло не так!");
					}
				});
			}
			
		}
	});

	$(".nav .requestCall .button").click(function(event) {
		viewModal("requestCall");
	});

	$(".nav .address").mouseover(function(event) {
		if (!$(".nav .address .allPoint").hasClass('active')) {
			$(".nav .address .allPoint").addClass('active');
		}
	});

	$(".nav .address").mouseout(function(event) {
		if ($(".nav .address .allPoint").hasClass('active')) {
			$(".nav .address .allPoint").removeClass('active');
		}
	});

	$(".nav .info .address .allPoint ul li").click(function(event) {
		if (!$(this).hasClass('active')) {
			$(".nav .info .address .allPoint ul li").each(function() {$(this).removeClass('active')});
			$(".nav .info .address .allPoint ." + $(this).attr("class")).addClass('active');
			/*$(".nav .info .address span").text($(this).text());*/
		}
	});

	$(".slider .banner .btn").click(function(event) {
		viewModal("requestCall");
	});

	$(".goods .tab").click(function(event) {
		if (!$(this).hasClass('active')) {
			$(".goods .tab.active").removeClass('active');
			$(this).addClass('active');
			var name = $(this).attr("id").split("_");
			$(".goods .list.active").removeClass('active');
			$(".goods #list_" + name[1]).addClass('active');
		}
	});

	$(".goods .types .type").click(function(event) {
		if (!$(this).hasClass('active')) {
			$(this).siblings(".type.active").removeClass('active');
			$(this).addClass('active')
			var name = $(this).attr("id").split("_");
			$(this).parents(".list").children('.section.active').removeClass('active');
			$("#section_" + name[1]).addClass('active');
		}
	});

	$(".goods .pagination .left").click(function(event) {
			var number = parseInt($(this).siblings('.number.active').text());
			if (number > 1) {
				pagination($(this), number, "left");
			}
	});

	$(".goods .pagination .number").click(function(event) {
		if (!$(this).hasClass('active')) {
			var number = parseInt($(this).text());
			pagination($(this), number, "center");	
		}
	});

	$(".goods .pagination .right").click(function(event) {
			var number = parseInt($(this).siblings('.number.active').text());
			var last =  parseInt($(this).siblings('.number').last().text());
			if (number < last) {
				console.log("yes");
				pagination($(this), number, "right");
			}
	});

	$(".feedback .button").click(function(event) {
		var btn = $(this);	
		if (!btn.hasClass('disable')) {
			btn.addClass('disable');
			var flag = true;
			$(".feedback .inputs input").each(function(index, el) {
				if (btn.val().length == 0) {
					alert("Все поля обязательны для заполнения!");
					flag = false;
					return flag;
				}
			});
			if (flag) {
				var data = $(".feedback form").serialize();
				$.ajax({
					url: "/feedback.php",
					type: "POST",
					data: data,
					success: function() {
						alert("В самое ближайшее время, мы с вами свяжемся!");
						$(".feedback .inputs input").each(function(index, el) {
							$(this).val("");
						});
						$(".feedback textarea").val("");
						btn.removeClass('disable');
					},
					error: function() {
						alert("Что-то пошло не так!");
					}
				});
			}
		}
	});

	$(".feedback .data .check").click(function(event) {
		$(this).children('svg').fadeToggle(0);
		if ($(".feedback .button").hasClass('disable')) {
			$(".feedback .button").removeClass('disable');
		} else {
			$(".feedback .button").addClass('disable');
		}
	});

	$(".modalBody").click(function (e) {
	    if (e.target.className.indexOf("modalBody") > -1) {
	        closeModal();
	    }
	});

	$(".modal .close").click(function () {
	    closeModal();
	});

	$(".footer .arrowUp").click(function(event) {
		$('html, body').animate({
		    scrollTop: 0
		}, 1000);
	});

});

function viewModal(cls) {
	$(".modalBody").css("display", "flex");
	$(".modalBody ." + cls).css("display", "block").addClass('fadeInDown');
}

// Закрытие модального окна
function closeModal() {
    var modal = $(".modalBody").children(".fadeInDown");
    modal.addClass("fadeOutUp").removeClass("fadeInDown");
    setTimeout(function () {
        $(".modalBody").fadeOut(300);
        modal.css("display", "none").removeClass("fadeOutUp");
    }, 500);
}

//
function pagination(th, number, edit) {
	if (edit == "left") {
		edit = 2;
	} else if (edit == "center") {
		edit = 1;
	} else if (edit == "right") {
		edit = 0;
	}
	th.parents('.pagination').children('.number').each(function(index, el) {
		if ((index + edit) == number) {
			$(this).addClass('active');
		} else {
			$(this).removeClass('active');
		}
	});
	th.parents('.section').children('.page').each(function(index, el) {
		if ((index + edit) == number) {
			$(this).addClass('active');
		} else {
			$(this).removeClass('active');
		}
	});
}