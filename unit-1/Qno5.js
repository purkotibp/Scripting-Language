
        function displayDate() {
            const today = new Date();
            const month = today.getMonth() + 1;
            const day = today.getDate();
            const year = today.getFullYear();
            const dayOfWeek = today.toLocaleString('default', { weekday: 'long' });
            const monthName = today.toLocaleString('default', { month: 'long' });

            const dateFormats = [
                `${month < 10 ? '0' + month : month}-${day < 10 ? '0' + day : day}-${year}`,
                `${month < 10 ? '0' + month : month}/${day < 10 ? '0' + day : day}/${year}`,
                `${day < 10 ? '0' + day : day}-${month < 10 ? '0' + month : month}-${year}`,
                `${day < 10 ? '0' + day : day}/${month < 10 ? '0' + month : month}/${year}`,
                `${year} ${monthName} ${day} ${dayOfWeek}`
            ];

            document.getElementById('result').innerHTML = `
                <b>Current Date:</b><br>
                <ul>
                    <li>${dateFormats[0]}</li>
                    <li>${dateFormats[1]}</li>
                    <li>${dateFormats[2]}</li>
                    <li>${dateFormats[3]}</li>
                    <li>${dateFormats[4]}</li>
                </ul>
            `;
        }
   