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

    $strSql = !empty($id) ? "WHERE id_produto = $id" : '';


    $sql = "SELECT 
              P.id_produto,
              P.nomeProduto,
              P.marcaProduto,
              P.preco,
              P.imagem, 
              CP.nome_categoria
            FROM produto P
            INNER JOIN categoria_produto CP
            ON P.categoria = CP.id_categoria_produto " .
      $strSql .
      " ORDER BY P.id_produto";

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

  function salvar($dados)
  {
    $id_produto = $dados['id_produto'];
    $nomeProduto = $dados['produto'];
    $marcaProduto = $dados['marca'];
    $preco = $dados['preco'];
    $categoria = $dados['categoria'];


    if (isset($_FILES['imagemProduto'])) {
      $tipo = mime_content_type($_FILES['imagemProduto']['tmp_name']);

      switch ($tipo) {
        case 'image/jpeg':
          $ext = '.jpg';
          break;

        case 'image/jpeg':
          $ext = '.jpeg';
          break;

        case 'image/png':
          $ext = '.png';
          break;

        default:
          echo "Tipo de arquivo não aceito!";
          die();
      }
      $arquivo =  rand(1, 9999999999) . $ext;
      $arquivoMover = BASE_PATH . '/imagens/produtos/' . $arquivo;
      $arquivoURL = "http://localhost/projeto-pi/imagens/produtos/" . $arquivo;


      move_uploaded_file(
        $_FILES['imagemProduto']['tmp_name'],
        $arquivoMover
      );
    }

    $stmt = $this->bd->prepare("
    UPDATE produto SET
      nomeProduto = :nomeProduto, 
      marcaProduto = :marcaProduto,
      preco = :preco, 
      imagem = :imagem, 
      categoria = :categoria
    WHERE
      id_produto = :id_produto

    ");

    $stmt->bindParam(':nomeProduto', $nomeProduto);
    $stmt->bindParam(':marcaProduto', $marcaProduto);
    $stmt->bindParam(':preco', $preco);
    $stmt->bindParam(':nomeProduto', $nomeProduto);
    $stmt->bindParam(':categoria', $categoria);
    $stmt->bindParam(':id_produto', $id_produto);

    //Executar a consulta no bd
    if ($stmt->execute()) {

      //retornar true ou false
      return true;
    } else {

      return false;
    }
  }
}
