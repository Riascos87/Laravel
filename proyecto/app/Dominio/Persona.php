<?php
namespace App\Dominio;
                    
class Persona
{
    private string $nombre;

    public function __construct(string $nombre)
    {
        $this->setNombre($nombre);
    }
    public function setNombre(string $nombre): void
    {
        if (trim($nombre) === '') {
            throw new \InvalidArgumentException('Nombre obligatorio');
            }
        $this->nombre = trim($nombre);
    }
}
