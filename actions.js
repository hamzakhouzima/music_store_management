
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
  






function event1(){

        document.getElementById("product-save-btn").style.display='none';
        document.getElementById("product-update-btn").style.display='block';
    


    

       
    }

function event2(){
    document.getElementById("product-save-btn").style.display='block';
    document.getElementById("product-update-btn").style.display='none';


   }



   function scroll(){

    let scrollY=window.pageYOffset
    let position_category=document.querySelector('#main-div').offsetHeight;
    
    let position_top=document.querySelector('#main-div').offsetTop
    console.log(position_top)



   }
   window.addEventListener('scroll',scroll)

   document.querySelector('#btn-scroll').addEventListener('click',function(){
    window.pageYOffset=position_top
   })
 







   function getData(id,name,type,quantity,price,description){
   
    event1()

      document.getElementById("product_id").value = id;
      document.getElementById("name").value= name;
      document.getElementById("type").value= type;
      document.getElementById("quantity").value= quantity;
      document.getElementById("price").value= price;
      document.getElementById("description").value=description;

      


    
     
  
  }

  function reset_form(){
    document.getElementById("product-form").reset();
}

