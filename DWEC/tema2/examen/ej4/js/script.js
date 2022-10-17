document.getElementById('result').innerHTML = 
`
John es ${typeof "John"}<br>
3.14 es ${typeof 3.14} <br>
NaN es ${typeof NaN} <br>
false es ${typeof false} <br>
[1, 2, 3, 4] es ${typeof [1, 2, 3, 4]} <br>
{name:'John', age:34} es ${typeof {name:'John', age:34}} <br>
new Date() es ${typeof new Date()} <br>
function () {} es ${typeof function () {}} <br>
myCar es ${typeof myCar} <br>
null es ${typeof null}
`