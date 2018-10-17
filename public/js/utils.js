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
				$('#nome_message').html('Campo obrigatório').addClass("validacao");
				flag = false;
			}else{
				$('#nome_message').html('');
			}
			if($('#email').val() == ''){
				$('#email_message').html('Campo obrigatório').addClass("validacao");
				flag = false;
			}
			else{
				$('#email_message').html('');
			}
			if($('#password').val() == ''){
				$('#password_message').html('Campo obrigatório').addClass("validacao");
				flag = false;
			}else{
				$('#password_message').html('');
			}
			if($('#password2').val() == ''){
				$('#password2_message').html('Campo obrigatório').addClass("validacao");
				flag = false;
			}else{
				$('#password2_message').html('');	
			}
			if($('#data').val() == ''){
				$('#data_message').html('Campo obrigatório').addClass("validacao");
				flag = false;
			}else{
				$('#data_message').html('');	
			}
			if($('#cpf').val() == ''){
				$('#cpf_message').html('Campo obrigatório').addClass("validacao");
				flag = false;
			}else{
				$('#cpf_message').html('');
			}
			if($('#sexy').val() == ''){
				$('#sexo_message').html('Campo obrigatório').addClass("validacao");
				flag = false;
			}else{
				$('#sexo_message').html('');	
			}
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

