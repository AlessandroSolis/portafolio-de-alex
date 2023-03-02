<?php

// Definición de la clase Partido
class Partido
{
    // Propiedades
    private $anio;
    private $equipoLocal;
    private $equipoVisitante;
    private $marcadorLocal;
    private $marcadorVisitante;
    
    // Constructor
    public function __construct($anio, $equipoLocal, $equipoVisitante, $marcadorLocal, $marcadorVisitante)
    {
        $this->anio = $anio;
        $this->equipoLocal = $equipoLocal;
        $this->equipoVisitante = $equipoVisitante;
        $this->marcadorLocal = $marcadorLocal;
        $this->marcadorVisitante = $marcadorVisitante;
    }
    
    // Métodos
    public function getAnio()
    {
        return $this->anio;
    }
    
    public function getEquipoLocal()
    {
        return $this->equipoLocal;
    }
    
    public function getEquipoVisitante()
    {
        return $this->equipoVisitante;
    }
    
    public function getMarcadorLocal()
    {
        return $this->marcadorLocal;
    }
    
    public function getMarcadorVisitante()
    {
        return $this->marcadorVisitante;
    }
}

// Creación de objetos Partido para cada uno de los títulos de Champions League ganados por el Real Madrid
$partido1 = new Partido(1956, "Real Madrid", "Stade de Reims", 4, 3);
$partido2 = new Partido(1957, "Real Madrid", "ACF Fiorentina", 2, 0);
$partido3 = new Partido(1958, "Real Madrid", "AC Milan", 3, 2);
$partido4 = new Partido(1959, "Real Madrid", "Stade de Reims", 2, 0);
$partido5 = new Partido(1960, "Real Madrid", "Eintracht Frankfurt", 7, 3);
$partido6 = new Partido(1966, "Real Madrid", "Partizan de Belgrado", 2, 1);
$partido7 = new Partido(1998, "Real Madrid", "Juventus FC", 1, 0);
$partido8 = new Partido(2000, "Real Madrid", "Valencia CF", 3, 0);
$partido9 = new Partido(2002, "Real Madrid", "Bayer Leverkusen", 2, 1);
$partido10 = new Partido(2014, "Real Madrid", "Atlético de Madrid", 4, 1);
$partido11 = new Partido(2016, "Real Madrid", "Club Atlético de Madrid", 5, 3);
$partido12 = new Partido(2017, "Real Madrid", "Juventus FC", 4, 1);
$partido13 = new Partido(2018, "Real Madrid", "Liverpool FC", 3, 1);
$partido14 = new Partido(2022, "Real Madrid", "Liverpool FC", 1, 0);

// Array con los objetos Partido
$partidos = array($partido1, $partido2, $partido3, $partido4, $partido5, $partido6, $partido7, $partido8, $partido9, $partido10, $partido11, $partido12, $partido13, $partido14);

// Bucle para mostrar la información de cada
foreach ($partidos as $partido) {
    echo "Año: " . $partido->getAnio() . "<br>";
    echo "Equipo local: " . $partido->getEquipoLocal() . "<br>";
    echo "Equipo visitante: " . $partido->getEquipoVisitante() . "<br>";
    echo "Marcador: " . $partido->getMarcadorLocal() . "-" . $partido->getMarcadorVisitante() . "<br>";
    echo "<hr>";
}