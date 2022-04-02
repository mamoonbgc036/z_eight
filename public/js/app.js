function takeValue(){
    let product = $('#p_name').val();
    let qty = $('#qty').val();
    let unitPrice = $('#unit_price').val();
    let totalPrice = qty*unitPrice;

    let arry = [product, qty, unitPrice, totalPrice];
    storeToLocalstorage(arry);
}

function storeToLocalstorage(arry){
    let key = 1;
    if (localStorage.length) {
        key = localStorage.length;
        key++;
    }
    let arryToString = JSON.stringify(arry);
    localStorage.setItem(key, arryToString);
    $('#p_name').val(' ');
    $('#qty').val(' ');
    $('#unit_price').val(' ');
    alert(arry[0]+" is added");
}