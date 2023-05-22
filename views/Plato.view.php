<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Carta</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</head>
<body>
  
  <div class="container mt-3">
    <h1>Lista de platos</h1>
    <hr>

    <table id="tabla-platos" class="table table-striped">
      <thead class="bg-success text-light">
        <tr>
          <th>ID</th>
          <th>Tipo de plato</th>
          <th>Nombre de plato</th>
          <th>Precio</th>
        </tr>
      </thead>
      <tbody>

      </tbody>
    </table>
  </div>

  <script>
    document.addEventListener("DOMContentLoaded", () => {
      const cuerpoTabla = document.querySelector("#tabla-platos tbody");

      const pm = new URLSearchParams();
      pm.append("operacion", "listar");

      fetch("../controllers/Plato.controller.php", {
        method: 'POST',
        body: pm
      })
        .then(response => response.json())
        .then(data => {
          cuerpoTabla.innerHTML = '';
          data.forEach(element => {
            let fila = `
              <tr>
                <td>${element.idplato}</td>
                <td>${element.tipo}</td>
                <td>${element.nombreplato}</td>
                <td>${element.precio}</td>
              </tr>
            `;
            cuerpoTabla.innerHTML += fila;
          })
        });

    });   
  </script>

</body>
</html>