
        function countVowels(str) {
            const vowels = 'aeiouAEIOU';
            let count = 0;
            
            for (let i = 0; i < str.length; i++) {
                if (vowels.indexOf(str[i]) !== -1) {
                    count++;
                }
            }
            
            return count;
        }

        
        function countVowelsFromInput() {
            const inputStr = document.getElementById('inputString').value;
            
            if (inputStr === '') {
                document.getElementById('result').innerText = 'Please enter a string.';
            } else {
                const vowelCount = countVowels(inputStr);
                document.getElementById('result').innerText = 'Number of vowels: ' + vowelCount;
            }
        }
   