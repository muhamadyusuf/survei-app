function getProv(){
    $.ajax({
        url: hostUrl + "api/lokasi/provinsi-lists",
        type: 'GET',
        success: function (data) {
            var html = '<option value="">Pilih</option>';
            $.each(data.result, function (key, value) {
                html += '<option value="'+value.lokasi_kode+'">'+value.lokasi_kode+' '+value.lokasi_nama+'</option>';
            });
            $('select[name="survei_prov_kode"]').html("").append(html);
        },
        error: function (data) {
            Swal.fire({
                text: "Terdapat masalah saat mengambil data provinsi",
                icon: "error",
                buttonsStyling: false,
                confirmButtonText: "Ok, got it!",
                customClass: {
                    confirmButton: "btn btn-primary"
                }
            });
        }
    });
}

function getKab(){
    var kode = $('select[name="survei_prov_kode"]').val();
    $.ajax({
        url: hostUrl + "api/lokasi/provinsi/" + kode + "/kota-lists",
        type: 'GET',
        success: function (data) {
            var html = '<option value="">Pilih</option>';
            $.each(data.result, function (key, value) {
                html += '<option value="'+value.lokasi_kode+'">'+value.lokasi_kode+' '+value.lokasi_nama+'</option>';
            });
            $('select[name="survei_kab_kode"]').html("").append(html);
        },
        error: function (data) {
            Swal.fire({
                text: "Terdapat masalah saat mengambil data kabupaten",
                icon: "error",
                buttonsStyling: false,
                confirmButtonText: "Ok, got it!",
                customClass: {
                    confirmButton: "btn btn-primary"
                }
            });
        }
    });
}

function getKec(){
    var kode = $('select[name="survei_kab_kode"]').val();
    $.ajax({
        url: hostUrl + "api/lokasi/kota/" + kode + "/kecamatan-lists",
        type: 'GET',
        success: function (data) {
            var html = '<option value="">Pilih</option>';
            $.each(data.result, function (key, value) {
                html += '<option value="'+value.lokasi_kode+'">'+value.lokasi_kode+' '+value.lokasi_nama+'</option>';
            });
            $('select[name="survei_kec_kode"]').html("").append(html);
        },
        error: function (data) {
            Swal.fire({
                text: "Terdapat masalah saat mengambil data kecamatan",
                icon: "error",
                buttonsStyling: false,
                confirmButtonText: "Ok, got it!",
                customClass: {
                    confirmButton: "btn btn-primary"
                }
            });
        }
    });
}

function getKel(){
    var kode = $('select[name="survei_kec_kode"]').val();
    $.ajax({
        url: hostUrl + "api/lokasi/kecamatan/" + kode + "/kelurahan-lists",
        type: 'GET',
        success: function (data) {
            var html = '<option value="">Pilih</option>';
            $.each(data.result, function (key, value) {
                html += '<option value="'+value.lokasi_kode+'">'+value.lokasi_kode+' '+value.lokasi_nama+'</option>';
            });
            $('select[name="survei_kel_kode"]').html("").append(html);
        },
        error: function (data) {
            Swal.fire({
                text: "Terdapat masalah saat mengambil data kelurahan",
                icon: "error",
                buttonsStyling: false,
                confirmButtonText: "Ok, got it!",
                customClass: {
                    confirmButton: "btn btn-primary"
                }
            });
        }
    });
}

// Main
getProv();

$('select[name="survei_prov_kode"]').on('change', function() {
    getKab();
    $('select[name="survei_kec_kode"]').html("")
    $('select[name="survei_kel_kode"]').html("")
});

$('select[name="survei_kab_kode"]').on('change', function() {
    getKec();
    $('select[name="survei_kel_kode"]').html("")
});

$('select[name="survei_kec_kode"]').on('change', function() {
    getKel();
});