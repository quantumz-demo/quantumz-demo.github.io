<?php

// SPL AUTOLOAD ============================================
spl_autoload_register(function($class_name) {
    include $class_name . '.php';
});

class ContactedByManager extends QuantumzDb {

    public function addNewClient($lastName, $firstName, $email, $phoneNumber, $companyName, $subject, $message) {
        $quantumzDatabaseNewConnection = $this->QuantumzDbConnection();
        $dataToTransmit = $quantumzDatabaseNewConnection->prepare("INSERT INTO contactedby (date, lastName, firstName, email, phoneNumber, companyName, subject, message) VALUES (NOW(),?,?,?,?,?,?,?)");

        $affectedRow = $dataToTransmit->execute(array($lastName, $firstName, $email, $phoneNumber, $companyName, $subject, $message));

        $dataToTransmit->closeCursor();
    }
    
    
    public function sendReplyToClient(){
        
    }
    
}
