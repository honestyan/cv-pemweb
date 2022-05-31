$(document).ready(function () {
  $(".container-gc").animate({ opacity: "0" }).animate({ opacity: "1" });
});

$(".dropdown").click(function () {
  $(".icon-dropdown").css("display", "none").delay(500);
  $header = $(this);
  $content = $header.next();
  $content.slideToggle(500, function () {
    $content.is(":visible");
  });
  if ($(".main-content").is(":visible")) {
    window.setTimeout(function () {
      document.getElementById("inner").scrollIntoView({ behavior: "smooth" });
    }, 500);
  }
});
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
