$(document).ready(function(){
	$("a.btn.btn-primary.login_btn.send").click(function(){
		if($('#concordo_1').is(":checked")){
			if(validarCamposFisica()){
				document.getElementById("fisica").submit();
			}
		}
		else{
			$('#concordo_1_message').html('Você precisa aceitar os Termos e Condições').css('color', 'red');
		}
	}); 

	$("a.btn.btn-primary.login_btn.send.ju").click(function(){
		if($('#concordo_2').is(":checked")){
			if(validarCamposJuridica()){
				document.getElementById("fisica").submit();
			}
		}
		else{
			$('#concordo_2_message').html('Você precisa aceitar os Termos e Condições').css('color', 'red');
		}
	});

	function validarCamposFisica() {
		var flag = true;
		if($('#name').val() == ''){
			$('#name').css('border', '1px solid #FF0000');
			flag = false;
		}else{
			$('#name').css('border', '1px solid #282d39');
		}
		if($('#email').val() == ''){
			$('#email').css('border', '1px solid #FF0000');
			flag = false;
		}
		else{
			$('#email').css('border', '1px solid #282d39');
		}
		if($('#password').val() == ''){
			$('#password').css('border', '1px solid #FF0000');
			flag = false;
		}else{
			$('#password').css('border', '1px solid #282d39');
		}
		if($('#password2').val() == ''){
			$('#password2').css('border', '1px solid #FF0000');
			flag = false;
		}else{
			$('#password2').css('border', '1px solid #282d39');
		}
		if($('#data').val() == ''){
			$('#data').css('border', '1px solid #FF0000');
			flag = false;
		}else{
			$('#data').css('border', '1px solid #282d39');
		}
		if($('#cpf').val() == ''){
			$('#cpf').css('border', '1px solid #FF0000');
			flag = false;
		}else{
			$('#cpf').css('border', '1px solid #282d39');
		}
		if($('#sexy').val() == 'Sexo*'){
			$('#sexy').css('border', '1px solid #FF0000');
			flag = false;
		}else{
			$('#sexy').css('border', '1px solid #282d39');
		}
		if($('#endereco').val() == ''){
			$('#endereco').css('border', '1px solid #FF0000');
			flag = false;
		}else{
			$('#endereco').css('border', '1px solid #282d39');
		}
		if($('#cep').val() == ''){
			$('#cep').css('border', '1px solid #FF0000');
			flag = false;
		}else{
			$('#cep').css('border', '1px solid #282d39');
		}
		if($('#bairro').val() == ''){
			$('#bairro').css('border', '1px solid #FF0000');
			flag = false;
		}else{
			$('#bairro').css('border', '1px solid #282d39');
		}
		if($('#cidade').val() == ''){
			$('#cidade').css('border', '1px solid #FF0000');
			flag = false;
		}else{
			$('#cidade').css('border', '1px solid #282d39');
		}
		if($('#estado').val() == 'Estado*'){
			$('#estado').css('border', '1px solid #FF0000');
			flag = false;
		}else{
			$('#estado').css('border', '1px solid #282d39');
		}
		if($('#telefone').val() == ''){
			$('#telefone').css('border', '1px solid #FF0000');
			flag = false;
		}else{
			$('#telefone').css('border', '1px solid #282d39');	
		}
		$('#p_message').css('color', '#FF0000');
		return flag;
	}

	function validarCamposJuridica() {
		var flag = true;
		if($('#name_ju').val() == ''){
			$('#name_ju').css('border', '1px solid #FF0000');
			flag = false;
		}else{
			$('#name_ju').css('border', '1px solid #282d39');
		}
		if($('#email_ju').val() == ''){
			$('#email_ju').css('border', '1px solid #FF0000');
			flag = false;
		}
		else{
			$('#email_ju').css('border', '1px solid #282d39');
		}
		if($('#password_ju').val() == ''){
			$('#password_ju').css('border', '1px solid #FF0000');
			flag = false;
		}else{
			$('#password_ju').css('border', '1px solid #282d39');
		}
		if($('#password2_ju').val() == ''){
			$('#password2_ju').css('border', '1px solid #FF0000');
			flag = false;
		}else{
			$('#password2_ju').css('border', '1px solid #282d39');
		}
		if($('#cnpj').val() == ''){
			$('#cnpj').css('border', '1px solid #FF0000');
			flag = false;
		}else{
			$('#cnpj').css('border', '1px solid #282d39');
		}
		if($('#endereco_ju').val() == ''){
			$('#endereco_ju').css('border', '1px solid #FF0000');
			flag = false;
		}else{
			$('#endereco_ju').css('border', '1px solid #282d39');
		}
		if($('#cep_ju').val() == ''){
			$('#cep_ju').css('border', '1px solid #FF0000');
			flag = false;
		}else{
			$('#cep_ju').css('border', '1px solid #282d39');
		}
		if($('#bairro_ju').val() == ''){
			$('#bairro_ju').css('border', '1px solid #FF0000');
			flag = false;
		}else{
			$('#bairro_ju').css('border', '1px solid #282d39');
		}
		if($('#cidade_ju').val() == ''){
			$('#cidade_ju').css('border', '1px solid #FF0000');
			flag = false;
		}else{
			$('#cidade_ju').css('border', '1px solid #282d39');
		}
		if($('#estado_ju').val() == 'Estado*'){
			$('#estado_ju').css('border', '1px solid #FF0000');
			flag = false;
		}else{
			$('#estado_ju').css('border', '1px solid #282d39');
		}
		if($('#telefone_ju').val() == ''){
			$('#telefone_ju').css('border', '1px solid #FF0000');
			flag = false;
		}else{
			$('#telefone_ju').css('border', '1px solid #282d39');	
		}
		$('#p_message').css('color', '#FF0000');
		return flag;
	}


});

$('#password2').on('keyup', function () {
		//console.log("apertou: " + test);
		if ($('#password').val() == $('#password2').val()) {
			$('#password2_message').html('').addClass("validacao");
		} else{
			$('#password2_message').html('As senhas devem ser iguais').addClass("validacao");
		}
	});

$('#password2_ju').on('keyup', function () {
		//console.log("apertou: " + test);
		if ($('#password_ju').val() == $('#password2_ju').val()) {
			$('#password2_message_ju').html('').addClass("validacao");
		} else{
			$('#password2_message_ju').html('As senhas devem ser iguais').addClass("validacao");
		}
	});

$('#cpf').on('keyup', function () {
	var cpf = $('#cpf').val();
		cpf = cpf.replace(/\./g,''); //remove todos os pontos
		cpf = cpf.replace('-', '');
		if (!vercpf(cpf))
		{
			errors = "1";
			if (errors){
				$('#cpf_message').html('CPF inválido').addClass("validacao");
			}
			document.retorno = (errors == '');
		}
	});

function vercpf(cpf) {
	if (cpf.length != 11 ||
		cpf == "00000000000" ||
		cpf == "11111111111" ||
		cpf == "22222222222" ||
		cpf == "33333333333" ||
		cpf == "44444444444" ||
		cpf == "55555555555" ||
		cpf == "66666666666" ||
		cpf == "77777777777" ||
		cpf == "88888888888" ||
		cpf == "99999999999")
		return false;

	add = 0;

	for (i = 0; i < 9; i++)
		add += parseInt(cpf.charAt(i)) * (10 - i);
	rev = 11 - (add % 11);
	if (rev == 10 || rev == 11)
		rev = 0;
	if (rev != parseInt(cpf.charAt(9)))
		return false;
	add = 0;
	for (i = 0; i < 10; i++)
		add += parseInt(cpf.charAt(i)) * (11 - i);
	rev = 11 - (add % 11);
	if (rev == 10 || rev == 11)
		rev = 0;
	if (rev != parseInt(cpf.charAt(10)))
		return false;
	$('#cpf_message').html('');
        //alert('O CPF INFORMADO É VÁLIDO.');
        return true;
    }

    $('#cnpj').on('keyup', function () {
    	var cnpj = $('#cnpj').val();
    	cnpj = cnpj.replace(/[^\d]+/g,'');
		//cpf = cpf.replace(/\./g,''); //remove todos os pontos
		//cpf = cpf.replace('-', '');
		if (!validarCNPJ(cnpj))
		{
			errors = "1";
			if (errors){
				$('#cnpj_message').html('CNPJ inválido').addClass("validacao");
			}
			document.retorno = (errors == '');
		}
	});

    function validarCNPJ(cnpj) {

    //cnpj = cnpj.replace(/[^\d]+/g,'');

    if(cnpj == '') return false;

    if (cnpj.length != 14)
    	return false;

    // Elimina CNPJs invalidos conhecidos
    if (cnpj == "00000000000000" || 
    	cnpj == "11111111111111" || 
    	cnpj == "22222222222222" || 
    	cnpj == "33333333333333" || 
    	cnpj == "44444444444444" || 
    	cnpj == "55555555555555" || 
    	cnpj == "66666666666666" || 
    	cnpj == "77777777777777" || 
    	cnpj == "88888888888888" || 
    	cnpj == "99999999999999")
    	return false;

    // Valida DVs
    tamanho = cnpj.length - 2
    numeros = cnpj.substring(0,tamanho);
    digitos = cnpj.substring(tamanho);
    soma = 0;
    pos = tamanho - 7;
    for (i = tamanho; i >= 1; i--) {
    	soma += numeros.charAt(tamanho - i) * pos--;
    	if (pos < 2)
    		pos = 9;
    }
    resultado = soma % 11 < 2 ? 0 : 11 - soma % 11;
    if (resultado != digitos.charAt(0))
    	return false;

    tamanho = tamanho + 1;
    numeros = cnpj.substring(0,tamanho);
    soma = 0;
    pos = tamanho - 7;
    for (i = tamanho; i >= 1; i--) {
    	soma += numeros.charAt(tamanho - i) * pos--;
    	if (pos < 2)
    		pos = 9;
    }
    resultado = soma % 11 < 2 ? 0 : 11 - soma % 11;
    if (resultado != digitos.charAt(1))
    	return false;

    $('#cnpj_message').html('');
    return true;
    
}

$(function()
{
	$("#data").mask("00/00/0000");
	$('#cep').mask('00000-000');
	$('#cep_ju').mask('00000-000');
	$('#cpf').mask('000.000.000-00', {reverse: true});
	$('#cnpj').mask('00.000.000/0000-00', {reverse: true});
	$('#telefone').mask('(00) 00000-0000');
	$('#telefone1').mask('(00) 0000-0000');
});

function validarSenha(){
	senha = document.f1.senha.value
	confirmarSenha = document.f1.confirmarSenha.value

	if (senha == confirmarSenha)
		alert("SENHAS IGUAIS")
	else
		alert("SENHAS DIFERENTES")
}

