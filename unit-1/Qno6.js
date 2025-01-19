
        function calculateDaysUntilChristmas() {
            const today = new Date();
            let christmas = new Date(today.getFullYear(), 11, 25);

            if (today > christmas) {
                christmas.setFullYear(today.getFullYear() + 1);
            }

            const timeDifference = christmas - today;
            const daysLeft = Math.ceil(timeDifference / (1000 * 3600 * 24));

            document.getElementById('result').innerText = `There are ${daysLeft} days left until Christmas!`;
        }
    
