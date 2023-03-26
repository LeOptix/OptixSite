// Obtener todos los elementos de la barra de navegación
const navItems = document.querySelectorAll('.nav-item');

// Obtener el nombre de la página actual
const currentPage = window.location.pathname;

// Recorrer cada elemento de la barra de navegación
navItems.forEach(item => {
  // Obtener el enlace del elemento
  const link = item.querySelector('a');

  // Si el enlace apunta a la página actual
  if (link.getAttribute('href') === currentPage) {
    // Agregar la clase "active" al elemento
    item.classList.add('active');
  }
});

//no funciona (fue lo unico que le pedi a chatgpt, casualmente. no parece que la IA vaya a reemplazarnos por ahora XD)