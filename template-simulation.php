<?php 
/*
Template Name: Simulation Page
Template Post Type: page
*/
get_header();
$seguros = array(

    array('seguro' => 'Seg. Vida', 'value' => 'vida', 'avaible' => true),
    array('seguro' => 'Seg. Residencial', 'value' => 'residencial', 'avaible' => true),
    array('seguro' => 'Seg. Auto', 'value' => 'auto', 'avaible' => true),
    array('seguro' => 'Seg. Viagem', 'value' => 'viagem', 'avaible' => true),
    array('seguro' => 'Seg. Portáteis', 'value' => 'portateis', 'avaible' => true),

    array('seguro' => 'Acidentes Pessoais', 'value' => 'acidentes_pessoais', 'avaible' => true),
    array('seguro' => 'Seg. Bike', 'value' => 'bike', 'avaible' => false),
    array('seguro' => 'Seg. Saúde', 'value' => 'saude', 'avaible' => false),
    array('seguro' => 'Seg. Odontologico', 'value' => 'odontologico', 'avaible' => false),
    array('seguro' => 'Seg. Mulher', 'value' => 'mulher', 'avaible' => false),

    array('seguro' => 'Seg. Homem', 'value' => 'homem', 'avaible' => false),
    array('seguro' => 'Consórcio', 'value' => 'consorcio', 'avaible' => false),
    array('seguro' => 'Seg. Educacional', 'value' => 'educacional', 'avaible' => false),
    array('seguro' => 'Seg. Pet', 'value' => 'pet', 'avaible' => false),
    array('seguro' => 'Previdência Privada', 'value' => 'previdencia', 'avaible' => true),
    array('seguro' => 'Outro...', 'value' => 'outro')

);

?>
<style>

    .disappear{
        display: none;
    }
</style>
<header class='header-simulation' >
    <div class="container">
        <div class="text-center title-simulation">
            <h1>Preencha o Formulário da Cotação</h1>
        </div>
    </div>
</header>
<script>
    // OPEN VALIDATING FIELDS
        function validacaoEmail(field) {
                usuario = field.value.substring(0, field.value.indexOf("@"));
                dominio = field.value.substring(field.value.indexOf("@")+ 1, field.value.length);
                
                if ((usuario.length >=1) &&
                    (dominio.length >=3) && 
                    (usuario.search("@")==-1) && 
                    (dominio.search("@")==-1) &&
                    (usuario.search(" ")==-1) && 
                    (dominio.search(" ")==-1) &&
                    (dominio.search(".")!=-1) &&      
                    (dominio.indexOf(".") >=1)&& 
                    (dominio.lastIndexOf(".") < dominio.length - 1)) {
                    document.getElementById("msgemail").innerHTML="<font color='green'>Ok </font>";
                    
                    }
                    else{
                    document.getElementById("msgemail").innerHTML="<font color='red'>E-mail inválido </font>";
                    
                    }
                }
    // CLOSE VALIDATING FIELDS
</script>
<section class='form-simulation' style='margin-top: 25vh;' >
    <div class="container">
        
        <div class='row justify-content-center'>
            
            <div class="col-md-auto align-self-center mb-5">
    
                <form id='form-simulacao'>
                    <div class="form-group">
                        <label for="select-seguro">Selecione o Seguro que você deseja</label>
                        <select id='select-seguro' class="custom-select">
                            <option selected>Escolha um Seguro</option>
                            <?php 
                                for ($i=0; $i < count($seguros) ; $i++) {
                                    
                                    if($seguros[$i]['avaible'] == true ){ ?>
                                
                                    <option value="<?php echo($seguros[$i]['value']) ?>"><?php echo($seguros[$i]['seguro']) ?></option>
                                <?php
                                }}
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="inputNome">Nome</label>
                        <input type="text" class='form-control' id='inputNome' name='inputNome' placeholder='ex. João da Silva' />
                    </div>
                    <div class="form-group">
                        <label for="inputEmail">Email</label>
                        <div id="msgemail"></div>
                        <input type="text" class='form-control class' id='inputEmail' onfocusout='validacaoEmail(this);' name='inputEmail' placeholder='ex. joaosilva@email.com' />
                    </div>
                    <div class="form-group">
                        <label for="inputTelefone">Telefone</label>
                        <input type="text" class='form-control tel' id='inputTelefone' name='inputTelefone' placeholder='ex. (85) 9-9999-9999' />
                    </div>
                    <div class="form-group">
                        <label for="inputCPF">CPF</label>
                        <input id='inputCPF' type="text" class='form-control cpf' id='inputCPF' name='inputCPF' placeholder='999.999.999-99' />
                    </div>
                    <div class="form-group">
                        <div id="msgError"></div>
                        <button id='btnSimulacao' class='btn btn-default' >Solicite</button>
                    </div>
                    <div class="col-md-auto align-self-center mt-5 mb-5">
    
                        <div id="msgDeAlerta" class="alert alert-success disappear" role="alert">
                            <h4 class="alert-heading">Solicitação Feita!</h4>
                            <p>Por favor aguarde nosso contato! Nossa equipe irá entrar em contato com você o mais rápido possível!</p>
                                            
                            <p class="mt-5">Fiquei tranquilo, suas informaçoes estão bem guardadas conosco!</p>
                        </div>
                    </div>
                </form>
            </div>
        </div> 
    </div>
        
</section>
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.18.0/axios.js" type="text/javascript" ></script>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/core.js" type="text/javascript" ></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js" type="text/javascript" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.min.js"></script>

<script type='text/javascript' >

    // OPEN INPUT's MASKs
        $('.cpf').mask('000.000.000-00', {reverse:true});
        $('.tel').mask('00 0-0000-0000', {reverse:true});
    // CLOSE INPUT's MASKs

</script>


<script type="text/javascript" >
   document.getElementById('btnSimulacao').addEventListener('click', function(e){
    e.preventDefault();
    console.log('btn apertado');

    let nome = document.getElementById('inputNome').value;
    let email = document.getElementById('inputEmail').value;
    let telefone = document.getElementById('inputTelefone').value;
    let cpf = document.getElementById('inputCPF').value;
    let seguro = document.getElementById('select-seguro').value;
    
    if(!!nome & !!email & !!telefone & !!cpf & !!seguro){

        let obj = {nome,email,telefone,cpf,seguro};
        let obje = JSON.stringify(obj)
        let objdata = {data:obj};
        console.log(objdata);
        // console.log(obje);
        
        document.getElementById('inputNome').value = '';
        document.getElementById('inputEmail').value = '';
        document.getElementById('inputTelefone').value = '';
        document.getElementById('inputCPF').value = '';
        document.getElementById('select-seguro').value = '';

        var alerta = document.getElementById('msgDeAlerta');
        // alerta.classList.remove('disappear');
        // alerta.classList.remove('disappear');
        function apagaAlerta() {
            alerta.classList.add('disappear');
        }
        function ligaAlerta() {
            alerta.classList.add('disappear');
        }
        ligaAlerta();
        axios.post('<?php echo(get_template_directory_uri()) ?>/api/crud/teste.php', obj)
        .then( resp => {
            console.log(resp.data);
            if( resp.status == 201){
                alerta.classList.remove('disappear');
                // setTimeout(apagaAlerta, 6000);
            }
        })
        .catch( err => {
            console.log(err)
        });
        document.getElementById("msgError").innerHTML=""
    }else{
        document.getElementById("msgError").innerHTML="<font color='red'> Preencha todos os Campos </font>"
    }

    
}); 

</script>
<?php 
require_once('footer.php');
?>