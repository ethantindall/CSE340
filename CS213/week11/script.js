function products() {
    let total = 0
    book0 = document.getElementById("item_0").checked;
    book1 = document.getElementById("item_1").checked;
    book2 = document.getElementById("item_2").checked;
    book3 = document.getElementById("item_3").checked;
    if (book0 === true) {total += 5};
    if (book1 === true) {total += 9};
    if (book2 === true) {total += 12};
    if (book3 === true) {total += 15};
    document.getElementById("total").value = "$" +total;
}

function focus() {
    document.getElementById("first_name").focus();
}
