<?php

class controladorpaciente
{

        function __construct($ConexionBD, $paciente)
        {

                $this->ConexionBD = $ConexionBD;
                $this->paciente = $paciente;
        }
        function guardar()
        {

                $paciente = $this->paciente;
                $resultadoConsulta = $this->consultarRegistro();

                if ($resultadoConsulta->num_rows == 0) {

                        $sqlPrepared = "insert into pacientes values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
                        $stmt = $this->ConexionBD->prepare($sqlPrepared);

                        $stmt->bind_param(
                                "sisssisssssssii",
                                $paciente->TipoIdentificacion,
                                $paciente->NumeroIdentificacion,
                                $paciente->Nombre,
                                $paciente->Apellidos,
                                $paciente->CorreoElectronico,
                                $paciente->Telefono,
                                $paciente->CiudadResidencia,
                                $paciente->DireccionResidencia,
                                $paciente->Sexo,
                                $paciente->FechaNacimiento,
                                $paciente->NombreAcudiente,
                                $paciente->ApellidosAcudiente,
                                $paciente->CorreoAcudiente,
                                $paciente->TelefonoAcudiente,
                                $paciente->EdadAcudiente
                        );

                        $stmt->execute();
                } else {

                        $sqlPrepared = "update pacientes set TipoIdentificacion = ?,
                                                Nombre = ?,
                                                Apellidos = ?,
                                                CorreoElectronico = ?,
                                                Telefono = ?,
                                                CiudadResidencia = ?,
                                                DireccionResidencia = ?,
                                                Sexo = ?,
                                                FechaNacimiento = ?,
                                                NombreAcudiente = ?,
                                                ApellidosAcudiente = ?,
                                                CorreoAcudiente = ?,
                                                TelefonoAcudiente = ?,
                                                EdadAcudiente = ?
                           where NumeroIdentificacion = ?";
                        $stmt = $this->ConexionBD->prepare($sqlPrepared);

                        $stmt->bind_param(
                                "ssssisssssssiii",
                                $paciente->TipoIdentificacion,
                                $paciente->Nombre,
                                $paciente->Apellidos,
                                $paciente->CorreoElectronico,
                                $paciente->Telefono,
                                $paciente->CiudadResidencia,
                                $paciente->DireccionResidencia,
                                $paciente->Sexo,
                                $paciente->FechaNacimiento,
                                $paciente->NombreAcudiente,
                                $paciente->ApellidosAcudiente,
                                $paciente->CorreoAcudiente,
                                $paciente->TelefonoAcudiente,
                                $paciente->EdadAcudiente,
                                $paciente->NumeroIdentificacion
                        );
                        $stmt->execute();

                        echo '<p style="color:#fff;"></p>';
                echo "<script type='text/javascript'>
                    Swal.fire(
                    'Felicitaciones!',
                    'Operación realizada con éxito',
                    'success'
                    ).then((result) => {
                        if (result.isConfirmed) {
                            location.href='';
                        } 
                    })
                    </script>";
                }
        }


        function eliminar()
        {
                $paciente = $this->paciente;
                $sqlPrepared = "delete from pacientes where = NumeroIdentificacion=?";
                $stmt = $this->ConexionBD->prepare($sqlPrepared);
                $stmt->bind_param("i", $paciente->NumeroIdentificacion);

                $stmt->execute();
        }
        function listar()
        {
                $sqlPrepared = "select * from pacientes";
                $stmt = $this->ConexionBD->prepare($sqlPrepared);
                $stmt->execute();

                return $stmt->get_result();
        }


        function consultarRegistro()
        {
                $paciente = $this->paciente;
                $sqlPrepared = "select * from pacientes where NumeroIdentificacion = ?";
                $stmt = $this->ConexionBD->prepare($sqlPrepared);
                $stmt->bind_param("i", $paciente->NumeroIdentificacion);

                $stmt->execute();

                return $stmt->get_result();
        }
}
