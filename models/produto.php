<?php


require_once $_SERVER['DOCUMENT_ROOT'] . '/novoPISORVETE/db/conexao.php';

class Produto {
    public $id_produto;
    public $nome_produto;
    public $preco;
    public $descricao;
    public $foto_produto;
    public $id_categoria;

    public function __construct($id =false)
    { 
        if($id) {
            $this->id_produto =$id;
            $this->carregar();
        }
        
    }


    public function carregar () {
        $sql = "SELECT * FROM  produtos WHERE id_produto = :id";
        $conexao = Conexao:: conectar ();
        $stmt = $conexao->prepare ($sql);
        $stmt->bindValue(':id', $this->id_categoria);
        $stmt->execute();
        $resultado = $stmt ->fetch();

        $this-> nome_produto = $resultado ['nome_produto']; 
        $this->preco = $resultado['preco'];
        $this->descricao = $resultado['descricao'];
        $this-> foto_produto = $resultado ['foto_produto'];
        $this-> id_categoria = $resultado ['id_categoria'];

    }




    public function criar () {
        $sql = "INSERT INTO categorias (nome_produto, preco,descricao, foto_produto, id_categoria) VALUES (:nome,:preco, :descricao,  :foto, :categoria)";
        $conexao = Conexao:: conectar ();
        $stmt = $conexao->prepare ($sql);
        $stmt->bindValue(':nome', $this->nome_produto);
        $stmt->bindValue(':preco', $this->preco);
        $stmt->bindValue(':nome', $this->descricao);
        $stmt->bindValue(':foto', $this->foto_produto);
        $stmt->bindValue(':nome', $this->id_categoria);
        $stmt->execute();
        

    }

    public static function listar () 
    {
        $sql = "SELECT p.* , C.nome_categoria 
        FROM produtos p 
        JOIN categoria c
        ON p.id_categoria = c.id_categoria";
        $conexao = Conexao:: conectar ();
        $stmt = $conexao->prepare ($sql);
        $stmt->execute();
        $resultado =$stmt->fetchALL();
        return $resultado;
    }

    public static function listarPorCategoria ($id) 
    {
        $sql = "SELECT p.* , C.nome_categoria 
        FROM produtos p 
        JOIN categoria c
        ON p.id_categoria = c.id_categoria
        WHERE p.id_categoria = :id";
        $conexao = Conexao:: conectar ();
        $stmt = $conexao->prepare ($sql);
        $stmt->bindValue(':id' , $id);
        $stmt->execute();
        $resultado =$stmt->fetchALL();
        return $resultado;
    }
   
    
    public function atualizar(){
        $sql = "UPDATE produtos SET nome_produto = :nome, preco = :preco, descricao= :descricao, foto_produto = foto, id_categoria = :categoria WHERE id_produto = :id";
        $conexao = Conexao:: conectar ();
        $stmt = $conexao->prepare ($sql);
        $stmt->bindValue(':nome', $this->nome_produto);
        $stmt->bindValue(':preco', $this->preco);
        $stmt->bindValue(':nome', $this->descricao);
        $stmt->bindValue(':foto', $this->foto_produto);
        $stmt->bindValue(':nome', $this->id_categoria);
        $stmt->bindValue(':nome', $this->id_produto);
        $stmt->execute();
    }


    public function delete () {
        $sql = "DELETE FROM produtos WHERE id_produto = :id ";
        $conexao = Conexao:: conectar ();
        $stmt = $conexao->prepare ($sql);
        $stmt->bindValue (':id', $this->id_produto);
        $stmt->execute();
    }
   
}