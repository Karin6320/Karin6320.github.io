$(document).ready(function () {
  $("form").submit(handleSubmit);
});

function handleSubmit(event) {
  event.preventDefault();

  var msg = $('#msg').val();
  var email = $('#email').val();
  
  console.log(msg);
}

const form = document.querySelector('form');

form.addEventListener('submit', (e) => {
  e.preventDefault();

  const firstName = document.getElementById('first_name').value;
  const email = document.getElementById('email').value;
  const message = document.getElementById('exampleFormControlTextarea1').value;

  const requestBody = {
    systemEmail: 'karinlopatovska63@gmail.com',
    contactEmail: email,
    message: message
  };

  fetch('https://emailsenderitweek.azurewebsites.net/api/ContactForm', {
    method: 'POST',
    headers: {
      'Content-Type': 'application/json'
    },
    body: JSON.stringify(requestBody)
  })
    .then(response => {
      if (response.ok) {
        return response.text();
      } else {
        throw new Error('Error: ' + response.status);
      }
    })
    .then(data => {
      if (data === 'Zadaný systémový email nie je validný') {

      } else if (data === 'Zadaný kontaktný email nie je validný') {

      } else if (data === 'Správa je prázdna, vaša žiadosť nebola odoslaná') {

      } else if (data === 'Email bol odoslany') {
        // Handle successful email sending
      }
    })
    .catch(error => {
      console.error('Error:', error);
    });
});
