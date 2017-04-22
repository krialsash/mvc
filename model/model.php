<?php
/**
 * Created by PhpStorm.
 * User: sash
 * Date: 22.04.17
 * Time: 11:15
 */
class Article
{
    private $dbhost = "localhost";
    private $dbname = "forma";
    private $dbuser = "root";
    private $dbpass = "ctvbyfhbz";
    public $pdo_conn;

    private function getConnection()
    {
        $pdo_conn = new PDO("mysql:host=$this->dbhost;dbname=$this->dbname", $this->dbuser, $this->dbpass);

        return $pdo_conn;
    }

    /**
     * @param $name
     * @param $description
     * @param $created_at
     * @return string
     */

    public function create($name, $description, $created_at)
    {
        $getConn = $this->getConnection();
        $sql = "INSERT INTO article (name, description, created_at) VALUES ( :name, :description, :created_at)";
        $pdo_statement = $getConn->prepare($sql);
        $pdo_statement->bindValue(":name", $name);
        $pdo_statement->bindValue(":description", $description);
        $pdo_statement->bindValue(":created_at", $created_at);
        $pdo_statement->execute();

        return $getConn->lastInsertId();
    }

    /**
     * @return array
     */

    public function posts()
    {
        $getConn = $this->getConnection();
        $sql = "SELECT * FROM article";
        $pdo_statement = $getConn->prepare($sql);
        $pdo_statement->execute();
        $result = $pdo_statement->fetchAll();

        return $result;
    }

    /**
     * @param $name
     * @param $description
     * @param $created_at
     * @param $id
     * @return bool
     */

    public function update($name, $description, $created_at, $id)
    {
        $getConn = $this->getConnection();
        $sql = "UPDATE article SET name = :name, description = :description, created_at = :created_at WHERE id = :id";
        $pdo_statement = $getConn->prepare($sql);
        $pdo_statement->bindValue(":name", $name);
        $pdo_statement->bindValue(":description", $description);
        $pdo_statement->bindValue(":created_at", $created_at);
        $pdo_statement->bindValue(":id", $id);
        $result = $pdo_statement->execute();

        return $result;

    }

    /**
     * @param $id
     * @return mixed
     */
    public function postById($id)
    {
        $getConn = $this->getConnection();
        $sql = ('SELECT * FROM article WHERE id = :id');
        $pdo_statement = $getConn->prepare($sql);
        $pdo_statement->execute(array(':id' => $id));
        $result = $pdo_statement->fetch();

        return $result;
    }

    /**
     * @param $name
     * @param $description
     * @param $created_at
     * @param $id
     * @return bool
     */

    public function updateById($name, $description, $created_at, $id)
    {
        $getConn = $this->getConnection();
        $sql = "UPDATE article SET name = :name, description = :description, created_at = :created_at WHERE id = :id";
        $pdo_statement = $getConn->prepare($sql);
        $pdo_statement->bindValue(":name", $name);
        $pdo_statement->bindValue(":description", $description);
        $pdo_statement->bindValue(":created_at", $created_at);
        $pdo_statement->bindValue(":id", $id);
        $result = $pdo_statement->execute();
        return $result;
    }

    /**
     * @param $id
     * @return bool
     */

    public function deleteById($id)
    {
        $getConn = $this->getConnection();
        $sql = "DELETE FROM article WHERE id=:id";
        $pdo_statement = $getConn->prepare($sql);
        $pdo_statement->bindValue(":id", $id);
        $result = $pdo_statement->execute();

        return $result;
    }

}