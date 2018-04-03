function solve(arr) {
    let nums = arr.map(Number);

    nums.sort((a,b)=>a-b).splice(-3);

    console.log(nums);


}


solve(['10',
    '30',
    '15',
    '20',
    '50',
    '5']);