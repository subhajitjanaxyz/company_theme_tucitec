const closebtn=document.getElementsByClassName('difor-ioconfoff');
const mennubar123=document.getElementById('manubar-container232');
const iconx67r=document.getElementById('icon67232');


closebtn[0].addEventListener('click',()=>{
    mennubar123.classList.toggle("nemubarparents-toggle");
    iconx67r.classList.toggle("fa-x");
    iconx67r.classList.toggle("fa-bars");
})
console.log(closebtn);


// jQuery(document).ready(function(){
  
//     jQuery('.owl-carousel').owlCarousel({
//         loop:true,
//         margin:10,
//         nav:true,
//         autoPlay: 1000,
//         responsive:{
//             0:{
//                 items:1
//             },
//             600:{
//                 items:1
//             },
//             1000:{
//                 items:1
//             }
//         }
//     })
//     });