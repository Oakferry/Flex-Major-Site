<?php

$nome = $_POST['student_name'] ?? '';
$valor = $_POST['amount'] ?? '';
$programa = $_POST['product_name'] ?? '';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            /* Centraliza verticalmente */
            height: 100vh;
            /* Ocupa a altura total da tela */
            padding: 20px;
        }

        form.faq-item-cobrancas {
            display: flex;
            flex-direction: column;
            justify-content: center;
            background-color: #fff;
            border-radius: 12px;
            padding: 20px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
            width: 100%;
            max-width: 600px;
            box-sizing: border-box;
            height: 95vh;
        }

        form.faq-item-cobrancas label {
            display: block;
            margin-top: 15px;
            font-weight: 600;
            color: #333;
        }

        form.faq-item-cobrancas input,
        form.faq-item-cobrancas select {
            width: 100%;
            padding: 10px 12px;
            border-radius: 8px;
            border: 1px solid #ccc;
            margin-top: 5px;
            box-sizing: border-box;
            font-size: 14px;
        }

        form.faq-item-cobrancas input:focus,
        form.faq-item-cobrancas select:focus {
            outline: none;
            border-color: #7a5af8;
            /* tom roxo leve */
            box-shadow: 0 0 0 2px rgba(122, 90, 248, 0.2);
        }

        form.faq-item-cobrancas button {
            margin-top: 20px;
            background-color: rgb(67, 72, 224);
            color: white;
            border: none;
            padding: 12px 20px;
            font-size: 16px;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.2s ease;
        }

        form.faq-item-cobrancas button:hover {
            background-color: rgb(67, 72, 224);
        }

        input[readonly] {
            background-color: #f0f0f0;
            /* cinza claro */
            color: #333;
            /* texto mais escuro */
            border: 1px solid #ccc;
            /* borda leve */
            cursor: not-allowed;
            /* cursor indicando não editável */
        }
    </style>
</head>

<body>

    <div class="container">
        <!-- parcelow-form.php -->
        <form action="/backend/parcelow.php" method="POST" class="faq-item-cobrancas">
            <!-- Nome preenchido automaticamente -->
            <label for="student_name">Nome:</label>
            <input type="text" name="student_name" id="student_name" value="<?= htmlspecialchars($nome) ?>" required readonly>

            <!-- Valor preenchido automaticamente -->
            <label for="amount">Valor:</label>
            <input type="text" name="amount" id="amount" value="<?= htmlspecialchars($valor) ?>" required readonly>

            <!-- Programa preenchido automaticamente -->
            <label for="product_name">Programa:</label>
            <input type="text" name="product_name" id="product_name" value="<?= htmlspecialchars($programa) ?>" required
                readonly>

            <label>CPF:</label>
            <input type="text" name="cpf" required pattern="\d{11}" title="Digite 11 números sem pontos ou traço">


            <label>Email:</label>
            <input type="email" name="email" required>

            <label>Forma de Pagamento:</label>
            <select name="payment_method" required>
                <option value="" disabled selected>Selecione</option>
                <option value="pix">Pix</option>
                <option value="boleto">Boleto</option>
                <option value="parcelado">Parcelado</option>
            </select>

            <label>Data de Vencimento:</label>
            <input type="date" name="due_date" min="<?= date('Y-m-d', strtotime('+1 day')) ?>" value="<?= date('Y-m-d', strtotime('+3 days')) ?>" required>

            <button type="submit">Gerar Pagamento</button>
        </form>
    </div>



</body>

</html>