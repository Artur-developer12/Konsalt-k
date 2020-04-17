let btn           = document.querySelectorAll('#btn_modal');
let modal         = document.querySelector('#modal');
let modalInner    = modal.firstElementChild;
let modalClose    = modalInner.firstElementChild;
let body          = modal.parentElement;
let nav_inner     = document.querySelector('#nav_inner');
let links         = document.querySelectorAll('.header_link');
let burger        = document.querySelector('#burger');
let header_nav    = document.querySelector('.header_nav');
let header        = document.querySelector('.header');
let header_height = header.scrollHeight;

// прелоадер
document.body.onload = function(){
	setTimeout(function(){
		let preloader = document.querySelector('#preloader');
		if (!preloader.classList.contains('done')) {
			preloader.classList.add('done');
		}
	},1000)
}
// бургер меню
 if (burger != undefined) {
 	burger.onclick = function(){
	 	header_nav.classList.toggle('active');
	 	this.classList.toggle('click');
	 	header_nav.classList.toggle('burger_animate');
	 	if (body.style.overflow !== 'hidden') {
	 		body.style.overflow ='hidden';
	 	}
	 	else{
	 		body.style.overflow ='auto';
	 	}
	}
 }
for (let i = 0; i < links.length; i++) {
 	links[i].onclick = () => {
		if (header_nav.classList.contains('active')) {
 			header_nav.classList.toggle('active');
			header_nav.classList.toggle('burger_animate');
			burger.classList.toggle('click');

	 		if (body.style.overflow == 'hidden') {
	 			body.style.overflow ='auto';
			}
		}
 	}
 } 
  
// плавный скролл
for (let link of links) {
  link.addEventListener('click', function (e) {
    e.preventDefault()
    
    const blockID = link.getAttribute('href').substr(1)
    
    document.getElementById(blockID).scrollIntoView({
      behavior: 'smooth',
      block: 'start'
    })
  })
}


// фиксированное меню
window.onscroll = function(){
	if (header_height-10 <= pageYOffset ) {
		nav_inner.classList.add('fixed');

	}
	else{
		nav_inner.classList.remove('fixed');
	}
}

 

//  модальные окно
function openModal(){
	for (let i = 0; i < btn.length; i++) {
		btn[i].onclick = () => {
		 	modal.classList.toggle('active');
		 	modalInner.classList.add('modalUp');
		 	body.style.overflow = 'hidden';
		}
	}
}
 
 function closeModal(){
 	window.onclick = (e) =>{
 		if(e.target == modal){
 			close ()
 		}
 	}
 
	modalClose.onclick = () =>  close ()

		function close (){
			modalInner.classList.remove('modalUp');
			modalInner.classList.add('modalDoun');
			setTimeout(function(){
				modalInner.classList.remove('modalDoun');
		 		modal.classList.toggle('active');
				body.style.overflow = 'auto';
			},400)
		 }
 }

 openModal();
 closeModal();

 // паралакс
document.querySelector('.intro').addEventListener('mousemove', function(e){
	let x = e.pageX / this.offsetWidth;
	let y = e.pageY / this.offsetHeight;

	document.querySelector('.intro_img').style.transform = `translate(-${x*30}px, -${y*30}px)`;
	document.querySelector('.intro_img').style.transition = '0.6s ease-out';
});


 

 

