document.getElementById('btnSimulacao').addEventListener('click', function(e){
    e.preventDefault();
    console.log('btn apertado');
    let nome = document.getElementById('inputNome').value;
    let email = document.getElementById('inputEmail').value;
    let telefone = document.getElementById('inputTelefone').value;
    let cpf = document.getElementById('inputCPF').value;

    
    let obj = {nome,email,telefone,cpf};
    let obje = JSON.stringify(obj)
    console.log(obj);
    console.log(obje);
    
    document.getElementById('inputNome').value = '';
    document.getElementById('inputEmail').value = '';
    document.getElementById('inputTelefone').value = '';
    document.getElementById('inputCPF').value = '';

    var alerta = document.getElementById('msgDeAlerta');
    // alerta.classList.remove('disappear');
    // alerta.classList.remove('disappear');
    function apagaAlerta() {
        alerta.classList.add('disappear')
    }
    
    axios.post('https://bbcorretora-api.herokuapp.com/oapi/cliente-simulation/', obj)
    .then( resp => {
        if( resp.status == 201){
            alerta.classList.remove('disappear');
            setTimeout(apagaAlerta, 6000);
        }
    })
    .catch( err => {
        console.log(err)
    });
    $('.alert').alert('close');
});