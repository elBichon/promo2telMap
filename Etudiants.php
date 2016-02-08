<?php
class Etudiants
    {
        private $_id;
        private $_region;
        private $_homme;
        private $_femme;
        private $_boursier;
        private $_ece;
        private $_ecs;
        private $_passerele;
        private $_iut;
        private $_dut;
        private $_universite;
        private $_prepaS;
        private $_litteraire;
        private $_autre;
        
        //constucteur
        public function __construct($id,$region,$homme,$femme,$boursier,$ece,$ecs,$passerelle,$iut,$dut,$universite,$prepaS,$litteraire,$autre){
            echo "voici le constructeur";
            $this->setId($id);
            $this->setRegion($region);
            $this->setHomme($homme);
            $this->setFemme($femme);
            $this->setBoursier($boursier);
            $this->setEce($ece);
            $this->setEcs($ecs);
            $this->setPasserelle($passerelle);
            $this->setIut($iut);
            $this->setDut($dut);
            $this->setUniversite($universite);
            $this->setPrepaS($prepaS);
            $this->setLitteraire($litteraire);
            $this->setAutre($autre);
        
        }
     
        //getters
        public function getId(){
            echo "$this->_id";
            return $this->_id;
        }
        public function getRegion(){
            return $this->_region;
        }
        public function getHomme(){
            return $this->_homme;
        }
        public function getFemme(){
            return $this->_femme;
        }
        public function getBoursier(){
            return $this->_boursier;
        }
        public function getEce(){
            return $this->_ece;
        }
        public function getEcs(){
           return $this->_ecs;
        }
        public function getPasserelles(){
            return $this->_passerelles;
        }
        public function getIut(){
            return $this->_iut;
        }
        public function getDut(){
            return $this->_dut;
        }
        public function getUniversite(){
            return $this->_universite;
        }
        public function getprepaS(){
            return $this->_prepaS;
        }
        public function getLitteraire(){
            return $this->_litteraire;
        }
        public function getAutres(){
            return $this->_autres;
        }
        
        //setters
        public function setId($id){
             $this->_id=$id;
        }
        public function setFemme($femme){
            $this->_femme=$femme;
        }
        public function setRegion($region){
            $this->_region=$region;
        }
        public function setHomme($homme){
            return $this->_homme=$homme;
        }
        public function setBoursier($boursier){
            return $this->_boursier=$boursier;
        }
        public function setEce($ece){
            return $this->_ece=$ece;
        }
        public function setEcs($ecs){
            return $this->_ecs=$ecs;
        }
        public function setPasserelle($passerelle){
            return $this->_passerelle=$passerelle;
        }
        public function setIut($iut){
            return $this->_iut=$iut;
        }
        public function setDut($dut){
            return $this->_dut=$dut;
        }
        public function setUniversite($universite){
            return $this->_universite=$universite;
        }
        public function setPrepaS($prepaS){
            return $this->_prepaS=$prepaS;
        }
        public function setLitteraire($litteraires){
            return $this->_litteraires=$litteraire;
        }
        public function setAutre($autre){
            return $this->_autre=$autre;
        }
        
    }

?>