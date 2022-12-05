// get the maxprofit from selling the stock in the best day;
function maxProfit(prices) {
    let maxProfits = 0;
    let valueMin =prices[0];
    for (let i = 0; i < prices.length; i++) {
         valueMin = Math.min(valueMin,prices[i]); 
         maxProfits = Math.max(maxProfits,prices[i]-valueMin);
    }
    return maxProfits;
};
console.log(maxProfit([7, 1, 5, 3, 6, 4]));
console.log(maxProfit([7, 1, 5, 3, 4]));