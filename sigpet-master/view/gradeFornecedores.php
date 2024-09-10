<div class="container">
  <div class="section">
    <h4>Procurar Fornecedor</h4>
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
    <table class="row-border dataTable no-footer centered highlight" role="grid" style="margin-left: 0px; width: 900px;" width="100%" cellspacing="0" id="myTable">
        <thead>
            <tr>
                <th>Fornecedor</th>
                <th>Cidade</th>
                <th>UF</th>
                <th>CEP</th>
                <th>Email</th>
                <th>Telefone</th>
                <th>Celular</th>

                <th><a href="?controller=FornecedoresController&method=criar" class="btn-floating btn-medium waves-effect waves-light grey"><i class="material-icons">add</i></a></th>
            </tr>
        </thead>

        <tbody>
            <?php
            if ($fornecedores) {
                foreach ($fornecedores as $fornecedor) {
                    ?>
                    <tr>
                        <td><?php echo $fornecedor->NOME_FORNECEDOR; ?></td>
                        <td><?php echo $fornecedor->CIDADE_FORNECEDOR; ?></td>
                        <td><?php echo $fornecedor->UF_FORNECEDOR; ?></td>
                        <td><?php echo $fornecedor->CEP_FORNECEDOR; ?></td>
                        <td><?php echo $fornecedor->EMAIL_FORNECEDOR; ?></td>
                        <td><?php echo $fornecedor->TELEFONE_FORNECEDOR; ?></td>
                        <td><?php echo $fornecedor->CELULAR_FORNECEDOR; ?></td>
                        <td>
                          <a href="?controller=FornecedoresController&method=relatorio&id=<?php echo $fornecedor->id; ?>"  class="btn-floating  btn-small grey"><i class="material-icons">remove_red_eye</i></a>
                        </td>
                        <td>
                            <a href="?controller=FornecedoresController&method=editar&id=<?php echo $fornecedor->id; ?>" class="btn-floating  btn-small grey" ><i class="material-icons">edit</a></i>
                        </td>
                        <td>
                            <a href="?controller=FornecedoresController&method=excluir&id=<?php echo $fornecedor->id; ?>" class="btn-floating  btn-small red" ><i class="material-icons">delete_forever</a></i>
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
