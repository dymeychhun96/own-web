$(function () {
  const sublimeText = (email) => {
    const hash = md5(email);
    const str25 = hash.substring(0, 25);
    const license = str25.match(/.{1,5}/g).join("-");

    $("#licenseContent").html(
      `<p class="py-3">Your License Key: <strong>${license}</strong></p>
      <button class="btn btn-light" data-clipboard-text="${license}" id="btnCopy" title="Copy to clipboard">
        <i class="fa-solid fa-clipboard"></i>
        </button>
      `
    );
  };

  const vscode = (email) => {
    const uuid = "fd330f6f-3f41-421d-9fe5-de742d0c54c0" + email;
    const hash = md5(uuid);
    const str25 = hash.substring(0, 25);
    const license = str25.match(/.{1,5}/g).join("-");

    $("#licenseContent").html(
      `<p class="py-3">Your License Key: <strong>
        ${license}
        </strong></p>
        <button class="btn btn-light" data-clipboard-text="${license}" id="btnCopy" title="Copy to clipboard">
        <i class="fa-solid fa-clipboard"></i>
        </button>
        `
    );
  };

  $("#btnSublimeText").on("click", function () {
    const email = $("#email").val().trim();

    if (!email) return;

    sublimeText(email);
  });

  $("#btnVsCode").on("click", function () {
    const email = $("#email").val().trim();

    if (!email) return;

    vscode(email);
  });
});
