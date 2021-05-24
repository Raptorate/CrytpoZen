// CryptoCharts.priceHistory({
//     chart_id: "priceSpark",
//     iconomi_tickers: ["BLX"],
//     last_days: 30,
//     axes: true,
//     loading_indicator: true,
// });

CryptoCharts.roiComparison({
    chart_id: "mychart",
    cryptocompare_tickers: ["BTC", "ETH", "ATOM"],
    iconomi_tickers: ["BLX", "CAR", "MOON"],
    last_days: 90,
    options: {
        colors: ["#88AA24", "#EF1273", "#122673", "#000000"],
        title: true,
        chart: {
            type: "line",
        },
    },
});

// CryptoCharts.priceHistory({
//     chart_id: "priceFull",
//     iconomi_tickers: ["BTC"],
//     last_days: 30,
//     axes: true,
//     loading_indicator: true,
// });
// CryptoCharts.priceHeatmap({
//     chart_id: "myheatmap",
//     iconomi_tickers: ["BLX"],
//     last_days: 90,
//     loading_indicator: true,
// });

// CryptoCharts.cryptoFundBar({
//     chart_id: "holdings",
//     iconomi_tickers: ["BLX", "CAR", "MOON"],
//     options: {
//         chart: {
//             height: 400,
//         },
//     },
//     loading_indicator: true,
// });