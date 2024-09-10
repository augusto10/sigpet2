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
    <table class="highlight" style="top:40px;" id="myTable">
        <thead>
            <tr>
                <th>Produto</th>
                <th>Descrição</th>
                <th>Valor de compra</th>
                <th>Valor de venda</th>
                <th>Estoque</th>
                <th>Criticidade</th>
                <th>Fornecedor</th>
            </tr>
        </thead>
        <h4>Produtos</h4>
        <tbody>
            <?php
            if ($produtos) {
                foreach ($produtos as $produto) {
                    ?>
                    <tr>
                        <td><?php echo $produto->FOR_ID; ?></td>
                        <td><?php echo $produto->DESCRICAO; ?></td>
                        <td><?php echo $produto->VALOR_COMPRA; ?></td>
                        <td><?php echo $produto->VALOR_VENDA; ?></td>
                        <td><?php echo $produto->ESTOQUE; ?></td>
                        <td><?php echo $produto->CRITICO; ?></td>
                        <td><?php echo $produto->FORNECEDORE_ID; ?></td>
                        <td>
                          <a href="?controller=ProdutosController&method=relatorio&id=<?php echo $produto->id; ?>" class="btn btn-primary btn-sm">Visualizar</a>
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
