$(function () {
  $("#btnPasswordGenerate").click(function () {
    const passwordGenerator = generatePassword(15, false, /./);

    const html = `
        <div class="card">
      <div class="card-body">
      <p>${passwordGenerator}</p>
      <button class="btn btn-light" data-clipboard-text="${passwordGenerator}" id="btnCopy" title="Copy to clipboard">
        <i class="fa-solid fa-clipboard"></i>
        </button>
      </div>
    </div>`;

    $("#passwordContent").html(html);
  });
});
