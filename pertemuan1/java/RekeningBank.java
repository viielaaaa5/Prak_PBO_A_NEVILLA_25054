public class RekeningBank {
    private final String nomorRekening;
    private final String pemilikRekening;
    private double saldo;

    public RekeningBank(String nomorRekening, String pemilikRekening, double saldo) {
        if (saldo < 0) {
            throw new IllegalArgumentException("Saldo tidak boleh negatif.");
        }

        this.nomorRekening = nomorRekening;
        this.pemilikRekening = pemilikRekening;
        this.saldo = saldo;
    }

    public String getNomorRekening() {
        return nomorRekening;
    }

    public String getPemilikRekening() {
        return pemilikRekening;
    }

    public double getSaldo() {
        return saldo;
    }

    public void setor(double jumlah) {
        if (jumlah <= 0) {
            throw new IllegalArgumentException("Jumlah setor harus lebih dari 0.");
        }

        saldo += jumlah;
    }

    public void tarik(double jumlah) {
        if (jumlah <= 0) {
            throw new IllegalArgumentException("Jumlah tarik harus lebih dari 0.");
        }

        if (jumlah > saldo) {
            throw new IllegalArgumentException("Saldo tidak mencukupi.");
        }

        saldo -= jumlah;
    }
}
