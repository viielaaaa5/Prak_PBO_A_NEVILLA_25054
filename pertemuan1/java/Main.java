public class Main {
    public static void main(String[] args) {

        // ==============================
        // OPERASI SAH
        // ==============================
        System.out.println("---->> Objek rekening1 (Operasi Sah) <<----");

        RekeningBank rekening1 = new RekeningBank(
            "123456789",
            "Nevilla Ghilar",
            1000000
        );

        System.out.println("Nomor Rekening : " + rekening1.getNomorRekening());
        System.out.println("Pemilik        : " + rekening1.getPemilikRekening());
        System.out.println("Saldo Awal     : Rp" + rekening1.getSaldo());

        rekening1.setor(500000);

        System.out.println("\nSetor          : Rp500000");
        System.out.println("Saldo Sekarang : Rp" + rekening1.getSaldo());

        rekening1.tarik(250000);

        System.out.println("\nTarik          : Rp250000");
        System.out.println("Saldo Sekarang : Rp" + rekening1.getSaldo());


        // ==============================
        // OPERASI TIDAK SAH
        // ==============================
        System.out.println("\n\n---->> Objek rekening2 (Operasi Tidak Sah) <<----");

        try {
            RekeningBank rekening2 = new RekeningBank(
                "987654321",
                "Nevilla Ghilar",
                -500000
            );

            System.out.println("Nomor Rekening : " + rekening2.getNomorRekening());
            System.out.println("Pemilik        : " + rekening2.getPemilikRekening());
            System.out.println("Saldo          : Rp" + rekening2.getSaldo());

        } catch (IllegalArgumentException e) {
            System.out.println("Error: " + e.getMessage());
        }


        // ==============================
        // OPERASI TIDAK SAH - TARIK
        // ==============================
        System.out.println("\n---->> Operasi Tarik Tidak Sah <<----");

        try {
            rekening1.tarik(2000000);
        } catch (IllegalArgumentException e) {
            System.out.println("Error: " + e.getMessage());
        }
    }
}
