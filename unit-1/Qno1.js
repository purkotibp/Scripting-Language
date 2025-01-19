
        function reverseNumber() {
            var num = document.getElementById('numberInput').value;
            if (num === '') {
                document.getElementById('result').innerText = 'Please enter a number.';
                return;
            }
            var reversedNum = num.toString().split('').reverse().join('');
            if (num < 0) {
                reversedNum = '-' + reversedNum.slice(0, reversedNum.length - 1);
            }
            document.getElementById('result').innerText = 'Reversed number: ' + reversedNum;
        }
   