/*Togglebutton hide sidebar*/

var toggleIcon = document.querySelector('#toggleIcon');

toggleIcon.addEventListener('click', function() {

	console.log('toggleIcon is working'); /* for debugging/testing*/

	var sidebar = document.querySelector('nav');
	sidebar.style.left = '-15%';

	var content = document.querySelector('div.content');
	content.style.width = '100%'

	var toggleIcon1 = document.querySelector('#toggleIcon1');
	toggleIcon1.removeAttribute('hidden');

	var toggleIcon = document.querySelector('#toggleIcon');
	toggleIcon.setAttribute('hidden', 'hidden');



})


var toggleIcon1 = document.querySelector('#toggleIcon1');

toggleIcon1.addEventListener('click', function() {

	console.log('toggleIcon1 is working'); /* for debugging/testing*/

	var sidebar = document.querySelector('nav');
	sidebar.style.left = '3%';

	var content = document.querySelector('div.content');
	content.style.width = '85%'

	var toggleIcon = document.querySelector('#toggleIcon');
	toggleIcon.removeAttribute('hidden');

	var toggleIcon1 = document.querySelector('#toggleIcon1');
	toggleIcon1.setAttribute('hidden', 'hidden');



})