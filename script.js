let balance = 100;

function rollDice() {
  let dice = Math.floor(Math.random() * 6) + 1;
  document.getElementById("dice").innerText = "Dice: " + dice;
}

function addMoney() {
  balance += 10;
  updateBalance();
}

function playGame() {
  if (balance >= 5) {
    balance -= 5;
    rollDice();
    updateBalance();
  } else {
    alert("Wallet balance kam hai!");
  }
}

function updateBalance() {
  document.getElementById("balance").innerText = balance;
}
