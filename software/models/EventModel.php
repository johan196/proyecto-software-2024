<?php
class EventModel {
    private $conexion;

    public function __construct($conexion) {
        $this->conexion = $conexion;
    }

    public function obtenerEventosDisponibles() {
        $query = "SELECT * FROM eventos WHERE fecha > NOW()";
        $result = $this->conexion->query($query);
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function registrarUsuarioEnEvento($eventoId, $usuarioId) {
        $query = "INSERT INTO inscripciones (evento_id, usuario_id) VALUES ('$eventoId', '$usuarioId')";
        $this->conexion->query($query);
    }

    public function obtenerNumeroDeInscritos($eventoId) {
        $query = "SELECT COUNT(*) as inscritos FROM inscripciones WHERE evento_id = '$eventoId'";
        $result = $this->conexion->query($query);
        $data = $result->fetch_assoc();
        return $data['inscritos'];
    }
}
?>