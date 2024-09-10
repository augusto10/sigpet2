<div class="container">
  <div class="section">
    <h4>Procurar Produtos</h4>
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
                <th>Produto</th>
                <th>Descrição</th>
                <th>Valor de compra</th>
                <th>Valor de venda</th>
                <th>Estoque</th>


                <th><a href="?controller=ProdutosController&method=criar" class="btn-floating btn-medium waves-effect waves-light grey"><i class="material-icons">add</i></a></th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($produtos) {
                foreach ($produtos as $produto) {
                    ?>
                    <tr>
                        <td><?php echo $produto->FOR_ID; ?></td>
                        <td><?php echo $produto->DESCRICAO; ?></td>
                        <td>R$ <?php echo $produto->VALOR_COMPRA; ?></td>
                        <td>R$ <?php echo $produto->VALOR_VENDA; ?></td>
                        <td><?php echo $produto->ESTOQUE; ?></td>
                        <td>
                          <a href="?controller=ProdutosController&method=relatorio&id=<?php echo $produto->id; ?>"  class="btn-floating  btn-small grey"><i class="material-icons">remove_red_eye</i></a>
                        </td>
                        <td>
                            <a href="?controller=ProdutosController&method=editar&id=<?php echo $produto->id; ?>" class="btn-floating  btn-small grey" ><i class="material-icons">edit</a></i>
                        </td>
                        <td>
                            <a href="?controller=ProdutosController&method=excluir&id=<?php echo $produto->id; ?>" class="btn-floating  btn-small red" ><i class="material-icons">delete_forever</a></i>
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
