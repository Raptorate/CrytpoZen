class Transaction
{
  constructor(trID, trDate, trTime, tradingCurrency, tradedCurrency, amount)
  {
    this.trID = trID;
    this.trDate = trDate;
    this.trTime = trTime;
    this.tradingCurrency = tradingCurrency;
    this.tradedCurrency = tradedCurrency;
    this.amount = amount;
  }

//Relevant getters and setters

  get trID()
  {
      return this._trID;
  }

  set trID(value) 
  {
    this._trID = value;
  }

  get trDate()
  {
      return this._trDate;
  }

  set trDate(value)
  {
    this._trDate = value;
  }

  get trTime()
  {
      return this._trTime;
  }

  set trTime(value)
  {
    this._trTime = value;
  }

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
    let obj = {"ID":this.trID, "Date":this.trDate, "Time":this.trTime, "Trading Currency":this.tradingCurrency, "Traded Currency":this.tradedCurrency, "Amount":this.amount };
    return obj;
  }

}
