function solve([num]) {
    num =Number(num);
    for (var i = 1; i <= num; i++) {
        let numAsString = ''+i
        if (numAsString == [...numAsString].reverse().join('')){
            console.log(i);
        }
    }
}


solve(['255'])