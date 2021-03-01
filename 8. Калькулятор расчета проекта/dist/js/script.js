

// Классы кнопок
const btnType = document.querySelectorAll('.btn-type');
const btnPriority = document.querySelectorAll('.btn-priority');
const btnMarket = document.querySelectorAll('.btn-market');
const btnPromotionType = document.querySelectorAll('.btn-promotion-type');
const btnPromotionGeo = document.querySelectorAll('.btn-promotion-geo');
const btnCurrencyOne = document.querySelectorAll('.btn-currency-one');
const btnCurrencyTwo = document.querySelectorAll('.btn-currency-two');
const btnConduct = document.querySelectorAll('.btn-conduct');
const calcGet = document.getElementById('calc-get'); //Получить предложение
const ruble = document.getElementById('ruble');
const dollar = document.getElementById('dollar');

//Вывод результата
const priceEconom = document.getElementById('price-econom');
const priceOptimal = document.getElementById('price-optimal');
const pricePremium = document.getElementById('price-premium');
const daysEconom = document.getElementById('days-econom');
const daysOptimal = document.getElementById('days-optimal');
const daysPremium = document.getElementById('days-premium');

const offerItem = document.querySelectorAll('.offer__item');
const itemEconom = document.getElementById('item-econom');
const itemOptimal = document.getElementById('item-optimal');
const itemPremium = document.getElementById('item-premium');

const offerConduct1 = document.getElementById('conduct-1');
const offerConduct2 = document.getElementById('conduct-2');
const offerConduct3 = document.getElementById('conduct-3');

const mb = document.getElementById('max-budget');

//Базовые коэффициенты
const baseSiteEconom = 7000;
const baseSiteOptimal = 12000;
const baseSitePremium = 20000;
const basePromotionEconom = 4000;
const basePromotionOptimal = 8000;
const basePromotionPremium = 12000;
const gain = 1;
const high1 = 1.4;
const high2 = 1.4;
const high3 = 1.4;
window.order = 1000; // порядок округления
window.curIcon = '₽'
ruble.onclick = function () {
	mb.placeholder = "От 20 000";
	window.curIcon = '₽';
	window.order = 1000;
}
dollar.onclick = function () {
	mb.placeholder = "От 200";
	window.curIcon = '$';
	window.order = 100;
}

// Коэффициенты
const cType = [
	{
		name: 'type-nothing',
		cyrName: 'Не выбрано',
		rate1: 2, days1: 7,
		rate2: 2, days2: 21,
		rate3: 2, days3: 34,
	},
	{
		name: 'cutaway',
		cyrName: 'Визитка',
		rate1: 1, days1: 4,
		rate2: 1, days2: 7,
		rate3: 1, days3: 12,
	},
	{
		name: 'landing',
		cyrName: 'Landing Page',
		rate1: 1.4, days1: 5,
		rate2: 1.4, days2: 10,
		rate3: 1.4, days3: 14,
	},
	{
		name: 'corporate',
		cyrName: 'Корпоративный',
		rate1: 2, days1: 7,
		rate2: 2, days2: 21,
		rate3: 2, days3: 34,
	},
	{
		name: 'shop',
		cyrName: 'Интернет-магазин',
		rate1: 3, days1: 10,
		rate2: 3, days2: 25,
		rate3: 3, days3: 35,
	}
]
const cPriority = [
	{
		name: 'priority-nothing',
		cyrName: 'Не выбрано',
		rate1: 1.2, days1: 1.2,
		rate2: 1.2, days2: 1.2,
		rate3: 1.2, days3: 1.2,
	},
	{
		name: 'content',
		cyrName: 'Контент',
		rate1: 1, days1: 1,
		rate2: 1, days2: 1,
		rate3: 1, days3: 1,
	},
	{
		name: 'face',
		cyrName: 'Дизайн',
		rate1: 1.2, days1: 1.2,
		rate2: 1.2, days2: 1.2,
		rate3: 1.2, days3: 1.2,
	}
]
const cMarket = [
	{
		name: 'market-nothing',
		cyrName: 'Не выбрано',
		rate1: 1.2, days1: 1.2,
		rate2: 1.2, days2: 1.2,
		rate3: 1.2, days3: 1.2,
	},
	{
		name: 'bb',
		cyrName: 'B2B',
		rate1: 1.2, days1: 1.2,
		rate2: 1.2, days2: 1.2,
		rate3: 1.2, days3: 1.2,
	},
	{
		name: 'bc',
		cyrName: 'B2C',
		rate1: 1, days1: 1,
		rate2: 1, days2: 1,
		rate3: 1, days3: 1,
	}
]
const cPromotionType = [
	{
		name: 'promotype-nothing',
		cyrName: 'Не выбрано',
		rate1: 1, days1: 1,
		rate2: 1, days2: 1,
		rate3: 1, days3: 1,
	},
	{
		name: 'base',
		cyrName: 'Нужно', //Временное решение
		rate1: 1, days1: 1,
		rate2: 1, days2: 1,
		rate3: 1, days3: 1,
	},
	{
		name: 'complex',
		cyrName: 'Комплексное',
		rate1: 2, days1: 2,
		rate2: 2, days2: 2,
		rate3: 2, days3: 2,
	},
	{
		name: 'needlessly',
		cyrName: 'Не нужно',
		rate1: 0, days1: 0,
		rate2: 0, days2: 0,
		rate3: 0, days3: 0,
	}

]
const cPromotionGeo = [
	{
		name: 'promogeo-nothing',
		cyrName: 'Не выбрано',
		rate1: 1.6, days1: 1.6,
		rate2: 1.6, days2: 1.6,
		rate3: 1.6, days3: 1.6,
	},
	{
		name: 'sity',
		cyrName: 'Город',
		rate1: 1, days1: 1,
		rate2: 1, days2: 1,
		rate3: 1, days3: 1,
	},
	{
		name: 'region',
		cyrName: 'Регион',
		rate1: 1.2, days1: 1.2,
		rate2: 1.2, days2: 1.2,
		rate3: 1.2, days3: 1.2,
	},
	{
		name: 'country',
		cyrName: 'Страна',
		rate1: 1.6, days1: 1.6,
		rate2: 1.6, days2: 1.6,
		rate3: 1.6, days3: 1.6,
	}
]
const cConduct = [
	{
		name: 'site',
		cyrName: 'Сайт',
		rate1: 1, rate2: 1, rate3: 1,
	},
	{
		name: 'promotion',
		cyrName: 'Продвижение',
		rate1: 1, rate2: 1, rate3: 1,

	}
]
const cCurrent = [
	{
		name: 'ruble',
		rate: 1
	},
	{
		name: 'dollar',
		rate: 80
	}
]

//Значения из массивов
let currentCType1 = cType[0].rate1;
let currentCType2 = cType[0].rate2;
let currentCType3 = cType[0].rate3;
let currentDaysType1 = cType[0].days1;
let currentDaysType2 = cType[0].days2;
let currentDaysType3 = cType[0].days3;
let cyrNameType = cType[0].cyrName;

let currentCPriority1 = cPriority[0].rate1;
let currentCPriority2 = cPriority[0].rate2;
let currentCPriority3 = cPriority[0].rate3;
let currentDaysPriority1 = cPriority[0].days1;
let currentDaysPriority2 = cPriority[0].days2;
let currentDaysPriority3 = cPriority[0].days3;
let cyrNamePriority = cPriority[0].cyrName;

let currentCMarket1 = cMarket[0].rate1;
let currentCMarket2 = cMarket[0].rate2;
let currentCMarket3 = cMarket[0].rate3;
let currentDaysMarket1 = cMarket[0].days1;
let currentDaysMarket2 = cMarket[0].days2;
let currentDaysMarket3 = cMarket[0].days3;
let cyrNameMarket = cMarket[0].cyrName;

let currentCPromotionType1 = cPromotionType[0].rate1;
let currentCPromotionType2 = cPromotionType[0].rate2;
let currentCPromotionType3 = cPromotionType[0].rate3;
let currentDaysPromotionType1 = cPromotionType[0].days1;
let currentDaysPromotionType2 = cPromotionType[0].days2;
let currentDaysPromotionType3 = cPromotionType[0].days3;
let cyrNamePromotionType = cPromotionType[0].cyrName;

let currentCPromotionGeo1 = cPromotionGeo[0].rate1;
let currentCPromotionGeo2 = cPromotionGeo[0].rate2;
let currentCPromotionGeo3 = cPromotionGeo[0].rate3;
let currentDaysPromotionGeo1 = cPromotionGeo[0].days1;
let currentDaysPromotionGeo2 = cPromotionGeo[0].days2;
let currentDaysPromotionGeo3 = cPromotionGeo[0].days3;
let cyrNamePromotionGeo = cPromotionGeo[0].cyrName;

let currentCConduct1 = cConduct[0].rate1;
let currentCConduct2 = cConduct[0].rate2;
let currentCConduct3 = cConduct[0].rate3;
let currentDaysConduct1 = cConduct[0].days1;
let currentDaysConduct2 = cConduct[0].days2;
let currentDaysConduct3 = cConduct[0].days3;

let currentCCurrent = cCurrent[0].rate;

//Type
for (let buttonType of btnType) {
	buttonType.addEventListener('click', () => {
		for (let item of btnType) {
			item.classList.add('buttons__item_active_off');
			buttonType.classList.remove('buttons__item_active_on');
		}
		buttonType.classList.remove('buttons__item_active_off');
		buttonType.classList.add('buttons__item_active_on');
		takeActiveType(buttonType);
	})
}
const takeActiveType = currentActiveType => {
	const dataTypeAttrValue = currentActiveType.dataset.name;
	const currentType = cType.find(buttonType => buttonType.name === dataTypeAttrValue);
	currentCType1 = currentType.rate1;
	currentCType2 = currentType.rate2;
	currentCType3 = currentType.rate3;
	currentDaysType1 = currentType.days1;
	currentDaysType2 = currentType.days2;
	currentDaysType3 = currentType.days3;
	cyrNameType = currentType.cyrName;
}
//Priority
for (let buttonPriority of btnPriority) {
	buttonPriority.addEventListener('click', () => {
		for (let item of btnPriority) {
			item.classList.add('buttons__item_active_off');
			buttonPriority.classList.remove('buttons__item_active_on');
		}
		buttonPriority.classList.remove('buttons__item_active_off');
		buttonPriority.classList.add('buttons__item_active_on');
		takeActivePriority(buttonPriority);
	})
}
const takeActivePriority = currentActivePriority => {
	const dataPriorityAttrValue = currentActivePriority.dataset.name;
	const currentPriority = cPriority.find(buttonPriority => buttonPriority.name === dataPriorityAttrValue);
	currentCPriority1 = currentPriority.rate1;
	currentCPriority2 = currentPriority.rate2;
	currentCPriority3 = currentPriority.rate3;
	currentDaysPriority1 = currentPriority.days1;
	currentDaysPriority2 = currentPriority.days2;
	currentDaysPriority3 = currentPriority.days3;
	cyrNamePriority = currentPriority.cyrName;
}
//Market
for (let buttonMarket of btnMarket) {
	buttonMarket.addEventListener('click', () => {
		for (let item of btnMarket) {
			item.classList.add('buttons__item_active_off');
			buttonMarket.classList.remove('buttons__item_active_on');
		}
		buttonMarket.classList.remove('buttons__item_active_off');
		buttonMarket.classList.add('buttons__item_active_on');
		takeActiveMarket(buttonMarket);
	})
}
const takeActiveMarket = currentActiveMarket => {
	const dataMarketAttrValue = currentActiveMarket.dataset.name;
	const currentMarket = cMarket.find(buttonMarket => buttonMarket.name === dataMarketAttrValue);
	currentCMarket1 = currentMarket.rate1;
	currentCMarket2 = currentMarket.rate2;
	currentCMarket3 = currentMarket.rate3;
	currentDaysMarket1 = currentMarket.days1;
	currentDaysMarket2 = currentMarket.days2;
	currentDaysMarket3 = currentMarket.days3;
	cyrNameMarket = currentMarket.cyrName;
}
//PromotionType
for (let buttonPromotionType of btnPromotionType) {
	buttonPromotionType.addEventListener('click', () => {
		for (let item of btnPromotionType) {
			item.classList.add('buttons__item_active_off');
			buttonPromotionType.classList.remove('buttons__item_active_on');
		}
		buttonPromotionType.classList.remove('buttons__item_active_off');
		buttonPromotionType.classList.add('buttons__item_active_on');
		takeActivePromotionType(buttonPromotionType);
	})
}
const takeActivePromotionType = currentActivePromotionType => {
	const dataPromotionTypeAttrValue = currentActivePromotionType.dataset.name;
	const currentPromotionType = cPromotionType.find(buttonPromotionType => buttonPromotionType.name === dataPromotionTypeAttrValue);
	currentCPromotionType1 = currentPromotionType.rate1;
	currentCPromotionType2 = currentPromotionType.rate2;
	currentCPromotionType3 = currentPromotionType.rate3;
	currentDaysPromotionType1 = currentPromotionType.days1;
	currentDaysPromotionType2 = currentPromotionType.days2;
	currentDaysPromotionType3 = currentPromotionType.days3;
	cyrNamePromotion = currentPromotionType.cyrName;
}
//PromotionGeo
for (let buttonPromotionGeo of btnPromotionGeo) {
	buttonPromotionGeo.addEventListener('click', () => {
		for (let item of btnPromotionGeo) {
			item.classList.add('buttons__item_active_off');
			buttonPromotionGeo.classList.remove('buttons__item_active_on');
		}
		buttonPromotionGeo.classList.remove('buttons__item_active_off');
		buttonPromotionGeo.classList.add('buttons__item_active_on');
		takeActivePromotionGeo(buttonPromotionGeo);
	})
}
const takeActivePromotionGeo = currentActivePromotionGeo => {
	const dataPromotionGeoAttrValue = currentActivePromotionGeo.dataset.name;
	const currentPromotionGeo = cPromotionGeo.find(buttonPromotionGeo => buttonPromotionGeo.name === dataPromotionGeoAttrValue);
	currentCPromotionGeo1 = currentPromotionGeo.rate1;
	currentCPromotionGeo2 = currentPromotionGeo.rate2;
	currentCPromotionGeo3 = currentPromotionGeo.rate3;
	currentDaysPromotionGeo1 = currentPromotionGeo.days1;
	currentDaysPromotionGeo2 = currentPromotionGeo.days2;
	currentDaysPromotionGeo3 = currentPromotionGeo.days3;
	cyrNameGeo = currentPromotionGeo.cyrName;
}
//Currency
for (let buttonCurrent of btnCurrencyOne) {
	buttonCurrent.addEventListener('click', () => {
		for (let item of btnCurrencyOne) {
			item.classList.add('buttons__item_active_off');
			buttonCurrent.classList.remove('buttons__item_active_on');
		}
		buttonCurrent.classList.remove('buttons__item_active_off');
		buttonCurrent.classList.add('buttons__item_active_on');
		takeActiveCurrent(buttonCurrent);
	})
}
const takeActiveCurrent = currentActiveCurrent => {
	const dataCurrentAttrValue = currentActiveCurrent.dataset.name;
	var currentCurrent = cCurrent.find(buttonCurrent => buttonCurrent.name === dataCurrentAttrValue);
	currentCCurrent = currentCurrent.rate;
	console.log(currentCurrent.name);
}
for (let btn of btnCurrencyTwo) {
	btn.addEventListener('click', () => {
		for (let item of btnCurrencyTwo) {
			item.classList.add('buttons__item_active_off');
			btn.classList.remove('buttons__item_active_on');
		}
		btn.classList.remove('buttons__item_active_off');
		btn.classList.add('buttons__item_active_on');
	})
}


//Нажатие на кнопку
calcGet.onclick = function () {
	document.getElementById('anchor5').classList.remove('section_none')
	replaceButton(1000)
	// Значения инпутов
	var maxBudget = document.getElementById('max-budget').value;
	var lastTime = document.getElementById('last-time').value;
	var products = document.getElementById('products').value;
	var services = document.getElementById('services').value;

	if (products <= 10) {
		var correctProducts1 = 1;
		var correctProducts2 = 1;
		var correctProducts3 = 1;
		var correctDaysProduts1 = 1;
		var correctDaysProduts2 = 1;
		var correctDaysProduts3 = 1;
	} else { };
	if (products > 10 && products < 100) {
		var correctProducts1 = 1.2;
		var correctProducts2 = 1.2;
		var correctProducts3 = 1.2;
		var correctDaysProduts1 = 1.2;
		var correctDaysProduts2 = 1.2;
		var correctDaysProduts3 = 1.2;
	} else { };
	if (products >= 100 && products < 1000) {
		var correctProducts1 = 1.5;
		var correctProducts2 = 1.5;
		var correctProducts3 = 1.5;
		var correctDaysProduts1 = 1.5;
		var correctDaysProduts2 = 1.5;
		var correctDaysProduts3 = 1.5;
	} else { };
	if (products >= 1000) {
		var correctProducts1 = 2;
		var correctProducts2 = 2;
		var correctProducts3 = 2;
		var correctDaysProduts1 = 2;
		var correctDaysProduts2 = 2;
		var correctDaysProduts3 = 2;
	} else { };
	if (services <= 10) {
		var correctServices1 = 1;
		var correctServices2 = 1;
		var correctServices3 = 1;
		var correctDaysServices1 = 1;
		var correctDaysServices2 = 1;
		var correctDaysServices3 = 1;
	} else { };
	if (services > 10 && services < 100) {
		var correctServices1 = 1.2;
		var correctServices2 = 1.2;
		var correctServices3 = 1.2;
		var correctDaysServices1 = 1.2;
		var correctDaysServices2 = 1.2;
		var correctDaysServices3 = 1.2;
	} else { };
	if (services >= 100 && services < 1000) {
		var correctServices1 = 1.5;
		var correctServices2 = 1.5;
		var correctServices3 = 1.5;
		var correctDaysServices1 = 1.5;
		var correctDaysServices2 = 1.5;
		var correctDaysServices3 = 1.5;
	} else { };
	if (services >= 1000) {
		var correctServices1 = 2;
		var correctServices2 = 2;
		var correctServices3 = 2;
		var correctDaysServices1 = 2;
		var correctDaysServices2 = 2;
		var correctDaysServices3 = 2;
	} else { };


	const calculation = () => {

		//Проверка даты
		var date1 = new Date(lastTime);
		var date2 = new Date();
		var daysLag = Math.ceil(Math.abs(date2.getTime() - date1.getTime()) / (1000 * 3600 * 24));
		if (daysLag <= 10) {
			var urgency = 1.50;
		}
		else {
			var urgency = 1;
		}

		let generalPrice1;
		let generalPrice2;
		let generalPrice3;

		let generalDays1;
		let generalDays2;
		let generalDays3;

		let generalGain = gain;


		//ФОРМУЛА
		// ОП - Общая стоимость
		// Гн - Гайн
		// БС - База сайт
		// БП - База продвижение
		// ТС - Тип сайта
		// П - Приоритет
		// ТП - Тип продвижения
		// Г - Гео
		// Т - Товары
		// У - Услуги
		// Р - Рынок
		// СР - Срочность
		// В - Валюта

		// ОП = (Гн х СР х (((БС х ТС х П) + (БП х ТП х Г)) х Т х У х Р) / В


		//ФОРМУЛА ДНИ
		//Количество дней
		// ТС - Тип сайта
		// П - Приоритет
		// ТП - Тип продвижения
		// Г - Гео
		// Т - Товары
		// У - Услуги
		// Р - Рынок

		//КД = (ТС * П + ТП * Г ) * Т * У * Р

		generalPrice1 = (generalGain * urgency * (((baseSiteEconom * currentCType1 * currentCPriority1) + (basePromotionEconom * currentCPromotionType1 * currentCPromotionGeo1)) * correctProducts1 * correctServices1 * currentCMarket1)) / currentCCurrent;
		let generalPrice1High = generalPrice1 * high1;
		generalDays1 = (currentDaysType1 * currentDaysPriority1 + currentDaysPromotionType1 * currentDaysPromotionGeo1) * correctDaysProduts1 * correctDaysServices1 * currentDaysMarket1;

		generalPrice2 = (generalGain * urgency * (((baseSiteOptimal * currentCType2 * currentCPriority2) + (basePromotionOptimal * currentCPromotionType2 * currentCPromotionGeo2)) * correctProducts2 * correctServices2 * currentCMarket2)) / currentCCurrent;
		let generalPrice2High = generalPrice2 * high2;
		generalDays2 = (currentDaysType2 * currentDaysPriority2 + currentDaysPromotionType2 * currentDaysPromotionGeo2) * correctDaysProduts2 * correctDaysServices2 * currentDaysMarket2;

		generalPrice3 = (generalGain * urgency * (((baseSitePremium * currentCType3 * currentCPriority3) + (basePromotionPremium * currentCPromotionType3 * currentCPromotionGeo3)) * correctProducts3 * correctServices3 * currentCMarket3)) / currentCCurrent;
		let generalPrice3High = generalPrice3 * high3;
		generalDays3 = (currentDaysType3 * currentDaysPriority3 + currentDaysPromotionType3 * currentDaysPromotionGeo3) * correctDaysProduts3 * correctDaysServices3 * currentDaysMarket3;

		//Округление значений

		//gp1 = generalPrice1
		//gd1r = generalDays1Round
		//gp1h = generalPrice1High
		//gp1hr = generalPrice1HighRound

		let gp1 = generalPrice1 / window.order;
		let gp1r = Math.round(gp1);
		let totalPrice1Low = gp1r * window.order;
		let totalPrice1LowStr = totalPrice1Low.toLocaleString();//Это значение выводить на сайт (Эконом ОТ)

		let gp1h = generalPrice1High / window.order;
		let gp1hr = Math.round(gp1h);
		let totalPrice1High = gp1hr * window.order;
		let totalPrice1HighStr = totalPrice1High.toLocaleString();//Это значение выводить на сайт (Эконом ДО)

		let gp2 = generalPrice2 / window.order;
		let gp2r = Math.round(gp2);
		let totalPrice2Low = gp2r * window.order;

		let gp2h = generalPrice2High / window.order;
		let totalPrice2LowStr = totalPrice2Low.toLocaleString(); //Это значение выводить на сайт (Оптимал ОТ)
		let gp2hr = Math.round(gp2h);
		let totalPrice2High = gp2hr * window.order;
		let totalPrice2HighStr = totalPrice2High.toLocaleString();//Это значение выводить на сайт (Оптимал ДО)

		let gp3 = generalPrice3 / window.order;
		let gp3r = Math.round(gp3);
		let totalPrice3Low = gp3r * window.order;
		let totalPrice3LowStr = totalPrice3Low.toLocaleString();//Это значение выводить на сайт (Премиум ОТ)

		let gp3h = generalPrice3High / window.order;
		let gp3hr = Math.round(gp3h);
		let totalPrice3High = gp3hr * window.order;
		let totalPrice3HighStr = totalPrice3High.toLocaleString();//Это значение выводить на сайт (Премиум ДО)

		let totalDays1 = Math.round(generalDays1); //Это значение выводить на сайт (Эконом)
		let totalDays2 = Math.round(generalDays2); //Это значение выводить на сайт (Оптимал)
		let totalDays3 = Math.round(generalDays3); //Это значение выводить на сайт (Премиум)

		//Вывод результатов
		priceEconom.innerHTML = `${totalPrice1LowStr} - ${totalPrice1HighStr} ${window.curIcon}`;
		priceOptimal.innerHTML = `${totalPrice2LowStr} - ${totalPrice2HighStr} ${window.curIcon}`;
		pricePremium.innerHTML = `${totalPrice3LowStr} - ${totalPrice3HighStr} ${window.curIcon}`;
		daysEconom.innerHTML = `От ${totalDays1} рабочих дней`;
		daysOptimal.innerHTML = `От ${totalDays2} рабочих дней`;
		daysPremium.innerHTML = `От ${totalDays3} рабочих дней`;

		// //Расчет стоимости ведения
		// var checkConductSite = document.getElementById('check-conduct-site');
		// var checkConductPromotion = document.getElementById('check-conduct-promotion');
		// const offerConduct = document.querySelectorAll('.offer__conduct');

		// if (checkConductSite.checked || checkConductPromotion.checked) {
		// 	for (let offerConductItem of offerConduct) {
		// 		offerConductItem.style.display = 'block'
		// 	}
		// 	if (checkConductSite.checked) {
		// 		var conductSite1 = 2500;
		// 		var conductSite2 = 2500;
		// 		var conductSite3 = 2500;
		// 	} else {
		// 		var conductSite1 = 0;
		// 		var conductSite2 = 0;
		// 		var conductSite3 = 0;
		// 	}
		// 	if (checkConductPromotion.checked) {
		// 		var conductPromotion1 = 2500;
		// 		var conductPromotion2 = 2500;
		// 		var conductPromotion3 = 2500;
		// 	} else {
		// 		var conductPromotion1 = 0;
		// 		var conductPromotion2 = 0;
		// 		var conductPromotion3 = 0;
		// 	}
		// } else {
		// 	for (let offerConductItem of offerConduct) {
		// 		offerConductItem.style.display = 'none'
		// 	}
		// }
		// conductPrice1 = (conductSite1 + conductPromotion1) / currentCCurrent;
		// conductPrice2 = (conductSite2 + conductPromotion2) / currentCCurrent;
		// conductPrice3 = (conductSite3 + conductPromotion3) / currentCCurrent;
		// offerConduct1.innerHTML = `+ ведение: ${conductPrice1} ${window.curIcon}/мес`;
		// offerConduct2.innerHTML = `+ ведение: ${conductPrice2} ${window.curIcon}/мес`;
		// offerConduct3.innerHTML = `+ ведение: ${conductPrice3} ${window.curIcon}/мес`;




		//Подсвечивание предложений
		if (maxBudget !== '') {
			for (let item of offerItem) {
				item.classList.remove('offer__item_on', 'offer__item_recommended', 'offer__item_border');
			}
			if (maxBudget >= totalPrice1Low) {
				itemEconom.classList.add('offer__item_on', 'offer__item_recommended');
			} else { }
			if (maxBudget >= totalPrice2Low) {
				itemOptimal.classList.add('offer__item_on', 'offer__item_recommended');
			} else { }
			if (maxBudget >= totalPrice3Low) {
				itemPremium.classList.add('offer__item_on');
			}
		}
		else {
			for (let item of offerItem) {
				item.classList.add('offer__item_on');
				item.classList.remove('offer__item_recommended', 'offer__item_border');
				itemOptimal.classList.add('offer__item_border')
			}
		}
		$('.offer__item_recommended').last().addClass('offer__item_border');
	}
	calculation();
}

//Включение/Выключение кнопок
const geoOn = document.querySelectorAll('.geo-on');
const geoOff = document.querySelectorAll('.geo-off');
const geoRow = document.getElementById('geo-row');
const checkOff = document.querySelectorAll('.check-off');


for (geoOnItem of geoOn) {
	geoOnItem.addEventListener('click', () => {
		geoRow.style.display = 'flex';

		if (!geoRow.classList.contains('show')) {
			geoRow.classList.add('show');
			geoRow.style.height = 'auto';
			var height = geoRow.clientHeight + 'px';
			geoRow.style.height = '0px';
			setTimeout(function () {
				geoRow.style.height = height;
			}, 0);
		} else {
		}
	})
}

for (geoOffItem of geoOff) {
	geoOffItem.addEventListener('click', () => {
		if (geoRow.classList.contains('show')) {
			geoRow.style.height = '0px';
			geoRow.addEventListener('transitionend',
				function () {
					geoRow.classList.remove('show');
				}, {
				once: true
			});
		} else { }
		for (checkOffItem of checkOff) {
			checkOffItem.classList.add('buttons__item_active_off');
			checkOffItem.setAttribute('disabled', '1');
			checkOffItem.checked = false;
		}
	})
}
// document.getElementById('promotion-complex').onclick = function () {
// 	for (checkOffItem of checkOff) {
// 		checkOffItem.classList.remove('buttons__item_active_off');
// 		checkOffItem.removeAttribute('disabled', '1');
// 		checkOffItem.checked = true;
// 	}
// }
// document.getElementById('promotion-base').onclick = function () {
// 	for (checkOffItem of checkOff) {
// 		checkOffItem.classList.add('buttons__item_active_off');
// 		checkOffItem.setAttribute('disabled', '1');
// 		checkOffItem.checked = false;
// 	}
// }
;
/*! WOW - v1.1.3 - 2016-05-06
* Copyright (c) 2016 Matthieu Aussaguel;*/(function () { var a, b, c, d, e, f = function (a, b) { return function () { return a.apply(b, arguments) } }, g = [].indexOf || function (a) { for (var b = 0, c = this.length; c > b; b++)if (b in this && this[b] === a) return b; return -1 }; b = function () { function a() { } return a.prototype.extend = function (a, b) { var c, d; for (c in b) d = b[c], null == a[c] && (a[c] = d); return a }, a.prototype.isMobile = function (a) { return /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(a) }, a.prototype.createEvent = function (a, b, c, d) { var e; return null == b && (b = !1), null == c && (c = !1), null == d && (d = null), null != document.createEvent ? (e = document.createEvent("CustomEvent"), e.initCustomEvent(a, b, c, d)) : null != document.createEventObject ? (e = document.createEventObject(), e.eventType = a) : e.eventName = a, e }, a.prototype.emitEvent = function (a, b) { return null != a.dispatchEvent ? a.dispatchEvent(b) : b in (null != a) ? a[b]() : "on" + b in (null != a) ? a["on" + b]() : void 0 }, a.prototype.addEvent = function (a, b, c) { return null != a.addEventListener ? a.addEventListener(b, c, !1) : null != a.attachEvent ? a.attachEvent("on" + b, c) : a[b] = c }, a.prototype.removeEvent = function (a, b, c) { return null != a.removeEventListener ? a.removeEventListener(b, c, !1) : null != a.detachEvent ? a.detachEvent("on" + b, c) : delete a[b] }, a.prototype.innerHeight = function () { return "innerHeight" in window ? window.innerHeight : document.documentElement.clientHeight }, a }(), c = this.WeakMap || this.MozWeakMap || (c = function () { function a() { this.keys = [], this.values = [] } return a.prototype.get = function (a) { var b, c, d, e, f; for (f = this.keys, b = d = 0, e = f.length; e > d; b = ++d)if (c = f[b], c === a) return this.values[b] }, a.prototype.set = function (a, b) { var c, d, e, f, g; for (g = this.keys, c = e = 0, f = g.length; f > e; c = ++e)if (d = g[c], d === a) return void (this.values[c] = b); return this.keys.push(a), this.values.push(b) }, a }()), a = this.MutationObserver || this.WebkitMutationObserver || this.MozMutationObserver || (a = function () { function a() { "undefined" != typeof console && null !== console && console.warn("MutationObserver is not supported by your browser."), "undefined" != typeof console && null !== console && console.warn("WOW.js cannot detect dom mutations, please call .sync() after loading new content.") } return a.notSupported = !0, a.prototype.observe = function () { }, a }()), d = this.getComputedStyle || function (a, b) { return this.getPropertyValue = function (b) { var c; return "float" === b && (b = "styleFloat"), e.test(b) && b.replace(e, function (a, b) { return b.toUpperCase() }), (null != (c = a.currentStyle) ? c[b] : void 0) || null }, this }, e = /(\-([a-z]){1})/g, this.WOW = function () { function e(a) { null == a && (a = {}), this.scrollCallback = f(this.scrollCallback, this), this.scrollHandler = f(this.scrollHandler, this), this.resetAnimation = f(this.resetAnimation, this), this.start = f(this.start, this), this.scrolled = !0, this.config = this.util().extend(a, this.defaults), null != a.scrollContainer && (this.config.scrollContainer = document.querySelector(a.scrollContainer)), this.animationNameCache = new c, this.wowEvent = this.util().createEvent(this.config.boxClass) } return e.prototype.defaults = { boxClass: "wow", animateClass: "animated", offset: 0, mobile: !0, live: !0, callback: null, scrollContainer: null }, e.prototype.init = function () { var a; return this.element = window.document.documentElement, "interactive" === (a = document.readyState) || "complete" === a ? this.start() : this.util().addEvent(document, "DOMContentLoaded", this.start), this.finished = [] }, e.prototype.start = function () { var b, c, d, e; if (this.stopped = !1, this.boxes = function () { var a, c, d, e; for (d = this.element.querySelectorAll("." + this.config.boxClass), e = [], a = 0, c = d.length; c > a; a++)b = d[a], e.push(b); return e }.call(this), this.all = function () { var a, c, d, e; for (d = this.boxes, e = [], a = 0, c = d.length; c > a; a++)b = d[a], e.push(b); return e }.call(this), this.boxes.length) if (this.disabled()) this.resetStyle(); else for (e = this.boxes, c = 0, d = e.length; d > c; c++)b = e[c], this.applyStyle(b, !0); return this.disabled() || (this.util().addEvent(this.config.scrollContainer || window, "scroll", this.scrollHandler), this.util().addEvent(window, "resize", this.scrollHandler), this.interval = setInterval(this.scrollCallback, 50)), this.config.live ? new a(function (a) { return function (b) { var c, d, e, f, g; for (g = [], c = 0, d = b.length; d > c; c++)f = b[c], g.push(function () { var a, b, c, d; for (c = f.addedNodes || [], d = [], a = 0, b = c.length; b > a; a++)e = c[a], d.push(this.doSync(e)); return d }.call(a)); return g } }(this)).observe(document.body, { childList: !0, subtree: !0 }) : void 0 }, e.prototype.stop = function () { return this.stopped = !0, this.util().removeEvent(this.config.scrollContainer || window, "scroll", this.scrollHandler), this.util().removeEvent(window, "resize", this.scrollHandler), null != this.interval ? clearInterval(this.interval) : void 0 }, e.prototype.sync = function (b) { return a.notSupported ? this.doSync(this.element) : void 0 }, e.prototype.doSync = function (a) { var b, c, d, e, f; if (null == a && (a = this.element), 1 === a.nodeType) { for (a = a.parentNode || a, e = a.querySelectorAll("." + this.config.boxClass), f = [], c = 0, d = e.length; d > c; c++)b = e[c], g.call(this.all, b) < 0 ? (this.boxes.push(b), this.all.push(b), this.stopped || this.disabled() ? this.resetStyle() : this.applyStyle(b, !0), f.push(this.scrolled = !0)) : f.push(void 0); return f } }, e.prototype.show = function (a) { return this.applyStyle(a), a.className = a.className + " " + this.config.animateClass, null != this.config.callback && this.config.callback(a), this.util().emitEvent(a, this.wowEvent), this.util().addEvent(a, "animationend", this.resetAnimation), this.util().addEvent(a, "oanimationend", this.resetAnimation), this.util().addEvent(a, "webkitAnimationEnd", this.resetAnimation), this.util().addEvent(a, "MSAnimationEnd", this.resetAnimation), a }, e.prototype.applyStyle = function (a, b) { var c, d, e; return d = a.getAttribute("data-wow-duration"), c = a.getAttribute("data-wow-delay"), e = a.getAttribute("data-wow-iteration"), this.animate(function (f) { return function () { return f.customStyle(a, b, d, c, e) } }(this)) }, e.prototype.animate = function () { return "requestAnimationFrame" in window ? function (a) { return window.requestAnimationFrame(a) } : function (a) { return a() } }(), e.prototype.resetStyle = function () { var a, b, c, d, e; for (d = this.boxes, e = [], b = 0, c = d.length; c > b; b++)a = d[b], e.push(a.style.visibility = "visible"); return e }, e.prototype.resetAnimation = function (a) { var b; return a.type.toLowerCase().indexOf("animationend") >= 0 ? (b = a.target || a.srcElement, b.className = b.className.replace(this.config.animateClass, "").trim()) : void 0 }, e.prototype.customStyle = function (a, b, c, d, e) { return b && this.cacheAnimationName(a), a.style.visibility = b ? "hidden" : "visible", c && this.vendorSet(a.style, { animationDuration: c }), d && this.vendorSet(a.style, { animationDelay: d }), e && this.vendorSet(a.style, { animationIterationCount: e }), this.vendorSet(a.style, { animationName: b ? "none" : this.cachedAnimationName(a) }), a }, e.prototype.vendors = ["moz", "webkit"], e.prototype.vendorSet = function (a, b) { var c, d, e, f; d = []; for (c in b) e = b[c], a["" + c] = e, d.push(function () { var b, d, g, h; for (g = this.vendors, h = [], b = 0, d = g.length; d > b; b++)f = g[b], h.push(a["" + f + c.charAt(0).toUpperCase() + c.substr(1)] = e); return h }.call(this)); return d }, e.prototype.vendorCSS = function (a, b) { var c, e, f, g, h, i; for (h = d(a), g = h.getPropertyCSSValue(b), f = this.vendors, c = 0, e = f.length; e > c; c++)i = f[c], g = g || h.getPropertyCSSValue("-" + i + "-" + b); return g }, e.prototype.animationName = function (a) { var b; try { b = this.vendorCSS(a, "animation-name").cssText } catch (c) { b = d(a).getPropertyValue("animation-name") } return "none" === b ? "" : b }, e.prototype.cacheAnimationName = function (a) { return this.animationNameCache.set(a, this.animationName(a)) }, e.prototype.cachedAnimationName = function (a) { return this.animationNameCache.get(a) }, e.prototype.scrollHandler = function () { return this.scrolled = !0 }, e.prototype.scrollCallback = function () { var a; return !this.scrolled || (this.scrolled = !1, this.boxes = function () { var b, c, d, e; for (d = this.boxes, e = [], b = 0, c = d.length; c > b; b++)a = d[b], a && (this.isVisible(a) ? this.show(a) : e.push(a)); return e }.call(this), this.boxes.length || this.config.live) ? void 0 : this.stop() }, e.prototype.offsetTop = function (a) { for (var b; void 0 === a.offsetTop;)a = a.parentNode; for (b = a.offsetTop; a = a.offsetParent;)b += a.offsetTop; return b }, e.prototype.isVisible = function (a) { var b, c, d, e, f; return c = a.getAttribute("data-wow-offset") || this.config.offset, f = this.config.scrollContainer && this.config.scrollContainer.scrollTop || window.pageYOffset, e = f + Math.min(this.element.clientHeight, this.util().innerHeight()) - c, d = this.offsetTop(a), b = d + a.clientHeight, e >= d && b >= f }, e.prototype.util = function () { return null != this._util ? this._util : this._util = new b }, e.prototype.disabled = function () { return !this.config.mobile && this.util().isMobile(navigator.userAgent) }, e }() }).call(this);;

//Премещение по якорю

// собираем все якоря; устанавливаем время анимации и количество кадров
const anchors = [].slice.call(document.querySelectorAll('button[href*="#"]')),
	animationTime = 500,
	framesCount = 200;
anchors.forEach(function (item) {
	// каждому якорю присваиваем обработчик события
	item.addEventListener('click', function (e) {
		// убираем стандартное поведение
		e.preventDefault();
		// для каждого якоря берем соответствующий ему элемент и определяем его координату Y
		let coordY = document.querySelector(item.getAttribute('href')).getBoundingClientRect().top + window.pageYOffset;
		// запускаем интервал, в котором
		let scroller = setInterval(function () {
			// считаем на сколько скроллить за 1 такт
			let scrollBy = coordY / framesCount;
			// если к-во пикселей для скролла за 1 такт больше расстояния до элемента
			// и дно страницы не достигнуто
			if (scrollBy > window.pageYOffset - coordY && window.innerHeight + window.pageYOffset < document.body.offsetHeight) {
				// то скроллим на к-во пикселей, которое соответствует одному такту
				window.scrollBy(0, scrollBy);
			} else {
				// иначе добираемся до элемента и выходим из интервала
				window.scrollTo(0, coordY);
				clearInterval(scroller);
			}
			// время интервала равняется частному от времени анимации и к-ва кадров
		}, animationTime / framesCount);
	});
});

//Показ экранов

document.getElementById('scroll-to-2').onclick = function () {
	document.getElementById('anchor1').classList.remove('section_none')
	document.getElementById('section-3').classList.remove('section_none')
}
document.getElementById('scroll-to-4').onclick = function () {
	document.getElementById('anchor3').classList.remove('section_none')
}
// document.getElementById('yes').onclick = function () {
// 	document.getElementById('anchor4').classList.remove('section_none')
// }


for (let item of document.querySelectorAll('.offer__button')) {
	item.addEventListener('click', () => {
		document.getElementById('anchor6').classList.remove('section_none')
	})
}

//Активация кнопок (формат коммуникации)
const btnFormat = document.querySelectorAll('.btn-format');
const btnMessenger = document.querySelectorAll('.btn-messenger');
const btnFiles = document.querySelectorAll('.btn-files');
const btnVideo = document.querySelectorAll('.btn-video');
const btnPayment = document.querySelectorAll('.btn-payment');

for (let buttonFormat of btnFormat) {
	buttonFormat.addEventListener('click', () => {
		for (let item of btnFormat) {
			item.classList.add('buttons__item_active_off');
			buttonFormat.classList.remove('buttons__item_active_on');
		}
		buttonFormat.classList.remove('buttons__item_active_off');
		buttonFormat.classList.add('buttons__item_active_on');
	})
}

for (let buttonMessenger of btnMessenger) {
	buttonMessenger.addEventListener('click', () => {
		for (let item of btnMessenger) {
			item.classList.add('buttons__item_active_off');
			buttonMessenger.classList.remove('buttons__item_active_on');
		}
		buttonMessenger.classList.remove('buttons__item_active_off');
		buttonMessenger.classList.add('buttons__item_active_on');
	})
}
for (let buttonFiles of btnFiles) {
	buttonFiles.addEventListener('click', () => {
		for (let item of btnFiles) {
			item.classList.add('buttons__item_active_off');
			buttonFiles.classList.remove('buttons__item_active_on');
		}
		buttonFiles.classList.remove('buttons__item_active_off');
		buttonFiles.classList.add('buttons__item_active_on');
	})
}
for (let buttonVideo of btnVideo) {
	buttonVideo.addEventListener('click', () => {
		for (let item of btnVideo) {
			item.classList.add('buttons__item_active_off');
			buttonVideo.classList.remove('buttons__item_active_on');
		}
		buttonVideo.classList.remove('buttons__item_active_off');
		buttonVideo.classList.add('buttons__item_active_on');
	})
}
for (let buttonPayment of btnPayment) {
	buttonPayment.addEventListener('click', () => {
		for (let item of btnPayment) {
			item.classList.add('buttons__item_active_off');
			buttonPayment.classList.remove('buttons__item_active_on');
		}
		buttonPayment.classList.remove('buttons__item_active_off');
		buttonPayment.classList.add('buttons__item_active_on');
	})
}

//Включение строчек Мессенджер, Видео связь
const subMessenger = document.getElementById('sub-messenger')
for (item of document.querySelectorAll('.call-sub-messenger')) {
	item.addEventListener('click', () => {
		if (!subMessenger.classList.contains('show')) {
			subMessenger.classList.add('show');
			subMessenger.style.height = 'auto';
			var height = subMessenger.clientHeight + 'px';
			subMessenger.style.height = '0px';
			setTimeout(function () {
				subMessenger.style.height = height;
			}, 0);
		} else {
		}
	})
}
document.getElementById('sub-messenger-off').onclick = function () {
	if (subMessenger.classList.contains('show')) {
		subMessenger.style.height = '0px';
		setTimeout(function () {
			subMessenger.classList.remove('show');
		}, 100)
	}
	else { }
}

const subVideo = document.getElementById('sub-video')
for (item of document.querySelectorAll('.call-sub-video')) {
	item.addEventListener('click', () => {
		if (!subVideo.classList.contains('show')) {
			subVideo.classList.add('show');
			subVideo.style.height = 'auto';
			var height = subVideo.clientHeight + 'px';
			subVideo.style.height = '0px';
			setTimeout(function () {
				subVideo.style.height = height;
			}, 0);
		} else {
		}
	})
}

//Замена текста кнопки
function replaceButton(time) {
	setTimeout(function () {
		calcGet.innerHTML = `Новое предложение`
	}, time)
}

//Получение значений с коммуникации
//Формат общения
Array.from(document.getElementsByClassName('btn-format')).forEach((button) => {
	button.addEventListener('click', (e) => {
		var c = e.target.getAttribute('data-name')
		if (c === 'com-format-v') {
			document.getElementById('send-format').value = "На ВЫ"
		} else if (c === 'com-format-t') {
			document.getElementById('send-format').value = "На ТЫ"
		}
	});
});

//Мессенджер
Array.from(document.getElementsByClassName('btn-messenger')).forEach((button) => {
	button.addEventListener('click', (e) => {
		var c = e.target.getAttribute('data-name')
		if (c === 'com-msg-mail') {
			window.comMsg = 'E-mail'
		} else if (c === 'com-msg-whatsapp') {
			document.getElementById('sub-messenger-label').innerHTML = `Ваш WhatsApp номер`
			window.comMsg = 'WhatsApp'
		} else if (c === 'com-msg-viber') {
			document.getElementById('sub-messenger-label').innerHTML = `Ваш Viber номер`
			window.comMsg = 'Viber'
		} else if (c === 'com-msg-telegram') {
			document.getElementById('sub-messenger-label').innerHTML = `Ваш Telegram`
			window.comMsg = 'Telegram'
		} else if (c === 'com-msg-facebook') {
			document.getElementById('sub-messenger-label').innerHTML = `Ваш Facebook`
			window.comMsg = 'Facebook'
		}
	});
});

//Обмен файлами
Array.from(document.getElementsByClassName('btn-files')).forEach((button) => {
	button.addEventListener('click', (e) => {
		var c = e.target.getAttribute('data-name')
		if (c === 'com-files-mail') {
			window.comFiles = 'E-mail'
		} else if (c === 'com-files-mcloud') {
			window.comFiles = 'Майл Облако'
		} else if (c === 'com-files-yadisk') {
			window.comFiles = 'Яндекс Диск'
		} else if (c === 'com-files-gdrive') {
			window.comFiles = 'Гугл Диск'
		} else if (c === 'com-files-dbox') {
			window.comFiles = 'DropBox'
		}
	});
});

//Видео звонки
Array.from(document.getElementsByClassName('btn-video')).forEach((button) => {
	button.addEventListener('click', (e) => {
		var c = e.target.getAttribute('data-name')
		if (c === 'com-video-skype') {
			document.getElementById('sub-video-label').innerHTML = `Ваш Skype`
			window.comVideo = 'Skype'
		} else if (c === 'com-video-ghang') {
			document.getElementById('sub-video-label').innerHTML = `Ваш Google HangOut`
			window.comVideo = 'Google HangOut'
		}
	});
});

//Оплата
Array.from(document.getElementsByClassName('btn-payment')).forEach((button) => {
	button.addEventListener('click', (e) => {
		var c = e.target.getAttribute('data-name')
		if (c === 'com-pay-doc') {
			window.comPay = 'Расчетный счет'
		} else if (c === 'com-pay-card') {
			window.comPay = 'Банковская карта'
		} else if (c === 'com-pay-ewallet') {
			window.comPay = 'Електронный кошелек'
		} else if (c === 'com-pay-crypt') {
			window.comPay = 'Криптовалюта'
		}
	});
});

//Тариф
document.getElementById('tariff-econom').onclick = function () {
	document.getElementById('send-tariff').value = 'Эконом';
	document.getElementById('send-price').value = priceEconom.innerHTML;
	document.getElementById('send-duration').value = daysEconom.innerHTML;
	console.log(document.getElementById('send-duration').value)
}
document.getElementById('tariff-optimal').onclick = function () {
	document.getElementById('send-tariff').value = 'Оптимал';
	document.getElementById('send-price').value = priceOptimal.innerHTML;
	document.getElementById('send-duration').value = daysOptimal.innerHTML;
}
document.getElementById('tariff-premium').onclick = function () {
	document.getElementById('send-tariff').value = 'Премиум';
	document.getElementById('send-price').value = pricePremium.innerHTML;
	document.getElementById('send-duration').value = daysPremium.innerHTML;
}
//Перенос значения инпута
document.getElementById('btn-continue').onclick = function () {
	document.getElementById('anchor7').classList.remove('section_none')
	//Максимальный бюджет
	document.getElementById("send-max-budget").value = document.getElementById("max-budget").value;

	//Емайл клиента
	document.getElementById("user_email").value = document.getElementById("user_email_input").value;

	//Крайний срок
	document.getElementById("send-last-time").value = document.getElementById("last-time").value;

	//Тип сайта
	document.getElementById("send-site-type").value = cyrNameType;


	//Товары
	document.getElementById("send-products").value = document.getElementById("products").value;

	//Услуги
	document.getElementById("send-services").value = document.getElementById("services").value;

	//Приоритет
	document.getElementById("send-priority").value = cyrNamePriority;

	//Маркет
	document.getElementById("send-market").value = cyrNameMarket;

	//Средний чек
	document.getElementById("send-average-check").value = document.getElementById("average-check").value;

	//Количество заказов в месяц
	document.getElementById("send-order-per-month").value = document.getElementById("order-per-month").value;

	//Тип продвижения
	document.getElementById("send-promotion-type").value = cyrNamePromotion;

	//География продвижения
	document.getElementById("send-promotion-geo").value = cyrNameGeo;

	//Месседжер
	document.getElementById('send-messenger').value = window.comMsg + ": " + document.getElementById('sub-messenger-input').value

	//Обмен файлами
	document.getElementById('send-files').value = window.comFiles

	//Видео связь
	document.getElementById('send-video').value = window.comVideo + ": " + document.getElementById('sub-video-input').value

	//Оплата
	document.getElementById('send-payment').value = window.comPay

	// Проверка данных
	console.log('Имя клиента:' + document.getElementById("send-name").value)
	console.log('Максимальный бюджет:' + document.getElementById("send-max-budget").value)
	console.log('E-mail клиента:' + document.getElementById("user_email").value)
	console.log('Крайний срок:' + document.getElementById("send-last-time").value)
	console.log('Тип сайта:' + document.getElementById("send-site-type").value)
	console.log('Количество продуктов:' + document.getElementById("send-products").value)
	console.log('Количество услуг:' + document.getElementById("send-services").value)
	console.log('Приоритет:' + document.getElementById("send-priority").value)
	console.log('Рынок:' + document.getElementById("send-market").value)
	console.log('Средний чек:' + document.getElementById("send-average-check").value)
	console.log('Количество заказов в месяц:' + document.getElementById("send-order-per-month").value)
	console.log('Продвижение:' + document.getElementById("send-promotion-type").value)
	console.log('География:' + document.getElementById("send-promotion-geo").value)
	console.log('Тариф:' + document.getElementById("send-tariff").value)
	console.log('Стоимость:' + document.getElementById("send-price").value)
	console.log('Длительность:' + document.getElementById("send-duration").value)
	console.log('Формат общения:' + document.getElementById("send-format").value)
	console.log('Мессенджер:' + document.getElementById("send-messenger").value)
	console.log('Обмен файлами:' + document.getElementById("send-files").value)
	console.log('Видео связь:' + document.getElementById("send-video").value)
	console.log('Оплата:' + document.getElementById("send-payment").value)
	return false;
}

//Анимация
var wow = new WOW;
wow.init();

//Закрытие модального окна

document.getElementById('modal1-close').onclick = function () {
	document.getElementById('modal1').style.opacity = '0';
}