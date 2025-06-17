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

});
