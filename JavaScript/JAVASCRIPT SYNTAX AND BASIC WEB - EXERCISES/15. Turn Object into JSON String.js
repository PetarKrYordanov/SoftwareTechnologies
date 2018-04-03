function turnObjectIntoJSONString(args) {

    let studentInfo ={};

    for (let obj of args) {
        let input = obj.split(' -> ');
        let value = input[1];
        if (!isNaN(input[1])){
            value = Number(input[1])
        }
        studentInfo[input[0]]=value;
    }

    console.log(JSON.stringify(studentInfo));
}

turnObjectIntoJSONString([
    'name -> Angel',
    'surname -> Georgiev',
    'age -> 20',
    'grade -> 6.00',
    'date -> 23/05/1995',
    'town -> Sofia'
]);