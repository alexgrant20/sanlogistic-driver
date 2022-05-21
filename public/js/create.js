let request;
let vehiclesData;

$(document).ready(function () {
  $("#pageSpinner").hide();

  const projectId = $("#project_id").val();

  request = $.ajax({
    url: "/vehicles/get?projectId=" + projectId,
    type: "get",
    beforeSend: function () {
      $("#pageSpinner").show();
    },
  });

  request.done(function (response, textStatus, jqXHR) {
    vehiclesData = response;

    vehiclesData.forEach((vehicleData) => {
      $("#vehicle_id").append(
        $("<option>").val(vehicleData.id).text(vehicleData.license_plate)
      );
    });
  });

  request.always(function () {
    $("#pageSpinner").hide();
  });

  $("#vehicle_id").on("change", (value) => {
    $("#vehicle_id").prop("disabled", true);

    const vehicleId = value.target.value;

    request = $.ajax({
      url: "/vehicles/get?vehicleId=" + vehicleId,
      type: "get",
      beforeSend: function () {
        $("#pageSpinner").show();
      },
    });

    request.done(function (response, textStatus, jqXHR) {
      const data = response;

      $("#odo").val(data.odo);
      $("#dep_name").val(data.address.name);
      $("#do_number").val(data.last_do_number);

      const req = $.ajax({
        url: `/addresses/get?addressIdNot=${data.address_id}&projectId=${data.project_id}`,
        type: "get",
      });

      req.done((res) => {
        const addressesData = res;

        const arrivalSelect = $("#arrival_id");

        arrivalSelect.empty();

        addressesData.forEach((addressData) => {
          arrivalSelect.append(
            $("<option>")
              .val(addressData.address.id)
              .text(addressData.address.name)
          );
        });
      });

      req.always(function () {
        $("#pageSpinner").hide();
      });

      const cnt = $("#userInput").contents();
      $("#userInput").replaceWith(cnt);
      $("#vehicle_id").prop("disabled", false);
    });
  });
});
