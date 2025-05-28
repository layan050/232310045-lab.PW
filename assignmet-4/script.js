// Global variables for greeting
let currentGreeting = "";

// Exercise 1: Time-Based Greeting Functions
function updateTimeAndGreeting() {
    const now = new Date();
    const timeString = now.toLocaleTimeString();
    const hour = now.getHours();

    // Update time display
    document.getElementById('timeDisplay').textContent = timeString;

    // Determine greeting based on time
    if (hour >= 5 && hour < 12) {
        currentGreeting = "Good Morning";
    } else if (hour >= 12 && hour < 18) {
        currentGreeting = "Good Afternoon";
    } else {
        currentGreeting = "Good Night";
    }

    // Update greeting display
    document.getElementById('greetingDisplay').textContent = currentGreeting;
}

function showGreetingAlert() {
    alert(currentGreeting);
}

// Exercise 2: Quadratic Equation Solver Functions
function calculateRoots() {
    // Clear previous results
    document.getElementById('errorDisplay').innerHTML = '';
    document.getElementById('resultsDisplay').innerHTML = '';

    // Get input values
    const a = parseFloat(document.getElementById('coeffA').value);
    const b = parseFloat(document.getElementById('coeffB').value);
    const c = parseFloat(document.getElementById('coeffC').value);

    // Validate inputs
    if (isNaN(a) || isNaN(b) || isNaN(c)) {
        showError("Please enter valid numbers for all coefficients");
        return;
    }

    if (a === 0) {
        showError("Coefficient 'a' cannot be zero for a quadratic equation");
        return;
    }

    // Calculate discriminant
    const discriminant = b * b - 4 * a * c;

    let results = {
        discriminant: discriminant.toFixed(4)
    };

    if (discriminant > 0) {
        // Two real roots
        const x1 = (-b + Math.sqrt(discriminant)) / (2 * a);
        const x2 = (-b - Math.sqrt(discriminant)) / (2 * a);
        results.type = "Two real roots";
        results.x1 = x1.toFixed(4);
        results.x2 = x2.toFixed(4);
    } else if (discriminant === 0) {
        // One real root
        const x = -b / (2 * a);
        results.type = "One real root (repeated)";
        results.x1 = x.toFixed(4);
        results.x2 = x.toFixed(4);
    } else {
        // Complex roots
        const realPart = (-b / (2 * a)).toFixed(4);
        const imaginaryPart = (Math.sqrt(-discriminant) / (2 * a)).toFixed(4);
        results.type = "Complex roots";
        results.x1 = `${realPart} + ${imaginaryPart}i`;
        results.x2 = `${realPart} - ${imaginaryPart}i`;
    }

    showResults(results);
}

function showError(message) {
    document.getElementById('errorDisplay').innerHTML = `
        <div class="error">${message}</div>
    `;
}

function showResults(results) {
    document.getElementById('resultsDisplay').innerHTML = `
        <div class="results">
            <h3>${results.type}</h3>
            <p><strong>Discriminant:</strong> ${results.discriminant}</p>
            <p><strong>x₁:</strong> ${results.x1}</p>
            <p><strong>x₂:</strong> ${results.x2}</p>
        </div>
    `;
}

// Initialize the application
function init() {
    // Update time and greeting immediately
    updateTimeAndGreeting();
    
    // Update time and greeting every second
    setInterval(updateTimeAndGreeting, 1000);
}

// Start the application when page loads
window.onload = init;