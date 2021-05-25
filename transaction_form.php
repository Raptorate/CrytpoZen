<!DOCTYPE html>

<head>
  <title>Transaction Form</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.">
</head>

<body>

  <form action="./insertdata.php" method="post">


    <br>
    <br>

    <label for="trading">Trading Currency:</label><br>
    <select name="trading_currency">
      <option selected disabled>Select here</option>
      <option value="usd">usd</option>
      <option value="btc">btc</option>
      <option value="eth">eth</option>
      <option value="ltc">ltc</option>
      <option value="atom">atom</option>
      <option value="bch">bch</option>
    </select>

    <br>

    <label for="traded">Traded Currency</label><br>
    <select name="traded_currency">
      <option selected disabled>Select here</option>
      <option value="usd">usd</option>
      <option value="btc">btc</option>
      <option value="eth">eth</option>
      <option value="ltc">ltc</option>
      <option value="atom">atom</option>
      <option value="bch">bch</option>
    </select><br>

    <label for="amount">Amount:</label><br>
    <input type="number" id="amount" name="amount" value="0">

    <input type="submit">
  </form>

</body>
