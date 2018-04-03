function printLines(input) {
    for (var i = 0; i < input.length; i++) {
        if (input[i]!= 'Stop'){
            console.log(input[i]);
        }else {
            break;
        }
    }
}
