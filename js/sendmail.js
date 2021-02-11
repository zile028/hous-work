function sendmail() {
  var name = $("#name").val();
  var email = $("#email").val();
  var message = $("#message").val();

  var dataString = "name=" + name + "&email=" + email + "&message=" + message;
  $.ajax({
    url: "./php/sendmail.php",
    data: dataString,
    type: "POST",
    success: function (data) {
      $(".status p").html(data);
      setTimeout(ajaxCallback, 50);
    },
  });

  function ajaxCallback() {
    $(".form-contact").slideUp(1000, function () {
      $(".status p").slideDown(500);
    });
  }
}
