var senhasIguais = false;
var lengthSenha = false;
var btn_cadastro = document.getElementById("btnCadastro");
btn_cadastro.style.disabled = true;

var senha = document.getElementById('inpSenha');
var ConfSenha = document.getElementById('ConfSenha');

function verificacaoLength() {
  let senha = document.getElementById("inpSenha").value;
  let reqLengthPass = document.getElementById("caracteres");
  let comprimentoSenha = senha.length;

  if (comprimentoSenha > 6 && comprimentoSenha <= 28) {
    reqLengthPass.style.color = "green";
    lengthSenha = true;
  } else {
    reqLengthPass.style.color = "red";
    lengthSenha = false;
  }
}

function verificacaoIguais() {
  let senha = document.getElementById("inpSenha").value;
  let confSenha = document.getElementById("ConfSenha").value;
  let reqSenhaIgual = document.getElementById("senhasIguais");

  if (senha === confSenha) {
    reqSenhaIgual.style.color = "green";
    senhasIguais = true;
  } else {
    reqSenhaIgual.style.color = "red";
    senhasIguais = false;
  }
}

// Verificar se há alguma requisição faltante
if (senhasIguais == false || lengthSenha == false) {
  return alert("Respeite as requisições da senha!");
} else {
  btn_cadastro.style.disabled = false;
}
