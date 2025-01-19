
        
        function capitalizeFirstLetter(str) {

            return str.split(' ')
                      .map(word => word.charAt(0).toUpperCase() + word.slice(1))
                      .join(' '); 
        }

        function processString() {
            const inputStr = document.getElementById('inputString').value;
            if (inputStr === '') {
                document.getElementById('result').innerText = 'Please enter a string.';
            } else {

                const capitalizedStr = capitalizeFirstLetter(inputStr);
                document.getElementById('result').innerText = 'Capitalized string: ' + capitalizedStr;
            }
        }
   