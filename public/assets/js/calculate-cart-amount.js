function add_number(div) {

    console.log(div);
    // var x = document.querySelectorAll("input.");
    var item_quantity = parseFloat(document.getElementById("item_quantity").value);
    var item_amount = parseFloat(document.getElementById("item_amount").value);
    var result = item_quantity * item_amount;
    document.querySelector(".buttonx").innerHTML = result;
    // document.getElementById("txtresult").value = result;
}

function urlParam() {
    items = [];
    var url_string = window.location.href;
    var url = new URL(url_string);
    var length = url.searchParams.get("loop_length");
    var loop_id = 1;
    var totalInit = 0;
    for (let index = 0; index < length; index++) {

        var item_id = url.searchParams.get("item_id_" + loop_id);
        var item_name = url.searchParams.get("googles_item_" + loop_id);
        var amount = url.searchParams.get("amount_" + loop_id);
        var quantity = url.searchParams.get("quantity_" + loop_id);
        totalInit = parseFloat(amount) * parseInt(quantity) + parseFloat(totalInit);
        loop_id++;
        items.push({

            'amount': amount,
            'item_id': item_id,
            'item_name': item_name,
            'quantity': quantity
        })
    }
    document.querySelector(".total").innerHTML = totalInit;
    document.getElementById("final_amount").value = totalInit;
    // console.log(totalInit);
}

function remove(id) {
    var total = document.getElementById('final_amount').value;
    console.log(total);
    // var item_amount = parseFloat(document.getElementById("item_amount").value);
    const removed = items.splice(id, 1);
    const amount = parseFloat(removed[0].amount) * parseInt(removed[0].quantity)
    var totalnew = parseFloat(total) - parseInt(amount);
    console.log('total value now', totalnew);
    document.querySelector(".total").innerHTML = totalnew;

}

function plusButton(amount,quantity){

    const newamount = parseFloat(amount) * parseInt(quantity)
    var total = document.getElementById('final_amount').value;
    var totalnew = parseFloat(newamount) + parseInt(total);
    document.getElementById("final_amount").value = totalnew;
    document.querySelector(".total").innerHTML = totalnew;
    console.log(quantity)

}

function minusbutton(){

}
