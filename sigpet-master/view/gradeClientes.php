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
    </table>
    <table class="row-border dataTable no-footer centered highlight" role="grid" style="margin-left: 0px; width: 900px;" width="100%" cellspacing="0" id="myTable">
        <thead>
            <tr>
                <th>Cliente</th>
                <th>Telefone</th>
                <th>Email</th>
                <th>Celular</th>

                <th><a href="?controller=ClientesController&method=criar" class="btn-floating btn-medium waves-effect waves-light grey"><i class="material-icons">add</i></a></th>
            </tr>
        </thead>
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
                        <td><a href="?controller=ClientesController&method=relatorio&id=<?php echo $cliente->id; ?>" class="btn-floating  btn-small grey"><i class="material-icons">remove_red_eye</i></a>
                        <td>
                            <a href="?controller=ClientesController&method=editar&id=<?php echo $cliente->id; ?>" class="btn-floating  btn-small grey" ><i class="material-icons">edit</a></i>
                            <a href="?controller=ClientesController&method=excluir&id=<?php echo $cliente->id; ?>" class="btn-floating  btn-small red" ><i class="material-icons">delete_forever</a></i>
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
