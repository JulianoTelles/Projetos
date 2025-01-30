document.getElementById('cadastroForm').addEventListener('submit', function(event) {
    var nome = document.getElementById('nome').value;
    var telefone = document.getElementById('telefone').value;
    var email = document.getElementById('email').value;
    var dataConsulta = document.getElementById('data_consulta').value;

    if (nome === '' || telefone === '' || email === '' || dataConsulta === '') {
        alert('Por favor, preencha todos os campos.');
        event.preventDefault();
    }
});