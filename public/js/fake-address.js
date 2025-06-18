import { faker } from "https://esm.sh/@faker-js/faker@v9.8.0";
import moment from "https://unpkg.com/@esm-bundle/moment/esm/index.js";

const personInfo = {
  fullname: faker.person.fullName(),
  gender: faker.person.sex(),
  birthday: moment(
    faker.date.birthdate({ mode: "age", min: 18, max: 40 })
  ).format("YYYY-MM-DD"),
  phone: faker.phone.number({ style: "national" }),
};

$("#personProfile").empty();

for (let personKey in personInfo) {
  const html = `
    <tr>
        <th>${personKey.toUpperCase()}</th>
        <td>${personInfo[personKey]}</td>
    </tr>
      `;

  $("#personProfile").append(html);
}
