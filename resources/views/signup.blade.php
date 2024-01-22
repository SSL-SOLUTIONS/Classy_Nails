<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ClassyNails</title>
  <link rel="stylesheet" href="style.css">
  <style>
    
body {
  font-family: Arial, sans-serif;
  background-color:  #e91e63;
  margin: 0;
  padding: 0;
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
}

.container {
  background-color: #fff;
  border-radius: 8px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  overflow: hidden;
  width: 400px;
}

form {
  padding: 20px;
  box-sizing: border-box;
}

h2 {
  text-align: center;
}

input {
  width: 100%;
  padding: 10px;
  margin-bottom: 15px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

button {
  background-color:  #c53162;
  color: #fff;
  padding: 10px 15px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  font-size: 16px;
}

button:hover {
  background-color: #d33f77;
}

.switch-form {
  text-align: center;
  padding: 15px 0;
}

.switch-form a {
  color: #db61a8;
  text-decoration: none;
}

.switch-form a:hover {
  text-decoration: underline;
}
.error {
  color: red;
  margin-top: -10px;
  margin-bottom: 10px;
}

  </style>
</head>
<body>
<div class="container">
    <form id="signup-form" method="POST" action="{{ url('/signup') }}">
      @csrf
      <h2>Sign Up</h2>
      <input type="text" name="name" placeholder="Username" required>
      @error('name') <span class="error">{{ $message }}</span> @enderror
      <input type="email" name="email" placeholder="Email" required>
      @error('email') <span class="error">{{ $message }}</span> @enderror
      <input type="password" name="password" placeholder="Password" required>
      @error('password') <span class="error">{{ $message }}</span> @enderror
      <button type="submit">Sign Up</button>
      <p class="switch-form">Already have an account? <a href="{{route('signin')}}" onclick="toggleForm()">Sign In</a></p>
    </form>
  </div>
</body>
</html>
