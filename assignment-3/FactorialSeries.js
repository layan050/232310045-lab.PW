function factorial(n) {
    return n === 0 ? 1 : n * factorial(n - 1);
}

function seriesSum(n) {
    return (n * (n + 1)) / 2;
}

function calculateFactorialAndSeries() {
    const n = parseInt(document.getElementById("num").value);
    document.getElementById("output").innerHTML = `
        <p><strong>Factorial of ${n}:</strong> ${factorial(n)}</p>
        <p><strong>Sum of Series:</strong> ${seriesSum(n)}</p>
    `;
}
