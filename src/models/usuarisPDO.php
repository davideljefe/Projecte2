<?php

/**
 * Exemple per a M07.
 * @author: Dani Prados dprados@cendrassos.net
 *
 * Model les imatges.
 *
**/

namespace Daw;

/**
 * Imatges
*/
class UsuarisPDO
{

    private $sql;

    /**
     * Constructor de la classe imatges amb PDO
     *
     * @param array $config
     */
    public function __construct($config)
    {
        $dsn = "mysql:dbname={$config['dbname']};host={$config['host']}";
        $usuari = $config['user'];
        $clau = $config['pass'];

        try {
            $this->sql = new \PDO($dsn, $usuari, $clau);
        } catch (\PDOException $e) {
            die('Ha fallat la connexió: ' . $e->getMessage() . " $usuari");
        }
    }

    /**
     * get et retorna la imatge amb l'id
     *
     * @param int $id
     * @return array imatge amb ["titol", "url"]
     */
    public function getUser($user)
    {
        $query = 'select dni, nom, contrasenya from usuaris where nom=:user;';
        $stm = $this->sql->prepare($query);
        $result = $stm->execute([':user' => $user]);

        if ($stm->errorCode() !== '00000') {
            $err = $stm->errorInfo();
            $code = $stm->errorCode();
            die("Error.   {$err[0]} - {$err[1]}\n{$err[2]} $query");
        }
        
        return $stm->fetch(\PDO::FETCH_ASSOC);
    }

    public function add($dnireg, $nomreg, $cognomreg, $emailreg, $adrecareg, $telefonreg, $passreg)
    {
        $query = "insert into usuaris (dni, nom, cognom, correu, adreca, telefon, contrasenya) values 
        (:dnireg, :nomreg, :cognomreg, :emailreg, :adrecareg, :telefonreg, :passreg);";
        $stm = $this->sql->prepare($query);
        $stm->execute([":dnireg" => $dnireg, ":nomreg" => $nomreg, ":cognomreg" => $cognomreg, ":emailreg" => $emailreg, 
        ":adrecareg" => $adrecareg,":telefonreg" => $telefonreg, ":passreg" => $passreg]);

        if ($stm->errorCode() !== '00000') {
            $err = $stm->errorInfo();
            $code = $stm->errorCode();
            die("Error.   {$err[0]} - {$err[1]}\n{$err[2]} $query");
        }
    }

    public function llistat()
    {
        $query = "select dni, nom, cognom, correu, adreca, telefon, rol from usuaris;";
        $llistatus = array();
        foreach ($this->sql->query($query, \PDO::FETCH_ASSOC) as $usuari) {
            $llistatus[$usuari["dni"]] = $usuari;
        }

        if ($this->sql->errorCode() !== '00000') {
            $err = $this->sql->errorInfo();
            $code = $this->sql->errorCode();
            die("Error.   {$err[0]} - {$err[1]}\n{$err[2]} $query");
        }
        return $llistatus;
    }


    public function delete($id)
    {
        $query = 'delete from usuaris where dni=:dni;';
        $stm = $this->sql->prepare($query);
        $result = $stm->execute([':dni' => $id]);

        if ($stm->errorCode() !== '00000') {
            $err = $stm->errorInfo();
            $code = $stm->errorCode();
            die("Error.   {$err[0]} - {$err[1]}\n{$err[2]} $query");
        }
    }

  
}