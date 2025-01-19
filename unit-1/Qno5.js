function getCurrentDate() {
  const today = new Date();
  
  const day = String(today.getDate()).padStart(2, '0');
  const month = String(today.getMonth() + 1).padStart(2, '0');  // Month is 0-indexed
  const year = today.getFullYear();
  const weekday = today.toLocaleString('default', { weekday: 'long' });

  // Different formats
  const format1 = `${month}-${day}-${year}`;  // mm-dd-yyyy
  const format2 = `${month}/${day}/${year}`;  // mm/dd/yyyy
  const format3 = `${day}-${month}-${year}`;  // dd-mm-yyyy
  const format4 = `${day}/${month}/${year}`;  // dd/mm/yyyy
  const format5 = `${year} ${weekday} ${day}`;  // yyyy month date day

  return {
    format1,
    format2,
    format3,
    format4,
    format5
  };
}

const currentDate = getCurrentDate();
console.log(currentDate.format1);  // mm-dd-yyyy
console.log(currentDate.format2);  // mm/dd/yyyy
console.log(currentDate.format3);  // dd-mm-yyyy
console.log(currentDate.format4);  // dd/mm/yyyy
console.log(currentDate.format5);  // yyyy month date day
