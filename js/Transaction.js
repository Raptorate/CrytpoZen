class Transaction
{
  constructor(trID, trDate, trTime, trType, tradingCurrency, tradedCurrency, amount)
  {
    this.trID = trID;
    this.trDate = trDate;
    this.trTime = trTime;
    this.trType = trType;
    this.tradingCurrency = tradingCurrency;
    this.tradedCurrency = tradedCurrency;
    this.amount = amount;
  }

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

  get trType()
  {
    return this._trType;
  }

  set trType(value)
  {
    this._trType = value;
  }

  exportTR()
  {
    let obj = {"ID":this.trID, "Date":this.trDate, "Time":this.trTime, "Type":this.trType, "Trading Currency":this.tradingCurrency, "Traded Currency":this.tradedCurrency, "Amount":this.amount };
    return obj;
  }

}
