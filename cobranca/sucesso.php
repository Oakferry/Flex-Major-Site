<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Pagamento Confirmado</title>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap');

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(135deg, #091c3e, #183875);
      color: #fff;
      height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      text-align: center;
      padding: 20px;
    }

    .card {
      background-color: #0e1a34;
      border: 2px solid #2ecc71;
      border-radius: 16px;
      padding: 40px;
      max-width: 500px;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.4);
    }

    .card h1 {
      font-size: 2rem;
      margin-bottom: 20px;
      color: #2ecc71;
    }

    .card p {
      font-size: 1rem;
      margin-bottom: 30px;
      line-height: 1.6;
    }

    .btn {
      background-color: #e0b647;
      color: #0e1a34;
      border: none;
      padding: 12px 24px;
      font-size: 1rem;
      font-weight: 600;
      border-radius: 8px;
      cursor: pointer;
      transition: all 0.3s ease;
      text-decoration: none;
      display: inline-block;
    }

    .btn:hover {
      background-color: #ffcc4d;
    }

    @media (max-width: 500px) {
      .card {
        padding: 30px 20px;
      }

      .card h1 {
        font-size: 1.6rem;
      }

      .card p {
        font-size: 0.95rem;
      }
    }
  </style>
</head>
<body>
  <div class="card">
    <h1>Pagamento confirmado!</h1>
    <p>Seu pagamento foi processado com sucesso.<br>
    Agradecemos por escolher a Flex Major School.</p>
    <a href="index.html" class="btn">Voltar ao início</a>
  </div>
</body>
</html>
