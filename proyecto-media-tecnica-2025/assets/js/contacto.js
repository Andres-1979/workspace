document.addEventListener("DOMContentLoaded", () => {
  const form = document.getElementById("contactForm");
  const message = document.getElementById("form-message");

  form.addEventListener("submit", (e) => {
    e.preventDefault();

    const nombre = document.getElementById("nombre").value.trim();
    const email = document.getElementById("email").value.trim();
    const mensaje = document.getElementById("mensaje").value.trim();

    if (!nombre || !email || !mensaje) {
      message.textContent = "⚠️ Por favor, completa todos los campos.";
      message.style.color = "red";
      return;
    }

    // Aquí podrías hacer un fetch() o AJAX para enviar al servidor
    message.textContent = "✅ ¡Gracias! MonoMat ha recibido tu mensaje.";
    message.style.color = "#28a745";

    form.reset();
  });
});
