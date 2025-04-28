// Start Login 
function validateLogin() {
	// Get form values
	const email = document.getElementById('login-email').value;
	const password = document.getElementById('login-password').value;
  
	// Check credentials (in a real app, this would check against a database)
	if (email === "Mennakhaled@gmail.com" && password === '123456') {
	  window.location.href = "Home.html";
	  return false; // Prevent default form submission
	} else {
	  // Show error message
	  const errorDiv = document.createElement('div');
	  errorDiv.className = 'alert alert-warning mb-3';
	  errorDiv.textContent = 'Email or Password is incorrect.';
  
	  const form = document.getElementById('loginForm');
	  
	  // Remove existing error if any
	  const existingError = form.querySelector('.alert');
	  if (existingError) existingError.remove();
	  
	  // Insert error message above the submit button
	  const submitButton = form.querySelector('input[type="submit"]');
	  form.insertBefore(errorDiv, submitButton.parentNode);
	  
	  return false; // Prevent form submission
	}
  }
  
// End Login
// Start for Review Popup











