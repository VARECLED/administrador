/*---------------------------------Cambio de Modo--------------------------- */

// Detectar la preferencia del sistema operativo o navegador
const prefersDarkMode = window.matchMedia('(prefers-color-scheme: dark)').matches;
const prefersLightMode = window.matchMedia('(prefers-color-scheme: light)').matches;

// Aplicar el modo según la preferencia
if (prefersDarkMode) {
  document.body.classList.add('dark-mode');
} else if (prefersLightMode) {
  document.body.classList.add('light-mode');
}

// Cambiar el modo y el icono al hacer clic en el botón
function toggleMode() {
  document.body.classList.toggle('dark-mode');
  document.body.classList.toggle('light-mode');

  const modeIcon = document.getElementById('modeIcon');
  if (document.body.classList.contains('dark-mode')) {
    modeIcon.classList.remove('bi-moon-stars-fill');
    modeIcon.classList.add('bi-brightness-high-fill'); // Cambiar al icono del modo oscuro
  } else {
    modeIcon.classList.remove('bi-brightness-high-fill');
    modeIcon.classList.add('bi-moon-stars-fill'); // Cambiar al icono del modo claro
  }
}


/* Boton de filtro */

// Obtén el botón de colapsar y el elemento colapsable correspondiente
const filtroButton = document.getElementById('filtroButton');
const filtroCollapse = document.getElementById('filtroCollapse');

// Agrega un evento de clic al botón de colapsar
filtroButton.addEventListener('click', () => {
  // Alterna la clase 'collapsed' en el botón de colapsar
  filtroButton.classList.toggle('collapsed');

  // Obtiene el atributo 'aria-expanded' del botón
  const isExpanded = filtroButton.getAttribute('aria-expanded') === 'true';

  // Cambia el valor del atributo 'aria-expanded' del botón
  filtroButton.setAttribute('aria-expanded', !isExpanded);

  // Cambia el estado del colapso
  if (isExpanded) {
    filtroCollapse.classList.remove('show');
  } else {
    filtroCollapse.classList.add('show');
  }
});
