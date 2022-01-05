<script type="text/javascript">
    var rupiah1 = document.getElementById('rupiah1');
    rupiah1.addEventListener('keyup', function(e){
    rupiah1.value = formatRupiah(this.value, 'Rp. ');
    });    

    function formatRupiah(angka, prefix){
        var number_string = angka.replace(/[^,\d]/g, '').toString(),
        split             = number_string.split(','),
        sisa              = split[0].length % 3,
        rupiah1           = split[0].substr(0, sisa),
        ribuan            = split[0].substr(sisa).match(/\d{3}/gi);

        if(ribuan){
            separator = sisa ? '.' : '';
            rupiah1 += separator + ribuan.join('.');
        }

        rupiah1 = split[1] != undefined ? rupiah1 + ',' + split[1] : rupiah1;
        return prefix == undefined ? rupiah1 : (rupiah1 ? 'Rp. ' + rupiah1 : '');
    }
</script>
<script type="text/javascript">
    var rupiah2 = document.getElementById('rupiah2');
    rupiah2.addEventListener('keyup', function(e){
    rupiah2.value = formatRupiah(this.value, 'Rp. ');
    });    

    function formatRupiah(angka, prefix){
        var number_string = angka.replace(/[^,\d]/g, '').toString(),
        split             = number_string.split(','),
        sisa              = split[0].length % 3,
        rupiah2           = split[0].substr(0, sisa),
        ribuan            = split[0].substr(sisa).match(/\d{3}/gi);

        if(ribuan){
            separator = sisa ? '.' : '';
            rupiah2 += separator + ribuan.join('.');
        }

        rupiah2 = split[1] != undefined ? rupiah2 + ',' + split[1] : rupiah2;
        return prefix == undefined ? rupiah2 : (rupiah2 ? 'Rp. ' + rupiah2 : '');
    }
</script>
<script type="text/javascript">
    var rupiah3 = document.getElementById('rupiah3');
    rupiah3.addEventListener('keyup', function(e){
    rupiah3.value = formatRupiah(this.value, 'Rp. ');
    });    

    function formatRupiah(angka, prefix){
        var number_string = angka.replace(/[^,\d]/g, '').toString(),
        split             = number_string.split(','),
        sisa              = split[0].length % 3,
        rupiah3           = split[0].substr(0, sisa),
        ribuan            = split[0].substr(sisa).match(/\d{3}/gi);

        if(ribuan){
            separator = sisa ? '.' : '';
            rupiah3 += separator + ribuan.join('.');
        }

        rupiah3 = split[1] != undefined ? rupiah3 + ',' + split[1] : rupiah3;
        return prefix == undefined ? rupiah3 : (rupiah3 ? 'Rp. ' + rupiah3 : '');
    }
</script>