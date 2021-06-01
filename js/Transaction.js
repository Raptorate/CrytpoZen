class Transaction {
    constructor(tradingCurrency, tradedCurrency, amount) {
        this.tradingCurrency = tradingCurrency;
        this.tradedCurrency = tradedCurrency;
        this.amount = amount;
        this.status = false;
    }

    //Relevant getters and setters

    get tradingCurrency() {
        return this._tradingCurrency;
    }

    set tradingCurrency(value) {
        this._tradingCurrency = value;
    }

    get tradedCurrency() {
        return this._tradedCurrency;
    }

    set tradedCurrency(value) {
        this._tradedCurrency = value;
    }

    get amount() {
        return this._amount;
    }

    set amount(value) {
        this._amount = value;
    }

    get status() {
        return this._status;
    }

    set status(value) {
        this._status = value;
    }

    exportTR() {
        let obj = {
            "Trading Currency": this.tradingCurrency,
            "Traded Currency": this.tradedCurrency,
            Amount: this.amount,
            Status: this.status,
        };
        return obj;
    }
}
/*<script type="text/javascript">
wallet.displayPortfolio();
$.ajax({
  url:"js/confirm.php",
  method: "post",
  data: wallet,
  success: function(res){
    console.log(res);
  }
})
</script>*/