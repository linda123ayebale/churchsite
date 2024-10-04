

// ***FOUNDATION SCHOOL***

// document.getElementById('found').addEventListener('click', function(){
//     const courseOutline = document.querySelector('.courseOutline');
//     if(courseOutline.style.display=== 'none' || courseOutline.style.display === ''){
//         courseOutline.style.display = 'block';

//     }else{
//         courseOutline.style.display = 'none';
//     }
// });

// **MATURITY SCHOOL**
// document.getElementById('mat').addEventListener('click', function(){
//     const courseOutline = document.querySelector('#matcourseoutline');
//     if(courseOutline.style.display=== 'none' || courseOutline.style.display === ''){
//         courseOutline.style.display = 'block';

//     }else{
//         courseOutline.style.display = 'none';
//     }
// });

// ***SCHOOL OF MINISTRY***

// document.getElementById('dli').addEventListener('click', function(){
//     //const courseOutline = document.querySelector('#schcourseoutline');
//     if(courseOutline.style.display=== 'none' || courseOutline.style.display === ''){
//         //courseOutline.style.display = 'block';

//     }else{
//        // courseOutline.style.display = 'none';
//     }
// });

// Get the modal
var modal = document.getElementById("formModal");

// Get the button that opens the modal
 var btn =  document.getElementById("registerBtn");

 //Get the span element that closes the model
 var span = document.getElementsByClassName("close")[0];

//  WHen the user clicks the button, open the modal
btn.onclick = function(){
    modal.style.display = "flex";
}

// Close the modal when the span x is clicked
span.onclick = function(){
    modal.style.display="none";
}

// CLose the modal when the user clicks anyhwere outside the modal
window.onclick = function(event){
    if(event.target == modal){
        modal.style.display="none";
    }
}


// // SLIDER NAVIGATION
//     let currentIndex = 1;
//     const slides =  document.querySelectorAll('.slide');
//     const totalSlides = slides.length;
//     const sliderWrapper = document.querySelector('.slider-wrapper');

//     // Initial set up to show the first slide 
//     sliderWrapper.style.transform = `translateX(-${currentIndex * 100}%)`;

//     function showSlide(index){
//         sliderWrapper.style.transition = 'transform 0.5s ease';
//         sliderWrapper.style.transform = `translateX(-${index * 16}%)`;
//     }

//     function nextSlide(){
//         currentIndex++;
//         showSlide(currentIndex);

//         if(currentIndex === totalSlides-1){
//             setTimeout(()=>{
//                 sliderWrapper.style.transition = 'none';
//                 currentIndex = 1;
//                 sliderWrapper.style.transform = `translateX(-${currentIndex * 100}%)`;
//             },500);
//         }
//     }

//     setInterval(nextSlide,3000);

//     document.querySelector('.slider').addEventListener('click', nextSlide);

