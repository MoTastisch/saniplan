<?php
  class Person{

    public $id;
    public $name;
    public $vorname;
    public $handynummer;
    public $klasse;

    function __construct($id, $name, $vorname, $klasse, $handynummer) {
        $this->id = $id;
        $this->name = $name;
        $this->vorname = $vorname;
        $this->klasse = $klasse;
        $this->handynummer = $handynummer;
      }
  }
?>