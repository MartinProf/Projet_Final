
let total;


// Increasing Function
function increaseItem(param , itemPrice){

    let noOfItem = document.getElementById(param);
    let itemsPrice = document.getElementById(itemPrice).innerHTML.replace('$' , '');

        noOfItem.value = parseInt(noOfItem.value) + 1;
        total = document.getElementById('userTotalAmount').innerHTML = (noOfItem.value) * parseInt(itemsPrice);
        console.log(total);
        document.getElementById('numOfItem').innerHTML = noOfItem.value;
}

// Decreasing Function
function decreaseItem(param , itemPrice){

    let noOfItem = document.getElementById(param);
    let itemsPrice = document.getElementById(itemPrice).innerHTML.replace('$' , '');

        if (noOfItem.value <= 0) {
            noOfItem.value = 0;
            alert('Oder Can"t Be Negative');
        }
        else{
            noOfItem.value = parseInt(noOfItem.value) - 1;
            total = document.getElementById('userTotalAmount').innerHTML = (noOfItem.value) * itemsPrice;
            document.getElementById('numOfItem').innerHTML = noOfItem.value;
        }
    }
