/* tudo criado pelo chat gpt apenas para teste*/
const buttons = document.querySelectorAll('.my-button');

buttons.forEach(function(button) {
  button.addEventListener('click', function() {
    button.classList.toggle('active');
  });
});
