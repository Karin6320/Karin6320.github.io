$(document).ready(function () {
    $("form").submit(handleSubmit);
  });

  function handleSubmit(event) {
    event.preventDefault();

    var message = $('#msg').val();
    var email = $('#email').val();
    
    console.log(message);
}

const form = document.querySelector('form');

form.addEventListener('submit', (e) => {
  e.preventDefault();

  const firstName = document.getElementById('first_name').value;
  const email = document.getElementById('email').value;
  const message = document.getElementById('msg').value;

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
      // Handle the response data
      if (data === 'The entered system email is not valid') {
        // Handle system email validation error
        alert('Invalid System Email: The entered system email is not valid.');
      } else if (data === 'The entered contact email is not valid') {
        // Handle contact email validation error
        alert('Invalid Contact Email: The entered contact email is not valid.');
      } else if (data === 'The message is empty, your request has not been sent') {
        // Handle empty message error
        alert('Empty Message: The message is empty. Your request has not been sent.');
      } else if (data === 'Email has been sent') {
        // Handle successful email sending
        alert('Email Sent: The email has been sent successfully.');
      }
    })
    .catch(error => {
      console.error('Error:', error);
    });
});
