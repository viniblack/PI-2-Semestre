<?php

class Produto
{
  var $bd;

  function __construct($bd)
  {
    $this->bd = $bd;
  }

  function listar($id = null)
  {
    $id = preg_replace('/\D/', '', $id);

    $strSql = !empty($id) ? "WHERE id = $id" : '';

    $sql = "SELECT 
              P.id_produto,
              P.nomeProduto,
              P.marcaProduto,
              P.preco,
              P.imagem, 
              CP.nome_categoria
            FROM produto P
            INNER JOIN categoria_produto CP
            ON P.categoria = CP.id_categoria_produto" .
      $strSql . " ORDER BY P.id_produto";

    foreach ($this->bd->query($sql) as $registro) {
      $lista[$registro['id_produto']] = $registro;
    }

    if (isset($lista)) {

      return $lista;
    }
  }

  function apagar($id)
  {
    $id = preg_replace('/\D/', '', $id);

    if ($this->bd->query("DELETE FROM produto WHERE id_produto = $id")) {
      header("location:./editarProduto.php");
      return true;
    } else {
      return false;
    }
  }
}
