$(function () {
  $("#tabel").DataTable();
  loadData();

  $("#btn_add").click(function () {
    // alert("test doang");
    $("#modal_add").modal("show");
    reset();
  });

  function reset() {
    $("#user_id").val("");
    $("#username").val("");
    $("#password").val("");
    $("#status").val("");
  }

  $("#btn_simpan").on("click", function (e) {
    // alert("test doang");
    var user_id = $("#user_id").val();
    var username = $("#username").val();
    var password = $("#password").val();
    var status = $("#status").val();
    // alert(user_id);
    if (user_id == "") {
      alert("User ID Wajib di Isi !");
    } else if (username == "") {
      alert("Username Wajib di Isi !");
    } else if (password == "") {
      alert("Password Wajib di Isi !");
    } else if (status == "") {
      alert("Status Wajib di Isi !");
    } else {
      var str_data =
        "user_id=" +
        user_id +
        "&username=" +
        username +
        "&password=" +
        password +
        "&status=" +
        status;

      $.ajax({
        type: "POST",
        url: "formUser/add.php",
        dataType: "text",
        data: str_data,
        success: function (data) {
          if (data == "1") {
            // alert("Data berhasil disimpan");
            loadData();
            $("#modal_add").modal("hide");
            toastr.success("Data Berhasil di Simpan");
          } else {
            alert(data);
          }
        },
      });
    }
  });

  $("#btn_ubah").on("click", function (e) {
    // alert("test doang");
    var user_id = $("#user_id_e").val();
    var username = $("#username_e").val();
    var password = $("#password_e").val();
    var status = $("#status_e").val();
    // alert(user_id);
    if (user_id == "") {
      alert("User ID Wajib di Isi !");
    } else if (username == "") {
      alert("Username Wajib di Isi !");
    } else if (password == "") {
      alert("Password Wajib di Isi !");
    } else if (status == "") {
      alert("Status Wajib di Isi !");
    } else {
      var str_data =
        "user_id=" +
        user_id +
        "&username=" +
        username +
        "&password=" +
        password +
        "&status=" +
        status;

      $.ajax({
        type: "POST",
        url: "formUser/edit.php",
        dataType: "text",
        data: str_data,
        success: function (data) {
          if (data == "1") {
            // alert("Data berhasil disimpan");
            loadData();
            $("#modal_edit").modal("hide");
            toastr.success("Data Berhasil di Ubah");
          } else {
            alert(data);
          }
        },
      });
    }
  });
});

function loadData() {
  $.ajax({
    url: "formUser/getData.php",
    type: "get",
    success: function (data) {
      $("#tabel").dataTable().fnClearTable();
      $("#tabel").dataTable().fnDraw();
      $("#tabel").dataTable().fnDestroy();
      $("#tabel tbody").html(data);
      $("#tabel").dataTable({
        lengthMenu: [
          [10, 20, 25, 50, 100, 15, 5, -1],
          ["10", "20", "25", "50", "100", "15", "5", "Show All"],
        ],
        paging: true,
        searching: true,
        ordering: true,
      });
    },
  });
}

function edit_data(a) {
  $.ajax({
    url: "formUser/modal_edit.php",
    type: "get",
    data: {
      user_id: a,
    },
    success: function (data) {
      $("#konten").html(data);
      $("#modal_edit").modal("show");
    },
  });
}

function delete_data(a) {
  $.ajax({
    url: "formUser/delete.php",
    type: "post",
    data: {
      user_id: a,
    },
    success: function (data) {
      if ((data = "1")) {
        toastr.success("Data Berhasil di Hapus");
        loadData();
      } else {
        toastr.danger(data);
      }
    },
  });
}
