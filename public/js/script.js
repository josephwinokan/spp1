$(function() {

    $('.tampilModalTambah').on('click', function() {
        
        $('#exampleModalLabel').html('Tambah Data Mahasiswa');
        $('.modal-footer button[type=button').html('Tambah Data');

    });

    $('.tampilModalUbah').on('click', function() {
        
        $('#exampleModalLabel').html('Ubah Data Mahasiswa');
        $('.modal-footer button[type=button').html('Ubah Data');

        const nisn = $(this).data('nisn');
        
        $.ajax({
            url: 'http://localhost:8000/siswa/getubah',
            data: {nisn : nisn},
            method: 'post' ,
            dataType: 'json',
            success: function(data) {
                $('#nisn').val(data.nisn);
                $('#nis').val(data.nis);
                $('#nama').val(data.nama);
                $('#kelas').val(data.kelas);
                $('#alamat').val(data.alamat);
                $('#no_telp').val(data.no_telp);
                $('#id_spp').val(data.id_spp);
            }
        })

    });

});

