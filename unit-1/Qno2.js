
        function sortStringAlphabetically(str) {
            return str.split('').sort().join('');
        }

        function sortString() {
            var inputStr = document.getElementById('inputString').value;
            if (inputStr === '') {
                document.getElementById('result').innerText = 'Please enter a string.';
            } else {
                var sortedStr = sortStringAlphabetically(inputStr);
                document.getElementById('result').innerText = 'Sorted string: ' + sortedStr;
            }
        }
   