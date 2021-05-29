class Transaction
{
  constructor(tradingCurrency, tradedCurrency, amount)
  {
    this.tradingCurrency = tradingCurrency;
    this.tradedCurrency = tradedCurrency;
    this.amount = amount;
  }

//Relevant getters and setters

  
  get tradingCurrency()
  {
      return this._tradingCurrency;
  }

  set tradingCurrency(value)
  {
    this._tradingCurrency = value;
  }

  get tradedCurrency()
  {
      return this._tradedCurrency;
  }

  set tradedCurrency(value)
  {
    this._tradedCurrency = value;
  }

  get amount()
  {
      return this._amount;
  }

  set amount(value)
  {
    this._amount = value;
  }

  exportTR()
  {
    let obj = {"ID":this.trID, "Trading Currency":this.tradingCurrency, "Traded Currency":this.tradedCurrency, "Amount":this.amount };
    return obj;
  }

}
