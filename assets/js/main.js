/*
  ----------------------------------JS NAV----------------------------------------------
*/

/*--------------------------Despliegue de menu-------------------------------------*/
document.getElementById('toggleSidebar').addEventListener('click', function() {
  document.getElementById('sidebar').classList.toggle('hidden');
});
/*--------------------------Despliegue de sub-menu-------------------------------------*/

// Ocultar inicialmente todos los submenús
var subMenus = document.querySelectorAll(".sub-menu");
subMenus.forEach(function(subMenu) {
  subMenu.style.display = "none";
});

// Agregar evento de clic a los elementos dentro de nav-item
var navItems = document.querySelectorAll(".nav-item");
navItems.forEach(function(navItem) {
  navItem.addEventListener("click", function() {
    var subMenu = this.querySelector(".sub-menu");
    if (subMenu) {
      subMenu.classList.toggle("collapsed");
      
      if (subMenu.classList.contains("collapsed")) {
        subMenu.style.display = "none";
        this.querySelector(".arrowIcon").classList.remove("bi-chevron-down");
        this.querySelector(".arrowIcon").classList.add("bi-chevron-right");
      } else {
        subMenu.style.display = "block";
        this.querySelector(".arrowIcon").classList.remove("bi-chevron-right");
        this.querySelector(".arrowIcon").classList.add("bi-chevron-down");
      }
    }
  });
});