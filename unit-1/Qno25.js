// 25. Create an object literal called personAccount with
// properties and methods:
// • Properties: firstName, lastName, incomes, expenses
// • Methods: totalincome, totalExpense, accountinfo, addincome,
// addExpense, accountBalance
// • Incomes is a set of incomes and its description
// • Expenses is a set of incomes and its description

let personAccount = {
  firstName: "Ram",
  lastName: "Thapa",
  incomes: [
    {
      income: 10,
      description: "From a",
    },
    {
      income: 11,
      description: "From b",
    },
    {
      income: 12,
      description: "From c",
    },
  ],
  expenses: [
    {
      expense: 120,
      description: "To a",
    },
    {
      expense: 121,
      description: "To b",
    },
    {
      expense: 12,
      description: "To c",
    },
  ],
  totalIncome: function () {
    let totalIncomeAmt = 0;
    this.incomes.forEach((elem) => {
      totalIncomeAmt += elem.income;
    });
    return totalIncomeAmt;
  },
  totalExpense: function () {
    let totalExpenseAmt = 0;
    this.expenses.forEach((elem) => {
      totalExpenseAmt += elem.expense;
    });
    return totalExpenseAmt;
  },

  accountInfo: function () {
    return `Name: ${this.firstName} ${
      this.lastName
    }, Total income: ${this.totalIncome()}, Total expenses: ${this.totalExpense()}`;
  },

  addIncome: function (amount, description) {
    this.incomes.push({ income: amount, description: description });
  },

  addExpense: function (amount, description) {
    this.expenses.push({ expense: amount, description: description });
  },

  accountBalance: function () {
    return this.totalIncome() - this.totalExpense();
  },
};

personAccount.addIncome(15, "From d");
personAccount.addExpense(50, "To d");

console.log(personAccount.accountInfo());
console.log("Account balance: ", personAccount.accountBalance());