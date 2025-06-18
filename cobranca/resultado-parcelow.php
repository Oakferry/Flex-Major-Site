<?php 
session_start();
$status = $_SESSION['status'] ?? 'erro';
$mensagem =  $_SESSION['mensagem'] ?? 'Erro desconhecido';
$checkoutUrl = $_SESSION['checkout_url'] ?? '';
?>



<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Resultado do Pagamento</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      padding: 40px;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 90vh;
      background-color: #f9f9f9;
    }
    .card {
      background: white;
      border-radius: 12px;
      box-shadow: 0 2px 10px rgba(0,0,0,0.1);
      padding: 30px;
      max-width: 500px;
      width: 100%;
      text-align: center;
    }
    .card h2 {
      color: <?= $status === 'sucesso' ? '#4CAF50' : '#E53935' ?>;
    }
    a.button {
      display: inline-block;
      margin-top: 20px;
      padding: 10px 20px;
      background-color: #4348e0;
      color: white;
      border-radius: 8px;
      text-decoration: none;
    }
  </style>
</head>
<body>

  <div class="card">
    <h2><?= $status === 'sucesso' ? 'Sucesso!' : 'Erro!' ?></h2>
    <p><?= htmlspecialchars($mensagem) ?></p>

    <?php if ($status === 'sucesso' && $checkoutUrl): ?>
      <a href="<?= htmlspecialchars($checkoutUrl) ?>" class="button" target="_blank">Ir para o Pagamento</a>
    <?php endif; ?>
  </div>

</body>
</html>