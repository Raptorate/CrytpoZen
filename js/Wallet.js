
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
        this.success = false;
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

    calculate(price, transaction)
    {
        if(transaction.tradingCurrency === "usd" )
        {
            if(price*transaction.amount > this.balance)
            {
                console.log("Not enough balance");
                return false;
            }
            else
            {
                this.balance = this.balance - price*transaction.amount;
                this.updatePortfolio(transaction.tradedCurrency, transaction.amount);
                console.log("Transaction Succesful");
                transaction.status = true;
                this.success = true;
                let stream = this.exportWallet();
                $.ajax({
                    url:"js/confirm.php",
                    method: "post",
                    data: stream,
                    success: function(res){
                      console.log(res);
                    }
                  })
                this.displayPortfolio();
                return true;
            }
        }
        else
        {   
            let check = false;
            switch(transaction.tradingCurrency)
            {
                case "btc":
                    if(price*transaction.amount < this.btc)
                    {    
                        this.btc -= price*transacton.amount; 
                        check = true;
                        break;
                    }
                        
                    else
                        console.log("Not enough balance");
                        
                    break;

                case "eth":
                    if(price*transaction.amount < this.eth)
                    {
                        this.eth -= price*transaction.amount;
                        check = true;
                        break;
                    }
                    else
                        console.log("Not enough balance");
                    break;

                case "ltc":
                    if(price*transaction.amount < this.ltc)
                    {
                        this.ltc -= price*transaction.amount;
                        check = true;
                        break;
                    }
                    else
                        console.log("Not enough balance");
                    break;

                case "bth":
                    if(price*transaction.amount < this.bth)
                    {
                        this.bth -= price*transaction.amount;
                        check = true;
                        break;
                    }
                    else
                        console.log("Not enough balance");
                    break;

                case "atom":
                    if(price*transaction.amount < this.atom)
                    {
                        this.atom -= price*transaction.amount;
                        check = true;
                        break;
                    }
                    else
                        console.log("Not enough balance");
                    break;
             }
             if(check)
             {
                this.updatePortfolio(transaction.tradedCurrency, transaction.amount);
                console.log("Transaction Succesful");
                transaction.status = true;
                this.success = true;
                let stream = this.exportWallet();
                $.ajax({
                    url:"js/confirm.php",
                    method: "post",
                    data: stream,
                    success: function(res){
                      console.log(res);
                    }
                  })
                this.displayPortfolio();
                return true;
             }

             else{
                 console.log("Transaction failed");
                 return false;
             }


        }
    }


// Function to display the entire portfolio


    exportWallet()
    {
        let exported = {
        "balance":this.balance,
        "btc":this.btc,
        "eth":this.eth,
        "atom":this.atom,
        "ltc":this.ltc,
        "bch":this.bch,
        "success":this.success
        };

        return exported;
        
    }

    
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
        let exc = 0;
        let url = "https://api.cryptonator.com/api/full/" + transaction.tradedCurrency + "-" + transaction.tradingCurrency;
        fetch(url)
        .then(response => response.json())
        .then(data => this.calculate(data.ticker.price, transaction));

    }

}