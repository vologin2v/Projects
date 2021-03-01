

//Открытие всплывающего меню
document.getElementById('header-burger').onclick = function () {
	document.getElementById('mobile-menu').classList.add('mobile-menu_current')
	document.getElementById('header-burger').style.display = 'none';
	document.getElementById('header-close').style.display = 'block';
}
//Закрытие всплыващего меню 
document.getElementById('header-close').onclick = function () {
	document.getElementById('mobile-menu').classList.remove('mobile-menu_current')
	document.getElementById('header-burger').style.display = 'block';
	document.getElementById('header-close').style.display = 'none';
}

const telegram = document.querySelectorAll('.telegram');

for (let item of telegram) {
	item.insertAdjacentHTML('beforeEnd', "<div class='telegram_body'><iframe id='tgw_60374ebe3cf3925c3a1521c2' frameborder='0' scrolling='no' horizontalscrolling='no' verticalscrolling='no' width='100%' height='100%' async></iframe></div>");
	item.addEventListener('click', () => {
		$('.telegram_body').slideToggle();
	})
}
$(document).mouseup(function (e) {
	var container = $(".telegram_body");
	if (container.has(e.target).length === 0) {
		container.hide();
	}
});
document.addEventListener("DOMContentLoaded", function () { document.getElementById("tgw_60374ebe3cf3925c3a1521c2").setAttribute("src", "https://tgwidget.com/channel/v2.0/?id=60374ebe3cf3925c3a1521c2") });

const modal = document.querySelectorAll('.modal');
const modalBody = document.querySelector('.modal__body')

const btnRisk = document.querySelectorAll('.btn-risk');
const btnCallBack = document.querySelectorAll('.btn-callback');
const btnPolicy = document.querySelectorAll('.btn-policy');
const btnTraining = document.querySelectorAll('.btn-training');
const btnCallbackTraining = document.getElementById('btn-callback-training');
const btnBurger = document.getElementById('header-burger');
const mobileClose = document.getElementById('header-close');
const mobileLink = document.querySelectorAll('.mobile__link');
const mobileLinkTraining = document.getElementById('mobile-link-training');

const modalRisk = document.getElementById('modal-risk');
const modalCallBack = document.getElementById('modal-callback');
const modalPolicy = document.getElementById('modal-policy');
const modalTraining = document.getElementById('modal-training');
const modalMenu = document.getElementById('modal-menu');

const riskClose = document.getElementById('risk-close');
const callbackClose = document.getElementById('callback-close');
const policyClose = document.getElementById('policy-close');
const trainingClose = document.getElementById('training-close');
const btnClose = document.querySelectorAll('.modal__close');
const back = document.getElementById('back');
const body = document.getElementById('body');

for (let btn of btnRisk) {
	btn.addEventListener('click', () => {
		btnBurger.style.display = 'none';
		modalRisk.style.display = 'block';
		body.style.overflow = 'hidden';
	})
}


for (let btn of btnCallBack) {
	btn.addEventListener('click', () => {
		btnBurger.style.display = 'none';
		modalCallBack.style.display = 'block';
		body.style.overflow = 'hidden';
	})
}

btnTraining.onclick = function () {
	btnBurger.style.display = 'none';
	modalTraining.style.display = 'block';
}
for (let btn of btnTraining) {
	btn.addEventListener('click', () => {
		for (let modall of modal) {
			modall.style.display = 'none';
		}
		btnBurger.style.display = 'none';
		modalTraining.style.display = 'block';
	})
}
back.onclick = function () {
	modalTraining.style.display = 'none';
	btnBurger.style.display = 'block';
}
btnCallbackTraining.onclick = function () {
	modalTraining.style.display = 'none';
	modalCallBack.style.display = 'block';
}
for (let btn of btnPolicy) {
	btn.addEventListener('click', () => {
		for (let modall of modal) {
			modall.style.display = 'none';
		}
		btnBurger.style.display = 'none';
		modalPolicy.style.display = 'block';
		body.style.overflowY = 'hidden';
		modalPolicy.style.overflowY = 'scroll';
	})
}
for (let btn of btnClose) {
	btn.addEventListener('click', () => {
		for (let modall of modal) {
			modall.style.display = 'none';
		}
		btnBurger.style.display = 'block';

		body.style.overflowY = 'scroll';
	})
}

// btnBurger.onclick = function () {
// 	btnBurger.style.display = 'none';
// 	modalMenu.style.display = 'block';
// }
// mobileClose.onclick = function () {
// 	modalMenu.style.display = 'none';
// 	btnBurger.style.display = 'block';
// }
for (let btn of mobileLink) {
	btn.addEventListener('click', () => {
		modalMenu.style.display = 'none';
		btnBurger.style.display = 'block';
	})
}
// mobileLinkTraining.onclick = function () {
// 	modalTraining.style.display = 'block';
// 	btnBurger.style.display = 'none';
// }

$(document).mouseup(function (e) {
	var modalctr = $(".modal");
	var modal = $(".modal__content");
	if (!modal.is(e.target) && modal.has(e.target).length === 0) {
		modalctr.hide();
		body.style.overflowY = 'scroll';
	}
});





$(document).ready(function () {
	$('.accordeon__trigger').click(function () {
		$('.accordeon__wrapper').slideToggle();

		if ($('.accordeon__trigger').hasClass('accordeon_active')) {
			$('.accordeon__trigger').removeClass('accordeon_active');
			$('.accordeon__arrow').css("transform", "rotate(" + 0 + "deg)");
			$('#path').css("fill", "#000");
		} else {
			$('.accordeon__trigger').addClass('accordeon_active');
			$('.accordeon__arrow').css("transform", "rotate(" + 180 + "deg)");
			$('.accordeon__trigger').css('background-color:#fff');
			$('#path').css("fill", "#fff");
		}

	})
})





// Отправка данных на сервер
function send(event, php) {
	console.log("Отправка запроса");
	event.preventDefault ? event.preventDefault() : event.returnValue = false;
	var req = new XMLHttpRequest();
	req.open('POST', php, true);
	req.onload = function () {
		if (req.status >= 200 && req.status < 400) {
			json = JSON.parse(this.response); // Ебанный internet explorer 11
			console.log(json);

			// ЗДЕСЬ УКАЗЫВАЕМ ДЕЙСТВИЯ В СЛУЧАЕ УСПЕХА ИЛИ НЕУДАЧИ
			if (json.result == "success") {
				// Если сообщение отправлено
				alert("Ваше сообщение успешно отправлено! Большое спасибо!");
			} else {
				// Если произошла ошибка
				alert("Ошибка. Сообщение не отправлено");
			}
			// Если не удалось связаться с php файлом
		} else { alert("Ошибка сервера. Номер: " + req.status); }
	};

	// Если не удалось отправить запрос. Стоит блок на хостинге
	req.onerror = function () { alert("Ошибка отправки запроса"); };
	req.send(new FormData(event.target));
}