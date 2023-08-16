@extends('layout')

@section('content')
 



<!-- Photo Grid -->
<div class="row"> 
  <div class="column">
    <img src="/image/About.1..jpg" style="width:100%">
    <img src="/image/About.12.jpg" style="width:100%">
    <img src="/image/About.14.jpg" style="width:100%">
    <img src="/image/About.15.jpg" style="width:100%">
    <img src="/image/About.16.jpg" style="width:100%">
    <img src="/image/About.13.jpg" style="width:100%">
    
    
    </div>
   <div class="column">
    <img src="/image/About..jpg" style="width:100%">
    <img src="/image/About.6.jpg" style="width:100%">
    <img src="/image/About.10.jpg" style="width:100%">
     <img src="/image/About.9.jpg" style="width:100%">
    <img src="/image/About.9.jpg" style="width:100%">
    <img src="/image/About.8.jpg" style="width:100%">
  </div>
  </div> --

 

<script>
// Get the elements with class="column"
var elements = document.getElementsByClassName("column");

// Declare a loop variable
var i;

// Full-width image
function one() {
    for (i = 0; i < elements.length; i++) {
    elements[i].style.msFlex = "100%";  // IE10
    elements[i].style.flex = "100%";
  }
}

// Two image side by side
function two() {
  for (i = 0; i < elements.length; i++) {
    elements[i].style.msFlex = "50%";  // IE10
    elements[i].style.flex = "50%";
  }
}

// Four image side by side
function four() {
  for (i = 0; i < elements.length; i++) {
    elements[i].style.msFlex = "25%";  // IE10
    elements[i].style.flex = "25%";
  }
}

// Add active class to the current button (highlight it)
var header = document.getElementById("myHeader");
var btns = header.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}
</script>

</body>








@endsection