jQuery(document).ready(function () {
  $(".ajax-test").on("click", function () {
    $.ajax({
      url: ajax_object.ajax_url,
      data: {
        action: "hello_ajax",
      },
      success: function (result) {
        alert(result);
      },
    });
  });

  //*Login Ajax requests
  $("#login_form").on("submit", function (e) {
    e.preventDefault();
    $.ajax({
      url: ajax_object.ajax_url,
      type: "POST",
      data: {
        action: "login_ajax",
        ajax_nonce: ajax_object.ajax_nonce,
        userName: $("#userName").val(),
        password: $("#password").val(),
        remember: $("#remember").val(),
      },
      success: function (result) {
        if (result.error) {
          $(".form-message").html(result.message);
        } else {
          window.location.reload();
          $(".form-message").html(result.message);
        }
      },
    });
  });

  //*SignUp Ajax requests
  $("#signup_form").on("submit", function (e) {
    e.preventDefault();
    $.ajax({
      url: ajax_object.ajax_url,
      type: "POST",
      data: {
        action: "signup_ajax",
        ajax_nonce: ajax_object.ajax_nonce,
        name: $("#name").val(),
        lastName: $("#lastName").val(),
        userName: $("#userName").val(),
        password: $("#password").val(),
        passwordRepeat: $("#passwordRepeat").val(),
        email: $("#email").val(),
      },
      success: function (result) {
        if (result.error) {
          $(".form-message").html(result.message);
        } else {
          window.location.reload();
          $(".form-message").html(result.message);
        }
      },
    });
  });
});
