// Función aleatoria de suma/resta
function generateMathChallenge() {
  const num1 = Math.floor(Math.random() * 10) + 1;
  const num2 = Math.floor(Math.random() * 10) + 1;
  const isSum = Math.random() > 0.5;

  const question = isSum ? `${num1} + ${num2}` : `${num1} - ${num2}`;

  const answer = isSum ? num1 + num2 : num1 - num2;

  return { question, answer };
}

// Evento al hacer clic en el planeta
document.querySelector(".home__planet-1").addEventListener("click", () => {
  const { question, answer } = generateMathChallenge();
  document.getElementById(
    "mathQuestion"
  ).textContent = `¿Cuánto es ${question}?`;
  document.getElementById("mathChallenge").classList.remove("hidden");

  // Guardar la respuesta correcta
  document.getElementById("checkAnswer").onclick = () => {
    const userAnswer = parseInt(document.getElementById("mathAnswer").value);
    const mensajeCorrecto = document.getElementById("mensaje-correcto");
    const mensajeIncorrecto = document.getElementById("mensaje-incorrecto");
    if (userAnswer === answer) {
      gsap.to(".home__rocket", {
        y: -1000,
        duration: 1.5,
        ease: "power2.inOut",
      });
      mensajeCorrecto.innerHTML = "🎉 ¡Correcto! El cohete despega 🚀";
      mensajeCorrecto.style.backgroundColor = "#06b000ff";
    } else {
      gsap.to(".home__rocket", {
        x: "+=10",
        duration: 0.1,
        yoyo: true,
        repeat: 5,
      });
      mensajeIncorrecto.innerHTML =
        "❌ Intenta de nuevo, el cohete no pudo despegar.";
      mensajeIncorrecto.style.backgroundColor = "#fe0000ff";
    }

    setTimeout(() => {
      mensajeCorrecto.innerHTML = "";
      mensajeIncorrecto.innerHTML = "";
      mensajeIncorrecto.style.backgroundColor = "";
      mensajeCorrecto.style.backgroundColor = "";
    }, 3000);

    // Cerrar el reto
    document.getElementById("mathChallenge").classList.add("hidden");
    document.getElementById("mathAnswer").value = "";
  };
}, 5000);
