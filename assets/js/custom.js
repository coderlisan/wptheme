window.addEventListener('DOMContentLoaded', function () {
	let sup_a = document.querySelectorAll('.hs-has-sub-menu a');
	let sub_ul = document.querySelectorAll('.hs-has-sub-menu ul');
	let sub_li = document.querySelectorAll('.hs-has-sub-menu ul li');
	let sub_a = document.querySelectorAll('.hs-has-sub-menu ul li a');

	for (let i = 0; i < sup_a.length; i++) {
		sup_a[i].classList.add('nav-link');
		sup_a[i].classList.add('custom-nav-link');
		sup_a[i].classList.add('main-link-toggle');
	}

	for (let i = 0; i < sub_ul.length; i++) {
		sub_ul[i].classList.add('hs-sub-menu');
		sub_ul[i].classList.add('main-sub-menu');
	}

	for (let i = 0; i < sub_li.length; i++) {
		sub_li[i].classList.add('nav-item');
		sub_li[i].classList.add('submenu-item');
	}

	for (let i = 0; i < sub_a.length; i++) {
		sub_a[i].classList.add('nav-link');
		sub_a[i].classList.add('sub-menu-nav-link');
	}
   document.getElementById('menu-item-9').classList.remove("hs-has-sub-menu");
});
