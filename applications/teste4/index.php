<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simulador de Conversão de Moeda</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+Knujsl7/1L_dstPt3HV5HzF6Gvk/e3s4pY3TmE3T6Wf3//" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <style>
        body {
            background: linear-gradient(120deg, #84fab0 0%, #8fd3f4 100%);
            height: 200vh;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: #000;
        }

        .main-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            min-width: 600px;
            background-color: rgba(255, 255, 255, 0.8);
            border-radius: 1rem;
            padding: 2rem;
            backdrop-filter: blur(10px);
            box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
        }

        h1 {
            font-weight: bold;
            margin-bottom: 1.5rem;
        }

        label {
            font-weight: 500;
            font-size: 1rem;
        }

        .form-control,
        .form-select {
            padding: 0.5rem;
            background-color: rgba(255, 255, 255, 0.8);
            border: none;
            color: #000;
            font-size: 1rem;
        }

        .form-control:focus,
        .form-select:focus {
            background-color: rgba(255, 255, 255, 0.15);
            border: none;
            box-shadow: none;
            color: #000;
        }

        ::placeholder {
            color: #000;
        }

        #conversion-form {
            display: flex;
            flex-direction: column;
            gap: 1rem;
            padding: 12px;
        }

        button {
            border-radius: 10px;
            background-color: #318CB8;
            font-weight: 600;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="main-container">
                    <h1>Simulador de Conversão de Moeda</h1>
                    <form id="conversion-form">
                        <div class="mb-3">
                            <label for="currency" class="form-label">Selecione a moeda:</label>
                            <select id="currency" name="currency" class="form-select" required>
                                <option value="">Selecione a moeda</option>
                                <option value="USD">Dólar (USD)</option>
                                <option value="EUR">Euro (EUR)</option>
                                <option value="BTC">Bitcoin (BTC)</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="amount" class="form-label">Valor em Reais (R$):</label>
                            <input type="number" id="amount" name="amount" class="form-control" min="1000" step="0.01" placeholder="Valor em Reais" required>
                        </div>

                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary">Simular</button>
                        </div>
                    </form>
                    <div id="result" class="mt-4" style="display: none;">
                        <h2>Resultado</h2>
                        <p id="real"></p>
                        <p id="currencyName"></p>
                        <p id="bid"></p>
                        <p id="convertedAmount"></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script src="app.js"></script>
</body>

</html>