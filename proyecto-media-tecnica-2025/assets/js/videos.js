function filtrarVideos() {
  const categoria = document.getElementById("categoria").value;
  const cards = document.querySelectorAll("#videosGrid .card");

  cards.forEach((card) => {
    if (categoria === "todos" || card.dataset.categoria === categoria) {
      card.style.display = "block";
    } else {
      card.style.display = "none";
    }
  });
}

function buscarVideos() {
  const query = document.getElementById("buscador").value.toLowerCase();
  const cards = document.querySelectorAll("#videosGrid .card");

  cards.forEach((card) => {
    const titulo = card.dataset.titulo.toLowerCase();
    if (titulo.includes(query)) {
      card.style.display = "block";
    } else {
      card.style.display = "none";
    }
  });
}
