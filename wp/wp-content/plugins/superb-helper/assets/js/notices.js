jQuery(function ($) {
  $(document).ready(function () {
    function spbhlpr_setcookie(name, element, value, days) {
      let currenct_cookie = JSON.parse(spbhlpr_getcookie(name));
      if (currenct_cookie == null) {
        currenct_cookie = {};
      }
      currenct_cookie[element] = value;
      var expires = "";
      if (days) {
        var date = new Date();
        date.setTime(date.getTime() + days * 24 * 60 * 60 * 1000);
        expires = "; expires=" + date.toUTCString();
      }
      document.cookie =
        name +
        "=" +
        (JSON.stringify(currenct_cookie) || "") +
        expires +
        "; path=/";
    }
    function spbhlpr_getcookie(name) {
      var nameEQ = name + "=";
      var ca = document.cookie.split(";");
      for (var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == " ") c = c.substring(1, c.length);
        if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
      }
      return null;
    }

    $("#spbhlpr_notice_later").click(function (e) {
      const element = $(e.target).data("element");
      const time = $(e.target).data("time");
      spbhlpr_setcookie("spbhlpr-notice-later", element, time, 365);
      spbhlpr_hidenotice();
    });

    $("#spbhlpr_notice_never").click(function (e) {
      const element = $(e.target).data("element");
      spbhlpr_setcookie("spbhlpr-notice-never", element, true, 365);
      spbhlpr_hidenotice();
    });

    function spbhlpr_hidenotice() {
      $("#spbhlpr-notice-notice").remove();
    }
  });
});
