$(document).ready(function(){
		$("a.btn.btn-primary.login_btn.send").click(function(){
			if($('#concordo_1').is(":checked")){
				if(validarCampos()){
					document.getElementById("fisica").submit();
				}
			}
			else{
				$('#concordo_1_message').html('Você precisa aceitar os Termos e Condições').css('color', 'red');
			}
		}); 

		function validarCampos() {
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
	});

$('#password2').on('keyup', function () {
		//console.log("apertou: " + test);
		if ($('#password').val() == $('#password2').val()) {
			$('#password2_message').html('').addClass("validacao");
		} else{
			$('#password2_message').html('As senhas devem ser iguais').addClass("validacao");
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
            	$('#cpf_message').html('CPF inválido').css('color', 'red');
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
        $('#cpf_message').html('').css('color', 'red');
        //alert('O CPF INFORMADO É VÁLIDO.');
        return true;
    }

$(function()
{
	$("#data").mask("00/00/0000");
	$('#cep').mask('00000-000');
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

