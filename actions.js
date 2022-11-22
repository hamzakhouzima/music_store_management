
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
    document.getElementById("product-save-btn").style.display='block';
    document.getElementById("product-update-btn").style.display='none';


    // alert("hahahaha");
   }



   function scroll(){

    let scrollY=window.pageYOffset
    //console.log(scrollY)
    let position_category=document.querySelector('#main-div').offsetHeight;
    
    let position_top=document.querySelector('#main-div').offsetTop
    console.log(position_top)



   }
   window.addEventListener('scroll',scroll)

   document.querySelector('#btn-scroll').addEventListener('click',function(){
    window.pageYOffset=position_top
   })
 







   function getData(id,name,type,quantity,price,description){
    //  get the data saved in the attributes
    event1()

    //   document.getElementById("id").value = id;
      document.getElementById("name").value= name;
      document.getElementById("type").value= type;
      document.getElementById("quantity").value= quantity;
      document.getElementById("price").value= price;
      document.getElementById("description").value=description;
    
    
     
  
  }

  function reset_form(){
    document.getElementById("product-form").reset();
}

  //<?php echo $row['id']?>,<?php echo $row['name']?>,<?php echo $row['type']?>,<?php echo $row['quantity']?>,<?php echo $row['price']?>,<?php echo $row['description']?>