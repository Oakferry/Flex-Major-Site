<?php
$public_key = 'STRIPE_SECRET_KEY'
    ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flex Major</title>

    <link rel="stylesheet" href="/index/css/style.css">
    <link rel="stylesheet" href="/index/css/style-index-responsive.css">
    <link rel="stylesheet" href="/footer/css/footer.css">
    <link rel="shortcut icon" href="/index/img/LOGO.svg" type="image/x-icon">
    <link rel="stylesheet" href="/navbar/css/navbar.css">
    <link rel="stylesheet" href="/cobranca/css/cobranca.css">
    <link rel="stylesheet" href="/cobranca/css/cobranca-responsive.css">
    <!-- <script src="https://parcelow.com.br/embed/embed.min.js"></script> -->

    <style>
        .wpp-fixo {
            position: fixed;
            width: 60px;
            height: 60px;
            bottom: 30px;
            right: 20px;
            background-color: #25d366;
            border-radius: 50%;
            box-shadow: 1px 1px 5px rgba(0, 0, 0, 0.3);
            z-index: 999;
            display: flex;
            align-items: center;
            justify-content: center;
            animation: pulse 2s infinite;
        }

        .wpp-fixo a {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
            height: 100%;
            position: relative;
        }

        .wpp-fixo img {
            width: 30px;
            height: 30px;
            object-fit: contain;
        }

        /* Tooltip acima */
        .wpp-fixo a::after {
            content: "Fale conosco";
            position: absolute;
            bottom: 70px;
            left: 50%;
            transform: translateX(-50%);
            background-color: #333;
            color: #fff;
            padding: 6px 10px;
            font-size: 12px;
            border-radius: 5px;
            opacity: 0;
            white-space: nowrap;
            pointer-events: none;
            transition: opacity 0.3s;
        }

        /* Setinha para baixo (abaixo do balão) */
        .wpp-fixo a::before {
            content: "";
            position: absolute;
            bottom: 60px;
            left: 50%;
            transform: translateX(-50%);
            border-width: 6px;
            border-style: solid;
            border-color: #333 transparent transparent transparent;
            opacity: 0;
            transition: opacity 0.3s;
        }

        .wpp-fixo a:hover::after,
        .wpp-fixo a:hover::before {
            opacity: 1;
        }

        /* Animação pulsante */
        @keyframes pulse {
            0% {
                transform: scale(1);
                box-shadow: 0 0 0 0 rgba(37, 211, 102, 0.7);
            }

            70% {
                transform: scale(1.05);
                box-shadow: 0 0 0 10px rgba(37, 211, 102, 0);
            }

            100% {
                transform: scale(1);
                box-shadow: 0 0 0 0 rgba(37, 211, 102, 0);
            }
        }


        .modal-overlay {
            display: none;
            position: fixed;
            z-index: 9999;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.6);
            justify-content: center;
            align-items: center;
        }

        .modal-content {
            background: #fff;
            padding: 30px;
            border-radius: 10px;
            width: 90%;
            max-width: 700px;
            position: relative;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
        }

        .close {
            position: absolute;
            top: 15px;
            right: 20px;
            font-size: 24px;
            border: none;
            background: transparent;
            cursor: pointer;
            color: black;
        }
    </style>

</head>

<body>

    <!-- Nav-bar principal -->
    <section class="barraSuperior">

        <!-- rigth section -->
        <div class=" rigthSide">

            <!-- Flags -->
            <div class="bandeiraIdioma me-1">
                <a href="/index-port.html" class="brasil">
                    <img src="/index/img/brasil (1).png" alt="br">
                </a>
                <a href="/index.html" class="eua">
                    <img src="/index/img/estados-unidos24.png" alt="en">
                </a>
                <a href="/index-spanish.html" class="espanha">
                    <img src="/index/img/espanha24.png" alt="es">
                </a>
            </div>

            <!-- socia midia links -->
            <div class="redeSociais ms-3">
                <a target="_blank" href="https://www.instagram.com/flexmajorschool/" class="text-white ">
                    <img src="/index/img/instagram.svg" alt="instagram">
                </a>
                <a target="_blank" href="https://www.facebook.com/Flex-Major-School-102353782292788"
                    class="text-white ms-1">
                    <img src="/index/img/facebook.svg" alt="facebook">
                </a>
                <a target="_blank" href="https://www.linkedin.com/company/flex-major-school/" class="text-white ms-1">
                    <img src="/index/img/linkedin32.png" alt="linkedin">
                </a>
            </div>

        </div>


    </section>


    <header class="header2" id="header">
        <a id="logo" href="/index.html">
            <img src="/index/img/LOGO.svg" alt="">
        </a>
        <nav id="nav">
            <button aria-label="Abrir menu" id="btn-mobile" aria-haspopup="true" aria-controls="menu"
                aria-expanded="false">

                <span id="hamburguer"></span>
            </button>
            <ul id="menu" role="menu">
                <li class="dropdown">
                    <a class="mexer" href="/">Choose your program
                        <img src="/index/img/seta-para-baixo.png" alt="">
                    </a>
                    <ul class="dropdown-menu">
                        <li><a target="_blank" href="middle-school/Middle-ing.html">Middle School</a></li>
                        <li><a target="_blank" href="high-school/high-eng.html">High School</a></li>
                        <li><a target="_blank" href="college-prep/college-eng.html">College Prep</a></li>
                    </ul>
                </li>
                <li><a href="sobre-nos/sobre-eng.html">About Us</a></li>
                <li><a href="/album/album-english.html">Album</a></li>
                <li><a href="/partnership/partnership-school-english.html">Become a Partner School</a></li>
                <li class="link-album-mobile">

                    <!-- Mudar idioma -->
                    <a href="/index-port.html" class="text-white me-3"> <img src="index/img/brasil (1).png"
                            alt="br"></a>
                    <a href="/index.html" class="text-white"> <img src="index/img/estados-unidos24.png" alt="en"></a>
                    <a href="/index-spanish.html" class="text-white"> <img src="/index/img/espanha24.png" alt="es"></a>
                </li>
                <li class="redeSociais-mobile">
                    <a target="_blank" href="https://www.instagram.com/flexmajorschool/" class="text-white ">
                        <img src="index/img/instagram-mobile.png" alt="instagram">
                    </a>
                    <a target="_blank" href="https://www.facebook.com/Flex-Major-School-102353782292788"
                        class="text-white ms-1">
                        <img src="index/img/facebook-mobile.png" alt="facebook">
                    </a>
                    <a target="_blank" href="https://www.linkedin.com/company/flex-major-school/"
                        class="text-white ms-1 " style="object-fit: cover;">
                        <img src="/index/img/linkedin-mobile (1).png " alt="linkedin">
                    </a>
                </li>
            </ul>
        </nav>

    </header>


    <section class="banner-cobrancas">
        <div class="container-cobrancas">
            <div class="content-cobrancas">
                <h1>Finalize Seu Pagamento de Forma Segura</h1>
                <p class="p-answer">Selecione abaixo o programa desejado para efetuar seu pagamento.</p>
            </div>
        </div>
    </section>


    <!-- FAQ pagamentos -->
    <section class="section-faq-cobrancas">

        <div class="faq-list-cobrancas">
            <!-- Pagamento 1 -->
            <div class="faq-item-cobrancas">
                <button class="faq-cobrancas">
                    Tuition Middle School
                    <span class="faq-toggle-plus">+</span>
                </button>
                <div class="faq-answer-cobrancas">
                    <!-- <p class="p-answer">
                        O programa Flex Major School - <strong>Middle School Diploma</strong> é um programa de ensino
                        médio que oferece um diploma reconhecido nos Estados Unidos. O aluno pode
                        escolher entre o diploma regular ou o diploma com honras, dependendo do seu
                        desempenho acadêmico e das disciplinas cursadas.
                    </p> -->
                    <div class="form-container">

                        <div class="button-row">
                            <!-- Pague com Stripe -->
                            <!-- Campos compartilhados -->
                            <div class="form-pagamento">
                                <h3 class="titulo-pagamento">Pagamento - Tuition Middle School </h3>
                                <div class="info-pagamento">
                                    <strong>Curso:</strong> <span>Tuition Middle School</span> <br>
                                    <!-- <strong>Valor:</strong> <span class="valor-pagamento"> U$ 470,00</span> -->
                                </div>

                                <!-- Campos de input fora dos formulários -->
                                <!-- <div class="input-group">
                                    <label for="student_name">Nome do Aluno</label>
                                    <input type="text" id="student_name" name="student_name_input"
                                        placeholder="Digite o nome completo" required>
                                </div> -->


                                <div class="button-row">
                                    <!-- Botão Stripe -->
                                    <button id="btnStripeMiddle" class="btn-pagamento btn-cartao">
                                        Pagamento Internacional
                                    </button>

                                    <!-- Botão Parcelow -->
                                    <button id="btnParcelowMiddle" class="btn-pagamento btn-boleto">
                                        Pagamento (Brasil)
                                    </button>
                                </div>

                                <script>
                                    document.getElementById('btnStripeMiddle').addEventListener('click', function () {
                                        // Link do Stripe Paylink real será adicionado depois
                                        window.open('https://buy.stripe.com/eVa01Ad6efbi3v228x', '_blank', 'noopener,noreferrer');
                                    });

                                    document.getElementById('btnParcelowMiddle').addEventListener('click', function () {
                                        window.open('https://app.parcelow.com.br/payment-link/pay/NqJX16YARM', '_blank', 'noopener,noreferrer');
                                    });
                                </script>

                                <!--   <script src="https://js.stripe.com/v3/"></script>
                                    <script>
                                        async function iniciarCheckoutEmbed(){
                                            const resposta = await fetch('/backend/checkout.php',{
                                                method: 'POST',
                                                headers: {'Content-Type': 'application/json'},
                                                body: JSON.stringify({
                                                    studant_name: document.getElementById('student_name').value
                                                })
                                            });
                                            const dados = await resposta.json();

                                            if(!dados.client_reference_id){
                                                alert("Erro ao gerar sessão de checkout.");
                                                return;
                                            }

                                            const stripe = Stripe('public_key');

                                            await stripe.initEmbeddedCheckout({
                                                clientRefenceId: dados.client_reference_id,
                                                element: '#checkout_container',
                                            });
                                        }
                                    </script> -->







                                <!-- Botão Parcelow -->
                                <!-- <form action="/cobranca/parcelow-form.php" method="POST"
                                        onsubmit="return preencherInput(this)">
                                        <input type="hidden" name="student_name" value="">
                                        <input type="hidden" name="product_name" value="Middle School Diploma">
                                        <input type="hidden" name="amount" value="12.000,00"> -->
                                <!--  <input type="hidden" name="cpf" value="12345678909"> -->
                                <!-- Substituir por input dinâmico -->
                                <!--  <input type="hidden" name="payment_method" value="pix"> -->
                                <!-- ou 'boleto' -->
                                <!--  <input type="hidden" name="due_date" value="2025-05-10"> -->
                                <!-- Substituir se necessário -->
                                <!--  <button class="btn-pagamento btn-boleto" type="submit">Pagamento
                                            parcelado</button> -->
                                <!-- -->

                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Pagamento 2 -->
            <div class="faq-item-cobrancas">
                <button class="faq-cobrancas">
                    Tuition High School
                    <span class="faq-toggle-plus">+</span>
                </button>

                <div class="faq-answer-cobrancas">
                    <div class="form-container">
                        <div class="button-row">
                            <div class="form-pagamento">
                                <h3 class="titulo-pagamento">Pagamento - Tuition High School</h3>
                                <div class="info-pagamento">
                                    <strong>Curso:</strong> Tuition High School<br>
                                    <!-- <strong>Valor:</strong> <span class="valor-pagamento">U$ 690,00</span> -->
                                </div>

                                <!-- Campos de input -->
                                <!-- <div class="input-group">
                                    <label for="student_name">Nome do Aluno</label>
                                    <input type="text" id="student_name" name="student_name_input"
                                        placeholder="Digite o nome completo" required>
                                </div> -->

                                <!-- Botões de pagamento -->
                                <div class="button-row">
                                    <!-- Botão Stripe -->
                                    <button id="btnStripeHigh" class="btn-pagamento btn-cartao">
                                        Pagamento Internacional
                                    </button>

                                    <!-- Botão Parcelow -->
                                    <button id="btnParcelowHigh" class="btn-pagamento btn-boleto">
                                        Pagamento (Brasil)
                                    </button>
                                </div>



                                <!-- Scripts -->
                                <script>
                                    document.getElementById('btnStripeHigh').addEventListener('click', function () {
                                        // Link do Stripe Paylink real será adicionado depois
                                        window.open('https://buy.stripe.com/cN2g0y5DMe7e5Da28w', '_blank', 'noopener,noreferrer');
                                    });

                                    document.getElementById('btnParcelowHigh').addEventListener('click', function () {
                                        window.open('https://app.parcelow.com.br/payment-link/pay/O3JY8a659M', '_blank', 'noopener,noreferrer');
                                    });
                                </script>




                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Pagamento 3 -->
            <!-- Pagamento Parcelow -->
            <div class="faq-item-cobrancas">
                <button class="faq-cobrancas">
                    College Prep
                    <span class="faq-toggle-plus">+</span>
                </button>
                <div class="faq-answer-cobrancas">
                    <div class="form-container">
                        <div class="form-pagamento">
                            <h3 class="titulo-pagamento">Pagamento - College Prep.</h3>

                            <div class="info-pagamento">
                                <strong>Curso:</strong> College Prep.<br>
                                <!--  <strong>Valor:</strong> <span class="valor-pagamento">U$ 4000,00</span> -->
                            </div>

                            <!--  <div class="input-group">
                                <label for="student_name">Nome do Aluno</label>
                                <input type="text" id="student_name" placeholder="Digite o nome completo" required>
                            </div>
                            <div class="input-group">
                                <label for="cpf">CPF</label>
                                <input type="text" id="cpf" placeholder="000.000.000-00" required>
                            </div>
                            <div class="input-group">
                                <label for="email">E-mail</label>
                                <input type="email" id="email" placeholder="email@exemplo.com" required>
                            </div> -->


                            <!-- Botão -->
                            <!-- Botão Parcelow -->
                            <div class="button-row">
                                <button id="btnPagamentoCollegePrep" class="btn-pagamento btn-boleto">
                                    Pagamento (Brasil)
                                </button>
                            </div>

                            <script>
                                document.getElementById('btnPagamentoCollegePrep').addEventListener('click', function () {
                                    window.open('https://app.parcelow.com.br/payment-link/pay/y0Av7bvLwX', '_blank', 'noopener,noreferrer');
                                });
                            </script>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- <script>
            document.addEventListener('DOMContentLoaded', function () {
                const btn = document.getElementById('btnPagamento');
                const modal = document.getElementById('parcelow-checkout');
                const iframe = document.getElementById('parcelow-iframe');

                btn.addEventListener('click', function () {
                    // Aqui você pode definir uma URL fixa ou dinâmica
                    iframe.src = "https://app.parcelow.com.br/payment-link/pay/y0Av7bvLwX"; // substitua pela URL correta
                    modal.style.display = 'flex';
                });
            });

            function fecharModal() {
                const modal = document.getElementById('parcelow-checkout');
                const iframe = document.getElementById('parcelow-iframe');
                modal.style.display = 'none';
                iframe.src = '';
            } -->


        <!-- /*  document.getElementById('btnPagamento').onclick = function () */ /* { */
            /* const student_name = document.getElementById('student_name').value.trim();
            const cpf = document.getElementById('cpf').value.trim();
            const email = document.getElementById('email').value.trim(); */

            /*                     if (!student_name || !cpf || !email) {
                                    alert('Por favor, preencha todos os campos.');
                                    return;
                                }
             */
            /*     const payload = {
                    student_name: student_name,
                    product_name: 'College Prep',
                    amount: 2300000, */ // R$ 23.000,00 em centavos
            /*    cpf: cpf,
               email: email,
               payment_method: 'pix',
               due_date: '2025-05-17'
           };

           fetch('/backend/parcelow.php', {
               method: 'POST',
               headers: { 'Content-Type': 'application/json' },
               body: JSON.stringify(payload)
           })
               .then(res => res.json())
               .then(data => {
                   if (data.success) {
                       document.getElementById('checkoutIframe').src = data.checkout_url;
                       document.getElementById('modal-checkout').style.display = 'block';
                   } else {
                       alert('Erro ao criar checkout: ' + (data.error || 'Erro desconhecido'));
                   }
               })
               .catch(err => {
                   alert('Erro na requisição.');
                   console.error(err);
               });
       }; */ -->
        <!--  </script> -->


        <!-- Verificando nome completo -->





    </section>


    <!-- WhatsApp - ícone fixo -->
    <div class="wpp-fixo">
        <a href="https://api.whatsapp.com/send?phone=14079893636&text=Hello,%20I%20found%20you%20through%20your%20Website"
            target="_blank" rel="noopener noreferrer">
            <img src="/album/img/whatsapp (2).png" alt="Fale conosco no WhatsApp" />
        </a>
    </div>

    <!-- Placeholder para o footer -->
    <div id="footer-placeholder"></div>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

    <!-- Script do footer -->
    <script src="/footer/js/footer.js"></script>

    <script src="/navbar/js/script.js"></script>

    <script src="/navbar/js/script.js"></script>
    <script src="/cobranca/js/cobranca.js"></script>
</body>

</html>