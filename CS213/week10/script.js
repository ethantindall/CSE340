function clearForm() {
    document.getElementById("mortForm").reset();
}

function validateApr() {
    let apr = document.forms["mortForm"]["apr"].value;
    if (apr < 0 || apr > 25 || apr == "") {
        document.getElementById("aprLabel").innerHTML = "APR - Please enter a value between 0.0% and 25.0%.";
        document.getElementById("apr").setAttribute("style", "background-color: rgba(255,0,0,.3);")
    }
    else {document.getElementById("aprLabel").innerHTML = "APR";
    document.getElementById("apr").setAttribute("style", "background-color: white;")
}
}

function validateTerm() {
    let term = document.forms["mortForm"]["term"].value;
    if (term < 0 || term > 40 || term =="") {
        document.getElementById("termLabel").innerHTML = "Loan Term - Please enter a value between 0 and 40.";
        document.getElementById("term").setAttribute("style", "background-color: rgba(255,0,0,.3);")

    }
    else {document.getElementById("termLabel").innerHTML = "Loan Term";
    document.getElementById("term").setAttribute("style", "background-color: white;")
}

}

function validateLoan() {
    let loan = document.forms["mortForm"]["amount"].value;
    if (loan == "") {
        document.getElementById("loanLabel").innerHTML = "Loan Amount - Please enter a loan amount.";
        document.getElementById("amount").setAttribute("style", "background-color: rgba(255,0,0,.3);")

    }
    else {document.getElementById("loanLabel").innerHTML = "Loan Amount";
        document.getElementById("amount").setAttribute("style", "background-color: white;")
}

}
