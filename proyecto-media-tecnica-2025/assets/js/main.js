/* ================================
   main.js - Lógica de la página
   ================================ */

// Esperar a que cargue el DOM

/*=============== GSAP ANIMATION ===============*/
gsap.from('.home__points', 1.5, { opacity: 0, y: -300, delay: .2 })
gsap.from('.home__rocket', 1.5, { opacity: 0, y: 300, delay: .3 })
gsap.from('.home__planet-1', 1.5, { opacity: 0, x: -200, delay: .8 })
gsap.from('.home__planet-2', 1.5, { opacity: 0, x: 200, delay: 1 })
gsap.from('.home__cloud-1', 1.5, { opacity: 0, y: 200, delay: 1.2 })
gsap.from('.home__cloud-2', 1.5, { opacity: 0, x  : 200, delay: 1.3 })
gsap.from('.home__content', 1.5, { opacity: 0, y: -100, delay: 1.4 })
gsap.from('.home__title img', 1.5, { opacity: 0, y: 100, delay: 1.6 })
gsap.from('.about__description', 1.5, { opacity: 0, y: 100, delay: 1.6 })

document.addEventListener("DOMContentLoaded", () => {
    
    // === Variables ===
    const cards = document.querySelectorAll(".card, .btn-card"); // cards + botones de acceder
    const modal = document.querySelector(".modal");              // modal principal
    const btnLogin = document.getElementById("btn-login");       // botón "Ir a Iniciar Sesión"
    const btnClose = document.getElementById("btn-close");       // botón "Cerrar"

    // === Mostrar modal si el usuario no ha iniciado sesión ===
    cards.forEach(item => {
        item.addEventListener("click", (e) => {
            e.preventDefault(); // evita que intente redirigir
            if (modal) {
                modal.style.display = "flex"; // mostrar modal
            }
        });
    });

    // === Botón "Ir a Iniciar Sesión" ===
    if (btnLogin) {
        btnLogin.addEventListener("click", () => {
            // Redirige al login general (puedes ajustarlo según quieras)
            window.location.href = "login.php";
        });
    }

    // === Botón "Cerrar" ===
    if (btnClose) {
        btnClose.addEventListener("click", () => {
            modal.style.display = "none";
        });
    }

    // === Cerrar modal si se hace clic fuera del contenido ===
    window.addEventListener("click", (e) => {
        if (e.target === modal) {
            modal.style.display = "none";
        }
    });

    // === Dropdown (ya funciona con CSS, pero reforzamos en JS) ===
    const dropdown = document.querySelector(".dropdown");
    if (dropdown) {
        const content = dropdown.querySelector(".dropdown-content");
        const button = dropdown.querySelector(".btn-login");

        // Abrir / cerrar al hacer clic en el botón
        if (button) {
            button.addEventListener("click", (e) => {
                e.stopPropagation(); // evita que cierre instantáneamente
                content.style.display = 
                    content.style.display === "block" ? "none" : "block";
            });
        }

        // Cerrar si se hace clic fuera del menú
        document.addEventListener("click", (e) => {
            if (!dropdown.contains(e.target)) {
                content.style.display = "none";
            }
        });
    }
});

// Registrar ScrollTrigger
gsap.registerPlugin(ScrollTrigger);

// Animación cohete
gsap.from(".about__rocket", {
   x: 200,
   opacity: 0,
   duration: 1.5,
   ease: "power3.out",
   scrollTrigger: {
      trigger: ".about",
      start: "top 80%"
   }
});

// Animación planeta
gsap.from(".about__planet", {
   x: -200,
   opacity: 0,
   duration: 1.5,
   ease: "power3.out",
   scrollTrigger: {
      trigger: ".about",
      start: "top 80%"
   }
});
