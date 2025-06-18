document.addEventListener('DOMContentLoaded', function () {
  console.log('A página foi carregada!');

  document.querySelectorAll(".faq-cobrancas").forEach(button => {
    button.addEventListener("click", () => {
      const faqItem = button.parentElement;

      // Alterna a classe 'active' no item (abre/fecha resposta)
      faqItem.classList.toggle("active");

      // Agora vamos também mudar o sinal + para - ou - para +
      const toggleIcon = button.querySelector('.faq-toggle-plus'); // pega o span dentro do botão

      if (faqItem.classList.contains("active")) {
        toggleIcon.textContent = "-"; // se está aberto, mostra -
      } else {
        toggleIcon.textContent = "+"; // se está fechado, mostra +
      }
    });
  });

  // Adiciona o evento de clique ao botão de pagamento
  document.getElementById("payButton").addEventListener("click", () => {
    fetch("/create-checkout-session", {
      method: "POST",
      headers: { "Content-Type": "application/json" }
    })
      .then(res => res.json())
      .then(data => {
        if (data.url) {
          window.location.href = data.url;
        } else {
          alert("Erro ao iniciar pagamento.");
        }
      })
      .catch(err => {
        console.error("Erro na requisição:", err);
        alert("Falha ao se conectar com o servidor.");
      });
  });

  //box do nome e pagamento
  /* function preencherInput(form) {
    const nomeAlunoInput = document.getElementById('student_name');
    const nomeAlunoInput2 = document.getElementById('student_name');
    const nomeAlunoInput3 = document.getElementById('student_name');

    const nomeAluno = nomeAlunoInput.value.trim().replace(/\s+/g, ' ');
    const nomeAluno2 = nomeAlunoInput2.value.trim().replace(/\s+/g, ' ');
    const nomeAluno3 = nomeAlunoInput3.value.trim().replace(/\s+/g, ' ');

    // Regex corrigida: exige pelo menos duas palavras com 2+ letras, permitindo acentos
    const nomeValido = /^([A-Za-zÀ-ÿ]{2,})(\s+[A-Za-zÀ-ÿ]{2,})+$/;

    if (!nomeAluno || !nomeAluno2 || !nomeAluno3) {
      alert("Por favor, preencha o nome do aluno.");
      nomeAlunoInput.focus();
      return false;
    }

    if (!nomeValido.test(nomeAluno) || !nomeValido.test(nomeAluno2) || !nomeValido.test(nomeAluno2)) {
      alert("Digite o nome completo (nome e sobrenome).");
      nomeAlunoInput.focus();
      return false;
    }

    form.querySelector('input[name="student_name"]').value = nomeAluno;
    return true;
  } */



});
