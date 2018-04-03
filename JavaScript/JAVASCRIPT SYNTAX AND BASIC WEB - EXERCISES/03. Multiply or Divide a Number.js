function solve(num) {
    let num1 = Number(num[0]);
    let num2 =Number(num[1]);

    if(num1<=num2){
        console.log(num1 * num2);
    }else {
        console.log(num1/num2);
    }
}


solve(['11','12']);