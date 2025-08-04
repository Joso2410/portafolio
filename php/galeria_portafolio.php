<!-- Contenedor de la galería (lightbox) -->
<div id="lightbox" class="lightbox">
  <div class="lightbox-content" id="galeriaContenido">
    <button class="nav-btn prev" id="prevBtn">&#8592;</button>
    <img id="imagenActual" src="" alt="Imagen">
    <button class="nav-btn next" id="nextBtn">&#8594;</button>
  </div>
</div>


<script>
  // Array con las rutas de tus imágenes
  const imagenes = [
    './Img/4.png',
    './Img/1.png',
    './Img/2.png'
  ];

  let indice = 0;

  const lightbox = document.getElementById('lightbox');
  const imagenActual = document.getElementById('imagenActual');
  const abrirGaleria = document.getElementById('abrirGaleria');
  const prevBtn = document.getElementById('prevBtn');
  const nextBtn = document.getElementById('nextBtn');
  const galeriaContenido = document.getElementById('galeriaContenido');

  // Función para mostrar imagen
  function mostrarImagen(index) {
    imagenActual.src = imagenes[index];
  }

  // Mostrar la galería
  abrirGaleria.addEventListener('click', () => {
    indice = 0;
    mostrarImagen(indice);
    lightbox.style.display = 'flex';
  });

  // Botón siguiente
  nextBtn.addEventListener('click', () => {
    indice = (indice + 1) % imagenes.length;
    mostrarImagen(indice);
  });

  // Botón anterior
  prevBtn.addEventListener('click', () => {
    indice = (indice - 1 + imagenes.length) % imagenes.length;
    mostrarImagen(indice);
  });

  // Cerrar galería al hacer clic fuera de la imagen
  lightbox.addEventListener('click', (e) => {
    if (!galeriaContenido.contains(e.target)) {
      lightbox.style.display = 'none';
    }
  });
</script>

