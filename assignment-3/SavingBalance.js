function calculateSavings() {
    // Get values from form
    let balance = parseFloat(document.getElementById("initialBalance").value);
    let interestRate = parseFloat(document.getElementById("interestRate").value);
    let months = parseInt(document.getElementById("months").value);

    // Validate inputs
    if (isNaN(balance) || isNaN(interestRate) || isNaN(months) || months < 1) {
        alert("Please enter valid numbers for all fields.");
        return;
    }

    // Convert interest rate to decimal
    let interestDecimal = interestRate / 100;

    // Store results
    let resultHTML = "<ul>";

    for (let i = 1; i <= months; i++) {
        // Calculate interest for the month
        let interest = balance * interestDecimal;
        balance += interest;

        // Append result for the month
        resultHTML += `<li>Month ${i}: Rp. ${balance.toLocaleString()}</li>`;
    }

    resultHTML += "</ul>";

    // Display results
    document.getElementById("output").innerHTML = resultHTML;
}
