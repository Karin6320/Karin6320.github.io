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

form.addEventListener('submit', async(e) => {
  e.preventDefault();

  const firstName = document.getElementById('first_name').value;
  const email = document.getElementById('email').value;
  const message = document.getElementById('msg').value;
  const challenge = document.getElementById('challenge').value;

  if (challenge) {
    alert('Spam Detektovany: Nechajte toto pole prazdne');
    return; 
  }


  const requestBody = {
    systemEmail: 'karinlopatovska63@gmail.com',
    contactEmail: email,
    message: message
  };

  let response = await fetch('https://emailsenderitweek.azurewebsites.net/api/ContactForm', {
    method: 'POST',
    headers: {
      'Content-Type': 'application/json',
      Accept: "application/json"
    },
    body: JSON.stringify(requestBody)
  });

  let data = await response.json();
    console.log (data);
    
    if (data === 'Zadaný systémový email nie je validný') {

      alert('Zadaný systémový email nie je validný');

    } else if (data === 'Zadaný kontaktný email nie je validný') {

      alert('Zadaný kontaktný email nie je validný');

    } else if (data === 'Správa je prázdna, vaša žiadosť nebola odoslaná') {

      alert('Správa je prázdna, vaša žiadosť nebola odoslaná');
    } else if (data === 'Email bol poslany') {

      alert('Email bol odoslaný');
      form.reset();
    }
});
