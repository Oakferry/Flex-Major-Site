// ========================== MENU MOBILE ==========================

// Seleciona o botão de menu mobile pelo ID
const btnMobile = document.getElementById('btn-mobile');

// Função para abrir e fechar o menu ao clicar ou tocar no botão
function toggleMenu(event) {
    // Evita o comportamento padrão ao tocar (em dispositivos móveis)
    if (event.type === 'touchstart') event.preventDefault();

    // Seleciona o elemento da navegação pelo ID
    const nav = document.getElementById('nav');

    // Alterna a classe 'active' no menu, abrindo ou fechando
    nav.classList.toggle('active');

    // Verifica se o menu está ativo ou não
    const active = nav.classList.contains('active');

    // Atualiza o atributo 'aria-expanded' para acessibilidade
    event.currentTarget.setAttribute('aria-expanded', active);

    // Atualiza o atributo 'aria-label' para indicar a ação do botão
    if (active) {
        event.currentTarget.setAttribute('aria-label', 'Fechar menu');
    } else {
        event.currentTarget.setAttribute('aria-label', 'Abrir menu');
    }
}

// Adiciona eventos de clique e toque ao botão do menu mobile
btnMobile.addEventListener('click', toggleMenu);
btnMobile.addEventListener('touchstart', toggleMenu);

// ========================== FAQ (Perguntas Frequentes) ==========================

// Seleciona todos os botões de perguntas frequentes
document.querySelectorAll(".faq-question").forEach(button => {
    // Adiciona um evento de clique para cada botão
    button.addEventListener("click", () => {
        // Seleciona o elemento pai da pergunta, que contém a resposta
        const faqItem = button.parentElement;

        // Alterna a classe 'active', expandindo ou recolhendo a resposta
        faqItem.classList.toggle("active");
    });
});


