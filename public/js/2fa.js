$(function () {
  const authenticator = window.otplib.authenticator;
  let countDownInterval = null;

  const getToken = function (secretCode) {
    const token = authenticator.generate(secretCode);

    $("#token")
      .text(token)
      .append(
        `<button class="btn btn-light mb-1 ms-3" data-clipboard-text="${token}" id="btnCopy"><i class="fa-solid fa-clipboard"></i></button>`
      );
  };

  $("#btnGenerate").click(function () {
    let secretCode = $("#secretCode").val().trim();

    if (!secretCode) {
      return;
    }

    getToken(secretCode);

    if (countDownInterval) clearInterval(countDownInterval);

    let timeRemaining = 30;

    countDownInterval = setInterval(function () {
      if (timeRemaining === 0) {
        getToken(secretCode);
        timeRemaining = 30;
      } else {
        timeRemaining--;
      }
      $("#timeRemaining").text(timeRemaining);
    }, 1000);
  });
});
