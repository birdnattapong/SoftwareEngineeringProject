function myFunction(typename) {
    var x = document.getElementById(typename);
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}

function toggler(divId) {
    $("#" + divId).toggle();
}

function openTable(evt, TableName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
      tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(TableName).style.display = "block";
    evt.currentTarget.className += " active";
    document.getElementsByTagName("button")[0].textContent = TableName;
  }

function animated(x) {
  x.classList.toggle("change");
}

$(document).ready(function () {
  $('#sidebarCollapse').on('click', function () {
      $('#sidebar').toggleClass('active');
  });
});

$(document).ready(function () {
  $('#dtDynamicVerticalScrollExample').DataTable({
  "scrollY": "50vh",
  "scrollCollapse": true,
  });
  $('.dataTables_length').addClass('bs-select');
  });