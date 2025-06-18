<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Pagamento Cancelado - Flex Major</title>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap');

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(135deg, #f2f4f8, #ffffff);
      color: #333;
      height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 20px;
      flex-direction: column;
    }

    .card {
      background-color: #ffffff;
      border: 1px solid #e0e0e0;
      border-left: 6px solid #e74c3c;
      border-radius: 12px;
      padding: 40px;
      max-width: 480px;
      width: 100%;
      box-shadow: 0 6px 24px rgba(0, 0, 0, 0.1);
      text-align: center;
    }

    .card img {
      max-width: 160px;
      margin-bottom: 20px;
    }

    .card h1 {
      font-size: 1.8rem;
      margin-bottom: 20px;
      color: #e74c3c;
    }

    .card p {
      font-size: 1rem;
      margin-bottom: 30px;
      color: #555;
      line-height: 1.5;
    }

    .btn {
      background-color: #b41819;
      color: #fff;
      border: none;
      padding: 12px 24px;
      font-size: 1rem;
      font-weight: 600;
      border-radius: 8px;
      cursor: pointer;
      transition: background-color 0.3s ease;
      text-decoration: none;
      display: inline-block;
    }

    .btn:hover {
      background-color: #8e1213;
    }

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


    @media (max-width: 500px) {
      .card {
        padding: 30px 20px;
      }

      .card h1 {
        font-size: 1.5rem;
      }

      .card p {
        font-size: 0.95rem;
      }
    }
  </style>
</head>

<body>
  <div class="card">
    <!-- Substitua com o caminho real da logo se quiser -->
    <img src="/index/img/LOGO.svg" alt="Logo Flex Major">

    <h1>Pagamento não concluído</h1>
    <p>Ops! Parece que a tentativa de pagamento foi cancelada ou não foi finalizada com sucesso.<br>
      Se desejar, você pode retornar e tentar novamente. Estamos aqui para ajudar! <br></p>

    <a href="https://site.flexmajorschool.com/cobranca/cobrancasExt.php" class="btn">↺ Tentar novamente</a>

    
  </div>
  <p style="font-size: small; margin-top: 30px;">Dúvidas, <a
        href="https://api.whatsapp.com/send?phone=14079893636&text=Hello,%20I%20found%20you%20through%20your%20Website">fale
        com o suporte</a></p>

  <!-- WhatsApp - ícone fixo -->
  <div class="wpp-fixo">
    <a href="https://api.whatsapp.com/send?phone=14079893636&text=Hello,%20I%20found%20you%20through%20your%20Website"
      target="_blank" rel="noopener noreferrer">
      <img src="/album/img/whatsapp (2).png" alt="Fale conosco no WhatsApp" />
    </a>
  </div>
</body>

</html>