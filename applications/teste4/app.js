document
  .getElementById("conversion-form")
  .addEventListener("submit", async (e) => {
    e.preventDefault();

    const currency = document.getElementById("currency").value;
    const amount = parseFloat(document.getElementById("amount").value);
    const apiUrl = `https://economia.awesomeapi.com.br/json/${currency}-BRL`;

    if (amount < 1000) {
      alert("O valor mínimo para cotação é R$ 1.000,00");
      return;
    }

    try {
      const response = await axios.get(apiUrl);
      const data = response.data;
      const bid = parseFloat(data[0].bid);

      const convertedAmount = (amount / bid).toFixed(2);
      const currencyName = `${data[0].name.split("/")[0]} (${currency})`;

      document.getElementById("real").innerText = `R$ ${amount.toFixed(2)}`;
      document.getElementById("currencyName").innerText = currencyName;
      document.getElementById(
        "bid"
      ).innerText = `Valor de compra: R$ ${bid.toFixed(4)}`;
      document.getElementById(
        "convertedAmount"
      ).innerText = `Resultado: ${currency} ${convertedAmount}`;

      document.getElementById("result").style.display = "block";
    } catch (error) {
      console.error("Erro ao buscar a cotação:", error);
    }
  });
