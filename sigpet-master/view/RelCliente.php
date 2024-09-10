<div class="container">
  <div class="section">
    <h4>Procurar Cliente</h4>
    <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">
      <script>
      function myFunction() {
        var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById("myInput");
        filter = input.value.toUpperCase();
        table = document.getElementById("myTable");
        tr = table.getElementsByTagName("tr");
        for (i = 0; i < tr.length; i++) {
          td = tr[i].getElementsByTagName("td")[0];
          if (td) {
            txtValue = td.textContent || td.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                tr[i].style.display = "";
                } else {
                    tr[i].style.display = "none";
                  }
                }
              }
            }
          </script>
    <table class="highlight" style="top:40px;" id="myTable">
        <thead>
            <tr>
                <th>Cliente</th>
                <th>Telefone</th>
                <th>Email</th>
                <th>Celular</th>

            </tr>
        </thead>
        <h4>Clientes</h4>
        <tbody>
            <?php
            if ($clientes) {
                foreach ($clientes as $cliente) {
                    ?>
                    <tr>
                        <td><?php echo $cliente->NOME_CLIENTE; ?></td>
                        <td><?php echo $cliente->TELEFONE; ?></td>
                        <td><?php echo $cliente->EMAIL; ?></td>
                        <td><?php echo $cliente->CELULAR; ?></td>
                        <td>
                          <a href="?controller=ClientesController&method=relatorio&id=<?php echo $cliente->id; ?>" class="btn btn-primary btn-sm">Visualizar</a>
                        </td>
                    </tr>
                    <?php
                }
            } else {
                ?>
                <tr>
                    <td colspan="5">Nenhum registro encontrado</td>
                </tr>
                <?php
            }
            ?>
        </tbody>
    </table>
  </div>
</div>
