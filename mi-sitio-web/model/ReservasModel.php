<?php
require_once('../conf/conf.php');

class Reserva extends Conf{
    public $id;

    public $clienteId;

    public $paquete;

    public $costo;

    public $fecha;

    public function create(){
        $query = "INSERT INTO reservas (clienteId, paquete, costo, fecha) VALUES (:clienteId, :paquete, :costo, :fecha)";
        $params = [
            ":clienteId" => $this->clienteId,
            ":paquete" => $this->paquete,
            ":costo" => $this->costo,
            ":fecha" => $this->fecha
        ];

        return $this->exec_query($query, $params);
    }
    
}
?>