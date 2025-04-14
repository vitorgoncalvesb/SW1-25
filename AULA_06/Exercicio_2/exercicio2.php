<?php

  $linhas = $_POST["linhas"];
  $colunas = $_POST["colunas"];

  echo "<h2>Tabela Dinâmica:</h2>";
  echo "<table>";

  $i = 1;
  while ($i <= $linhas) {
      echo "<tr>";
      $j = 1;
      while ($j <= $colunas) {
          echo "<td>Linha " . $i . ", Coluna " . $j . "</td>";
          $j++;
      }
      echo "</tr>";
      $i++;
  }

  echo "</table>";

?>