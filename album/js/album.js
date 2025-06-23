document.addEventListener("DOMContentLoaded", function () {
    const images = document.querySelectorAll(".grid-wrapper img");
    const modal = document.getElementById("myModal");
    const modalImg = document.getElementById("modalImg");
    const closeBtn = document.querySelector(".close");
    const prevBtn = document.querySelector(".prev");
    const nextBtn = document.querySelector(".next");

    let currentIndex = 0;

    // Exibe conteúdo só após tudo estar carregado
    window.onload = function () {
        document.body.style.visibility = "visible";
    };
  

    function openModal(index) {
        modal.style.display = "flex";
        setTimeout(() => {
            modal.classList.add("show");
        }, 10);
        modalImg.src = images[index].src;
        currentIndex = index;
    }

    images.forEach((img, index) => {
        img.addEventListener("click", () => openModal(index));
    });

    closeBtn.addEventListener("click", () => {
        modal.classList.remove("show");
        setTimeout(() => modal.style.display = "none", 300);
    });

    prevBtn.addEventListener("click", () => {
        currentIndex = (currentIndex - 1 + images.length) % images.length;
        modalImg.src = images[currentIndex].src;
    });

    nextBtn.addEventListener("click", () => {
        currentIndex = (currentIndex + 1) % images.length;
        modalImg.src = images[currentIndex].src;
    });

    modal.addEventListener("click", (e) => {
        if (e.target === modal) {
            modal.classList.remove("show");
            setTimeout(() => modal.style.display = "none", 300);
        }
    });

    document.addEventListener("keydown", (e) => {
        if (modal.style.display === "flex") {
            if (e.key === "ArrowLeft") prevBtn.click();
            if (e.key === "ArrowRight") nextBtn.click();
            if (e.key === "Escape") modal.style.display = "none";
        }
    });

  /*   const gridWrapper = document.querySelector(".grid-wrapper");
    const sentinela = document.getElementById("sentinela");

    // Função que simula carregar mais imagens a partir da pasta local
    function carregarMaisImagens() {
        // Defina o número de novas imagens a serem carregadas
        const numNovasImagens = 20;

        for (let i = 1; i <= numNovasImagens; i++) {
            const div = document.createElement("div");
            const img = document.createElement("img");

            // Carrega a imagem da pasta local, ajustando o nome conforme necessário
            img.src = `/assets/img/imagens/imagem(${i}).webp`; // ou use um nome dinâmico
            img.alt = `Imagem ${i} - Nova`;

            // Mantém a estrutura da galeria com a classe que já é usada
            div.classList.add("grid-item");
            div.appendChild(img);

            // Adiciona a nova imagem à grid, antes do sentinela
            gridWrapper.insertBefore(div, sentinela);
        }

        atualizarImagensModal(); // Atualiza os eventos do modal para as novas imagens
    }

    // Função pra atualizar os eventos das novas imagens
    function atualizarImagensModal() {
        const imagensAtuais = document.querySelectorAll(".grid-wrapper img");

        imagensAtuais.forEach((img, index) => {
            img.onclick = () => openModal(index);
        });
    }

    // IntersectionObserver para detectar quando o sentinela está visível
    const observer = new IntersectionObserver(entries => {
        if (entries[0].isIntersecting) {
            carregarMaisImagens();
        }
    }, {
        rootMargin: "100px"
    });

    observer.observe(sentinela); */
});