
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
