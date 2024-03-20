document.getElementById('login-form').addEventListener('submit', function(event) {
    event.preventDefault();
    
    var username = document.getElementById('username').value;
    var password = document.getElementById('password').value;
  
    // You can add more sophisticated validation logic here
    
    // Example: Check if the username and password are not empty
    if (username.trim() === '' || password.trim() === '') {
      document.getElementById('error-message').textContent = 'Username and password are required';
      return;
    }
  
    // If the validation passes, submit the form
    this.submit();
  });
  