<?php

require_once "RekeningBank.php";

// ==============================
// OPERASI SAH
// ==============================
echo "---->> Objek rekening1 (Operasi Sah) <<----" . PHP_EOL;

$rekening1 = new RekeningBank(
    "123456789",
    "Nevilla Ghilar",
    1000000
);

echo "Nomor Rekening : " . $rekening1->getNomorRekening() . PHP_EOL;
echo "Pemilik        : " . $rekening1->getPemilikRekening() . PHP_EOL;
echo "Saldo Awal     : Rp" . $rekening1->getSaldo() . PHP_EOL;

$rekening1->setor(500000);

echo PHP_EOL;
echo "Setor          : Rp500000" . PHP_EOL;
echo "Saldo Sekarang : Rp" . $rekening1->getSaldo() . PHP_EOL;

$rekening1->tarik(250000);

echo PHP_EOL;
echo "Tarik          : Rp250000" . PHP_EOL;
echo "Saldo Sekarang : Rp" . $rekening1->getSaldo() . PHP_EOL;


// ==============================
// OPERASI TIDAK SAH
// ==============================
echo PHP_EOL . PHP_EOL;
echo "---->> Objek rekening2 (Operasi Tidak Sah) <<----" . PHP_EOL;

try {
    $rekening2 = new RekeningBank(
        "987654321",
        "Nevilla Ghilar",
        -500000
    );

    echo "Nomor Rekening : " . $rekening2->getNomorRekening() . PHP_EOL;
    echo "Pemilik        : " . $rekening2->getPemilikRekening() . PHP_EOL;
    echo "Saldo          : Rp" . $rekening2->getSaldo() . PHP_EOL;

} catch (InvalidArgumentException $e) {
    echo "Error: " . $e->getMessage() . PHP_EOL;
}


// ==============================
// OPERASI TARIK TIDAK SAH
// ==============================
echo PHP_EOL;
echo "---->> Operasi Tarik Tidak Sah <<----" . PHP_EOL;

try {
    $rekening1->tarik(2000000);
} catch (InvalidArgumentException $e) {
    echo "Error: " . $e->getMessage() . PHP_EOL;
}
