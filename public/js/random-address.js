$(function () {
  $.ajax({
    headers: {
      "X-Api-Key": "5e38b54dac9a4dc9ac73a38e33f6d96d",
    },
    type: "GET",
    url: "https://randommer.io/api/Misc/Random-Address?number=1&culture=en",
    success: function (response) {
      const fullAddress = response[0].split(", ");

      const address = {
        street: fullAddress[0],
        apartment: fullAddress[1],
        zip: fullAddress[2],
        city: fullAddress[3],
        state: fullAddress[4],
        country: fullAddress[5],
      };

      $("#personAddress").empty();

      for (let addressKey in address) {
        const html = `<tr>
          <th>${addressKey.toUpperCase()}</th>
          <td>${address[addressKey]}</td>
      </tr>`;

        $("#personAddress").append(html);
      }
    },
    error: function (error) {
      console.log(error);
    },
  });
});
