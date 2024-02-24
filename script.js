document.addEventListener('DOMContentLoaded', function () {
    var inputJumlah = document.getElementById('jumlah');
    var inputHarga = document.getElementById('harga');

    inputJumlah.addEventListener('input', function () {
        var jumlah = parseFloat(inputJumlah.value);
        var hargaPerItem = 0;
        var jenisMie = document.getElementById('jenis_mie').value;

        switch (jenisMie) {
            case 'Mie Kuah':
                hargaPerItem = 4000;
                break;
            case 'Mie Goreng':
                hargaPerItem = 5000;
                break;
            case 'Mie Rebus':
                hargaPerItem = 3000;
                break;
            case 'Mie Tumis':
                hargaPerItem = 2500;
                break;
            case 'Mie Kwetiau':
                hargaPerItem = 4000;
                break;
            case 'Mie Goreng Korea':
                hargaPerItem = 6000;
                break;
            case 'Mie Goreng Saus Tiram':
                hargaPerItem = 5000;
                break;
            case 'Mie Instan':
                hargaPerItem = 2000;
                break;
            default:
                hargaPerItem = 0;
        }

        var totalHarga = jumlah * hargaPerItem;
        inputHarga.value = totalHarga;
    });
});
