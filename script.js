var factList = [
  "Blueberry Coffee Cake (Lactose-Free Dessert)",
  "Loaded Potato Skins (Gluten-Free Appetizer)",
  "Mexican Chicken Fajita (Non-Veg Main Course)",
  "Lentil Bolognese (Vegan Main Course)",
  "Crispy Buffalo Cauliflower Bites (Vegetarian Appetizer)"
];

var fact = document.getElementById("fact");
var button = document.getElementById("button1");
var count = 0;

if (button) {
button.addEventListener("click", displayFact);
}

function displayFact() {
  fact.innerHTML = factList[count];
  count++;
  if (count == factList.length) {
    count = 0;
  }
}