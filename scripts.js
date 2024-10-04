const projekti = "azuretesti"
const currentLocation = window.location.pathname;
const navLinks = document.querySelectorAll('nav a');

navLinks.forEach(link => {
  if(link.href.includes(currentLocation)) {
    link.classList.add('active');
  }
});

// Example starter JavaScript for disabling form submissions if there are invalid fields
(() => {
  'use strict'
  console.log('form validation start')
   const forms = document.querySelectorAll('.needs-validation')
  // Loop over them and prevent submission
  forms.forEach(form => {
    form.addEventListener('submit', event => {
      if (!form.checkValidity()) {
        event.preventDefault()
        event.stopPropagation()
        }
      form.classList.add('was-validated')
    }, false)
  })
})()
