function startTime() {
  const today = new Date();
  let h = today.getHours();
  let m = today.getMinutes();
  let s = today.getSeconds();
  let b = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"][today.getMonth()];
  let d = today.getDate();
  let y = today.getFullYear();
  m = checkTime(m);
  s = checkTime(s);
  document.getElementById('txt').innerHTML =   b + " " + d + ", " + y + " | " + h + ":" + m;
  setTimeout(startTime, 1000);
}

function checkTime(i) {
  if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
  return i;
}

function showJournal() {
    document.getElementById("JournalEntry").style.display = "block";
}

//This is for the Registration
$(document).ready(function(){
  $('input[type="radio"]').click(function(){
    const inputValue = $(this).attr("value");
    const targetBox = $("." + inputValue);
    $(".Info").not(targetBox).hide();
    $(targetBox).show();
  });
});

//This is for the Student Journal
const jourInclude = document.getElementById("JournalInclude");

function dailyJournal() {
  jourInclude.innerHTML = "<?php include(INCLUDE_PATH . '/include/StudentDailyJournal.php') ?>";
};

function pastJournal() {
  jourInclude.innerHTML = "<?php include(INCLUDE_PATH . '/include/StudentPastJournal.php') ?>";
}



//This is the Supervisor Task Management
function btnClick(_url){
  $.ajax({
    url : _url,
    type : 'post',
    success : function(data) {
      $('#DIVID').html(data);
    },
    error : function() {
      $('#DIVID').text('An error occurred');
    }
  });
};

//This is for the Supervisor List of Students
function openWindow() {
  document.getElementById('PopUp').style.display = "block";
}

function closeWindow() {
  document.getElementById('PopUp').style.display = "none";
}