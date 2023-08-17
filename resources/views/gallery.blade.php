@extends('layout')

@section('content')
 



<!-- Photo Grid -->
<div class="row"> 
  <div class="column">
    <img src="/image/1.jpg" style="width:100%">
    <img src="/image/2.jpg" style="width:100%">
    <img src="/image/3.jpg" style="width:100%">
    <img src="/image/4.jpg" style="width:100%">
    <img src="/image/5.jpg" style="width:100%">
    <img src="/image/6.JPG" style="width:100%">
    <img src="/image/7.jpg" style="width:100%">
    <img src="/image/8.jpg" style="width:100%">
    <img src="/image/9.jpg" style="width:100%">
    <img src="/image/About.1.jpg" style="width:100%">
    <img src="/image/11.jpg" style="width:100%">


    
    
   </div>
   <div class="column">
    <img src="/image/About.14.jpg" style="width:100%">
    <img src="/image/About.15.jpg" style="width:100%">
    <img src="/image/About.16.jpg" style="width:100%">
     <img src="/image/a1.jpg" style="width:100%">
    <img src="/image/a2.jpg" style="width:100%">
    <img src="/image/a3.jpg" style="width:100%">
    <img src="/image/a4.jpg" style="width:100%">
    <img src="/image/a5.jpg" style="width:100%"> --}}
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