// Animación de entrada para las tarjetas
gsap.from(".how__card", {
  opacity: 0,
  y: 50,
  duration: 1,
  stagger: 0.3,
  scrollTrigger: {
    trigger: ".how__grid",
    start: "top 80%",
  },
});

// Demo animada en tarjetas
gsap.to(".locked img", {
  y: -10,
  repeat: -1,
  yoyo: true,
  duration: 1.5,
  ease: "power1.inOut",
});

// Redirección botones
document.querySelectorAll(".btn-login").forEach((btn) => {
  btn.addEventListener("click", () => {
    window.location.href = "login.php"; // Ajusta al nombre de tu login
  });
});

// Mini quiz
function checkAnswer(answer) {
  let result = document.getElementById("quiz-result");
  if (answer === 4) {
    result.innerHTML = "🎉 ¡Correcto! Para seguir jugando, inicia sesión 🚀";
  } else {
    result.innerHTML =
      "❌ Ups... intenta de nuevo o inicia sesión para más retos.";
  }
}

// CTA bloqueada
function alertaLogin() {
  alert(
    "🔒 Debes iniciar sesión para acceder a los juegos. ¡Regístrate gratis!"
  );
}

// Estrellas en movimiento
const starsContainer = document.getElementById("stars");
for (let i = 0; i < 100; i++) {
  let star = document.createElement("div");
  star.className = "star";
  star.style.top = Math.random() * 100 + "%";
  star.style.left = Math.random() * 100 + "%";
  star.style.animationDuration = 2 + Math.random() * 3 + "s";
  starsContainer.appendChild(star);
}

// Intersection Observer para activar animaciones al hacer scroll
document.addEventListener("DOMContentLoaded", () => {
  const elements = document.querySelectorAll(
    ".how__card, .timeline .step, .mini-quiz, .cta"
  );

  const observer = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          entry.target.style.opacity = "1";
          entry.target.style.animationPlayState = "running";
        }
      });
    },
    { threshold: 0.2 }
  );

  elements.forEach((el) => {
    el.style.animationPlayState = "paused"; // Animación pausada al inicio
    observer.observe(el);
  });
});
