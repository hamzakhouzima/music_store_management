
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