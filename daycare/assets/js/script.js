$(function () {
    $('#tabela').DataTable()
    $('#tabela2').DataTable()
    $('#tabela3').DataTable({
        'paging': true,
        'lengthChange': false,
        'searching': false,
        'ordering': true,
        'info': true,
        'autoWidth': false
    })
})


function Mudarestado(el) {
    var display = document.getElementById(el).style.display;
    if (display == "none")
        document.getElementById(el).style.display = 'block';
    else
        document.getElementById(el).style.display = 'none';
}

function mostrarSenha() {
    var tipo = document.getElementById("senha");
    if (tipo.type == "password") {
        tipo.type = "text";
    } else {
        tipo.type = "password";
    }
}


        