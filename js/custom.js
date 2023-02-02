$(document).ready(function() {
    // DatePicker For User Profile Born Date
    $('#profileBorn').datepicker({
        dateFormat: 'dd.mm.yy',
        minDate: new Date($('#hiddendelivdate').val()),
        monthNames: ['Январь','Февраль','Март','Апрель','Май','Июнь','Июль','Август','Сентябрь','Октябрь','Ноябрь','Декабрь'],
        dayNamesMin: ['Вс','Пн','Вт','Ср','Чт','Пт','Сб'],
        firstDay: 'Пн'
    });
    // Telephone Mask (Main)
    $('#patient-recept-tel').inputmask({'mask': "+7 (999) 999-99-99"});
    // Telephone Mask (Profile)
    $('#profileTel').inputmask({'mask': "+7 (999) 999-99-99"});
    // Telephone Mask Registration
    $('#registerTel').inputmask({'mask': "+7 (999) 999-99-99"});
    // Polis Mask
    $('#profilePolis').inputmask({'mask': "9999 9999 9999 9999"});
    // Snils Mask
    $('#profileSnils').inputmask({'mask': "999-999-999 99"});

    // Get All Speciality
    $.ajax({
        url: 'php/recept_logic/get_speciality.php',
        success: (res)=>{
            $("#recept-spec").html(res);
        }
    });
    // Get Querys Doctors + Get Status Code
    $('#recept-spec').on('change', function() {
        let spec = $("#recept-spec").val();
        $.ajax({
            method: "POST",
            data: {spec_select: spec},
            url: 'php/recept_logic/get_doctors.php',
            success: (res2, textStatus, jqXHR)=>{
                $("#recept-doctor").html(res2);
                console.log(textStatus + ": " + jqXHR.status);
            },
        });
    });
    // Get Doc Cab
    $('#date_time_btn').on('click', function() {
        let doctor_sfl = $('#recept-doctor').val();
        $.ajax({
            method: "POST",
            url: 'php/recept_logic/get_doc_cab.php',
            data: { doct: doctor_sfl },
            success: (cab)=> {
                $("#doctor_cab").html(cab);
            }
        });
    });
    // Create New Order
    $("#create_order_btn").on('click', function() {
        let recept_type = $("#recept-way").val();
        let recept_age = $("#recept-age").val();
        let speciality = $("#recept-spec").val();
        let doctor = $("#recept-doctor").val();
        let recept_date = $("#doctor-recept-date").val();
        let recept_time = $("#doctor-recept-time").val();
        let pac_name = $("#patient-recept-name").val();
        let pac_secname = $("#patient-recept-secname").val();
        let pac_lastname = $("#patient-recept-lastname").val();
        let pac_born = $("#patient-recept-birth").val();
        let pac_tel = $("#patient-recept-tel").val();
        $.ajax({
            method: "POST",
            url: 'php/recept_logic/create_order.php',
            data: {recept_way:recept_type, recept_age:recept_age,patient_recept_name:pac_name, patient_recept_secname:pac_secname, patient_recept_lastname:pac_lastname, patient_recept_birth: pac_born,patient_recept_tel:pac_tel, doctor_recept_date: recept_date, doctor_recept_time:recept_time, spec_select:speciality, doctors_sfl:doctor}
        })
    });
});
