var ID = "";
var ROW = 0;
var isAdmin = 0;

$(document).ready(function () {
  $("#film").click(function () {
    $(".body").load("./page-admin/film.php");
  });

  $("#account").click(function () {
    $(".body").load("./page-admin/account.php");
  });

  $("#cinema").click(function () {
    $(".body").load("./page-admin/cinema.php");
  });

  $("#promotion-admin").click(function () {
    $(".body").load("./page-admin/promotion-info.php");
  });

  $("#drink").click(function () {
    $(".body").load("./page-admin/drink.php");
  });

  $("#bill").click(function () {
    $(".body").load("./page-admin/bill.php");
  });

  $(".fa-trash").click(function () {
    let id = $(this).attr("id");

    let tableDelete = $(this).attr("class").toString();
    let arr = tableDelete.split(" ");
    $.ajax({
      type: "post",
      url: "./page-admin/deleteData.php",
      data: {
        deleteRow: "deleteRow",
        rowID: id,
        table: arr[arr.length - 1],
        id: arr[arr.length -2]
      },
      success: function (response) {
        if (response == "success") {
          let row = document.getElementById("" + id);
          row.parentNode.parentNode.parentNode.removeChild(row.parentNode.parentNode);
        }
      },
    });
  });

  
  $(".edit").focusout(function () {
    
    let id = this.id;
    let split_id = id.split("_");
    let name = split_id[0];
    let editID = split_id[2];
    let table = split_id[1];
    let value = $(this).text();
    let idDatabase = split_id[3];
    
    console.log(name);
    console.log(value);
    
    if (name == "ten"){
      console.log(value);
      console.log(id);
      console.log(editID);
      console.log(table);
    }
    

    $.ajax({
      url: "./page-admin/updateDataAdmin.php",
      type: "POST",
      data: {table: table, value: value, id: editID,name: name, idDatabase: idDatabase},
        success: function(response){
        alert("Updated Success!");
      }
    })

  });

});


  // function updateDataAccount(id,col){
  //   console.log(id);
  //   console.log(col);
  //   ID = id;
  //   ROW = col; 
  //   $(".modal-body #email").val(ID);
  // }

  // function updateAccount(){
    
  //   $.ajax({
  //     type: "post",
  //     url: "./page-admin/deleteData.php",
  //     data: {
  //       updateRowAccount: "updateRow",
  //       email: $("#email").val().trim(),
  //       ten: $("#ten").val().trim(),
  //       matKhau: $("#matKhau").val().trim(),
  //       sdt: $("#sdt").val().trim(),
  //       admin: $("input[name=admin]:checked").val().trim()
  //     },
  //     success: function (response) {
  //       if (response == "success") {
  //         let row = ($("#"+ROW));
  //         console.log(row);
  //       }
  //     },
  //   });
  // }


