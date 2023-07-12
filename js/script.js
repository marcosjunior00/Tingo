function verifyErrors() {
  var senhasIguais = false;
  var lengthSenha = false;
  var disabled = true;
  var btn_cadastro = document.getElementById("btnCadastro");
  btn_cadastro.style.disabled = true;
  btn_cadastro.style.backgroundColor = "#D6D6D6";

  var senha = document.getElementById("inpSenha");
  var ConfSenha = document.getElementById("ConfSenha").value;

  function verificacaoLength() {
    let senha = document.getElementById("inpSenha").value;
    let reqLengthPass = document.getElementById("caracteres");
    let comprimentoSenha = senha.length;

    if (comprimentoSenha > 6 && comprimentoSenha <= 28) {
      reqLengthPass.style.color = "green";
      lengthSenha = true;
      disabled = false;
    } else {
      reqLengthPass.style.color = "red";
      lengthSenha = false;
      disabled = true;
    }
  }

  function verificacaoIguais() {
    let senha = document.getElementById("inpSenha").value;
    let confSenha = document.getElementById("ConfSenha").value;
    let reqSenhaIgual = document.getElementById("senhasIguais");

    if (senha === confSenha) {
      reqSenhaIgual.style.color = "green";
      senhasIguais = true;
      disabled = false;
    } else {
      reqSenhaIgual.style.color = "red";
      senhasIguais = false;
      disabled = true;
    }
  }

  // Verificar se há alguma requisição faltante
  if (senhasIguais == false || lengthSenha == false || disabled == true) {
    btn_cadastro.style.disabled = true;
    btn_cadastro.style.backgroundColor = "#D6D6D6";
    return alert("Respeite as requisições da senha!");
  } else {
    btn_cadastro.style.disabled = false;
    btn_cadastro.style.backgroundColor = "#b678e6";
  }
}
