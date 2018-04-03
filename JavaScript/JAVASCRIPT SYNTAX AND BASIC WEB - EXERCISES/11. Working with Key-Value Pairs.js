function keyValuePairs(args) {
    let key = args.pop();
    let keyValue = {};

    for (let obj of args) {
        let input = obj.split(" ");
        let key = input[0];
        let value = input[1];

        keyValue[key]= value;
    }

    if (keyValue.hasOwnProperty(key)) {
        console.log(keyValue[key]);
    }else {
        console.log("None");
    }

}

keyValuePairs([
    '3 test',
    '3 test1',
    '4 test2',
    '4 test3',
    '4 test5',
    '4'
]);