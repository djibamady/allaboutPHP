// JavaScript pour la gestion de la résolution d'écran (exemple : masquer le menu sur les petits écrans)
const menu = document.querySelector('.menu');
const toggleButton = document.createElement('button');
toggleButton.classList.add('toggle-button');
toggleButton.innerHTML = '<span></span><span></span><span></span>';

toggleButton.addEventListener('click', () => {
  menu.classList.toggle('show');
});

header.appendChild(toggleButton);
