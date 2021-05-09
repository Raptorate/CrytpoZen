class Wallet
{
    constructor(wID, userID, balance)
    {
        this.wID = wID;
        this.userID = userID;
        this.balance = balance;
        this.portfolio = [{"Euro":balance}];
        this.pCounter = 0;
    }

    get wID()
    {
        return this._wID;
    }

    set wID(value)
    {
        this._wID = value;
    }

    get userID()
    {
        return this._userID;
    }

    set userID(value)
    {
        this._userID = value;
    }

    get balance()
    {
        return this._balance;
    }

    set balance(value)
    {
        this._balance = value;
    }

    get portfolio()
    {
        return this._portfolio;
    }

    set portfolio(value)
    {
        this._portfolio = value;
    }
    
    addBalance(value)
    {
        this.balance = this.balance + value;
    }

    sendBalance(value)
    {
        this.balance = this.balance - value;
    }

    update(transaction)
    {
        let checkTrading = false;
        let checkTraded = false;
        let modifier = 5000; // Temporary holder needs value from API

        for(const currency in this.portfolio)
        {
            console.log(currency);
                console.log(transaction.tradingCurrency);
            if(currency === transaction.tradingCurrency)
            {
                checkTrading = true;
            }    
            
            if(currency === transaction.tradedCurrency)
            {
                    checkTraded  = true;
            }
        }

        if(!checkTrading)
        {
            console.log("Currency not found!");
            return;
        }

        if(checkTrading)
        {
            this.portfolio[transaction.tradingCurrency] -= transaction.amount;
        }

        if(checkTraded)
        {
            this.portfolio[transaction.tradedCurrency] += transaction.amount/modifier;
        }

        if(!checkTraded)
        {
            pCounter++;
            this.portfolio[transaction.tradedCurrency] = transaction.amount/modifier;
        }
    }

}