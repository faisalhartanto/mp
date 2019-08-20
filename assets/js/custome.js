function angka_saja(element) {
    $("." + element).on('keypress', function (e) {
        return e.metaKey || // cmd/ctrl
                e.which <= 0 || // arrow keys
                e.which === 8 || // delete key
                /[0-9]/.test(String.fromCharCode(e.which)); // numbers
    });
}