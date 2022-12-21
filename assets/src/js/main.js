jQuery(document).ready(function () {
  const ajaxUrl = ajax_object.ajax_url;
  const ajaxNonce = ajax_object.ajax_nonce;

  $(".ajax-test").on("click", function () {
    $.ajax({
      url: ajaxUrl,
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
      url: ajaxUrl,
      type: "POST",
      data: {
        action: "login_ajax",
        ajax_nonce: ajaxNonce,
        userName: $("#userName").val(),
        password: $("#password").val(),
        remember: $("#remember").val(),
      },
      success: function (result) {
        if (result.error) {
          $(".form-message").html(result.message);
          $(".form-message").removeClass("success");
          $(".form-message").addClass("failure");
        } else {
          window.location.reload();
          $(".form-message").html(result.message);
          $(".form-message").addClass("success");
          $(".form-message").removeClass("failure");
        }
      },
    });
  });

  //*SignUp Ajax requests
  $("#signup_form").on("submit", function (e) {
    e.preventDefault();
    $.ajax({
      url: ajaxUrl,
      type: "POST",
      data: {
        action: "signup_ajax",
        ajax_nonce: ajaxNonce,
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
          $(".form-message").removeClass("success");
          $(".form-message").addClass("failure");
        } else {
          window.location.reload();
          $(".form-message").html(result.message);
          $(".form-message").addClass("success");
          $(".form-message").removeClass("failure");
        }
      },
    });
  });

  //*Edit Profile Ajax requests
  $("#profile_form").on("submit", function (e) {
    e.preventDefault();
    $.ajax({
      url: ajaxUrl,
      type: "POST",
      data: {
        action: "edit_profile_ajax",
        ajax_nonce: ajaxNonce,
        name: $("#name").val(),
        lastName: $("#lastName").val(),
        displayName: $("#displayName").val(),
        email: $("#email").val(),
      },
      success: function (result) {
        if (result.error) {
          $(".form-message").html(result.message);
          $(".form-message").removeClass("success");
          $(".form-message").addClass("failure");
        } else {
          $(".form-message").html(result.message);
          $(".form-message").addClass("success");
          $(".form-message").removeClass("failure");
        }
      },
    });
  });

  //*Edit Profile Ajax requests
  $("#edit_password_form").on("submit", function (e) {
    e.preventDefault();
    $.ajax({
      url: ajaxUrl,
      type: "POST",
      data: {
        action: "edit_password_ajax",
        ajax_nonce: ajaxNonce,
        currentPassword: $("#currentPassword").val(),
        newPassword: $("#newPassword").val(),
        repeatPassword: $("#repeatPassword").val(),
      },
      success: function (result) {
        if (result.error) {
          $(".form-message").html(result.message);
          $(".form-message").removeClass("success");
          $(".form-message").addClass("failure");
        } else {
          window.location.reload();
          $(".form-message").html(result.message);
          $(".form-message").addClass("success");
          $(".form-message").removeClass("failure");
        }
      },
    });
  });

  //*Like Ajax
  $(".post-like").on("click", function () {
    var post_id = $(this).attr("post_id");
    var element = $(this);
    $.ajax({
      url: ajaxUrl,
      type: "POST",
      data: {
        action: "like_ajax",
        post_id: post_id,
        ajax_nonce: ajaxNonce,
      },
      success: function (result) {
        if ((result.type = "like")) {
          element.toggleClass("bi-heart-fill");
          element.toggleClass("bi-heart");
        } else {
          element.toggleClass("bi-heart-fill");
          element.toggleClass("bi-heart");
        }
        element.text(result.value);
      },
    });
  });

  //*save Ajax
  $(".post-save").on("click", function () {
    var post_id = $(this).attr("post_id");
    var element = $(this);
    $.ajax({
      url: ajaxUrl,
      type: "POST",
      data: {
        action: "save_ajax",
        post_id: post_id,
        ajax_nonce: ajaxNonce,
      },
      success: function (result) {
        if ((result.type = "save")) {
          element.toggleClass("bi-bookmark-fill");
          element.toggleClass("bi-bookmark");
        } else {
          element.toggleClass("bi-bookmark-fill");
          element.toggleClass("bi-bookmark");
        }
      },
    });
  });
});
