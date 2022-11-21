
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
  




function showmodal(modal_id){
    //we select the value of the element with id="task-id" and affect modal_id as a value , we set modal_id as showmodal() parametre;
    document.getElementById("product_id").value=modal_id;
    }


function event1(){

        document.getElementById("product-save-btn").style.display='none';
        document.getElementById("product-update-btn").style.display='block';
    

       
    }

function event2(){

     document.getElementsByName("submit_form").style.display='block'; //bring it with query 
    document.getElementsByName("update-product").style.display='none';


    // alert("hahahaha");
   }
   // Wrap every letter in a span
var textWrapper = document.querySelector('.ml12');
textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

anime.timeline({loop: true})
  .add({
    targets: '.ml12 .letter',
    translateX: [40,0],
    translateZ: 0,
    opacity: [0,1],
    easing: "easeOutExpo",
    duration: 1200,
    delay: (el, i) => 500 + 30 * i
  }).add({
    targets: '.ml12 .letter',
    translateX: [0,-30],
    opacity: [1,0],
    easing: "easeInExpo",
    duration: 1100,
    delay: (el, i) => 100 + 30 * i
  });