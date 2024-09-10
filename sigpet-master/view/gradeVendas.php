<h4>Procurar Venda</h4>
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
              <th>Código da Venda</th>
              <th>Data da Venda</th>
              <th>Cliente</th>
              <th>Valor Total</th>


              <th><a href="?controller=VendasController&method=criar" class="btn-floating btn-medium waves-effect waves-light grey"><i class="material-icons">add</i></a></th>
          </tr>
      </thead>
        <tbody>
            <?php
            if ($vendas) {
                foreach ($vendas as $venda) {
                    ?>
                    <tr>
                        <td><?php echo $venda->ID; ?></td>
                        <td><?php echo $venda->DATA_VENDA_CAB; ?></td>
                        <td><?php echo $venda->NOME_CLIENTE; ?></td>
                        <td>R$ <?php echo $venda->VALOR_VENDA_CAB; ?></td>
                        <td>
                            <a href="?controller=VendasController&method=editar&id=<?php echo $venda->ID; ?>" class="btn-floating  btn-small grey" ><i class="material-icons">edit</a></i>
                            <a href="?controller=VendasController&method=excluir&id=<?php echo $venda->ID; ?>" class="btn-floating  btn-small red" ><i class="material-icons">delete_forever</a></i>
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
