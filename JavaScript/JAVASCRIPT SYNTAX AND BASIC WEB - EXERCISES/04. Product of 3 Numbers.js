function solve(nums) {
    let number = nums.map(Number);
  let  numbers = nums.filter(x=>x<0).length;
    if (nums.indexOf('0')>-1 ||nums.indexOf('-0')>-1){
        console.log('Positive')
    }else if(numbers%2 ==0){
        console.log('Positive');
    }else {
        console.log('Negative');
    }
}

solve(['-2','-0','5']);