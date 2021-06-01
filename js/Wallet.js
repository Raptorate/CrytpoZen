//This class consists outline of a wallet that is assigned to each user

class Wallet {
    constructor(balance, btc, eth, atom, ltc, bch) {
        this.balance = 0;
        this.btc = 0;
        this.eth = 0;
        this.atom = 0;
        this.ltc = 0;
        this.bch = 0;
        this.balance += balance;
        this.btc += btc;
        this.eth += eth;
        this.atom += atom;
        this.ltc += ltc;
        this.bch += bch;
        this.success = false;
    }

    // Relevant getters and setters

    get balance() {
        return this._balance;
    }

    set balance(value) {
        this._balance = value;
    }

    //Wallet Functions

    addBalance(value) {
        this.balance = this.balance + value;
    }

    sendBalance(value) {
        this.balance = this.balance - value;
    }

    //Main function that checks the validity of a transaction and updates accordingly by calling updatePortfolio()

    calculate(rate, transaction) {
        console.log(rate);
        switch (transaction.tradingCurrency) {
            case "usd":
                if (rate * transaction.amount <= this.balance) {
                    this.balance = this.balance - rate * transaction.amount;
                    this.updatePortfolio(transaction.tradedCurrency, transaction.amount);
                    this.success = true;
                    this.displayPortfolio();
                    let stream = this.exportWallet();
                    $.ajax({
                        url: "js/confirm.php",
                        method: "post",
                        data: stream,
                        success: function(res) {
                            console.log(res);
                        },
                    });
                    break;
                } else {
                    alert("Transaction failed");
                    break;
                }
            case "btc":
                if (rate * transaction.amount <= this.btc) {
                    this.btc = this.btc - rate * transaction.amount;
                    this.updatePortfolio(transaction.tradedCurrency, transaction.amount);
                    this.success = true;
                    this.displayPortfolio();
                    let stream = this.exportWallet();
                    $.ajax({
                        url: "js/confirm.php",
                        method: "post",
                        data: stream,
                        success: function(res) {
                            console.log(res);
                        },
                    });
                    break;
                } else {
                    alert("Transaction failed");
                    break;
                }
            case "eth":
                if (rate * transaction.amount <= this.eth) {
                    this.eth = this.eth - rate * transaction.amount;
                    this.updatePortfolio(transaction.tradedCurrency, transaction.amount);
                    this.success = true;
                    this.displayPortfolio();
                    let stream = this.exportWallet();
                    $.ajax({
                        url: "js/confirm.php",
                        method: "post",
                        data: stream,
                        success: function(res) {
                            console.log(res);
                        },
                    });
                    break;
                } else {
                    alert("Transaction failed");
                    break;
                }
            case "ltc":
                if (rate * transaction.amount <= this.ltc) {
                    this.ltc = this.ltc - rate * transaction.amount;
                    this.updatePortfolio(transaction.tradedCurrency, transaction.amount);
                    this.success = true;
                    this.displayPortfolio();
                    let stream = this.exportWallet();
                    $.ajax({
                        url: "js/confirm.php",
                        method: "post",
                        data: stream,
                        success: function(res) {
                            console.log(res);
                        },
                    });
                    break;
                } else {
                    alert("Transaction failed");
                    break;
                }
            case "bth":
                if (rate * transaction.amount <= this.bth) {
                    this.bth = this.bth - rate * transaction.amount;
                    this.updatePortfolio(transaction.tradedCurrency, transaction.amount);
                    this.success = true;
                    this.displayPortfolio();
                    let stream = this.exportWallet();
                    $.ajax({
                        url: "js/confirm.php",
                        method: "post",
                        data: stream,
                        success: function(res) {
                            console.log(res);
                        },
                    });
                    break;
                } else {
                    alert("Transaction failed");
                    break;
                }
            case "atom":
                if (rate * transaction.amount <= this.atom) {
                    this.atom = this.atom - rate * transaction.amount;
                    this.updatePortfolio(transaction.tradedCurrency, transaction.amount);
                    this.success = true;
                    this.displayPortfolio();
                    let stream = this.exportWallet();
                    $.ajax({
                        url: "js/confirm.php",
                        method: "post",
                        data: stream,
                        success: function(res) {
                            console.log(res);
                        },
                    });
                    break;
                } else {
                    alert("Transaction failed");
                    break;
                }
        }
    }

    // Function to display the entire portfolio

    exportWallet() {
        let exported = {
            balance: this.balance,
            btc: this.btc,
            eth: this.eth,
            atom: this.atom,
            ltc: this.ltc,
            bch: this.bch,
            success: this.success,
        };

        return exported;
    }

    displayPortfolio() {
        console.log("Balance : " + this.balance);
        console.log("BTC : " + this.btc);
        console.log("ETH : " + this.eth);
        console.log("Atom : " + this.atom);
        console.log("LTC : " + this.ltc);
        console.log("BCH : " + this.bch);
    }

    //This function updates the values of the portfolio after a successful transaction

    updatePortfolio(currency, amount) {
        switch (currency) {
            case "usd":
                this.balance += amount;
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

    update(transaction) {
        let url =
            "https://api.cryptonator.com/api/full/" +
            transaction.tradedCurrency +
            "-" +
            transaction.tradingCurrency;
        fetch(url)
            .then((response) => response.json())
            .then((data) => this.calculate(data.ticker.price, transaction));
    }
}