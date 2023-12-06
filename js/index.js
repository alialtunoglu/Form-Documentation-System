// var ascending = true;

// function sortAlphabetically() {
//     var list = document.querySelector('.info ul');
//     var listItems = list.querySelectorAll('li');
//     var sortedListItems = Array.from(listItems).sort(function(a, b) {
//         if (ascending) {
//             return a.textContent.localeCompare(b.textContent);
//         } else {
//             return b.textContent.localeCompare(a.textContent);
//         }
//     });
//     list.innerHTML = '';
//     for (var i = 0; i < sortedListItems.length; i++) {
//         list.appendChild(sortedListItems[i]);
//     }
//     ascending = !ascending;
// }
var ascending = true;

function sortAlphabetically() {
    var list = document.querySelector('.info ul');
    var listItems = list.querySelectorAll('li');
    var sortedListItems = Array.from(listItems).sort(function(a, b) {
        if (ascending) {
            return a.textContent.localeCompare(b.textContent);
        } else {
            return b.textContent.localeCompare(a.textContent);
        }
    });
    list.innerHTML = '';
    for (var i = 0; i < sortedListItems.length; i++) {
        list.appendChild(sortedListItems[i]);
    }
    ascending = !ascending;
    
    var icon = document.querySelector('#sortButton i');
    if (ascending) {
        icon.className = 'fa-sharp fa-solid fa-sort-down';
    } else {
        icon.className = 'fa-sharp fa-solid fa-sort-up';
    }
}


function searchList() {
    var input = document.querySelector('#searchInput');
    var filter = input.value.toUpperCase();
    var list = document.querySelector('.info ul');
    var listItems = list.querySelectorAll('li');
    for (var i = 0; i < listItems.length; i++) {
        var text = listItems[i].textContent.toUpperCase();
        if (text.indexOf(filter) > -1) {
            listItems[i].style.display = '';
        } else {
            listItems[i].style.display = 'none';
        }
    }
}



