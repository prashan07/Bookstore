var total = 0;
var items=0;
var msg="";


   function price(bookprice)
   {
    items++;
    total+=bookprice;


   }
const init=function(e){

    let btn = document.querySelector("#cart");
    btn.addEventListener('click',function()
    {
        window.document.location ='./prasun3.html';
        localStorage.setItem('value',total)
    });

};

document.addEventListener('DOMContentLoaded',function(){
    init();
})

   function displayoutput()
   {
    msg = "<table><tr><th>Checkout</th></tr>"
    msg+= "<tr><td>"
    msg+= "Total Books:"
    msg+= "</td><td>"
    msg+= items;
    msg+= "</td></tr>"
    msg+= "<tr><td>"
    msg+= "Total :"
    msg+= "</td><td>"
    msg+= toTimeString();
    msg+= "</td></tr>"
    msg+= "</table>"
    document.getElementById("outputdiv").innerhtml=msg;

   }

