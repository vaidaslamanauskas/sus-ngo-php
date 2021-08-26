let monkey = document.querySelector('#see-no-evil');
let websites = document.querySelector('aside');

monkey.addEventListener('click', function() {
  if (websites.classList.contains('see-evil')) {
    websites.classList.remove('see-evil');
    monkey.innerText = 'show evil';
  } else {
    websites.classList.add('see-evil');
    monkey.innerText = 'hide evil';
  }
});