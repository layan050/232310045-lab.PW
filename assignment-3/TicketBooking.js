function calculatePrice() {
    const destination = document.getElementById("destination").value;
    const ticketClass = document.getElementById("class").value;
    const ticketCount = parseInt(document.getElementById("ticketCount").value);
    const isMember = document.getElementById("member").value === "Yes";

    const prices = {
        "Jakarta": { "Executive": 70000, "Business": 40000, "Economy": 10000 },
        "Solo": { "Executive": 80000, "Business": 50000, "Economy": 20000 },
        "Surabaya": { "Executive": 90000, "Business": 60000, "Economy": 30000 }
    };

    let pricePerTicket = prices[destination][ticketClass];
    let totalPrice = pricePerTicket * ticketCount;
    let discount = isMember ? totalPrice * 0.10 : 0;
    let finalPrice = totalPrice - discount;

    document.getElementById("output").innerHTML = `
        <h3>Booking Summary:</h3>
        <p><strong>Total Price:</strong> Rp. ${finalPrice.toLocaleString()}</p>
    `;
}
