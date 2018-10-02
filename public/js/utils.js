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