function startTime() {
  const today = new Date();
  let h = today.getHours();
  let m = today.getMinutes();
  let s = today.getSeconds();
  let b = today.getMonth();
  let d = today.getDate();
  let y = today.getFullYear();
  m = checkTime(m);
  s = checkTime(s);
  document.getElementById('txt').innerHTML =  h + ":" + m + ":" + " | " + b + " " + d + ", " + y;
  setTimeout(startTime, 1000);
}

function checkTime(i) {
  if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
  return i;
}

function showJournal() {
    document.getElementById("JournalEntry").style.display = "block";
}