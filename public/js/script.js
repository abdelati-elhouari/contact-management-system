

const search = document.querySelector('.input-group input'),
    table_rows = document.querySelectorAll('tbody tr'),
    table_headings = document.querySelectorAll('thead th'),
    formWrapper = document.querySelector(".formbold-form-wrapper"),
    formActionButton = document.querySelector(".add_icon"),
    modal = document.getElementById("confirmationModal"),
    confirmBtn = document.getElementById("confirmBtn"),
    cancelBtn = document.getElementById("cancelBtn");
   

search.addEventListener('input', searchTable);

function searchTable() {
    table_rows.forEach((row, i) => {
        let table_data = row.textContent.toLowerCase(),
            search_data = search.value.toLowerCase();

        row.classList.toggle('hide', table_data.indexOf(search_data) < 0);
        row.style.setProperty('--delay', i / 25 + 's');
    })

    document.querySelectorAll('tbody tr:not(.hide)').forEach((visible_row, i) => {
        visible_row.style.backgroundColor = (i % 2 == 0) ? 'transparent' : '#0000000b';
    });
}


function chatboxToogleHandler() {
    formWrapper.classList.toggle("active");
    formActionButton.classList.toggle("active");
  }
 


table_headings.forEach((head, i) => {
    let sort_asc = true;
    head.onclick = () => {
        table_headings.forEach(head => head.classList.remove('active'));
        head.classList.add('active');

        document.querySelectorAll('td').forEach(td => td.classList.remove('active'));
        table_rows.forEach(row => {
            row.querySelectorAll('td')[i].classList.add('active');
        })

        head.classList.toggle('asc', sort_asc);
        sort_asc = head.classList.contains('asc') ? false : true;

        sortTable(i, sort_asc);
    }
})


function sortTable(column, sort_asc) {
    [...table_rows].sort((a, b) => {
        let first_row = a.querySelectorAll('td')[column].textContent.toLowerCase(),
            second_row = b.querySelectorAll('td')[column].textContent.toLowerCase();

        return sort_asc ? (first_row < second_row ? 1 : -1) : (first_row < second_row ? -1 : 1);
    })
        .map(sorted_row => document.querySelector('tbody').appendChild(sorted_row));
}


var alertBox = document.getElementById('alert');
if(alertBox){
    setTimeout(function() {
      alertBox.style.display = 'none';
    }, 2000);
  }
  

function showConfirmation() {
      modal.style.display = "block";
      return false;
  }

confirmBtn.onclick = function() {
      modal.style.display = "none";
      document.getElementById("deleteForm").submit(); 
  }


  cancelBtn.onclick = function() {
      modal.style.display = "none";
      return false; 
  }

