//To Do: Change the variable below to false during normal code execution. While testing change it to true
var inPrintPage = false
function printPage() {
  window.print()
  inPrintPage = true
  return false
}

function validatePrint() {
  if(!inPrintPage){
    alert('We recommend to download or print the page as PDF first.')
    return false
  } else {
    return true
  }
}

function calculateTotal(className, id) {
  var x = document.getElementsByClassName(className)
  var sum = 0
  for (let i=0; i<x.length; i++){
    sum += parseInt(x[i].value ? x[i].value : 0)
  }
  document.getElementById(id).value = sum
}

function calculatePercentage(className, id) {
  var x = document.getElementsByClassName(className)
  percentage = (x[1].value / x[0].value ) * 100
  document.getElementById(id).value = percentage.toFixed(2) + '%'
}
