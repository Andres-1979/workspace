function mostrarnombre() {
    const nombre = document.getElementById('nombre')
    const primernombre = document.createElement('span')
    const apellido = document.createElement('i')

    primernombre.innerHTML ="Jaider";
    apellido.innerHTML ="Alvarez";

    nombre.appendChild(primernombre);
    nombre.appendChild(apellido);


}