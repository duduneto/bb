    document.getElementById('btnSimulacao').addEventListener('click', function(e){
    e.preventDefault();
    console.log('btn apertado');
    let seguro = document.getElementById('select-seguro').value;
    let nome = document.getElementById('inputNome').value;
    let email = document.getElementById('inputEmail').value;
    let telefone = document.getElementById('inputTelefone').value;
    let cpf = document.getElementById('inputCPF').value;

    
    let obj = {seguro,nome,email,telefone,cpf};
    let obje = JSON.stringify(obj)
    console.log(obj);
    console.log(obje);
    
    document.getElementById('inputNome').value = '';
    document.getElementById('inputEmail').value = '';
    document.getElementById('inputTelefone').value = '';
    document.getElementById('inputCPF').value = '';

    // var alerta = document.getElementById('msgDeAlerta');
    // alerta.classList.remove('disappear');
    // alerta.classList.remove('disappear');
    // function apagaAlerta() {
    //     alerta.classList.add('disappear')
    // }
    
    axios.post('http://localhost:3030/oapi/cliente-simulation/', obj)
    .then( resp => {
        console.log(resp.data)
        // if( resp.status == 201){
        //     alerta.classList.remove('disappear');
        //     setTimeout(apagaAlerta, 6000);
        // }
    })
    .catch( err => {
        console.log(err)
    });

});