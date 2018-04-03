function multiplyValuesForAKey(args) {
    let key = args.pop();

    let map = new Map();

    for (let obj of args) {
        let input = obj.split(' ');

        let key = input[0];
        let value = input[1];

        if(!map.has(key)){
            map.set(key,[]);
        }
        map.get(key).push(value);


    }
    if (!map.has(key)){
        console.log("None");
        return;
    }
    console.log(map.get(key).join('\n'));


}

multiplyValuesForAKey([
    '3 test',
    '3 test1',
    '4 test2',
    '4 test3',
    '4 test5',
    '4'
]);
