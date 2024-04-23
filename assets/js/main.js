// add hovered class to selected list item
let list = document.querySelectorAll(".navigation li");

function activeLink() {
  list.forEach((item) => {
    item.classList.remove("hovered");
  });
  this.classList.add("hovered");
}

list.forEach((item) => item.addEventListener("mouseover", activeLink));

// Menu Toggle
let toggle = document.querySelector(".toggle");
let navigation = document.querySelector(".navigation");
let main = document.querySelector(".main");

toggle.onclick = function () {
  navigation.classList.toggle("active");
  main.classList.toggle("active");
};


//submit

const list = document.getElementById("list")

function onFormSubmit(e) {
    e.preventDefault()
    const inputValue = e.target.children[0].value
    
    list.appendChild(createListItem(inputValue))
}

function deleteListItem(e) {
    const parent = e.target.parentElement
    list.removeChild(parent)
}

function createListItem(inputValue) {
    const item = document.createElement("div")
    item.innerHTML = `
        <div class="list-item-detail">
            <input type="checkbox" />
            <span>${inputValue}</span>
        </div>
        <button onclick="deleteListItem(event)">X</button>
    `
    item.setAttribute("class", "list-item")
    return item
}



