<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form>
        <input type="text" id="number1" placeholder="Enter first number"/>
        <input type="text"id="number2" placeholder="Enter second number"/>
        <select id="operator">
            <option value="+">+</option>
             <option value="-">-</option>
             <option value="/">/</option>
             <option value="*">*</option>
              
        </select>
        <button type="button"
        onclick="performArithmeticOperations">
        Perform Arithmetic operations
    
    </button>
    <div id="result">
    </div>
    </form>
    <script>
        function performArithmeticOperations(){
            let vari = 10;
            const pi = 3.14;
            const number1 = (document.getElementById("number1").value);
            const number2 = parseFloat(document.getElementById("number2").value);

        }
        function performArithmeticOperations(){
            case "+":
                result = number1 + number2;
                break;
                 case "-":
                result = number1 - number2;
                break;
                 case "*":
                result = number1 * number2;
                break;
                 case "/":
                    if (number2 ==0){
                        result="divde by zero error";

                    } else{
                        result=number1/number2
                    }
                    break;
                
        }
        const resultDiv=document.getElementById("result");
        resultDiv.innerHTML=result;

        console.log("this function is called from arithmetic.js);

        
    </script>
    
</body>
</html>