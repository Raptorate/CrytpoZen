
//This class consists outline of a wallet that is assigned to each user

class Wallet
{
    constructor(balance, btc, eth, atom, ltc, bch)
    {
        this.balance = balance;
        this.btc = btc;
        this.eth = eth;
        this.atom = atom;
        this.ltc = ltc;
        this.bch = bch;

    }

// Relevant getters and setters

    

    get balance()
    {
        return this._balance;
    }

    set balance(value)
    {
        this._balance = value;
    }

//Wallet Functions

    addBalance(value)
    {
        this.balance = this.balance + value;
    }

    sendBalance(value)
    {
        this.balance = this.balance - value;
    }
    

    //Main function that checks the validity of a transaction and updates accordingly by calling updatePortfolio()

    calculate(price, tradingCurrency, tradedCurrency, amount)
    {
        console.log(price);
        if(tradingCurrency === "usd" )
        {
            if(price*amount > this.balance)
            {
                console.log("Not enough balance");
                return false;
            }
            else
            {
                this.balance = this.balance - price*amount;
                this.updatePortfolio(tradedCurrency, amount);
                console.log("Transaction Succesful");
                this.displayPortfolio();
                return true;
            }
        }
        else
        {   
            let check = false;
            switch(tradingCurrency)
            {
                case "btc":
                    if(price*amount < this.btc)
                    {    
                        this.btc -= price*amount; 
                        check = true;
                    }
                        
                    else
                        console.log("Not enough balance");
                        
                    break;

                case "eth":
                    if(price*amount < this.eth)
                    {
                        this.eth -= price*amount;
                        check = true;
                    }
                    else
                        console.log("Not enough balance");
                    break;

                case "ltc":
                    if(price*amount < this.ltc)
                    {
                        this.ltc -= price*amount;
                        check = true;
                    }
                    else
                        console.log("Not enough balance");
                    break;

                case "bth":
                    if(price*amount < this.bth)
                    {
                        this.bth -= price*amount;
                        check = true;
                    }
                    else
                        console.log("Not enough balance");
                    break;

                case "atom":
                    if(price*amount < this.atom)
                    {
                        this.atom -= price*amount;
                        check = true;
                    }
                    else
                        console.log("Not enough balance");
                    break;
             }
             if(check)
             {
                this.updatePortfolio(tradedCurrency, amount);
                console.log("Transaction Succesful");
                this.displayPortfolio();
                return true;
             }


        }
    }

// Function to display the entire portfolio

    displayPortfolio()
    {
        console.log("Balance : " +this.balance);
        console.log("BTC : " +this.btc);
        console.log("ETH : " +this.eth);
        console.log("Atom : " +this.atom);
        console.log("LTC : " +this.ltc);
        console.log("BCH : " +this.bch);
    }

    //This function updates the values of the portfolio after a successful transaction

    updatePortfolio(currency, amount)
    {
        switch(currency)
        {
            case "btc":
                this.btc += amount;
                break;
            case "eth":
                this.eth += amount;
                break;
            case "ltc":
                this.ltc += amount;
                break;
            case "bth":
                this.bth += amount;
                break;
            case "atom":
                this.atom += amount;
                break;
            
        }
    }

    //Function to initiate transaction from wallet

    update(transaction)
    {

        let url = "https://api.cryptonator.com/api/full/" + transaction.tradedCurrency + "-" + transaction.tradingCurrency;
        fetch(url)
        .then(response => response.json())
        .then(data => this.calculate(data.ticker.price, transaction.tradingCurrency, transaction.tradedCurrency, transaction.amount));
        
        
        
    }

}