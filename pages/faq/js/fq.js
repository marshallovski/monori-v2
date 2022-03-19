let inp = document.getElementById('before').value;

document.getElementById('before').onchange(function () {
	switch (inp) {
		case 'Часто задаваемые вопросы':
			window.location.href = '?q=rq'
			break;
		case 'Список каналов':
			window.location.href = '?q=chlist'
			break;
		case 'Правила':
			window.location.href = '?q=rules';
			break;
	}

	if (inp.includes('дед инсайд') || inp.includes('zxc')) {
		alert('Мне очень жаль.');
		/*setTimeout(() => {
			window.location.href = 'http://lurkmore.to/%D0%9C%D0%B0%D0%BB%D0%BE%D0%BB%D0%B5%D1%82%D0%BD%D0%B8%D0%B9_%D0%B4%D0%BE%D0%BB%D0%B1%D0%BE%D0%B5%D0%B1'
		}, 2000);*/
	}
});
