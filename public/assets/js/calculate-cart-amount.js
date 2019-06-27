function add_number(div) {

console.log(div);
    // var x = document.querySelectorAll("input.");
    var item_quantity = parseFloat(document.getElementById("item_quantity").value);
    var item_amount = parseFloat(document.getElementById("item_amount").value);
    var result = item_quantity * item_amount;
    document.querySelector(".buttonx").innerHTML = result;
   // document.getElementById("txtresult").value = result;
}
