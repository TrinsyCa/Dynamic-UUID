<?php

// Include Database Connection
include_once "conn.php";

// Generate Random Or Unique UUID
// Maximum 36 Character

function generateUUID() {
   $data = openssl_random_pseudo_bytes(16);
   assert(strlen($data) == 16);
   // Versiyon 4 UUID oluşturma
   $data[6] = chr(ord($data[6]) & 0x0f | 0x40); // Versiyon 4
   $data[8] = chr(ord($data[8]) & 0x3f | 0x80); // IETF uyumluluğu
   return sprintf('%s-%s-%s-%s-%s',
       bin2hex(substr($data, 0, 4)),
       bin2hex(substr($data, 4, 2)),
       bin2hex(substr($data, 6, 2)),
       bin2hex(substr($data, 8, 2)),
       bin2hex(substr($data, 10, 6))
   );
}
function uuidExists($database, $uuid, $table, $cell_name) {
    $stmt = $database->prepare("SELECT COUNT(*) FROM $table WHERE $cell_name = :$cell_name");
    $stmt->bindParam(":$cell_name", $uuid);
    $stmt->execute();
    return $stmt->fetchColumn() > 0;
}
function generateUniqueUUID($database, $table, $cell_name) {
    do {
        $uuid = generateUUID();
    } while (uuidExists($database, $uuid, $table, $cell_name));
    return $uuid;
}

// ↓ Connect Your Database And Test Code ↓

// Generate Random UUID
$randomUUID = generateUUID();

// Generate Unique UUID
$uniqueUUID = generateUniqueUUID($db, "jobs", "uuid");

echo "Random UUID: $randomUUID<br>";
echo "Unique UUID: $uniqueUUID<br>";