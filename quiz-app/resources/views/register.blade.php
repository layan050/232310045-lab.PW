<!-- resources/views/register.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Registration Form</title>
  <style>
    body { font-family: Arial; background: #f3f3f3; padding: 40px; }
    form { background: white; padding: 20px; border-radius: 10px; max-width: 400px; margin: auto; }
    input, button { width: 100%; padding: 10px; margin-top: 10px; border-radius: 5px; border: 1px solid #ccc; }
    button { background-color: #4CAF50; color: white; }
  </style>
</head>
<body>
  <form onsubmit="return validateForm()">
    <h2>Registration</h2>
    <input type="text" id="name" placeholder="Full Name">
    <input type="email" id="email" placeholder="Email">
    <input type="password" id="password" placeholder="Password">
    <button type="submit">Register</button>
  </form>

  <script>
    function validateForm() {
      const name = document.getElementById("name").value;
      const email = document.getElementById("email").value;
      const password = document.getElementById("password").value;
      if (!name || !email || !password) {
        alert("All fields are required!");
        return false;
      }
      alert("Registration successful!");
      return true;
    }
  </script>
</body>
</html>
